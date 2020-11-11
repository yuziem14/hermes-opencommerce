<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Tag;
use App\Models\Product;

use App\Http\Requests\StoreProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::orderBy('updated_at', 'desc')->with(['user', 'images', 'tags'])->get();
      return view('products.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tags = Tag::all();
      return view('products.create')->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
      $data = $request->only(['name', 'description', 'price', 'amount']);

      try {
        DB::beginTransaction();

        $imageNames = [];
        $product = new Product();
        $product->fill($data);
        $product->initial_price = $data['price'];
        $product->user_id = Auth::user()->id;
        $tagIds = [];

        if($request->has('tags')) {
          $tagIds = Tag::select('id')->whereIn('slug', $request->input('tags', []))->get();
        }

        if($request->hasFile('images')) {
          foreach($request->images as $image) {
            $hash = Str::random();
            $extension = $image->extension();
            $imageName = $hash.'_'.time().'.'.$extension;

            $path = Storage::putFileAs('products', $image, $imageName);
            $imageNames[] = $imageName;
          }
        }

        $product->save();
        foreach($imageNames as $imageName) {
          $product->images()->create(['filename' => $imageName]);
        }

        $product->tags()->attach($tagIds);
        DB::commit();
      } catch (Exception $e) {
        DB::rollback();
      }


      return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with(['user', 'images', 'tags'])->where('id', $id)->first();
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->tags()->detach();
        $product->delete();

        return redirect()->route('products.index');
    }
}
