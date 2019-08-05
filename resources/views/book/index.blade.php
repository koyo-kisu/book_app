@extends('layouts.bookapp')
@section('title', 'book.index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')

　　<!-- 登録ページに遷移 -->
    {!! Form::open(['url' => '/book/create', 'method' => 'get']) !!}
        {!! Form::submit('登録', ['class' => 'form-control', 'id' => '']) !!}
    {!! Form::close() !!}  

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
        @endforeach
    </table>   
@endsection

@section('footer')
copyright 2019 koyo
@endsectio