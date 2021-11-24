@extends('backend.master')
@section('css')
<style>
    #skill-update input {
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
                    <h3 class="card-title">Edit widget</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::model($skill,['method' => 'PUT', 'route' => ['skill.update',$skill->id], 'files' => true,'id'=>'skill-update']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 slug">
                            <div class="form-group ">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Name','id'=>'name']) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter Description','id'=>'summernote']) !!}
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                            </div>
                        </div>     
                        <div class="col-md-6">
                            <div class="form-group">
                            {!! Form::label('my-checkbox', 'Status') !!}
                            {!! Form::checkbox('status', '1', true  , ['id' => 'status', 'name' => 'status', 'data-bootstrap-switch','data-off-color' => 'danger','data-on-color'=>'success','checked']) !!}
                            </div>
                        </div>            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.card -->
        </div>
    </div>

    @endsection
    @section('script')
    @section('script')
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! $validator->selector('#skill-update') !!}
    @endsection