<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Building extends Model
{
    protected $fillable = ['name', 'code', 'campus_id', 'address'];

    public static function random()
    {
        return Building::query()->inRandomOrder()->first()->get();
    }
}
