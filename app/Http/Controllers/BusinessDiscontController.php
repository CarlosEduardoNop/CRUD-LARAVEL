<?php

namespace App\Http\Controllers;

use App\Models\BusinessDiscont;
use App\Models\Category;
use Illuminate\Http\Request;

class BusinessDiscontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disconts = BusinessDiscont::all();
        $categories = Category::all();

        return view('businessDiscont.index', compact('disconts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $discont = [];

        return view('businessDiscont.create', compact('categories', 'discont'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            BusinessDiscont::create($request->all());
            return redirect()->to('/business_discont');
        } catch (\Exception $exception) {
            return redirect()->to('/business_discont')->with('error', $exception->getMessage());
        }
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
        $discont = BusinessDiscont::find($id);
        $categories = Category::all();

        return view('businessDiscont.edit', compact('discont', 'categories'));
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
        try {
            BusinessDiscont::find($id)->update($request->all());

            return redirect()->to('/business_discont')->with('success', 'Registro atualizado com sucesso');

        } catch (\Exception $exception) {
            return redirect()->to('/business_discont')->with('error', $exception->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            BusinessDiscont::find($id)->delete();

            return redirect()->to('/business_discont')->with('success', 'Registro excluido com sucesso');

        } catch (\Exception $exception) {
            return redirect()->to('/business_discont')->with('error', $exception->getMessage());

        }
    }
}
