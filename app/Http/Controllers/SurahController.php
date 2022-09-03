<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surah;

class SurahController extends Controller
{
    public function index()
    {
        return Surah::all();
    }

    public function create()
    {
        return Surah::create([
            'name' => request('name'),
            'page' => request('page'),
        ]);
    }

    public function update(Surah $id)
    {
        $success = $id->update([
            'name' => request('name'),
            'page' => request('page'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Surah $id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
