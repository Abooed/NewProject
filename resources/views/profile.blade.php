@extends('layouts.app')
@section('title')
    Tasks
@endsection
@section('content')
<br>
<br>
<br>
<div class="col-sm-offset-2 col-sm-8">

    <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                الطلبات الحالية
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th> الإسم المستخدم</th>
                        <th>البريد الإكتروني</th>
                        <th> اسم المنتج </th>
                        <th> وصف المنتج </th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td class="table-text"><div>{{ $order->user->name }}</div></td>
                            <td class="table-text"><div>{{ $order->user->email }}</div></td>
                            <td class="table-text"><div>{{ $order->product->name }}</div></td>
                            <td class="table-text"><div>{{ $order->product->description }}</div></td>
                            <td>
                                <form action="{{route('destroyOrder',$order->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
               تسجيل الخروج
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                class="d-none">
                @csrf
            </form>
        </div>
</div>
<br>
<br>
<br>

@endsection
