<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class CrudModel extends Model
{
    use HasFactory;

    public function scopeRetrieveUser() {

        $result = DB::select('SELECT * FROM posts');

        return $result;
    }

    public function InsertUser($request) {

        $heading = $request->input('heading');
        $caption = $request->input('caption');
        $created_at = $request->input('created_at');
        $updated_at = $request->input('updated_at');
        $user_id = $request->input('user_id');

        $result = DB::insert('INSERT INTO posts (heading, caption, created_at, updated_at, user_id) VALUES (?, ?, ?, ?, ?)', [$heading, $caption, $created_at, $updated_at, $user_id]);

        return $result;
    }

    public function DeleteUser($request) {

        $user_id = $request->input('user_id');

        $result = DB::delete('DELETE FROM posts WHERE id = ?', [$user_id]);
        return $result;
    }

    public function UpdateUser($request) {

        $post_id = $request->input('user_id');
        $heading = $request->input('heading');
        $caption = $request->input('caption');

        $result = DB::update('UPDATE posts SET heading = ?, caption = ? WHERE id = ?;', [$heading, $caption, $post_id]);

        return $result;
    }

    public function scopeCountData() {

        $result = DB::select('SELECT COUNT(id) AS ID FROM posts');
        return $result;
    }

    public function scopePostId() {

        $result = DB::select('SELECT * FROM posts, users WHERE posts.user_id = users.id');
        return $result;
    }

    // public function scopeRoleSelect() {

    //     $result = DB::select('SELECT * FROM roles');
    //     return $result;
    // }
}
