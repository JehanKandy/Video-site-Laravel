<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoTags;

class VideoM extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $fillable = [       
        'video_title',
        'uploader',
        'description',
        'created_at',
        'updated_at',
    ];
  
}
