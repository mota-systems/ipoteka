<?
/**
 * @property string $savePath путь к директории, в которой сохраняем файлы
 */
class MultiUploadableFileBehavior extends CActiveRecordBehavior
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


// имейте ввиду, что методы-обработчики событий в поведениях должны иметь
// public-доступ начиная с 1.1.13RC
    public function afterSave($event)
    {
        if (!in_array($this->owner->scenario, $this->scenarios))
            return TRUE;
        $files = CUploadedFile::getInstances($this->owner, $this->attributeName);
        if (isset($files) && count($files) > 0) {
            if (!is_dir($this->savePath)) {
                mkdir($this->savePath);
                chmod($this->savePath, 0755);
            }
//            echo var_dump($files);
//            Yii::app()->end();
            // go through each uploaded image
            foreach ($files as $one => $file) {
                $suffix = $this->getUniqueFileName($file);
                $tmpFileName = 'tmp' . $suffix;
                $newFileName = $this->prefix . $suffix;
                $temp = $this->savePath . $tmpFileName;
                if ($file->saveAs($temp, false)) {
                    if (in_array(strtolower($file->extensionName), array('png', 'gif', 'jpg', 'bmp'))) {
                        $newFileName = 'img' . $suffix;
                        if ($this->resizeImage) {
                            $image = $this->factoryImage($temp, $this->imageSize);
                            if ($image)
                                $image->save($this->savePath . $newFileName);
                        }
                        if ($this->resizePreview) {
                            $tmbFileName = 'tmb' . $suffix;
                            $image = $this->factoryImage($temp, $this->previewSize);
                            if ($image)
                                $image->save($this->savePath . $tmbFileName);
                        }
                    } else {
                        $file->saveAs($this->savePath . $newFileName);
                    }
                }
                $fileComment = new CommentsFiles();
                $fileComment->name = $file->name; //it might be $img_add->name for you, filename is just what I chose to call it in my model
                $fileComment->file = $newFileName; //it might be $img_add->name for you, filename is just what I chose to call it in my model
                $fileComment->commentId = $this->owner->id; // this links your picture model to the main model (like your user, or profile model)
                $fileComment->save();
                @unlink($this->savePath . $tmpFileName);
            }

            // save the rest of your information from the form
        }
        return TRUE;
    }

// имейте ввиду, что методы-обработчики событий в поведениях должны иметь
// public-доступ начиная с 1.1.13RC
    public function beforeDelete($event)
    {
        $this->deleteFiles(); // удалили модель? удаляем и файл, связанный с ней
    }

    public function deleteFiles()
    {
        foreach ($this->owner->files as $file) {
            $filePath = $this->savePath . $file->file;
            if (@is_file($filePath))
                @unlink($filePath);
            if (strpos($file->file, 'img') !== FALSE) {
                $tmb = str_replace('img', 'tmb', $file->file);
                $filePath = $this->savePath . $tmb;
                if (@is_file($filePath))
                    @unlink($filePath);
            }
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

    /**
     * @param $file CUploadedFile
     *
     * @return string $name Уникальное имя файла
     */
    protected function getUniqueFileName($file)
    {
        do {
//            echo var_dump(time() . random(1, 1000));
//            Yii::app()->end();
            $name = time() . rand(1, 1000) . '.' . strtolower($file->extensionName);
            usleep(1);
        } while (file_exists($this->savePath . $this->prefix . $name) OR file_exists($this->savePath . 'img' . $name));
        return $name;
    }
}