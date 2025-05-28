<?php

namespace App\Http\Controllers;

use App\Models\Inscription_formation;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalInscrits = Inscription_formation::count();
        $suscriptions = Newsletter::all()->count();
        $today = Visitor::whereDate('created_at', Carbon::today())->count();

        $month = Visitor::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();

        $year = Visitor::whereYear('created_at', Carbon::now()->year)->count();

        return view('home', compact('today', 'month', 'year', 'suscriptions', 'totalInscrits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
