<?php
namespace App\Traits;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

trait DeleteTrait {
    protected function deleteFile($id, $path){
        $actualFile = explode("/",$path, 5);
        $archivo = explode("/", $actualFile[4], 3);
        if(Storage::exists($actualFile[4])){
            Storage::delete($actualFile[4]);
        }else{
            return "EL archivo que se quiere eliminar, no existe";
        }
    }
}