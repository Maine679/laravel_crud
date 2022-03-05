<?php

namespace App\Http\Controllers;

use App\Models\users_crud;
use Illuminate\Http\Request;

class UsersCrud extends Controller
{
    /**
     */
    public function index()
    {
        $users = users_crud::paginate(10);
        return $users;
    }

    /**
     */
    public function create()
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if($password === $confirmPassword) {
            $objUser = new users_crud();

            $objUser->username = $name;
            $objUser->hash_password = md5($password);

            $objUser->save();
        } else {
            //Здесь следует возвращать ошибку для её дальнейшего вывода.
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update($id)
    {
        $username = $_POST['username'];
        $oldPassword = $_POST['old_password'];
        $newPassword = $_POST['new_password'];
        $confirmPassword = $_POST['confirm_password'];
        $arrUpData = [];
        if(!empty($username) || !empty($oldPassword) && $newPassword === $confirmPassword) {
            $objUser = new users_crud();
            if(!empty($username) && !$objUser->where('username', $username)->first()) {
                $arrUpData['username'] = $username;
            }
            if(!empty($oldPassword) && $newPassword === $confirmPassword) {
                $currUser = $objUser->where('id',$id)->first();

                if(md5($oldPassword) === $currUser->hash_password) {
                    $arrUpData['hash_password'] = md5($newPassword);
                }
            }
            $objUser->where("id",$id)->update($arrUpData);
        }
    }

    public function delete($id) {
        $objUser = new users_crud();
        $user = $objUser->where('id', $id)->first();
        $user->delete();
    }
}
