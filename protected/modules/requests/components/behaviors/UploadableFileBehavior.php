<?
/**
 * @property string $savePath путь к директории, в которой сохраняем файлы
 */
class UploadableFileBehavior extends CActiveRecordBehavior
{
    /**
     * @var string название атрибута, хранящего в себе имя файла и файл
     */
    public $attributeName = 'image';
    /**
     * @var string алиас директории, куда будем сохранять файлы
     */
    public $savePathAlias = 'webroot.pics';
    /**
     * @var array сценарии валидации к которым будут добавлены правила валидации
     * загрузки файлов
     */
    public $scenarios = array('insert', 'update');
    /**
     * @var string типы файлов, которые можно загружать (нужно для валидации)
     */
    public $fileTypes = 'jpg, png, gif';

    public $prefix = 'img';

    /**
     * @var bool изменять ли размер изображения?
     */
    public $resizeImage = TRUE;

    /**
     * @var bool изменять ли размер превью?
     */
    public $resizePreview = TRUE;

    public $imageSize = array(
        'width'  => '1024',
        'height' => '768'
    );

    public $previewSize = array(
        'width'  => '150',
        'height' => '100',
        'crop'   => TRUE,
    );
    public $allowEmpty = TRUE;

    /**
     * Шорткат для Yii::getPathOfAlias($this->savePathAlias).DIRECTORY_SEPARATOR.
     * Возвращает путь к директории, в которой будут сохраняться файлы.
     * @return string путь к директории, в которой сохраняем файлы
     */
    public function getSavePath()
    {
        return Yii::getPathOfAlias($this->savePathAlias) . DIRECTORY_SEPARATOR;
    }

    public function attach($owner)
    {
        parent::attach($owner);

        if (in_array($owner->scenario, $this->scenarios)) {
// добавляем валидатор файла
            //TODO: FileMaxSize
            $fileValidator = CValidator::createValidator('file', $owner, $this->attributeName,
                array('types' => $this->fileTypes, 'allowEmpty' => $this->allowEmpty));
            $owner->validatorList->add($fileValidator);
        }
    }

// имейте ввиду, что методы-обработчики событий в поведениях должны иметь
// public-доступ начиная с 1.1.13RC
    public function beforeSave($event)
    {
//            echo var_dump(CUploadedFile::getInstance($this->owner, $this->attributeName));
//            echo var_dump($_FILES['Documents']);
//            echo var_dump($this->owner->{$this->attributeName});
//            Yii::app()->end();
        if (in_array($this->owner->scenario, $this->scenarios) &&
            ($file = CUploadedFile::getInstance($this->owner, $this->attributeName))
        ) {
            $this->deleteFile(); // старый файл удалим, потому что загружаем новый
            if (!is_dir($this->savePath)) {
                mkdir($this->savePath . DIRECTORY_SEPARATOR);
                chmod($this->savePath . DIRECTORY_SEPARATOR, 0755);
            }
            $suffix = time() . rand(1, 1000) . '.' .  strtolower($file->extensionName);
            $tmpFileName = 'tmp' . $suffix;
            $newFileName = $this->prefix . $suffix;
            $file->saveAs($this->savePath . $tmpFileName, false);
            $temp = $this->savePath . $tmpFileName;

            if (in_array( strtolower($file->extensionName), array('png', 'gif', 'jpg', 'bmp'))) {
                $tmbFileName = 'tmb' . $suffix;
                $newFileName = 'img' . $suffix;
                if ($this->resizeImage) {
                    $image = $this->factoryImage($temp, $this->imageSize);
                    if ($image)
                        $image->save($this->savePath . $newFileName);
                }
                if ($this->resizePreview) {
                    $image = $this->factoryImage($temp, $this->previewSize);
                    if ($image)
                        $image->save($this->savePath . $tmbFileName);
                }
            } else {
                $file->saveAs($this->savePath . $newFileName);
            }
            $this->owner->setAttribute($this->attributeName, $newFileName);
            unlink($this->savePath . $tmpFileName);
        }
        return TRUE;
    }

// имейте ввиду, что методы-обработчики событий в поведениях должны иметь
// public-доступ начиная с 1.1.13RC
    public function beforeDelete($event)
    {
        $this->deleteFile(); // удалили модель? удаляем и файл, связанный с ней
    }

    public function deleteFile()
    {
        $filePath = $this->savePath . $this->owner->getAttribute($this->attributeName);
        if (@is_file($filePath))
            @unlink($filePath);
        if(strpos($this->owner->getAttribute($this->attributeName), 'img')!==false){
            $tmb = str_replace('img', 'tmb', $this->owner->getAttribute($this->attributeName));
            $filePath = $this->savePath . $tmb;
            if (@is_file($filePath))
                @unlink($filePath);
        }
    }

    protected function cropImage($image, $width, $height)
    {
        $ratio = $image->width / $image->height;
        $original_ratio = $width / $height;
        $crop_width = $image->width;
        $crop_height = $image->height;
        if ($ratio > $original_ratio) {
            $crop_width = round($original_ratio * $crop_height);
        } else {
            $crop_height = round($crop_width / $original_ratio);
        }
        $image->crop($crop_width, $crop_height);
        if ($image->width > $width OR $image->height > $height) {
            $image->resize($width, $height, Image::NONE);
        }
        return $image;
    }

    protected function factoryImage($file, $params)
    {
        $width = CArray::get($params, 'width');
        $height = CArray::get($params, 'height');
        $crop = CArray::get($params, 'crop');
        if ($width && $height) {
            $image = Yii::app()->image->load($file);
            if ($crop)
                $image = $this->cropImage($image, $width, $height);
            else
                if ($image->width > $width OR $image->height > $height) {
                    $image = $image->resize($width, $height, $image::AUTO);
                }
            return $image;
        }
        return FALSE;

    }
}