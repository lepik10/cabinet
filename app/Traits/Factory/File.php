<?php

namespace App\Traits\Factory;

use Illuminate\Support\Facades\Storage;

trait File {
    private function setFile($filename, $num, $doc_folder_name)
    {
        $fullpath = "{$doc_folder_name}/{$num}/{$filename}";
        Storage::disk('private')->put( $fullpath, 'Contents');
        return $fullpath;
    }
}
