<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GetResource;
use Illuminate\Http\Request;
use App\Models\Explore;

class ExploreController extends Controller
{
    //
    public function index() {
        $explore = Explore::latest()->paginate(5);
        return new GetResource($explore);
    }

    public function show($id) {
        $explore = Explore::find($id);
        return new GetResource($explore);
    }

    public function store(Request $request) {
        $explore = Explore::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
            'porto' => $request->porto,
            'sertifikat' => $request->sertifikat,
        ]);

        return new GetResource($explore);
    }
}
