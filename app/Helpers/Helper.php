<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper {
    public function uploadFile($uploadedfile, $directory){
        $dir = $directory.'/' . date('Y') . '/' . date('m');
        $file = $file_foto = $uploadedfile;
        // dd($file_foto,$directory);
        $ext = $file_foto->getClientOriginalExtension();
        $tipe_file = $directory;
        $filename_foto            = $dir . '/' . Str::random(20) . '_' . date('d') . '_' . md5(time()) . $tipe_file.'.' . $ext;

        $file->move(storage_path('app/public/'.$dir), $filename_foto);
        return $filename_foto;
    }
}