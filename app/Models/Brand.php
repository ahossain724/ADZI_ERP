<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $fillable = [
          'brand',
          'brbo_id',
        ];
     use HasFactory;
     public function rbo()
    {
        return $this->hasMany(Rbo::class);
    }
}