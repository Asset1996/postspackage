<?php

namespace Asset1996\Posts\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $table = 'post_models';

    protected $fillable = [
        'title'
    ];
}
