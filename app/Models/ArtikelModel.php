<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public static function getAll()
    {
        $artikel = DB::table('articles')->get();
        return $artikel;
    }

    public static function getById($id)
    {
        $artikel = DB::table('articles')->where('id', '=', $id)->first();
        return $artikel;
    }

    public static function save($artikel)
    {
        $new_artikel = DB::table('articles')->insert($artikel);
        return 1;
    }

    public static function update($id, $request)
    {
        $slug = str_replace(' ', '-', strtolower($request['judul']));
        $artikel = DB::table('articles')->where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'slug' => $slug,
            'tag' => $request['tag'],
            'updated_at' => $request['updated_at']
        ]);
        return $artikel;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('articles')->where('id', $id)->delete();
        return $deleted;
    }
}
