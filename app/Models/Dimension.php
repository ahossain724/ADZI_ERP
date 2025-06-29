<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Dimension extends Model
{
    protected $table = 'dimensions';
    protected $primaryKey = 'id';
    protected $fillable = [
          'sequence',
          'display',
          'detailed_description',
          'default_value',
          'max_length',
        ];
     use HasFactory;
}
