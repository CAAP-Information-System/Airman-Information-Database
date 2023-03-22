<?php

namespace App\Http\Controllers;

use App\Models\Airmen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ainmenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $airmens = Airmen::latest()->paginate(5);

        return view('airmens.index', compact('airmens'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('airmens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'lname' => 'required|max:255',
            'fname' => 'required|max:255',
            'mname' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'province' => 'required|max:255',
            'nationality' => 'required|max:255',
            'country' => 'required|max:255',
            'postal' => 'required|numeric',
            'mobile' => 'required|numeric',
            'phone' => 'required|numeric',
            'company' => 'required|max:255',
            'email' => 'required|max:255',
            'sex' => 'required|max:255',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'hair' => 'required|max:255',
            'eyes' => 'required|max:255',
        ]);

        Airmen::create($request->all());

        return redirect()->route('airmens.index')
            ->with('User Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Airmen $airmen): View
    {
        return view('airmens.show', compact('airmen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airmen $airmen): View
    {
        return view('airmens.edit', compact('airmen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Airmen $airmen): RedirectResponse
    {
        $request->validate([
            'lname' => 'required|max:255',
            'fname' => 'required|max:255',
            'mname' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|max:255',
            'province' => 'required|max:255',
            'nationality' => 'required|max:255',
            'country' => 'required|max:255',
            'postal' => 'required|numeric',
            'mobile' => 'required|numeric',
            'phone' => 'required|numeric',
            'company' => 'required|max:255',
            'email' => 'required|max:255',
            'sex' => 'required|max:255',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'hair' => 'required|max:255',
            'eyes' => 'required|max:255',
        ]);

        $airmen->update($request->all());

        return redirect()->route('airmens.index')
            ->with('User Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airmen $airmen): RedirectResponse
    {
        $airmen->delete();

        return redirect()->route('airmens.index')
            ->with('User Data deleted successfully');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Airmen::query()
            ->where('lname', 'LIKE', "%{$search}%")
            ->orWhere('sex', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the results compacted
        return view('search', compact('airmen'));
    }

}
