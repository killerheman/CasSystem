<?php

namespace App\Helpers;

use Exception;
use Illuminate\Http\UploadedFile;

class ImageUpload{

    public static function simpleUpload($path,UploadedFile $file=null,$pre=null)
    {
        try{
    if($file->getSize()!=null){
        $filename=($pre?$pre.'-':'').time().'-'.rand(0,999).'.'.$file->extension();
        $path=$file->storeAs($path,$filename,'public');
        return $path;
    }
    else
    {
      return '';
    }
    }
    catch(Exception $ex){
        Helper::handleError($ex);
        return '';
    }
    }

}