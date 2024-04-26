<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Item;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Auth::user()->inventories()->pluck('id');
        $items = Item::whereIn('inventory_id', $inventories)->get();
        return view('user.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inventories = Auth::user()->inventories;
        return view('user.items.create', compact('inventories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'inventory_id' => ['required', 'integer'],
            'quantity' => ['required'],
            'image' => ['image', 'max:5000']
        ]);


        $item = new Item();
        $item->name = $request->name;
        $item->inventory_id = $request->inventory_id;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->image = $this->uploadImage($request, 'image', '/uploads/items');
        $item->save();

        toastr('', 'success', 'Item Created Successfully');

        return redirect()->route('user.items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        $inventories_id = Auth::user()->inventories->pluck('id');
        $keys = $inventories_id->toArray();

        if (in_array($item->inventory_id, $keys)) {
            return view('user.items.show', compact('item'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $inventories = Auth::user()->inventories;
        $inventories_id = Auth::user()->inventories->pluck('id');
        $keys = $inventories_id->toArray();

        if (in_array($item->inventory_id, $keys)) {
            return view('user.items.edit', compact('item', 'inventories'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'inventory_id' => ['required', 'integer'],
            'quantity' => ['required'],
            'image' => ['image', 'max:5000']
        ]);

        $item->name = $request->name;
        $item->inventory_id = $request->inventory_id;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $imagepath = $this->updateImage($request, 'image', '/uploads/items', $item->image);
        $item->image = empty(!$imagepath) ? $imagepath : $item->image;

        $item->save();

        toastr('', 'success', 'Item Updated Successfully');

        return redirect()->route('user.items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $this->deleteImage($item->image);
        $item->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
