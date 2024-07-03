<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brands extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['brand'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($brand) {
            if (self::where('brand', $brand->brand)->exists()) {
                throw new \Exception('Ya existe una marca con ese nombre.');
            }
        });
    }
}
