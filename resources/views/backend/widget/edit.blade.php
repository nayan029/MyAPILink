@extends('backend.master')
@section('css')
<style>
    #widget-update input {
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
                    <h3 class="card-title">{{__("messages.widgetgroup.edit")}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::model($widget,['method' => 'PUT', 'route' => ['widget.update',$widget->id], 'files' => true,'id'=>'widget-update']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('slug','Select Widget') !!}
                                {!! Form::select('slug',$widgets,old('slug')?old('slug'):$widget->slug, ['class' => 'form-control', 'multiple' => false,'placeholder' => 'Please select widget','id'=>'slug']) !!}
                            </div>
                        </div>
                        <div class="col-md-4 slug">
                            <div class="form-group ">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter Description','id'=>'summernote']) !!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{__("messages.update")}}</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    @endsection
    @section('script')
    @section('script')
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! $validator->selector('#widget-update') !!}
    <script>
        $('#slug').on('change', function() {
            var slug = $('#slug').val();
            if (slug == 'how_it_works') {
                $('.slug').hide();
            } else {
                $('.slug').show();
            }
        });
    </script>
    @endsection