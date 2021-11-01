<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
      'transcation_id',
      'reference',
      'job_id',
      'proposal_id',
      'milestone_id',
      'client_id',
      'freelancer_id',
      'amount',
      'escrow_fee',
    ];
    public function job(){
      return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }
}
