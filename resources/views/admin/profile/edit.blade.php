@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">氏名</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">性別</label>
                        <div class="col-md-10">
                            <input id="gender-m" type="radio" name="gender" id="男性" value="男性" {{ $profile_form->gender == '男性' ? 'checked' : '' }}>
                            <label for="gender-m">男性</label><br>
                            <input id="gender-w" type="radio" name="gender" id="女性" value="女性" {{ $profile_form->gender == '女性' ? 'checked' : '' }}>
                            <label for="gender-w">女性</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">趣味</label>
                        <div class="col-md-10">
                        <textarea class="form-control" name="hobby" rows="5">{{ $profile_form->hobby }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">自己紹介欄</label>
                        <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection