<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $primaryKey = "pid";

//    protected $fillable = [
//        'pid',
//        'title',
//        'slug',
//        'image',
//        'category_id',
//        'description',
//        'status',
//        'created_at',
//        'updated_at'
//    ];
}
