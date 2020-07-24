<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //
        $items=Item::all();
        $categories=ItemCategory::all();

        return view('category.index')->with(['items'=>$items,'categories'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //0005671570

        return view('category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



        $this->validate(
            $request,
            [
                'name' => ['required', 'string', 'max:255'],
                'detail' => ['required', 'string'],

            ]

        );

        $item= ItemCategory::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),

        ]);
        return redirect('/cat/'.$item->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCategory $itemCategory)
    {
        //
        //
        $items=Item::all();
        $categories=ItemCategory::all();


        return view('category.index')->with(['items'=>$items,'categories'=>$categories,'category'=>$itemCategory]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemCategory $itemCategory)
    {
        //
    }
}
