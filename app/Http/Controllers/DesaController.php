<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Laravolt\Indonesia\Models\Village;
use App\Models\Desa;
// use Illuminate\Http\Request;
// use Validator;
use Illuminate\Support\Facades\Validator;

class DesaController extends Controller
{
    //
    public function index()
    {
        return Desa::all();
    }

    public function show($id)
    {
        return Desa::find($id);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:villages|max:255',
            'district_code' => 'required|exists:districts,code',
            'name' => 'required|unique:villages|max:255',
            'meta' => 'array'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        return Desa::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:villages|max:255',
            'district_code' => 'required|exists:districts,code',
            'name' => 'required|unique:villages|max:255',
            'meta' => 'array'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $desa = Desa::findOrFail($id);
        $desa->update($request->all());

        return $desa;
    }

    public function destroy($id)
    {
        $desa = Desa::find($id);

        if (!$desa) {
            return response()->json(['error' => 'Desa not found'], 404);
        }

        try {
            $desa->delete();
            return response()->json(['message' => 'Desa deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete desa'], 500);
        }
    }
}
