@extends('backend.master')
@section('css')
<style>
    #partner-add input {
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
                    <h3 class="card-title">{{__("messages.partnergroup.create")}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['method' => 'POST', 'route' => ['partner.store'], 'files' => true,'id'=>'partner-add']) !!}
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="container">
                                {!! Form::label('image', 'Image') !!}<span class="text-danger">*</span>
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                                <span class="image-error text-danger"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('link', 'Link') !!}<span class="text-danger">*</span>
                                {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => 'Enter Link','id'=>'link']) !!}
                                <span class="link-error text-danger"></span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" onclick="return validation();">{{__("messages.save")}}</button>
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
    function validation(){
        var temp = 0;
        var linkverify = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
        var link = $('#link').val();
      
        $('.link-error').html('');
        if (link == "") {
            $('.link-error').html("Please enter Link");
            temp++
        }else{
            if(!link.match(linkverify)){
            $('.link-error').html("Please enter Valid Link");
              temp++
            }
        }
        

        $('.image-error').html('');
        var fuData = document.getElementById('image');      // CHOICE FILE (IMAGE) VILADITION 
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
                            reader.onload = function(e) {  }
                            reader.readAsDataURL(fuData.files[0]);
                        }
                    }else {
                        $('.image-error').html('File must Image!! Like:jpeg, png, jpg, gif, svg');   
                          temp++;
            }
        }

        if(temp == 0){
            return true;
        }else{
            return false;
        }
    }
</script>

@endsection