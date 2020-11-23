<?php

namespace App\Http\Controllers;

use App\Models\Campus;

class CampusController extends ApiResourceController
{
    protected $rules = ['name' => 'required|unique:campuses|min:3|max:255'];
    protected $model = Campus::class;

    protected function find($id)
    {
        return Campus::find($id);
    }
}
