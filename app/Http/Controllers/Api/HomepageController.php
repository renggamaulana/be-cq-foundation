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
        $donations = Donation::latest()->take(5)->get()->map(function ($donation) {
            return [
                'id' => $donation->id,
                'title' => $donation->title,
                'collected_fund' => $donation->collected_fund,
                'target_fund' => $donation->target_fund,
                'deadline' => $donation->deadline,
                'progress' => $donation->progress,
                'image' => asset('storage/' . $donation->image),
            ];
        });

        $events = Event::latest()->take(5)->get();
        $programs = Program::latest()->take(5)->get();
        $partners = Partner::all()->map(function ($partner) {
            return [
                'id' => $partner->id,
                'name' => $partner->name,
                'image' => asset('storage/' . $partner->image), // Generate full URL
            ];
        });

        return response()->json([
            'donations' => $donations,
            'events' => $events,
            'programs' => $programs,
            'partners' => $partners,
        ]);
    }
}
