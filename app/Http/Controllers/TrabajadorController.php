<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Trabajador;
use App\DetalleTrabajador;



class TrabajadorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empleados = Trabajador::all();
        foreach ($empleados as $key => $value) {
            
            $value->detalles->fecha_nac;
            
        }
    return response($empleados);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('trabajador.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		 //echo "<pre>".print_r(Input::all(), true)."</pre>";
		$data= $request->all();
		
		 try{
            
            $trabajador = new Trabajador;
                $trabajador->nombre = $data['nombre'];
                $trabajador->paterno = $data['paterno'];
                $trabajador->materno = $data['materno'];
            $trabajador->save();

            $detalle = new DetalleTrabajador;
	            $detalle->trabajador_id=$trabajador->id;
	            $detalle->fecha_nac=$data['fecha'];
	            $detalle->sueldo=$data['sueldo'];
            $detalle->save();
            

            return response()->json(['status'=>true,'msj'=>'Ok'],200);

        }catch (\Exception $e){
            return response()->json(['status'=>false,'msj'=>'Error'],500);

        }
        
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		try{
		
			if($id>0)			
				$empleado = Trabajador::find($id);
			else
				$empleado = Trabajador::where('nombre', 'LIKE', $id)->get();
			
			if(!$empleado) return response()->json(['error' => 'No existe'],404);

			else  return response($empleado);
			
			
		}
		catch (\Exception $e){
            return response()->json(['status'=>'false','msj'=>'Error'],500);

        }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$empleado = Trabajador::find($id);
		$detalles = $empleado->detalles;
		
		
		return view('trabajador.edit', compact('empleado','detalles'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$data= $request->all();
		
		 try{
            
            $trabajador = Trabajador::find($data['id']);
                $trabajador->nombre = $data['nombre'];
                $trabajador->paterno = $data['paterno'];
                $trabajador->materno = $data['materno'];
            $trabajador->save();
            
            $detalle = DetalleTrabajador::where('trabajador_id', '=', $data['id'])->update(['fecha_nac' => $data['fecha'],'sueldo'=> $data['sueldo']]);
            return response()->json(['status'=>true,'msj'=>'Ok'],200);

        }catch (\Exception $e){
            return response()->json(['status'=>false,'msj'=>'Error'],500);

        }
        
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 $trabajador = Trabajador::find($id);
		 $detalle = DetalleTrabajador::where('trabajador_id', '=', $id);
		 $detalle->delete();
		 $trabajador->delete();
		  return response()->json(['status'=>true,'msj'=>'ok'],200);
	}

}
