@extends('backend.master')
@section('css')
<style>
    #widget-update input {
        width: 100%;
    }

.fileinput {
    width: 70%;
    display: inline-block;
}

label.tt {
    width: 100%;
}

img.img-fluid.setimg {
    border: 1px solid #007bff;
    padding: 7px;
    border-radius: 100%;
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
                                {!! Form::label('slug','Widget') !!}<span class="text-danger">*</span>
                                {!! Form::select('widget',$widgets,old('widget')?old('widget'):$widget->slug, ['class' => 'form-control custom-select', 'multiple' => false,'placeholder' => 'Please select Widget','id'=>'slug']) !!}
                            </div>
                        </div>
                        <div class="col-md-4 slug hideshow">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}<span class="text-danger">*</span>
                                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image" class="tt">Image <span class="text-danger">*</span></label>
                                <div class="fileinput">
                                    {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                                </div>
                                <div class="img-fluid" style="display: inline-block;text-align: center;"><img src="{{ asset($widget->image) }}" class="img-fluid setimg" height="50px" width="50px"></div>
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
                    <button type="submit" class="btn btn-primary">{{__("messages.update")}}</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
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
    var val = $('#slug option:selected').val();
    if (val == "how_it_works") {
        $('.hideshow').hide();
    } else {
        $('.hideshow').show();
    }


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