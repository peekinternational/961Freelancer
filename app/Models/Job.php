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
      'job_cat',
      'job_location',
      'job_attachement',
      'job_status',
    ];

    public function clientInfo(){
      return $this->belongsTo(User::class, 'user_id');
    }
    public function saveJobs(){
      return $this->hasMany(SaveItem::class, 'job_id');
    }
    public function proposal(){
      return $this->hasMany(Proposal::class, 'job_id', 'job_id');
    }

    public static function client($user_id)
    {
        return User::where('id', $user_id)->first();
    }
    public static function selectProposal($job_id)
    {
        return Proposal::where('job_id', $job_id)->where('status',2)->first();
    }

    public static function clientCompletedCount($user_id)
    {
        return Job::where('user_id', $user_id)->where('job_status',4)->count();
    }
    public static function clientCancelledCount($user_id)
    {
        return Job::where('user_id', $user_id)->where('job_status',3)->count();
    }
    public static function clientOngoingCount($user_id)
    {
        return Job::where('user_id', $user_id)->where('job_status',2)->count();
    }
}
