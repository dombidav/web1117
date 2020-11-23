<?php


namespace App\Http\Controllers;


use App\Helpers\Validation;
use Exception;
use Illuminate\Http\Request;

abstract class ApiResourceController extends Controller
{
    protected $model;
    protected $rules;

    public function index()
    {
//headers: {"Access-Control-Allow-Origin": "*"}
        return response()->json((new $this->model)::all(), 200);
    }

    public function store(Request $request)
    {
        return Validation::Define($request, $this->rules)->Call(function () use ($request) {
            $temp = (new $this->model);                //new Model(['name' => $request->input('name')])
            foreach ($this->rules as $key => $value)
                $temp->$key = $request->input($key);
            $temp->save();
            return $temp;
        });
    }

    public function show($id)
    {
        $temp = $this->find($id);
        if ($temp)
            return $temp;
        return response()->json('', 404);
    }

    protected abstract function find($id);

    public function update(Request $request, $id)
    {
        $temp = $this->find($id);
        if ($temp && $request->has('name'))
            return Validation::Define($request, $this->rules)->Call(function () use ($temp, $request) {
                foreach ($this->rules as $key => $value)
                    $temp->$key = $request->input($key);
                $temp->save();
                return $temp;
            });
        return response()->json('', 404);
    }

    public function destroy($id)
    {
        $temp = $this->find($id);
        if ($temp) {
            try {
                $temp->delete();
                return response()->json($temp, 200);
            } catch (Exception $e) {
                return response()->json($e->getMessage(), $e->getCode());
            }
        }
        return response()->json('', 404);
    }
}
