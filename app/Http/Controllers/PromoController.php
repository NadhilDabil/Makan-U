<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromoController extends Controller
{
    public function viewPromo(){
        return view('penjual/promo/view-form-promo');
    }

    public function storePromo(Request $request){
        $promo = new Promo();

        $promo->id_toko = Auth::user()->toko->id_toko;
        $promo->Desk_promo = $request->Desk_promo;
        $promo->jangka_waktu_mulai = $request->jangka_waktu_mulai;
        $promo->jangka_waktu_berhenti = $request->jangka_waktu_berhenti;
        $promo->caption = $request->caption;
        $promo->save();
        return redirect()->route('view.promo');
    }

    public function showPromo(){
        $promos = Promo::where('id_toko', Auth::user()->toko->id_toko)->get();

        return view('penjual/promo/view-promo', compact('promos'));
    }

    // EDIT PROMOOO
    public function editPromo($id){
        $promo = Promo::findOrFail($id);
        return view('penjual/promo/view-edit-promo', compact('promo'));
    }

    public function updatePromo(Request $request, $id){
        $promo = Promo::findOrFail($id);

        $promo->Desk_promo = $request->Desk_promo;
        $promo->jangka_waktu_mulai = $request->jangka_waktu_mulai;
        $promo->jangka_waktu_berhenti = $request->jangka_waktu_berhenti;
        $promo->caption = $request->caption;
        $promo->save();

        return redirect()->route('view.promo');
    }

    public function destroyPromo($id){
        $promodel = Promo::findOrFail($id);
        $promodel->delete();
        return redirect()->route('view.promo');
    }
}
