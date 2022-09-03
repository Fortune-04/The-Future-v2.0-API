<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prayer;

class PrayerController extends Controller
{
    public function index()
    {
        return Prayer::all();
    }

    public function create()
    {
        return Prayer::create([
            'fajr' => request('fajr'),
            'dhuhr' => request('dhuhr'),
            'asr' => request('asr'),
            'maghrib' => request('maghrib'),
            'isha' => request('isha'),
        ]);
    }

    public function update(Prayer $id)
    {
        $success = $id->update([
            'fajr' => request('fajr'),
            'dhuhr' => request('dhuhr'),
            'asr' => request('asr'),
            'maghrib' => request('maghrib'),
            'isha' => request('isha'),
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
