<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static Campus find($campus)
 * @property string name
 */
class Campus extends Model
{
    protected $fillable = ['name'];

    public static function random()
    {
        return Campus::query()->inRandomOrder()->first()->get();
    }
}
