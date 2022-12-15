<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:permisos.index')->only('index');
        $this->middleware('can:permisos.index')->only('edit');
        $this->middleware('can:permisos.index')->only('create');
        $this->middleware('can:permisos.index')->only('store');
        $this->middleware('can:permisos.index')->only('update');
        $this->middleware('can:permisos.index')->only('destroy');
    }
    public function index()
    {
        //
        $permi = Permission::all();
        return view('permission.index',compact('permi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('permission.create');
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
        $permi = new Permission();

        /*$permi->guard_name = 'web';*/

        $permi->name = $request->get('nombre');

        $permi->description = $request->get('desc');

        $permi->save();

        return redirect('/permisos');
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
    public function edit(Permission $Permiso)
    {
        //
        return view('permission.edit',compact('Permiso'));
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
        $permi =Permission::find($id);

        $permi->name = $request->get('nombre');

        $permi->description = $request->get('desc');

        $permi->save();

        return redirect('/permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $Permiso)
    {
        //
        $Permiso->delete();
        return redirect()->route('permisos.index')->with('mensajeeliminar','ok');
    }
}
