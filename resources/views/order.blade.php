@extends('layouts.admin')
@section('title')
    Tasks
@endsection
@section('content')
<div class="col-sm-offset-2 col-sm-8">

    <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                المهام الحالية
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
                        @foreach ($orders as $index => $order)
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
        </div>
</div>
@endsection
