<?php
require_once(__DIR__.'/Entity/FileText.php');
//user case - Read a File
function userCaseReadFile() {
    $fileText = new FileText('assets/example.txt', 'r');
    $fileText->open();
    $content = $fileText->read();
    $fileText->close();
    echo $content;
}

//user case - Edit a File
function userCaseEditFile() {
    $fileText = new FileText('assets/example.txt', 'a+');
    $fileText->open();
    $message = $fileText->edit('Editado!');
    $fileText->close();
}

userCaseEditFile();
userCaseReadFile();
?>