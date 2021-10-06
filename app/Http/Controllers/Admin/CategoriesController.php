<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Category;
use Hash;
use Session;
use Mail;
use Redirect;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        // dd($categories);
        return \View::make('admin.categories-list')->with([
            "categories" => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('admin.create-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $category = new Category;
       $category->category_name = $request->input('category_name');
       
       $cat_icon = $request->file('cat_icon');
       if($cat_icon != ''){
         $filename= $cat_icon->getClientOriginalName();
         $imagename= 'cat-'.rand(000000,999999).'.'.$cat_icon->getClientOriginalExtension();
         $extension= $cat_icon->getClientOriginalExtension();
         // $imagename= $filename;
         $destinationpath= public_path('assets/images/categories/');
         $cat_icon->move($destinationpath, $imagename);
         $category->cat_icon = $imagename;
       }

       $category->cat_desc = $request->input('cat_desc');
       $category->save();

       $categories = Category::get();
       // dd($categories);
       return \View::make('admin.categories-list')->with([
           "categories" => $categories
       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
