@extends('backend.master')
@section('css')
<style>
    #widget-add input {
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
                    <h3 class="card-title">{{__("messages.widgetgroup.create")}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['method' => 'POST', 'route' => ['widget.store'], 'files' => true,'id'=>'widget-add']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('slug','Widget') !!} <span class="text-danger">*</span>
                                {!! Form::select('widget',$widget, old('widget'), ['class' => 'form-control custom-select', 'multiple' => false,'placeholder' => 'Please select widget','id'=>'slug']) !!}
                            </div>
                        </div>
                        <div class="col-md-4 hideshow">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}<span class="text-danger">*</span>
                                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}<span class="text-danger">*</span>
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="mr-9">
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter Description','id'=>'summernote']) !!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{__("messages.save")}}</button>
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
{!! $validator->selector('#widget-add') !!}
<script>
    $('#slug').on('change', function() {
        var slug = $(this).val();
        if (slug == 'how_it_works') {
            $('.hideshow').hide();
        } else {
            $('.hideshow').show();
        }
    });
</script>
@endsection