<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class RequisitionEntry extends Model
{
    protected $table = 'requisition_entries';
    protected $primaryKey = 'id';
     protected $fillable = [
          'requisition_number',
          'date',
          'warehouse',
          'division',
          'project',
          'required_by_date',
          'reference',
          'section',
          'department',
          'notes',
          'terms_and_conditions',
          'other_specifications',
        ];
    use HasFactory;
}
