<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categories extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function children()
    {
        return $this->hasMany(categories::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(categories::class, 'parent_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     * 
     */

    protected $fillable = ['name', 'parent_id'];
    public function products()
	{
		return $this->belongsToMany(Products::class)
					->withPivot('id')
					->withTimestamps();
	}
}