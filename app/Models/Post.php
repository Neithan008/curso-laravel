<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //pra relacionar a uma tabela, não é necessário por model ter o mesmo nome da tabela
    protected $table = 'posts';
}
