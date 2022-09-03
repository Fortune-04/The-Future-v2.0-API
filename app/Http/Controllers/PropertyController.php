<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return Property::all();
    }

    public function create()
    {
        return Property::create([
            'name' => request('name'),
            'description' => request('description'),
        ]);
    }

    public function update(Property $id)
    {
        $success = $id->update([
            'name' => request('name'),
            'description' => request('description'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Property $id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
