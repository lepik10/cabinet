<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpInfo extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static $doc_folder_name = 'ip';

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function getFolderName()
    {
        return self::$doc_folder_name;
    }
}
