<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;
    
    protected $table = "posts";
    /*Тут запрещаем для редактирования*/
    protected $guarded = [];
    /*Тут разрешаем для редактирования */
    // protected $fillable = ['title', 'content'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
}
