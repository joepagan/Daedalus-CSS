<?php
namespace Craft;

class DaedalusCSSVariable
{

    public function includeCss($path){

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . $path)){
            return TemplateHelper::getRaw('<style>' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . $path) . '</style>');
        }else{
            return TemplateHelper::getRaw('<link rel="stylesheet" href="'.$path.'">');
        }
    }

}
