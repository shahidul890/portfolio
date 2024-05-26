<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = ['active_as'];

    public function getActiveAsAttribute()
    {
        return $this->is_active ? 'Active' : 'InActive';
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
