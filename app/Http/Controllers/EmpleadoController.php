<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use View;
use DB;
use Auth;
use App\Models\Empleado;
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        $empleados = DB::table('empleados')->get();

        return View::make('empleados.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $sucursals = DB::table('sucursals')->get();
        return View::make('empleados.create')->with('sucursals', $sucursals);;
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
        $data=request()->all();
$admin=DB::table('administradors')->where('id_usuario', Auth::user()->id)->first();
        DB::table('empleados')->insert([
        'nombre' => $data['nombre'],
        'edad' => $data['edad'],
        'edad' => $data['edad'],
        'direccion' => $data['direccion'],
        'sueldo_base' => $data['sueldo_base'],
        'id_sucursal' =>'1',
        'id_administrador'=> $admin->id
        ]);
        
        return redirect()->route("empleados.index")->with(["mensaje" => "Empleado creado",
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
        $empleado = Empleado::find($id);

        // show the view and pass the empleado to it
        return View::make('empleados.show')
            ->with('empleado', $empleado);
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
        $empleado = Empleado::find($id);

        // show the view and pass the empleado to it
        return View::make('empleados.edit')
            ->with('empleado', $empleado);
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
        Empleado::find($id)->delete();
        return redirect()->route("empleados.index")->with(["mensaje" => "Empleado eliminado",
    ]);
    }
}
