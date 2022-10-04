<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    public function index()
    {
        return Home::all();
    }

    public function create()
    {
        return Home::create([
            'total_networth' => request('total_networth'),
            'monthly_income' => request('monthly_income'),
        ]);
    }

    public function update(Home $id)
    {
        $success = $id->update([
            'total_networth' => request('total_networth'),
            'monthly_income' => request('monthly_income'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Home $id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
