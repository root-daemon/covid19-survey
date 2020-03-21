<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showSubmit(){
        return view('submit');
    }
    public function postsubmit(Request $request){
        //dd($request->name);
        if($request->coughing_sneezing==null){
            $coughing_sneezing=0;
        }
        else{
            $coughing_sneezing=$request->coughing_sneezing;
        }
        if($request->fever==null){
            $fever=0;
        }
        else{
            $fever=$request->fever;
        }
        if($request->breathingproblem==null){
            $breathingproblem=0;
        }
        else{
            $breathingproblem=$request->breathingproblem;
        }
        if($request->sinus==null){
            $sinus=0;
        }
        else{
            $sinus=$request->sinus;
        }
        if($request->earpressure==null){
            $earpressure=0;
        }
        else{
            $earpressure=$request->earpressure;
        }
        if($request->headache==null){
            $headache=0;
        }
        else{
            $headache=$request->headache;
        }
        if($request->burning_eyes==null){
            $burning_eyes=0;
        }
        else{
            $burning_eyes=$request->burning_eyes;
        }
        if($request->c_throat==null){
            $c_throat=0;
        }
        else{
            $c_throat=$request->c_throat;
        }
        if($request->bodyache==null){
            $bodyache=0;
        }
        else{
            $bodyache=$request->bodyache;
        }
        if($request->l_appetite==null){
            $l_appetite=0;
        }
        else{
            $l_appetite=$request->l_appetite;
        }
        if($request->t_chest==null){
            $t_chest=0;
        }
        else{
            $t_chest=$request->t_chest;
        }
        if($request->jetlag==null){
            $jetlag=0;
        }
        else{
            $jetlag=$request->jetlag;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address1'=>$request->address1,
            'address2'=>$request->address2,
            'city'=>$request->city,
            'country'=>$request->country,
            'coughing_sneezing'=>$coughing_sneezing,
            'fever'=>$fever,
            'breathingproblem'=>$breathingproblem,
            'sinus'=>$sinus,
            'earpressure'=>$earpressure,
            'headache'=>$headache,
            'burning_eyes'=>$burning_eyes,
            'c_throat'=>$c_throat,
            'bodyache'=>$bodyache,
            'l_appetite'=>$l_appetite,
            'jetlag'=>$jetlag,
            't_chest'=>$t_chest,
    ]);
        return redirect(route('home'));
    }
}
