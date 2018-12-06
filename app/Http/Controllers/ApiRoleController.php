<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiRoleController extends Controller
{
    public function get() {
        return DB::table('role')->selectRaw("*")->get()->toJson();
    }

    public function create() {
        return response()->json(
            DB::table('role')->insert(request()->all())
        );
    }

    public function update(Request $request, $uuid) {
        return response()->json(
            DB::table('role')->where('role_id', $uuid)->update($request->all())
        );
    }

    public function delete($uuid) {
        return response()->json(
            DB::table('role')->where('role_id', $uuid)->delete()
        );
    }
}
