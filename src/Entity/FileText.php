<?php
class FileText
{
    private $fileName;
    private $mode;
    private $file;

    public function __construct($fileName, $mode) {
        $this->fileName = $fileName;
        $this->mode = $mode;
    }

    public function open() {
        $this->file = fopen($this->fileName, $this->mode);
        return "archivo abierto"."\r\n";
    }

    public function read() {
        $content = fread($this->file, filesize($this->fileName));
        return $content."\r\n";
    }

    public function edit($newContent) {
        fwrite($this->file, "\r\n".$newContent);
        return "archivo editado"."\r\n";
    }

    public function close() {
        fclose($this->file);
        return "archivo cerrado"."\r\n";
    }
}