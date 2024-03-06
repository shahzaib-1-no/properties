<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exterior_features extends Model
{
    use HasFactory;
    public $table= 'exterior_features';
    protected $fillable = [
        'name',
    ];
}
