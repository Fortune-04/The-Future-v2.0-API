<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Networth;

class NetworthController extends Controller
{
    public function index()
    {
        return Networth::all();
    }

    public function add()
    {
        return Networth::create([
            'names' => request('names'),
            'values' => request('values'),
            'exvalue' => request('exvalue'),
            'invest' => request('invest'),
        ]);
    }

    public function update(Networth $net)
    {
        $success = $net->update([
            'names' => request('names'),
            'values' => request('values'),
            'exvalue' => request('exvalue'),
            'invest' => request('invest'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Networth $net)
    {
        $success = $net->delete();

        return [
            'success' => $success
        ];
    }
}
