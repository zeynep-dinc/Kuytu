<?php

namespace App\Http\Controllers;


error_reporting(E_ALL);
use DB;
use Validator;
use Illuminate\Http\Request;
use App\Models\Baslik;
use App\Models\Yorumcu;

class BaslikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baslik=DB::Table('basliks')->
        join('yorumcus','yorumcus.id','=','basliks.uid')->
        distinct()->
        orderBy('basliks.created_at','desc')->
        orderBy('basliks.updated_at','desc')->
        get();
        return  view('user.index')->with('bas',$baslik);
    }

    public function baslikformu(){
        return view("baslik.yenibaslikformu");
    }


    public function create(Request $r)
    {
        $baslik=new Baslik;
        $baslik->bname=$r->bname;
        $baslik->bhakkinda=$r->bhakkinda;
        $baslik->btur=$r->btur;
        $baslik->uid=100;
        $baslik->save();
        return view('baslik.baslk2')->with('bas',$r);
//        return $bnew->uid;
    }

    public function store(Request $request)
    {
            $arama=Baslik::Where('bname','=',$request->ara)->get();
            return view("baslik.bulma")->with('user',$arama);
    
    }

 public function show(Request $r)
    {
        $baslik=Baslik::join('yorumcus','basliks.uid','=','yorumcus.id')->where('bname','=',$r->bname)->get();
        if(count($baslik)>0){
             return view('baslik.baslik')->with('baslik',$baslik);
        }
        else {
         return  view('baslik.yenibaslikformu');
        }
    }

    public function edit($id)
    {
        //
    }

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
    }
}
