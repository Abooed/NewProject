@extends('layouts.admin')
@section('title')
    Update product Data
@endsection
@section('content')
<style>
    input{
        border: solid .5px rgb(75, 75, 110);
    }
    textarea{
        resize: none;
        border: solid .5px rgb(75, 75, 110);
    }
    form{
        font-size: large;
    }
    label{
        font-size: x-large;
    }
</style>
{{-- @if (isset($product)) --}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">product Id</th>
            <th scope="col">product Name</th>
            <th scope="col">product Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
    </thead>
    {{-- @isset($product)
    <form action="{{ route('update',[$product->id]) }}" method="POST">
        @method('PUT')
        <tbody>
            <tr>
                <th scope="row">{{ $product->id }} </th>
                <td>@csrf<input type="text" name="name" value="{{ $product->name }}"></td>
                <td>@csrf<textarea name="description" rows="4" cols="50">{{ $product->description }}</textarea></td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
            </td>
            </tr>
        </tbody>
    </form>
    @endisset --}}

    <form action="{{ route('update',[$product->id]) }}" method="POST">
        @method('PUT')
        <tbody>
            <tr>
                <th scope="row">{{ $product->id }} </th>
                <td>@csrf<input type="text" name="name" value="{{ $product->name }}"></td>
                <td>@csrf<textarea name="description" rows="4" cols="50">{{ $product->description }}</textarea></td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
            </td>
            </tr>
        </tbody>
    </form>
    {{-- @else --}}
        {{-- <label>Updated Successfully.</label> --}}
    {{-- @endif --}}
</table>
@endsection
