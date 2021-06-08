<?php
namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

trait uploadFileTrait {
    protected function uploadFile($file, $id, $name, $categoria) {
        // Fetch all the students from the 'student' table.
        $tamanio = $file->getSize(); #obtener el tamaño del archivo del cliente
        //$tamanio = $file->getClientSize(); #obtener el tamaño del archivo del cliente
        $extensionFile = $file->getClientOriginalExtension(); // extension de la imagen
        # nuevo nombre del archivo
        $documentFile = trim($name."_".date('YmdHis')."_".$id.".".$extensionFile);
        $file->storeAs('/uploadFiles/'.$categoria."/".$id, $documentFile); // guardamos el archivo en la carpeta storage
        $documentUrl = Storage::url('/uploadFiles/'.$categoria."/".$id."/".$documentFile); // obtenemos la url donde se encuentra el archivo almacenado en el servidor.
        return $documentUrl;
    }
}