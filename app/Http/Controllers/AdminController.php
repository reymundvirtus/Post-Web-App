<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CrudModel;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    public function index() {
        $posts = DB::select('SELECT user_id FROM posts WHERE posts.user_id');
        
        return view('admin.index', ['posts' => $posts]);
    }

    public function retrieve_data() {

        $user = CrudModel::RetrieveUser();

        return response()->json($user);
    }

    public function insert_data(Request $request) {

        $result = new CrudModel();
        $result->InsertUser($request);
        return response()->json($result);
    }

    public function delete_data(Request $request) {

        $result = new CrudModel();
        $result->DeleteUser($request);
        return response()->json($result);
    }

    public function update_data(Request $request) {

        $result = new CrudModel();
        $result->UpdateUser($request);
        return response()->json($result);
    }

    public function count_data() {

        $result = CrudModel::CountData();
        return response()->json($result);
    }

    public function post_id() {

        $result = CrudModel::PostId();
        return response()->json($result);
    }

    // public function role_select() {

    //     $result = CrudModel::RoleSelect();
    //     return response()->json($result);
    // }
}
