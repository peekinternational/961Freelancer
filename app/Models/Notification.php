<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
      'from',
      'to',
      'noti_type',
      'message',
      'status',
    ];
    public static function getUnseenNoti()
    {
      return Notification::where('to', auth()->id())->where('status', 'unread')->count();
    }

    public static function getAllNoti()
    {
      return Notification::where('to', auth()->id())->orderBy('created_at', 'DESC')->get();
    }
}
