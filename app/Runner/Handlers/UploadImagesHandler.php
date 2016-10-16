<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 16-10-16 下午6:29
 */

namespace Runner\Handlers;

use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;

class UploadImagesHandler
{

    const ALLOW_EXTENSIONS = [
        'gif', 'jpg', 'jpeg', 'png'
    ];

    const MAX_SIZE = 2097152;

    const MIN_SIZE = 10;

    /**
     * @var UploadedFile
     */
    protected $file;

    protected $success = false;


    public function __construct($file = null)
    {
        if(!is_null($file)) {
            $this->load($file);
        }
    }


    public function load(UploadedFile $file) {
        $this->file = $file;
        $this->checkFileExtension();
        $this->checkFileSize();

        return $this;
    }


    public function fails()
    {
        return !$this->success;
    }


    public function save()
    {
        if(false === $this->success) {
            throw new UploadException('must upload images with extension: ' . implode(',', self::ALLOW_EXTENSIONS) . '. and file size must betwwen' . self::MIN_SIZE . ' and ' . self::MAX_SIZE);
        }
        $filePath = 'uploads/images/' . date('Ym');
        $filename = uniqid() . '.' . $this->file->getClientOriginalExtension();

        $this->file->move(public_path() . '/' . $filePath, $filename);

        return "{$filePath}/{$filename}";
    }


    protected function checkFileExtension()
    {
        $this->success = in_array($this->file->getClientOriginalExtension(), self::ALLOW_EXTENSIONS);
    }


    protected function checkFileSize()
    {
        $this->success = ($this->file->getClientSize() >= self::MIN_SIZE && $this->file->getClientSize() <= self::MAX_SIZE);
    }








}