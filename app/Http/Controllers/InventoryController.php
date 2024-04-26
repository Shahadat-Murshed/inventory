<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Auth::user()->inventories()->paginate(20);

        return view('user.inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['nullable'],
        ]);

        $inventory = new Inventory();
        $inventory->name = $request->name;
        $inventory->user_id = Auth::user()->id;
        $inventory->description = $request->description;
        $inventory->save();

        toastr('', 'success', 'Inventory Created Successfully');

        return redirect()->route('user.inventories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        $items = $inventory->items;

        return view('user.inventories.items.index', compact('items', 'inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view('user.inventories.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['nullable'],
        ]);

        $inventory->name = $request->name;
        $inventory->user_id = Auth::user()->id;
        $inventory->description = $request->description;
        $inventory->save();

        toastr('', 'success', 'Inventory Updated Successfully');

        return redirect()->route('user.inventories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return response(['status' => 'success', 'message', 'Deleted Successfully']);
    }
}
