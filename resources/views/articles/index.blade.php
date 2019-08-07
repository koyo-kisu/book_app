<!-- layouts/bookapp.blade.phpを継承 -->
@extends('layouts.bookapp')

<!-- @yieldにテンプレートごとに'タイトル'を代入 -->
@section('title', 'タイトル')

<!-- bookapp.blade.phpの@yield('menubar')に以下を追加 -->
@section('menubar')
   @parent
   インデックスページ
@endsection

<!-- bookapp.blade.phpの@yield('content')に以下を追加 -->
@section('content')
    <!-- データベースの表示 -->
    <table>
        <tr>
            <th>タイトル</th>
            <th>作者</th>
            <th>出版社</th>
            <th>感想</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->publisher}}</td>
                <td>{{$item->description}}</td>
            </tr>
            <a href="/articles/{{$article->id}}">詳細を表示</a>
        @endforeach
    </table>   
@endsection

<!-- bookapp.blade.phpの@yield('footer')に以下を追加 -->
@section('footer')
copyright 2019 koyo
@endsection