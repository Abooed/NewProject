@extends('layouts.admin')
@section('title')
    Tasks
@endsection
@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">

        <div class="panel-body">
               <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">

            <a href="{{route('create')}}" class="btn btn-success">
                  اضافة
            </a>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>المنتج</th>
                        <th>الوصف</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($products as  $product)
                        <tr>
                            <td class="table-text"><div>{{ $product->name }}</div></td>
                            <td class="table-text"><div>{{ $product->description }}</div></td>

                            <!-- Task Show Button -->
                            <td>

                                    <a href="{{route('show',$product->id)}}" class="btn btn-info">
                                        {{-- <i class="fa fa-btn fa-trash"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
                                            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                                            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                                            <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1Z"/>
                                        </svg> Show
                                    </a>
                            </td>

                            <!-- Task Update Button -->
                            <td>
                                <form action="{{route('updatedata',$product->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        {{-- <i class="fa fa-btn fa-info"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg> Update
                                    </button>
                                </form>
                            </td>

                            <!-- Task Delete Button -->
                            <td>
                                <form action="{{route('destroy',$product->id)}}" method="POST">
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
    </div>


</div>
@endsection
