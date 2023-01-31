@extends('layouts.layout')

@section('create account','新規作成')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/create" method="post">
        <table>
        @csrf
        <tr>
            <th>名前</th>
            <td><input type="text" name="name" value="{{old('name')}}" required></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><input type="text" name="mail" value="{{old('mail')}}" required></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td><input type="date" name="password" value="{{old('password')}}" required></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </table>
    </form>
    
<div>
    <a href="/index">主幹ページ</a>
</div>    

@endsection

@section('footer')
    copyright 2022 tuyano.
@endsection