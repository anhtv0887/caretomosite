@extends('demo.Default')
@section('title','介護・	福祉の学生就職サイト')
@section('externalfile')
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}" />
@endsection
@section('content')
  <div class="btn"><a href="{{route('register')}}">会員登録</a></div>
  <div class="btn"><a href="#">会員一覧</a></div>
  <div class="btn"><a href="#">会員制ログイン</a></div>
  <div class="btn"><a href="#">商品登録</a></div>
@endsection