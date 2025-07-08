<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Referencetbl extends Model
{
    protected $table = 'referencestbl';
    protected $primaryKey = 'id';
    protected $fillable = [
          'reference',
          'rbos_id',
        ];
     use HasFactory;
     public function rbo()
    {
        return $this->belongsTo(Rbo::class);
    }
}