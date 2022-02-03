<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEntry extends Model
{
    use HasFactory;
    protected $table = 'data_entries';
    protected $fillable = ['run','wicket','ball'];
}
