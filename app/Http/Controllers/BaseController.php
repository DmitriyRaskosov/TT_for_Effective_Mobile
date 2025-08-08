<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    protected $modelClass;

    public function getOne($id)
    {
        return $this->modelClass::findOrFail($id);
    }

    public function getAll()
    {
        return $this->modelClass::all();
    }

    public function create(Request $request)
    {
        $data = $request->validate(static::validationRules());
        $model = $this->modelClass::create($data);

        return response()->json([
            'id' => $model->id,
            'status' => 'created'
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $data = $request->validate(static::validationRules());
        $model->update($data);

        return response()->json([
            'id' => $id,
            'status' => 'updated'
        ]);
    }

    public function delete($id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->delete();

        return response()->json([
            'id' => $id,
            'status' => 'deleted'
        ]);
    }

    abstract protected static function validationRules();
}
