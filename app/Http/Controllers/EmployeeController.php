<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // 1. Tambahkan ini di bagian atas

class EmployeeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Employee List';
        return view('employee.index', ['pageTitle' => $pageTitle]);
    }

    public function create()
    {
        $pageTitle = 'Create Employee';
        return view('employee.create', compact('pageTitle'));
    }

    // 2. Tambahkan method store() ini di bawahnya
    public function store(Request $request)
    {
        // Pesan error kustom dalam bahasa Indonesia
        $messages = [
            'required' => ':attribute harus diisi.',
            'email' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        // Aturan validasi untuk setiap kolom input form
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
        ], $messages);

        // Jika validasi gagal, kembalikan ke halaman sebelumnya beserta pesan errornya
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return $request->all();
    }
}
