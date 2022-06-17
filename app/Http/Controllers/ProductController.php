<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
        protected $validation =[
            'title' => 'required|max:80',
            'series' => 'required|max:50',
            'thumb' => 'required|max:255',
            'price' => 'required|max:11',
            'sale_date' => 'required|max:20',
        ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $prodotti = Product::all();
        return view('products.index',compact('prodotti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate($this->validation);
        $addData = $request->all();

        $newComic = new Product();
        $newComic-> title = $addData['title'];
        if(!empty($addData['description'])){
            $newComic-> description = $addData['description'];
        }
        $newComic-> series = $addData['series'];
        $newComic-> thumb = $addData['thumb'];
        $newComic-> price = $addData['price'];
        $newComic-> sale_date = $addData['sale_date'];
        $newComic-> type = $addData['type'];
        $newComic-> save();
        return redirect()->route('products.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Product::findOrFail($id);
        // dump($prodotto);
        return view('products.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Product::findOrFail($id);

        return view('products.edit', compact('book'));
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
        $request->validate($this->validation);
        $addData= $request->all();
        $book = Product::findOrFail($id);
        $addData = $request->all();

        $book = new Product();
        $book-> title = $addData['title'];     
        $book-> description = $addData['description'];
        $book-> series = $addData['series'];
        $book-> thumb = $addData['thumb'];
        $book-> price = $addData['price'];
        $book-> sale_date = $addData['sale_date'];
        $book-> type = $addData['type'];
        $book-> save();
        
        return redirect()->route('products.show', $book->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Product::findOrFail($id);
        $book = $book->delete();
        return redirect()->route('products.index');
    }
}
