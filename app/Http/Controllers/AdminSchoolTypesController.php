<?php

namespace App\Http\Controllers;

use App\Schooltype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminSchoolTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schooltypes = Schooltype::withTrashed()->paginate();
        return view('admin.schooltypes.index', compact('schooltypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.schooltypes.create');
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
        Schooltype::create($request->all());
        return redirect('/admin/schooltypes');
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
        $schooltype = Schooltype::findOrFail($id);
        return view('admin.schooltypes.edit', compact('schooltype'));
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
        $schooltype = Schooltype::findOrFail($id);
        $schooltype->update($request->all());
        return redirect('/admin/schooltypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schooltype::findOrFail($id)->delete();
        return redirect('/admin/schooltypes');
    }

    public function schooltyperestore($id){
        Schooltype::onlyTrashed()->where('id',$id)->restore();
        Session::flash('softdeleted_schooltype', 'The schooltype has been restored');
        return redirect('admin/schooltypes');
    }
}
