<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        return Donation::all();
    }

    public function create()
    {
        return Donation::create([
            'name' => request('amount_donated'),
            'page' => request('total'),
        ]);
    }

    public function update(Donation $id)
    {
        $success = $id->update([
            'name' => request('amount_donated'),
            'page' => request('total'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function delete(Donation $id)
    {
        $success = $id->delete();

        return [
            'success' => $success
        ];
    }
}
