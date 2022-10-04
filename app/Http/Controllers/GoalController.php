<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    public function index()
    {
        return Goal::all();
    }

    public function getGoalBasedType($type)
    {
        $data = Goal::where('type',$type)->get();

        return $data;
    }

    public function create()
    {
        return Goal::create([
            'name' => request('name'),
            'description' => request('description'),
            'type' => request('type'),
            'current' => request('current'),
            'target' => request('target')
        ]);
    }

    public function update(Goal $id)
    {
        $success = $id->update([
            'name' => request('name'),
            'description' => request('description'),
            'type' => request('type'),
            'current' => request('current')
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Goal $id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
