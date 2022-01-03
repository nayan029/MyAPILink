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
                                <span class="slug-error text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4 hideshow">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}<span class="text-danger">*</span>
                                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                                <span class="title-error text-danger"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}<span class="text-danger">*</span>
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                                <span class="image-error text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mr-9">
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter Description','id'=>'summernote']) !!}
                            <span class="description-error text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" id="validate" onclick="return validation();" class="btn btn-primary">{{__("messages.save")}}</button>
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

<script>
    $('#slug').on('change', function() {
        var slug = $(this).val();
        if (slug == 'how_it_works') {
            $('.hideshow').hide();
        } else {
            $('.hideshow').show();
        }
    });

    function validation() {
        var temp = 0;
        var number = /([0-9])/;

        var widget = $('#slug').val();
        var title = $('#title').val();
        var image = $('#image').val();

        if (widget == "") {
            $('.slug-error').html("Please enter Widget");
            temp++
        } else {
            $('.slug-error').html('');
        }


        $('.title-error').html('');
        if (widget != "how_it_works") {
            if (title.match(number)) {
                $('.title-error').html("Numbers not allowed.");
                temp++
            } else {
                if (title.length > 25) {
                    $('.title-error').html("Title must not be grater than 25 characters.");
                    temp++
                } else {
                    if (title == "") {
                        $('.title-error').html("Please enter your Title");
                        temp++
                    }
                }
            }
        }

        var fuData = document.getElementById('image'); // CHOICE FILE (IMAGE) VILADITION 
        var FileUploadPath = fuData.value;
        if (FileUploadPath == '') {
            $('.image-error').html('Please enter a image');
            temp++;
        } else {
            var Extension = FileUploadPath.substring(
                FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

            if (Extension == "png" || Extension == "jpeg" || Extension == "jpg" || Extension == "gif" || Extension == "svg") {
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {}
                    reader.readAsDataURL(fuData.files[0]);
                }
            } else {
                $('.image-error').html('File must Image!! Like:jpeg, png, jpg, gif, svg.');
                temp++
            }
        }

        if (temp == 0) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection