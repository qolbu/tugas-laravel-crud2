<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;


class JawabanModel {
    public static function get_all() {
        $data = DB::table('jawaban')->get();
        return $data;
    }

    public static function save($data) {
        $new_pertanyaan = DB::table('jawaban')->insert($data);
        return $new_pertanyaan;
    }

    public static function update($id, $data) {
        $update_pertanyaan = DB::table('jawaban')
                                        ->where('id', $id)
                                        ->update($data);
        return $update_pertanyaan;
    }

    public static function delete($id) {
        $delete_pertanyaan = DB::table('jawaban')
                                ->where('id', $id)
                                ->delete();
        return $delete_pertanyaan;
    }

    public static function getJawaban($id) {
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
        return $jawaban;
    }
}

?>