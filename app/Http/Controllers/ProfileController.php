<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = DB::table('profiles')->where('user_id', $id)->first();
        $user = DB::table('users')->where('id', $profile->user_id)->first();

        return View('pages.profile.profile', ['profile' => $profile, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $profile = DB::table('profiles')->find($id);
        $profile = Profile::find($id);
        $user = User::find($profile->user_id);
//        $user = DB::table('users')->where('id', $profile->user_id)->first();
        return View('pages.profile.edit', ['profile' => $profile, 'user' => $user]);
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
        $profile = Profile::find($id);//eloquent
        $validate = $request->validate([
            'avatar' => 'nullable|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',
            'birthday' => 'nullable|date',
            'full_name' => 'required',
            'address' => 'required'
        ]);
        if ($validate) {
            $profile->full_name = $request->input('full_name');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');
            $fileName = "";

            if ($request->file()) {
//                $fileName = $request->file('avatar')->getClientOriginalName();
                $filePath = $request->file('avatar')->storeAs('uploads', $profile->id.".png", 'public');
                //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
                $profile->avatar = '/storage/' . $filePath;
                // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public
            }

            $profile->save(); //lưu
            $user = User::find($id);
            $user->email = $request->input('email');
            $user->role_id= $request->input('role');
            $user->save();
            if ($fileName == "") {
                return back()
                    ->with('success', 'Profile has updated.');
            }
            return back()
                ->with('success', 'Profile has updated.')
                ->with('file', "with file " . $fileName);
//            else {
//                return back()
//                    ->withErrors('message', 'file update failed.')
//                    ->with('file', $fileName);
////                return redirect()->route('profiles.show', [$id]);
//
//            }


        }


//        DB::table('profiles')
//            ->where('id', $id)
//            ->update(['full_name' => $profile->full_name,
//                'address' => $profile->address,
//                'birthday' => $profile->birthday,
//                'avatar' => $profile->avatar,
//
//            ]);

//        DB::table('users')
//            ->where('id', $id)
//            ->update([
//                'email'=>$request->input('email')
//
//            ]);
//        return redirect()->route('profiles.show', [$id]);
        return back()
            ->with($validate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
//        $user = User::find($id);
//        $user->delete();
//        return redirect()->route('users.index');

    }
}
