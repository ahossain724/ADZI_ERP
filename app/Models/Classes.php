<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    protected $table = 'classes';
    protected $primaryKey = 'id';
    protected $fillable = [
          'pd_class',
          'active',
          'detailed_description',
          'team',
          'alternate_code',
        ];
     use HasFactory;
}
