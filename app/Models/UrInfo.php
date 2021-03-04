<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrInfo extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static $doc_folder_name = 'ur';

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function getFolderName()
    {
        return self::$doc_folder_name;
    }
}
