<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'unit_name', 'status'
    ];


    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class)->select(['name as text','id']);
    // }
}
