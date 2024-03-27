<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash; // Tambahkan impor ini
use App\Models\User;

class Homecontroller extends Controller
{
    public function dashboard(){
        return view ('dashboard');
    }

    public function index(){
        $data = User::get();
        return view('index', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email'     => 'unique:users,email',
            'nama'      => 'required',
            'password'  => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['email']      = $request->email;
        $data['name']       = $request->nama;

        if($request->password){
            $data['password']   = Hash::make($request->password); // Menggunakan Hash
        }
        
        User::create($data);

        return redirect()->route('index');
    }
    
    public function  edit(Request $request,$id){
        $data = user::find ($id);

        return view('edit', compact('data'));
    }
    public function  update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'email'     => 'required|email',
            'nama'      => 'required',
            'password'  => 'nullable',
        ]);
    
        // Memeriksa apakah validasi gagal
        if ($validator->fails()) {
            // Jika validasi gagal, kembali ke halaman sebelumnya dengan masukan pengguna yang sebelumnya dimasukkan dan pesan kesalahan validasi
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        // Jika validasi berhasil, lanjutkan dengan proses pembaruan data
        $data['email']      = $request->email;
        $data['name']       = $request->nama;
        $data['password']   = Hash::make($request->password); // Menggunakan Hash
    
        // Memperbarui data user
        User::whereId($id)->update($data);
    
        // Mengarahkan pengguna ke halaman indeks
        return redirect()->route('index');
    }
    public function delete(Request $request, $id) {
        $data = User::find($id);
    
        if ($data) {
            $data->delete();
        }
    
        return redirect()->route('index');
    }
    public function halaman()
    {
        $data = User::all();   
        return view('halaman', ['data'=>$data]);

    }

    public function general()
    {
        $data = User::all();   
        return view('general', ['data'=>$data]);

    }
    }
   
    
