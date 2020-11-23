<?php

namespace App\Http\Controllers;

use App\Models\Classroom;

class ClassroomController extends ApiResourceController
{
    protected $rules = [
        'name' => 'required|min:3|max:255',
        'code' => 'required|max:255',
        'building_id' => 'required'
    ];
    protected $model = Classroom::class;

    protected function find($id)
    {
        return Classroom::find($id);
    }
}
