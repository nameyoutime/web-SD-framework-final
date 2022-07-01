<?php

namespace App\Http\Controllers;

use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
//        \Debugbar::info($users);

        return View('pages.user.userlist', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        return View('pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->id = null;
        $dateTime = new DateTime();
        $dateTime->format('Y-m-d H:i:s');
        $user->email_verified_at = $dateTime;
        $user->create_at = $dateTime;
        $user->update_at = $dateTime;


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->status = 1;
//        $user->remember_token = $request->input('remember_token');
        DB::table('users')->insert(
            ['id' => $user['id'],
                'email_verified_at' => $user['email_verified_at'],
//                'create_at'=>$user['create_at'],
//                'update_at'=>$user['update_at'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'status' => $user['status'],
                'remember_token' => 'null'
            ]

        );


//        DB::table('users')
//            ->where('id', 12)
//            ->update(['status' => 0,
//            ]);
//        return redirect()->route('users.');
        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = new User();
        $user->status = $request->input('status');
        $affected = DB::table('users')
            ->where('id', $id)
            ->update(['status' => $user->status,
            ]);
        return redirect()->route('users.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("users")->where("id", $id)->delete();
        return redirect()->route('users.index');
    }

    public function active($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['status' => 1,
            ]);
        return redirect()->route('users.index');

    }


    public function deactive($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['status' => 0,
            ]);
        return redirect()->route('users.index');

    }
}
