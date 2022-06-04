@extends('layouts.admin')

@section('content')
<br>
<br>
اسم المنتج: {{$product->name}}
<br>
<br>
الوصف:{{$product->description}}
@endsection
