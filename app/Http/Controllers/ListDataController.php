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
    public function edit(Lists $lists, $id)
    {
        $lists = Lists::findOrFail($id);
        return view('list.edit', compact('lists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListRequest $request, Lists $lists)
    {
        // dd($request->validated());
        $updated = $lists->update($request->validated());

        if ($updated) {
            // Jika update berhasil
            return redirect()->route('list.index');
        } else {
            // Jika update gagal
            return redirect()->route('list.create')->with('error', 'Data gagal diperbarui');
        }
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
