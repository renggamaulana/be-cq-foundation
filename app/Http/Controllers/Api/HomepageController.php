<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Program;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $donations = Donation::take(5)->get();
        $events = Event::take(5)->get();
        $programs = Program::take(5)->get();
        $partners = Partner::all();

        return response()->json([
            'donations' => $donations,
            'events' => $events,
            'programs' => $programs,
            'partners' => $partners,
        ]);
    }
}
