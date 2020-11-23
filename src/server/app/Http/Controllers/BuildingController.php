<?php

namespace App\Http\Controllers;

use App\Models\Building;

class BuildingController extends ApiResourceController
{
    protected $rules = [
        'name' => 'required|min:3|max:255',
        'code' => 'required|max:255',
        'address' => 'required|unique:buildings|max:255',
        'campus_id' => 'required'
    ];
    protected $model = Building::class;

    protected function find($id)
    {
        return Building::find($id);
    }
}
