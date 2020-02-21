<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Cv;

use App\Http\Requests\cvRequest;

class CvController extends Controller
{
    // middleware ridurect  to connecte ( auth )

    public function __construct()
    {
        $this->middleware('auth');

    }

    // listes les cvs
    public function index()
    {
        $listcv = Cv::all();
        
        return view('cv.index', ['cvs' => $listcv]);
    }

    //afficher le formulaire de cretions de cv 
    public function create()
    {
        return view('Cv.create');

    }

    //enregister un cv 
    public function store(cvRequest $request)
    {
        // (pour affichier la liste json) return $request->all();

         $cv = new Cv();
         $cv->title= $request ->input('title') ;
         $cv->presentation= $request ->input('presentation') ;
         $cv->save();

        //  flash message 

         session()->flash('success', 'le cv été bien enregistré !!') ;
         return redirect('Cvs');
    }

    //permet de recuperer  un cv de le mettre dans un le formulaire
    public function edit($id)
    {
        $cv = Cv::find($id);
        return view('cv.edit', ['cv' =>$cv]);

    }

    //permet de modifier un cv 
    public function update(cvRequest $request , $id)
    {
        $cv =Cv::find($id);
        $cv->title= $request ->input('title') ;
        $cv->presentation= $request ->input('presentation') ;
        $cv->save();
        return redirect('Cvs');

    }

    //permet de supprimer un cv 
    public function destroy( Request $request , $id)
    {
        $cv =Cv::find($id);
        $cv->delete();
        return redirect('Cvs');
    }
}
