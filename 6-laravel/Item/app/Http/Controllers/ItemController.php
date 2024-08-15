<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::paginate(5);

        return view('item.index', compact('items'));
        // return $items;
    }

    public function create()
    {
        $categories = Category::all();
        return view('item.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'stock' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'status' => 'required|in:available,unavailable',
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->category_id = $request->category_id;
        $item->status = $request->status;
        $item->save();

        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        return view('item.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        return view('item.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $id;
        $item = Item::find($id);
        // dd($item);

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'stock' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'status' => 'required|string',
        ]);

        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->category_id = $request->category_id;
        $item->status = $request->status;
        $item->update();

        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->delete();
            return back();
        }
    }
}
