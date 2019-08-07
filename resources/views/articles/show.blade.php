<!-- 詳細ページ -->
{{-- layoutsフォルダのbookapp.blade.phpを継承 --}}
@extends('layouts.bookapp')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事詳細')

{{-- bookapp.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <h1>{{$item->title}}</h1>
  <p>{{$item->body}}</p>
  <br><br>
  <a href="/articles">一覧に戻る</a>
@endsection