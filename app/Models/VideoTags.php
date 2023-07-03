<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoM;

class VideoTags extends Model
{
    use HasFactory;
    protected $table = 'videos_tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'v_id',
        'tags',
    ];
  
    public function video()
    {
        return $this->hasMany(VideoM::class, 'v_id', 'id');
    }

}
