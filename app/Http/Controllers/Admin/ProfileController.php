<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 使いたいモデルの宣言
use App\Profile;

class ProfileController extends Controller
{
    //以下を追記
    public function add()
    {
        return view ('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        // 以下追記
        // varidation
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();

        // データベースに保存
        $profile->fill($form);
        $profile->save(); 


        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
