<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Item;
use App\ItemCategory;
use App\ItemSubCategory;
use App\Spec;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=Item::all();
        $categories=ItemCategory::all();

        return view('items.index')->with(['items'=>$items,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
$itemsCategory=ItemCategory::all();
$itemSubCategory=ItemSubCategory::all();
$brands=Brand::all();
$specs=Spec::all();

return view('items.create')->with(['category'=>$itemsCategory,'sub_category'=>$itemSubCategory,'brands'=>$brands,'specs'=>$specs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => ['required', 'string', 'max:255'],
                'detail' => ['required', 'string'],
                'price' => ['required', 'string'],
                'category' => ['required', 'string'],
                'subcategory' => ['required', 'string'],
                'photo' => ['required','image'],
            ]

        );

        //upload file


if($request->hasFile('photo')){
//get file name
    $fileNameWithExt=$request->file('photo')->getClientOriginalName();
$fileNameToStore=time().'_'.$fileNameWithExt;

//upload image

    $path=$request->file('photo')->storeAs('public/img',$fileNameToStore);
}else{
    $fileNameToStore='/img/avatar.jpg';
}



     $item= Item::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'price' => $request->input('price'),
            'category' => $request->input('category'),
            'subcategory' => $request->input('subcategory'),
            'tags' => $request->input('tags'),
            'photo' => '/storage/img/'.$fileNameToStore,
            'badge' => 'new',
            'status' => '1',
            'user_id' => Auth::user()->id,


        ]);
        return redirect('/item/'.$item->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    return view('items.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
