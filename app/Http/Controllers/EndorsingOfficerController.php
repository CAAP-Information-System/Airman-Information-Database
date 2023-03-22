<?php

namespace App\Http\Controllers;

use App\Models\Endorser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class EndorsingOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $endorsers = Endorser::latest()->paginate(5);

        return view('officers.index', compact('endorsers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('officers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'office' => 'required|max:255',
        ]);

        Endorser::create($request->all());

        return redirect()->route('officers.index')
            ->with('User Data created successfully.');
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
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'office' => 'required|max:255',
        ]);

        Endorser::create($request->all());

        return redirect()->route('officers.index')
            ->with('User Data created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
