<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class KayitKontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*    if(in_array($request->nick,$argo)){
            $kelime=strlen($request->nick);
            $sans="kafsin";
            for($i=0;$i<$kelime-1;$i++){
                if($i%2==0)
                $sans=$sans."kaf";
                else
                $sans=$sans."sin";
                        }
            $request->merge([
                'nick'=>$sans,
            ]);
           // return redirect()->back()->withErrors('Cızz. Kaka o kelime!'.$request->unick);
           return $next($request->nick);
             }
             else
                return $next($request);*/
                $argo=["amk","aq","zikeyim","sik","s2m","yarrak","fuck","fenasikerim","fenas2m","o.ç","orospu","amınakodugum","akp","chp","mhp","hdp","ip","pkk","dhkpc","amık","amik","döl israfı","oç","sp","got","dig","amcık","amcik","got lalesi","göt"];
                if(in_array($request->unick,$argo)){
                    $kelime=strlen($request->unick);
                    $sans="kafsin";
                    for($i=0;$i<$kelime-1;$i++){
                        if($i%2==0)
                        $sans=$sans."kaf";
                        else
                        $sans=$sans."sin";
                                }
                    $request->merge([
                        'unick'=>$sans,
                    ]);
                    return redirect()->to('/yeniaday')->withErrors('Yavrum bu sitenin kurucusu zaten Ankaralı. Senin o küfür diye tanımladığın kelimeleri ben sana '.$request->unick." olacak şekilde yapıştırırım. Dimağın kurur. Hayal gücünde yeni bir boyuta geçersin." );
                }
                elseif(in_array($request->uemail,$argo)){
                    $kelime=strlen($request->uemail);
                    $sans="kafsin";
                    for($i=0;$i<$kelime-1;$i++){
                        if($i%2==0)
                        $sans=$sans."kaf";
                        else
                        $sans=$sans."sin";
                                }
                    $request->merge([
                        'uemail'=>$sans,
                    ]);
                    return redirect()->to('/yeniaday')->withErrors('Yavrum bu sitenin kurucusu zaten Ankaralı. Senin o küfür diye tanımladığın kelimeleri ben sana '.$request->uemail." olacak şekilde yapıştırırım. Dimağın kurur. Hayal gücünde yeni bir boyuta geçersin." );
                }
                return $next($request);
    }
}
