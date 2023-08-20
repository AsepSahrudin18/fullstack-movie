<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    use HasFactory;
    protected $table = 'drama';
    protected $fillable = ['title', 'description', 'release_at', 'poster'];
}
