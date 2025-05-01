<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TransferRequest extends Model
{
    protected $table = 'transfer_requests';
    protected $primaryKey = 'id';
     protected $fillable = [
          'transfer_request_number',
          'date_sent',
          'from_warehouse',
          'to_warehouse',
          'order_date',
          'date_approved',
          'from_division',
          'to_division',
          'requested_date',
          'reference',
          'from_section',
          'to_section',
          'from_project',
          'to_project',
          'header_message',
          'footer_message',
          'notes',
          'team',
          'location',
          'team_member',
        ];
     use HasFactory;
}
