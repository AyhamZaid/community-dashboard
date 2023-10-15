<?php

namespace App\Http\Controllers\CodingAcademy;
use App\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerCodingAcademy extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::where('component', 'codingacademy')
        ->whereIn('timeline', ["public", "component"])
        ->where(function ($query) {
            $query->where(function ($subquery) {
                $subquery->whereNotNull('publication_date')
                    ->where('publication_date', '<=', now());
            })->orWhere(function ($subquery) {
                $subquery->whereNull('publication_date')
                    ->whereNull('start_date')
                    ->whereNull('end_date');
            });
        })
        ->orWhere(function ($query) {
            $query->whereNotNull('end_date')
                ->where('end_date', '>', now());
        })
        ->orderBy('start_date')
        ->orderBy('end_date')
        ->take(5)
        ->get();
        return view('public.codingacademy.coding-academy', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.codingacademy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
