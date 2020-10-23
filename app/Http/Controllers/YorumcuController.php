<?php

namespace App\Http\Controllers;

error_reporting(E_ALL);
use DB;
use Validator;
use Auth;
use App\Models\Yorumcu;
use App\Http\Requests\GirisRequest;
use App\Http\Requests\KayitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class YorumcuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $users=DB::Table('basliks')->
        join('yorumcus','yorumcus.id','=','basliks.uid')->
        distinct()->
        get();
        $max=count($users);
        for($i=0;$i<15;$i++){
            $random=mt_rand(0,$max);
            $bas[$i]=$users[$random];
        }
        return view('user.index')->with('bas',$bas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('user.form');
    }
    public function create(KayitRequest $r)
    {
            $isValidate=$r->validated();
            if($isValidate){
            $yorumcu=new Yorumcu;
            $yorumcu->unick=$r->unick;
            $yorumcu->uemail=$r->uemail;
            $yorumcu->upass=md5($r->upass);
            $yorumcu->usex=$r->sex;
            $yorumcu->urole='a';
            $yorumcu->vukuatlari='yok';
            $yorumcu->save();
            return view('user.user')->with('user',$yorumcu);
        }
        else{
            return "Hata tespit ettim.<br>";
        }
    }

    public function showUyeForm()
    {
        return view('user.uyeform');
    }

    
    public function store(Request $request)
    {

    }

    public function login(GirisRequest $r)
    {
        if (Auth::attempt(['uemail' => $r->uemail, 'upass' => md5($r->upass)], $remember)) {

            
        return view('user.user')->with('user',$r);
//            return 'Login oldunuz'; // Gideceğin sayfa...
           }
           else
           {
            return redirect('login')->with('error','Böyle bir kullanıcı yoktur.');
           }
        /*
        $yorumcu=Yorumcu::where('uemail','=',$r->uemail)->where('unick','=',$r->unick)
        ->where('upass','=',md5($r->upass))->get();*/
    }

    public function show(Request $r)
    {
        $user=Yorumcu::join('basliks','basliks.uid','=','yorumcus.id')->where('unick','=',$r->unick)->get();
        return view('user.profile')->with('user',$user);
    }

    public function updateSifre()
    {
        return view('user.sifre');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return "Çalışmıyor şu an ";
        /*
Mail::send('user.uyeform',['icerik'=>"Hoşgeldin"] , function ($message) use ($request){
    $message->subject ('Şifre sıfırlama :'.mt_rand(1000,9999));
    $message->to ('zeynep.dinc@hbv.edu.tr','Zeynep Dinç');
    $message->from("zeynepdinc.23@gmail.com", "zeyno");
});
    return view('sifre')->with('send',true);*/
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
