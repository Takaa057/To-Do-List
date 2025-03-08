<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListRequest;
use App\Models\Lists;
use Illuminate\Http\Request;

class ListDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Lists::all();
        return view('list.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('list.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListRequest $request)
    {

        $lists = new Lists();
        $lists->create($request->validated());
        return redirect()->route('list.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lists $lists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lists $lists)
    {
        // $lists = Lists::findOrFail($id);
        return view('list.edit', compact('lists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lists $lists)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'status' => 'required|string|in:selesai,belum',
            'prioritas' => 'required|string|in:urgent,hari_ini,tidak_wajib',
            'tanggal' => 'required|date'
        ]);

        $lists->update($validated);
        dd($request);
        // $lists->update($request->validated());
            return redirect()->route('list.index')->with('error', 'Data diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lists $lists)
    {
        $lists->delete();
        return redirect()->route('list.index');
    }
}
