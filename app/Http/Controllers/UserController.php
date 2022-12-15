<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:user.index')->only('index');
        $this->middleware('can:user.index')->only('edit');
        $this->middleware('can:user.index')->only('create');
        $this->middleware('can:user.index')->only('store');
        $this->middleware('can:user.index')->only('update');
    }
    public function index()
    {
        $users=User::all();
        return view('user.index',compact('users'));
    }

    public function edit($id)
    {
        //
        $roles = Role::all();
        $user = User::find($id);
        //return view('user.editar')->with('roles',$roles);
        return view('user.editar', compact('user','roles'));
    }
    public function create(){
        return view('user.crear');
    }
    public function store(Request $request){
        $request->validate([
            'name'                  =>'required',
            'email'                =>'required|email|max:255|unique:users',
            'pc'                  =>'required',
            'password'              => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'pc'=>$request->pc,
            'password'=>bcrypt($request->password) 
         ]);
        return redirect()->route('user.index');
    }
    public function show($usuario){
   
    } 
    public function asignarDep(Request $request,$usuario){
       
    }

    public function asignarPersona(Request $request,$usuario){
        //return $usuario=User::find($usuario);
        $persona = $request->persona[0];
        DB::table('users')
        ->where('id', $usuario)
        ->update(['persona_id' => $persona]);
        return redirect()->route('user.index');
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
        $user =User::find($id);
       $user->roles()->sync($request->roles);
       //$user->assignRole($request->roles);
        //$user->name = $request->get('name');
        //$user->email = $request->get('email');

        //$user->save();

        return redirect('/user')->with('info','Se ha(n) asignado correctamente el/los rol(es)');
    }
}
