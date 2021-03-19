<?php
namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
trait UploadImages{
   public function uploadImages(UploadedFile $uploadedFile, $folder = null, $disk = 'public/assets/images', $filename = null){
           $name = Str::random(25);

           $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

           return $file;

   }
}