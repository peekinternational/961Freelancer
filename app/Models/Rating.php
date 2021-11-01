<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
      'rating_by',
      'rating_to',
      'job_id',
      'proposal_id',
      'general_rating',
      'skills_rating',
      'work_rating',
      'communication_rating',
      'feedback',
    ];
}
