@extends('backend.master')
@section('css')
<style>
    #partner-update input {
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
                    <h3 class="card-title">{{__("messages.partnergroup.edit")}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                {!! Form::model($partner,['method' => 'PUT', 'route' => ['partner.update',$partner->id], 'files' => true,'id'=>'partner-update']) !!}

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="container">
                                {!! Form::label('image', 'Image') !!}<span class="text-danger">*</span>

                                {!! Form::file('image', ['id' => 'image', 'name' => 'image', 'class' => 'file']) !!}
                                &nbsp;&nbsp;
                                <div>
                                    <img src="{{ asset($partner->image) }}" height="50px" width="50px"/>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('link', 'Link') !!}<span class="text-danger">*</span>
                                {!! Form::text('link', old('link'), ['class' => 'form-control', 'placeholder' => 'Enter Link','id'=>'link']) !!}
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


<!-- /.card -->
</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! $validator->selector('#partner-update') !!}
{!! $image->selector('#partner-update') !!}

@endsection