<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // yang hanaya dapat di isi
    protected $fillable = ['title', 'excerpt', 'body', 'slug'];

    // tidak dapat mengisi id selebih nya boleh
    // protected $guarded = ['id'];
}
