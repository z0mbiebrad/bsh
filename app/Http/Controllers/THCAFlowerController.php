<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\THCAFlower;
use Illuminate\Http\Request;

class THCAFlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'type' => 'required|in:indica,sativa,hybrid',
            'quality' => 'required|in:top-shelf,premium,exotic',
            'strain' => 'required|string|max:255',
            'percentage' => 'nullable|numeric|min:0|max:100',
            'image_upload' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240', // 10MB max size
            'strainotweek' => 'nullable|in:on',
        ]);

        // Handle file upload if it exists
        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            // You can store the image and get the path to save in the database, for example:
            $path = $file->store('images', 'public'); // Store in 'storage/app/public/images'
            $validatedData['image_url'] = $path; // Store the path for the database
        }

        THCAFlower::create([
            'type' => $validatedData['type'],
            'quality' => $validatedData['quality'],
            'strain' => $validatedData['strain'],
            'thc_content' => $validatedData['percentage'],
            'image_url' => $validatedData['image_upload'] ?? null,
            'star' => $validatedData['strainotweek'] ?? null,
        ]);
        
        return back()->with('status', 'Your strain has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        //
    }
}
