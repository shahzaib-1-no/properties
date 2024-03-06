<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing_status extends Model
{
    use HasFactory;
    public $table= 'listing_status';
    protected $fillable = [
        'name',
    ];
}
