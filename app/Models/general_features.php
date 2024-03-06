<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class general_features extends Model
{
    use HasFactory;
    public $table= 'general_features';
    protected $fillable = [
        'name',
    ];
}
