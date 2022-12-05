<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Models\Role;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->gejala_id == null) {
            return view(
                'pages.diagnosa.index',
                ['role' => Role::where('id', 1)
                    ->where('penyakit_id', 1)
                    ->get()]
            );
        } elseif ($request->gejala_id != null) {
            if ($request->ya != null) {
                if (
                    Role::where('penyakit_id', $request->penyakit_id)
                    ->where('gejala_id', $request->gejala_id + 1)->first() == null
                ) {
                    return view(
                        'pages.diagnosa.hasil',
                        ['role' => Penyakit::where('id', $request->penyakit_id)
                            ->first()]
                    );
                } else {
                    return view(
                        'pages.diagnosa.index',
                        ['role' => Role::where('gejala_id', $request->gejala_id + 1)
                            ->get()]
                    );
                }
            } elseif ($request->tidak != null) {
                if ($request->penyakit_id == 1 && $request->gejala_id == 2) {
                    return view(
                        'pages.diagnosa.index',
                        ['role' => Role::where('gejala_id', $request->gejala_id + 5)
                            ->get()]
                    );
                } elseif ($request->penyakit_id == 1 && $request->gejala_id == 1) {
                    return view(
                        'pages.diagnosa.index',
                        ['role' => Role::where('gejala_id', $request->gejala_id + 11)
                            ->get()]
                    );
                } elseif ($request->penyakit_id == 3 && $request->gejala_id == 12) {
                    return view(
                        'pages.diagnosa.index',
                        ['role' => Role::where('gejala_id', $request->gejala_id + 5)
                            ->get()]
                    );
                } elseif ($request->penyakit_id == 4 && $request->gejala_id == 17) {
                    return view(
                        'pages.diagnosa.index',
                        ['role' => Role::where('gejala_id', $request->gejala_id + 6)
                            ->get()]
                    );
                } else {
                    echo '<h4 style="text-align: center;">Data tidak ditemukan</h4>';
                }
            }
        }
    }
}
