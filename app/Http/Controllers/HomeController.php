<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $makanan = Makanan::paginate(9);
        return view('home', compact('makanan'));
    }

    public function formCreate()
    {
        return view('tambahcategory');
    }

    public function create(Request $request){
        Makanan::create([
            'nama_makanan'      => $request->nama_makanan,
            'harga'      => $request->harga,
            'detail'      => $request->detail,
        ]);

       Alert::success('Makanan', 'Data Berhasil Ditambahkan!');
        return redirect('/home/');
    }

    public function show(Makanan $makanan)
    {
        return view('category-detail', compact('makanan'));
    }


    // public function destroy(Makanan $makanan){
        public function destroy($id){
        // Makanan::destroy($makanan->id);
        $makanan = Makanan::findOrfail($id);
        $makanan->delete();
        Alert::success('Makanan', 'Data Berhasil Dihapus!');
        return redirect('/home');
    }

    public function formEdit($id){
        // $makanan = Makanan::where('id', $makanan->id);
        $makanan = Makanan::find($id);
        // $makanan = Makanan::select('nama_makanan')->get();
        return view('category-update', compact('makanan'));
    }

    public function edit($id){

        $makanan = Makanan::find($id);
        // Makanan::where('id', $makanan->id)->update([
        //     'nama_makanan'      => $request->nama_makanan,
        //     'harga'      => $request->harga,
        //     'detail'      => $request->detail,
        // ]);

        Alert::success('Makanan', 'Data Berhasil Diperbarui!');
        return view('category-update', compact('makanan'));
    }

}
