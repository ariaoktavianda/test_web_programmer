<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kasir;
use App\Models\Administrasi;

class KasirController extends Controller
{
    public function create($id)
        {
                $administrasi = Administrasi::with('pasien')->findOrFail($id);
                        return view('kasir.create', compact('administrasi'));
                            }
    public function store(Request $request)
        {
                $request->validate([
                            'administrasi_id' => 'required|exists:administrasis,id',
                                        'total' => 'required|numeric',
                                                ]);
        Kasir::create([
                    'id' => Str::uuid(),
                                'administrasi_id' => $request->administrasi_id,
                                            'total' => $request->total,
                                                        'status' => 'lunas',
                                                                ]);
        // update status administrasi jadi lunas
                Administrasi::where('id', $request->administrasi_id)->update(['status' => 'lunas']);
        return redirect()->route('administrasi.index')->with('success', 'Pembayaran berhasil.');
            }
            }