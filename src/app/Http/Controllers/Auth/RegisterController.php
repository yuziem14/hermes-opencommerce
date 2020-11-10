<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User;
use App\Http\Requests\StoreUser;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
      $data = $request->only(
        'name',
        'username',
        'email',
        'password'
      );

      $filename = null;

      try {
        DB::beginTransaction();

        if($request->hasFile('photo')) {
          $photo = $request->file('photo');

          if($photo->isValid()) {
            $filename = $data['username'].'_'.Str::random();
            $photo->storeAs('avatars', $filename.'.'.$photo->extension());
          }
        }

        $data['avatar_filename'] = $filename;

        User::create($data);
        DB::commit();
      } catch (Exception $e) {
        DB::rollback();
      }

      return redirect()->route('login');
    }
}
