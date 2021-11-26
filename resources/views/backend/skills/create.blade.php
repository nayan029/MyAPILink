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
                    
                    </div>
                    <hr>
                    <br>
                    <div class="container">
                        <label>Add Position:</label>
                        <div class="row" id="sectionRows">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('position', 'Position') !!}
                                    {!! Form::text('position[]',null,['class' => 'form-control', 'placeholder' => 'Enter position','id'=>'position']) !!}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    {!! Form::label('title', 'Title') !!}
                                    {!! Form::text('title[]',null, ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                                </div>
                            </div>
                            <div class="col-md-1 mb-5">
                                <a href="javascript:void(0);" class="btn btn-success btn-xs" id="addNewRow"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('desc', 'Description') !!}
                                    {!! Form::textarea('descs[]',null, ['class' => 'form-control summernote', 'placeholder' => 'Enter desc','id'=>'desc']) !!}
                                </div>
                            </div>
                          
                        <div id="appendNrerow">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr</th>
                                        <th>Position</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="skillbody">

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="edit">Save</button>
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
    var id=1;

    $(document).on('click', "#addNewRow", function() {
        /*var newRowCloned = $('#sectionRows').last().clone();
        newRowCloned.show();*/
        var position = $('#position').val();
        var title = $('#title').val();
        var desc = $("#desc").val();
        var html = "<tr><td>"+i+"</td><td><input type='hidden' name='position[]' pos-value='" + position + "'>" + position + "</td><td><input type='hidden' name='title[]' title-value='" + title + "'>" + title + "</td><td><input type='hidden' name='desc[]' value='" + desc + "'>" + desc + "</td><td><a href='#' onclick='edit("+id+","+position+","+title+","+desc+")'><i class='fas fa-edit'></i></a></td></tr>";
        i++;
        $("#skillbody").append(html);
    });
  
    $(document).on('click', ".removeRow", function() {
        var self = $(this);
        self.parents(".newRowTemplate").remove();
    });

    function edit(id, position, title,desc) {
        $('#position').val(position);
        $('#title').val(title);
        $("#desc").val(desc);
    }
    $("body").on("click", "#edit", function() {


    });
</script>

@endsection