<?php

namespace App\Http\Controllers;

use App\Test;
use App\Tanya;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $test;
    private $tanya;
    public function __construct(Test $test,Tanya $tanya)
    {
        $this->middleware('auth');
        $this->test = $test;
        $this->tanya =$tanya;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $tanya =$this->tanya->getpertanyaan();
        // dd($tanya);
        return view('home',compact('tanya'));
    }
    public function create(){
        return view('home');
    } 
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
             //'id' => 'required',
             //'id_pertanyaan' => 'required',
             //'value' => 'required',
        //]);
        // dd($request);
        $i = 0;
        foreach($request['id_pertanyaan'] as $key){
            $data =  new Test();
            $data->id = Auth::User()->id;
            $data->id_pertanyaan = $request['id_pertanyaan'][$i];
            $data->value = $request['value'][$i];
            
            $data->created_at = date('Y-m-d H:i:s');

            $data->save();
            $i++;
        }
        $count = Test::where('value', '=', 1)->count();
        return redirect('test')->with([$count]);
    }
}
