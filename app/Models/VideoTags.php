<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoM;

class VideoTags extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'v_id',
        'tags',
    ];
  
    public function products()
    {
        return $this->hasMany(VideoM::class, 'v_id', 'id');
    }

}
