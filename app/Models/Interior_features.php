<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior_features extends Model
{
    use HasFactory;
    public $table= 'interior_features';
    protected $fillable = [
        'name',
    ];
}
