<?php
namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

trait uploadImageTrait {
    protected function uploadImage($file, $id, $name, $extension, $cat) {
        // Fetch all the students from the 'student' table.
        # nuevo nombre del archivo
        $documentFile = trim($name."_".date('YmdHis')."_".$id.".".$extension);
        Storage::disk('public')->put('/uploadFiles/'.$cat."/".$id."/".$documentFile, $file); // guardamos el archivo en la carpeta storage
        // \File::put(storage_path(). '/uploadFiles/'.$cat."/".$id."/".$documentFile, $file);
        $documentUrl = Storage::url('/uploadFiles/'.$cat."/".$id."/".$documentFile); // obtenemos la url donde se encuentra el archivo almacenado en el servidor.
        return $documentUrl;
    }
}