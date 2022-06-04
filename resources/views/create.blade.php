@extends('layouts.admin')
@section('title')
    Tasks
@endsection
@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            مهمة جديدة
        </div>

        <div class="panel-body">
            <!-- Display Validation Errors -->
            <!-- New Task Form -->
            <form action="store" method="POST" class="form-horizontal"  enctype="multipart/form-data">
                @csrf
                <!-- Task Name -->
                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">الإسم</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control" value="">

                    </div>
                    <label for="task-name" class="col-sm-3 control-label">العنوان</label>

                    <div class="col-sm-6">
                        <input type="text" name="description" id="task-name" class="form-control" value="">
                    </div>
                    <label for="task-name" class="col-sm-3 control-label">العنوان</label>

                    <div class="col-sm-6">
                        <input type="file" name="image" id="task-name" class="form-control">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>اضافة منتجات
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
@endsection
