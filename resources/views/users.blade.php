@extends('layouts.admin')
@section('title')
    المستخدمين
@endsection
@section('content')
<div class="col-sm-offset-2 col-sm-8">

    <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                المستخدمين
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th> الإسم المستخدم</th>
                        <th>البريد الإكتروني</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="table-text"><div>{{ $user->name }}</div></td>
                            <td class="table-text"><div>{{ $user->email }}</div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
