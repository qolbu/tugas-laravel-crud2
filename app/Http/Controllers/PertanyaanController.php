<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $rows = PertanyaanModel::get_all();
        return view('pertanyaan.index', ['rows' => $rows]);
    }

    public function create() {
        $today = date('Y-m-d H:i:s');
        return view('pertanyaan.form', ['today' => $today]);
    }

    public function store(Request $request) {
        $data = request()->except(['_token']);
        $new_question = PertanyaanModel::save($data);
        return redirect('/pertanyaan');
    }

    public function show($id) {
        $pertanyaan = PertanyaanModel::getOne($id);
        $jawaban = JawabanModel::getJawaban($id);
        //dd($jawaban);
        $today = date('Y-m-d H:i:s');
        return view('pertanyaan.detail', ['rows' => $pertanyaan, 'jawaban' => $jawaban,'today' => $today]);
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::getOne($id);
        $today = date('Y-m-d H:i:s');
        return view('pertanyaan.form', ['today' => $today, 'row' => $pertanyaan]);
    }

    public function update($id) {
        
    }
}
