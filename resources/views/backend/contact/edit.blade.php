@extends('backend.master')
@section('css')

@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{__("messages.edit")}}</h3>
                </div>


                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::model($contact,['method' => 'POST', 'route' => ['contact.update',1], 'files' => true,'id'=>'contact-update']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('email', 'Email ') !!} <span class="text-danger">*</span>
                                {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter Email','id'=>'email']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('facebook_link', 'Facebook Link') !!}
                                {!! Form::text('facebook_link', old('facebook_link'), ['class' => 'form-control', 'placeholder' => 'Enter Facebook Link','id'=>'facebook_link']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('twitter_link', 'Twitter Link') !!}
                                {!! Form::text('twitter_link', old('twitter_link'), ['class' => 'form-control', 'placeholder' => 'Enter Twitter Link','id'=>'twitter_link']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Address') !!}<span class="text-danger">*</span>
                                {!! Form::textarea('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Enter Address','id'=>'address']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('mobile', 'Mobile ') !!}<span class="text-danger">*</span>
                                {!! Form::text('mobile', old('mobile'), ['class' => 'form-control', 'placeholder' => 'Enter Mobile','id'=>'mobile']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('youtube_link', 'Youtube Link') !!}
                                {!! Form::text('youtube_link', old('youtube_link'), ['class' => 'form-control', 'placeholder' => 'Enter Youtube Link','id'=>'youtube_link']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('instagram_link', 'Instagram Link') !!}
                                {!! Form::text('instagram_link', old('instagram_link'), ['class' => 'form-control', 'placeholder' => 'Enter Instagram Link','id'=>'instagram_link']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('linkedin_link', ' Linkedin Link') !!}
                                {!! Form::text('linkedin_link', old('linkedin_link'), ['class' => 'form-control', 'placeholder' => 'Enter Linkedin Link','id'=>'linkedin_link']) !!}
                            </div>
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
@endsection

@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#contact-update') !!}

<script>
    
    $('#address').keypress(function() {
        var address =  $("#address").val();
     if(address == "")
     {
         $('#address').removeClass('is-valid');
         //$(this).attr('aria-invalid',true);
         $('#address').addClass('is-invalid');
         $('#address').attr('aria-invalid',true);
     }
});
</script>
@endsection