<?php


namespace App\Http\Controllers;


use App\Models\Sysconf;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        $sysconfs = Sysconf::all();
        return view('configuration.index',compact('sysconfs'));
    }

    public function create()
    {
        return view('configuration.create');
    }

    public function edit($id)
    {
        $sysconf = Sysconf::find($id);
        return view('configuration.edit', compact('sysconf'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $sysconf = new Sysconf();
        $sysconf->fill($data);
        if($sysconf->save()){
            return response()->json(['success'=>true,'message'=>'Se guardó con éxito'],200);
        }
        return response()->json(['success'=>false,'message'=>'No se guardaron los datos'],422);
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();

        $sysconf =  Sysconf::find($id);
        $sysconf->fill($data);
        if($sysconf->save()){
            return response()->json(['success'=>true,'message'=>'Se actualizó con éxito'],200);
        }
        return response()->json(['success'=>false,'message'=>'No se actualizaron los datos'],422);
    }

    public function show()
    {
        $sysconfs = Sysconf::all();
        return view('configuration.view',compact('sysconfs'));
    }
}
