<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();

        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newTechnology = new Technology();

        $newTechnology->name = $data['name'];
        $newTechnology->color = $data['color'];

        $newTechnology->save();

        return redirect()->route('admin.technologies.index');

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
    public function edit(Technology $technology)
    {
        $technologies = Technology::all();

        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
         $data = $request->all();

        $technology->name = $data['name'];
        $technology->color= $data['color'];

        $technology->update();
        
        return redirect()->route('admin.technologies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        if ($technology->projects()->exists()) {
        return redirect()->route('admin.technologies.index')->with('error', 'Impossibile eliminare: ci sono progetti associati. Assicurati di cancellarli prima di poter eliminare la tecnologia.');
    }

    $technology->delete();

    return redirect()->route('admin.technologies.index')->with('success', 'Tecnologia eliminata con successo.');

    }
    
}
