<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiUserController extends Controller
{
    public function get() {
        return DB::table('user')->selectRaw("*")->get()->toJson();
    }

    public function getOne($uuid) {
        DB::table('user')->where('user_id', $uuid)->get()->toJson();
    }

    public function create() {
        return response()->json(
            DB::table('user')->insert(request()->all())
        );
    }

    public function update(Request $request, $uuid) {
        return response()->json(
            DB::table('user')->where('user_id', $uuid)->update($request->all())
        );
    }

    public function delete($uuid) {
        return response()->json(
            DB::table('user')->where('user_id', $uuid)->delete()
        );
    }
}
