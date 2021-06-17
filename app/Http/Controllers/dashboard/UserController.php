<?php
/**
 * DISEÑADO POR MIS. DANIEL MÉNDEZ CRUZ PERIODO 2021
 */
namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * imports
 */
use App\Traits\CatTrait;
use Illuminate\Database\QueryException;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use CatTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allcategories = $this->allCategories();
        return view('theme.dashboard.usuario.main', compact('allcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // guardar registro y crear usuario validacion
        $validatedData = $request->validate([
            'nombre' => 'required',
            'usuario' => 'required|min:5',
            'email' => 'required|email',
            'contrasena' => 'required|min:5'
        ], [
            'nombre.required' => 'Nombre es requerido',
            'usuario.required' => 'Usuario es Requerido',
            'usuario.min' => 'Debe tener al menos 5 caracteres',
            'email.required' => 'Correo requerido',
            'email.email' => 'Correo No válido',
            'contrasena.required' => 'Contraseña requerida',
            'contrasena.min' => 'Debe tener al menos 5 caracteres'
        ]);

        try {
            /**
             * SE tiene que checar el usuario se encuentra en la base de datos
             */
            $checkUser = User::select('username')->where('email', $request->email)->first();
            if ($checkUser) {
                # checamos que la consulta no esté vacia
                return back()->with('error', 'Ya se encuentra un usuario asociado a este correo!.');
            } else {
                # si está vacio envíamos un mensaje a la aplicación
                $checkforUser = User::select('username')->where('username', $request->usuario)->first();
                if ($checkforUser) {
                    # si no está vacia la consulta mandamos un mensaje de error
                    return back()->with('error', 'El nombre de usuario ya se encuentra en uso!');
                } else {
                    # si no se encuentra en la base de datos el registro, procedemos a almacenar la información
                    $usuario = new User;
                    $usuario->name = $request->nombre;
                    $usuario->username = $request->usuario;
                    $usuario->email = $request->email;
                    $usuario->password = Hash::make($request->contrasena);
                    $usuario->remember_token = Str::random(10);
                    $usuario->save();
                    // redireccionamos a la sección
                    return redirect()->route('add_new_user')->with('success','Usuario Agregado Exitosamente!');
                }  
            }

        } catch (QueryException $sql) {
            //excepcion sql
            return back()->with('error', $sql->getMessage());
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
        //vamos a cargar todos los roles
        $allRoles  = Role::all();
        // descifrar el número base 64 decode
        $userId = base64_decode($id);
        /**
         * get all data from select user by id
         * también tenemos que checar si hay roles dados al usuario para mostrar un mensaje
         */
        $getUser = User::select('username', 'id', 'email', 'name')->where('id', $userId)->first();
        $hasAnyRole = $getUser->hasAnyRole(Role::all());
        if ($hasAnyRole) {
            # si hay roles debemos de obtener el nombre del rol
            $getRole = $getUser->roles->pluck('name');
        } else {
            # de no ser así se tiene que mandar una etiqueta que no se encuentra asociado a un Rol
            $getRole = 'No tiene Rol Asignado';
        }
        $allcategories = $this->allCategories();
        return view('theme.dashboard.usuario.add_user_to_role', compact('allcategories', 'getUser', 'allRoles', 'getRole', 'hasAnyRole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        // validacion de la petición
        $validatedData = $request->validate([
            'nombre_usuario' => 'required',
            'roles' => 'required'
        ], [
            'nombre_usuario.required' => 'Nombre es requerido',
            'roles.required' => 'Seleccionar un Rol'
        ]);

        try {
            //checamos y ejecutamos los cambios de la solicitud
            /**
             * obtenemos el usuario
             */
            $idsolicitado = base64_decode($request->id);
            $obtenerUsuario = User::where('id', $idsolicitado)->first();
            $obtenerRolAsignado = Role::where('id', $request->roles)->first();
            // asignamos rol
            $obtenerUsuario->assignRole($obtenerRolAsignado->name);
            # code...
            $array_update = [
                'name' => trim($request->nombre_usuario)
            ];

            User::WHERE('id', $idsolicitado)->UPDATE($array_update);
            // si se hace la modificación tenemos que hacer un retorno
            // limpiamos el arreglo
            unset($array_update);
            return redirect()->route('edit_user_setting', [base64_encode($idsolicitado)])->with('success','Características Modificadas!!');        
        } catch (QueryException $th) {
            //tira una excepcion
            return back()->with('error', $sql->getMessage());
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
        //
    }

    public function list(Request $request)
    {
        $allcategories = $this->allCategories();
        /**
         * consulta de usuarios
         */
        $allUsers = User::all();
        return view('theme.dashboard.usuario.list', compact('allcategories', 'allUsers'));
    }
}
