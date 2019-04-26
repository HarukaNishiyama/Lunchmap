@extends('layout')

@section('content')
  <h1>新しいお店</h1>
  {{Form::open(['route'=>'shop.store'])}}
  <div class="">
    {{Form::label('name','店名：')}}
    {{From::text('name',null)}}
  </div>
  <div class="">
    {{Form::label('address','住所：')}}
    {{From::text('address',null)}}
  </div>
  <div class="">
    {{Form::label('category_id','カテゴリ：')}}
    {{From::select('category_id',$categories)}}
  </div>
  <div class="">
    {{Form::submit('作成する',['class'=>'btn btn-primary'])}}
  </div> 
  {{Form::close()}}
  <div>
    <a href="{{ route('shop.list') }}">一覧に戻る</a>
  </div>
@endsection