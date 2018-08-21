<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use function PHPSTORM_META\map;

class CollaboratorController extends Controller{

    public function index(){
        //$collaborators=\App\Collaborator::all();
        //return view('collaborators.index', compact('collaborators');

        $collaborators = DB::table('collaborators')->leftJoin('collaborator_roles', 'collaborators.role_id','=','collaborator_roles.id')->select('collaborators.*', 'collaborator_roles.code as code', 'collaborator_roles.description as description')->get();
        //echo "<pre>"; print_r($collaborators); echo "</pre>";
        return view('collaborators.index', compact('collaborators'));
    }

    public function create(){
        return view('collaborators.create');
    }


    public function store(Request $request){
        $collaborator = new \App\Collaborator;
        $collaborator->name = $request->get('name');
        $collaborator->lastname = $request->get('lastname');
        $collaborator->role_id = DB::table('collaborator_roles')->where('code', $request->get('role'))->value('id');
        $collaborator->save();

        return redirect('collaborators')->with('success', 'Collaboratore aggiunto');
    }

    public function edit($id){
        $collaborator = \App\Collaborator::find($id);
        $roles=\App\CollaboratorRole::all();
        return view('collaborators.edit', compact('collaborator','roles'));
    }

    public function detail($id){
        //$collaborator = DB::table('collaborators')->join('collaborator_roles', 'collaborators.role_id','=','collaborator_roles.id')->where('collaborators.id', $id);

        $collaborator = DB::table('collaborators')->join('collaborator_roles', 'collaborators.role_id','=','collaborator_roles.id')
            ->where('collaborators.id', $id)
            ->select('collaborators.*', 'collaborator_roles.code as code', 'collaborator_roles.description as description')
            ->get();
        //echo "<pre>"; print_r($collaborator); echo "</pre>";
        return view('collaborators.detail', compact('collaborator','id'));
    }

    public function update(Request $request, $id){
        $collaborator= \App\Collaborator::find($id);
        $collaborator->name=$request->get('name');
        $collaborator->lastname=$request->get('lastname');
        $collaborator->role_id = DB::table('collaborator_roles')
            ->where('code', $request->get('role'))
            ->value('id');
        $collaborator->save();
        return redirect('collaborators');
    }

    public function destroy($id){
        $collaborator = \App\Collaborator::find($id);
        $collaborator->delete();

        return redirect('collaborators')->with('success','Collaboratore cancellato');
    }
}
