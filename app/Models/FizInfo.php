<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizInfo extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static $doc_folder_name = 'fiz';

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function getDocPathAttribute()
    {
        return 'fiz';
    }
}
