<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        //        Debugbar::info($products[0]->cate_id);
        return View('pages.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('pages.category.create');
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
        $category = new Category();
//        $product->id = null;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $temp = Category::findOrFail($category->id);
        Debugbar::info($temp->products);
//        dd($temp);
        //
        return View('pages.category.show', ['category' => $temp]);

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

        //
        return View('pages.category.edit',
            ['category' => Category::findOrFail($id)]);


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
        $cate = Category::find($id);
        $cate->name = $request->input('name');
        $cate->description = $request->input('description');

        $cate->save();
        return redirect()->route('categories.show',['category'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        {
            //
            $category = Category::find($id);

            $category->delete();
            return redirect()->route('categories.index');
        }
    }
}
