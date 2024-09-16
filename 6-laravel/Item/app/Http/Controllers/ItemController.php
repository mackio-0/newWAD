<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function search(Request $request)
    {
        // return $request;
        $query = $request->input('query');
        // return $query;
        $items = Item::where('name', 'LIKE', "%{$query}%")
            ->orWhere('status', 'LIKE', "{$query}%")
            ->paginate(5);
        // return $items;

        return view('item.index', compact('items', 'query'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $appName = config('app.appName');
        // dd($appName);
        $items = Item::all();

        foreach ($items as $item) {
            $item->item_images = json_decode($item->item_images, true);
            // dd($item->item_images); // if you want to see array you need to decode, if not you will olny get a json sting pretending to be an array

        }

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
            // 'image' => 'required',
            'price' => 'required|string',
            'stock' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'status' => 'required|in:available,unavailable',
        ]);

        // if ($request->image) {
        //     $file = $request->image;
        //     $ext = $file->extension();
        //     // return $ext;
        //     $new_name = "item_image-" . uniqid() . '.' . $ext;
        //     // return $new_name;

        //     $file->storeAs('public/itemImages', $new_name);
        // }
        $images = [];
        if ($request->images) {
            foreach ($request->file('images') as $file) {
                $new_name = "item_image-" . uniqid() . '.' . $file->extension();
                $file->storeAs('public/itemImages', $new_name);
                $images[] = $new_name;
            }
        }


        $item = new Item();
        $item->name = $request->name;
        $item->item_images = json_encode($images);
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
        $item->item_images = json_decode($item->item_images, true);
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
        $images = [];
        if ($request->images) {
            foreach ($request->file('images') as $file) {
                $new_name = "item_image-" . uniqid() . '.' . $file->extension();
                $file->storeAs('public/itemImages', $new_name);
                $images[] = $new_name;
            }
            $item->item_images = json_encode($images);
        }
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
