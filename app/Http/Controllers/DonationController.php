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
            'amount' => request('amount'),
            'amount_donated' => request('amount_donated'),
            'total' => request('total'),
        ]);
    }

    public function update(Donation $id)
    {
        $success = $id->update([
            'amount' => request('amount'),
            'amount_donated' => request('amount_donated'),
            'total' => request('total'),
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function updateTotal(Donation $id)
    {
        $success = $id->update([
            'total' => request('amt'),
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
