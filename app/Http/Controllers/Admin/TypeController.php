<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function validation($data)
    {
        $validated = Validator::make($data, [
            "name" => "required|min:5|max:50",
            "description" => "required|min:5|max:255",
        ],)->validate();

        return $validated;
    }

    public function index()
    {
        $types = Type::all();
        
        return view("admin.types.index", compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.types.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validated_data = $this->validation($data);

        $newType = new Type();
        $newType->name = $data["name"];
        $newType->description = $data["description"];
        $newType->fill($validated_data);
        $newType->save();

        return redirect()->route('admin.types.index', $newType->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view("admin.types.show", compact("type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view("admin.types.edit", compact("type"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->all();
        $validated_data = $this->validation($data);
        $type->update($validated_data);

        return redirect()->route('admin.types.show', $type->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.types.index');
    }
}
