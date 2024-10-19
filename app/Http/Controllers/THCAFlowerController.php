<?php

namespace App\Http\Controllers;

use App\Models\THCAFlower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class THCAFlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $strains = THCAFlower::all();
        return view('thca-menu', compact('strains'));
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
        ]);

        // Handle file upload if it exists
        if ($request->hasFile('image_upload')) {
            $file = $request->file('image_upload');
            $path = $file->store('images', 'public'); // Store in 'storage/app/public/images'
            $validatedData['image_url'] = 'storage/' . $path; // Save as a relative URL to be accessible via `asset()`
        }


        THCAFlower::create([
            'type' => $validatedData['type'],
            'quality' => $validatedData['quality'],
            'strain' => $validatedData['strain'],
            'thc_content' => $validatedData['percentage'],
            'image_url' => $validatedData['image_url'] ?? null,
        ]);


        return back()->with('status', 'Your strain has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(THCAFlower $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(THCAFlower $flower)
    {
        return view('edit-thca-flower', ['flower' => $flower]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, THCAFlower $flower)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:indica,sativa,hybrid',
            'quality' => 'required|in:top-shelf,premium,exotic',
            'strain' => 'required|string|max:255',
            'percentage' => 'nullable|numeric|min:0|max:100',
            'image_upload' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240', // 10MB max size
            'available' => 'nullable|boolean'
        ]);

        if ($request->hasFile('image_upload')) {
            // Delete the old image if it exists
            if ($flower->image_url) {
                Storage::disk('public')->delete(str_replace('storage/', '', $flower->image_url));
            }

            $file = $request->file('image_upload');
            $path = $file->store('images', 'public'); // Store in 'storage/app/public/images'
            $validatedData['image_url'] = 'storage/' . $path; // Save as a relative URL to be accessible via `asset()`
        }

        // Update the flower record
        $flower->update([
            'type' => $validatedData['type'],
            'quality' => $validatedData['quality'],
            'strain' => $validatedData['strain'],
            'thc_content' => $validatedData['percentage'],
            'image_url' => $validatedData['image_url'] ?? $flower->image_url, // Keep old image if no new upload
            'available' => $validatedData['available']
        ]);

        return back()->with('status', 'Your strain has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(THCAFlower $flower)
    {
        $flower->delete();
        
        return back()->with('status', 'Strain deleted succesfully.');
    }
}
