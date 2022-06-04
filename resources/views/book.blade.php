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
                        <th>الإسم</th>
                        <th>رقم الجوال</th>
                        <th>البريد الإكتروني</th>
                    </thead>
                    <tbody>
                        @foreach ($books as $index => $book)
                        <tr>
                            <td class="table-text"><div>{{ $book->name }}</div></td>
                            <td class="table-text"><div>{{ $book->phone }}</div></td>
                            <td class="table-text"><div>{{ $book->email }}</div></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
