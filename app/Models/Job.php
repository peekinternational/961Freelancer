<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'job_id',
      'job_title',
      'service_level',
      'job_type',
      'hourly_min_price',
      'hourly_max_price',
      'fixed_price',
      'job_duration',
      'is_featured',
      'job_description',
      'job_skills',
      'job_attachement',
    ];

    public function clientInfo(){
      return $this->belongsTo(User::class, 'user_id');
    }
    public function saveJobs(){
      return $this->hasMany(SaveItem::class, 'job_id');
    }
}
