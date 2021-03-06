<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class CheckExtensionServices
{

  public static function checkExtension($fileData, $extension){

    $extension = mb_strtolower($extension);

    if ($extension === 'jpg'){
      $data_url = base64_encode($fileData);
    }

    if ($extension === 'jpeg'){
      $data_url = base64_encode($fileData);
    }

    if ($extension === 'png'){
      $data_url = base64_encode($fileData);
    }

    if ($extension === 'gif'){
      $data_url = base64_encode($fileData);
    }

    return $data_url;
  }
}