<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'slug', 'cover_image', 'type_id'];

    public function type(){
        
        return $this->belongsTo(Type::class);
        
    }

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

}
