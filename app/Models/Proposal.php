<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
      'job_id',
      'user_id',
      'budget',
      'cover_letter',
      'type',
      'duration',
      'attachments',
      'status',
    ];
}
