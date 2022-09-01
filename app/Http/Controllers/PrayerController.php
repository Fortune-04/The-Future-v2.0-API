<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrayerController extends Controller
{
    public function index()
    {
        return Prayer::all();
    }

    public function create()
    {
        return Prayer::create([
            'name' => request('name'),
            'page' => request('page'),
        ]);
    }

    public function update(Prayer $id)
    {
        $success = $id->update([
            'name' => request('name'),
            'page' => request('page'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Prayer $id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
