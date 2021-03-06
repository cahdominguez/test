<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $primaryKey = 'uuid';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function($model) {
    //         if(empty($model->id)){
    //             $model->id = Str::uuid();
    //         }           
    //     });
    // }
}
