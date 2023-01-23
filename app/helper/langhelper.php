<?php

use App\Models\Setting;
use App\Models\Blog;
use App\Models\Transcode;
use App\Localization\Locale;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;



 function saveimage($image,$path)
 {
    $file = $image;
    $filename = $file->getClientOriginalName();
    $file->move($path,$filename);
    return $filename;
 }


    function uploadMedia($image, $path)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images//' . $path), $imageName);
        return $imageName;
    }
