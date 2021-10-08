<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $fillable = [
      'job_id',
      'proposal_id',
      'user_id',
      'budget',
      'detail',
      'due_date',
      'status',
    ];
}
