@extends('backend.master')
@section('css')
<style>
    #skill-add input {
        width: 100%;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create skill</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['method' => 'POST', 'route' => ['skill.store'], 'files' => true,'id'=>'skill-add']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 hideshow">
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Name','id'=>'name']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter Description','id'=>'summernote']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('my-checkbox', 'Status') !!}
                                {!! Form::checkbox('status', '1', true , ['id' => 'status', 'name' => 'status', 'data-bootstrap-switch','data-off-color' => 'danger','data-on-color'=>'success','checked']) !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="container">
                        <label>Add Position:</label>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('position', 'Position') !!}
                                    {!! Form::text('position', old('position'), ['class' => 'form-control', 'placeholder' => 'Enter position','id'=>'position']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('title', 'Title') !!}
                                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                                </div>
                            </div>
                            <div class="col-md-4" id="sectionRows">
                                <div class="form-group">
                                    {!! Form::label('description', 'Description') !!}
                                    {!! Form::textarea('description', old('description'), ['class' => 'form-control summernote', 'placeholder' => 'Enter Description']) !!}
                                </div>
                            </div>
                            <div class="col-md-1 mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group" style="display: none;">
                                        <label class="az-content-label tx-11 tx-medium tx-gray-600">Section Name:</label>
                                        {!! Form::text('sections[]', null, ['class'=>'form-control', 'data-validation' => 'required', 'placeholder' => "Enter Section Name"]) !!}
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-success btn-xs" id="addNewRow"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="row row-xs newRowTemplate" style="display: none;">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::text('sections[]', null, ['class'=>'form-control', 'data-validation' => 'required', 'placeholder' => "Enter Section Name"]) !!}
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <a href="javascript:;" class="btn btn-danger btn-sm removeRow">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->


    <!-- /.card -->
</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#skill-add') !!}
<script>
    $(function() {
        $('.summernote').summernote();
    });
    $(document).on('click', "#addNewRow", function() {
        var newRowCloned = $('.newRowTemplate').last().clone();
        newRowCloned.show();
        $("#sectionRows").append(newRowCloned);
    });
</script>

@endsection