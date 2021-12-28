@extends('backend.master')
@section('css')
<style>
    #skill-add input {
        width: 100%;
    }

    .error {
        color: red;
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
                    <h3 class="card-title">{{__("messages.skillgroup.create")}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['method' => 'POST', 'route' => ['skill.store'], 'files' => true,'id'=>'skill-add']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 hideshow">
                            <div class="form-group">
                                {!! Form::label('name', 'Name') !!} <span class="text-danger">*</span>
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Name','id'=>'name']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!} <span class="text-danger">*</span>
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter Description','id'=>'summernote']) !!}
                            </div>
                        </div>

                    </div>
                    <hr>
                    <br>
                    <label>Add Position:</label>
                    <div class="row" id="sectionRows">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('position', 'Position') !!} <span class="text-danger">*</span>
                                {!! Form::text('',null,['class' => 'form-control', 'placeholder' => 'Enter position','id'=>'position']) !!}
                                <div class="error"><span class="poserror"></span></div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!} <span class="text-danger">*</span>
                                {!! Form::text('',null, ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                                <div class="error"><span class="titerror"></span></div>
                            </div>
                        </div>
                        <div style="margin-bottom :50px;">
                            <a href="javascript:void(0);" class="btn btn-success btn-xs mt-4" onclick="return validation();" id="addNewRow"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('desc', 'Description') !!} <span class="text-danger">*</span>
                        {!! Form::textarea('',null, ['class' => 'form-control ', 'placeholder' => 'Enter description','id'=>'desc']) !!}
                        <div class="error"><span class="descerror"></span></div>
                    </div>
                </div>

                <div class="container">
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
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{__("messages.save")}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    $(function() {
        $('.summernote').summernote();
    });
    function validation() {
        var temp = 0;
        var number = /([0-9])/;
        var position = $('#position').val();
        $('.poserror').html('');


        if (position.match(number)) {
            $('.poserror').html("Numbers not allowed.");
            temp++
        } else {
            if (position.length > 25) {
                $('.poserror').html("Position must not be grater than 25 characters.");
                temp++
            } else {
                if (position == "") {
                    $('.poserror').html("Please enter your Position");
                    temp++
                }
            }
        }

        var number = /([0-9])/;
        var title = $('#title').val();
        $('.titerror').html('');
        if (title.match(number)) {
            $('.titerror').html("Numbers not allowed.");
            temp++
        } else {
            if (title.length > 25) {
                $('.titerror').html("Title must not be grater than 25 characters.");
                temp++
            } else {
                if (title == "") {
                    $('.titerror').html("Please enter your Title");
                    temp++
                }
            }
        }

        var desc = $('#desc').val();
        if (desc == "") {
            $('.descerror').html("Please enter your Description");
            temp++
        } else {
            $('.descerror').html("");
        }


        if (temp == 0) {
            $(document).on('click', "#addNewRow", function() {

                $('.btn-save').hide();
                /*var newRowCloned = $('#sectionRows').last().clone();
                newRowCloned.show();*/
                var position = $('#position').val();
                var title = $('#title').val();

                var desc = $("#desc").val();

                var html = "<tr row_id='" + id + "'><td>" + id + "</td><td><input type='hidden' name='position[]' value='" + position + "'/>" + position + "</td><td><input type='hidden' name='title[]' value='" + title + "'/>" + title + "</td><td><input type='hidden' name='descs[]' value='" + desc + "'/>" + desc + "</td><td><a href='javascript:void(0);' row_id='" + id + "' class='btn edit_row'><i class='fas fa-edit'></i></a><a href='javascript:void(0);' class='btn btn-save' row_id='" + id + "'> <i class='fas fa-save text-success'></i></a><a href='javascript:void(0);' class='btn removeRow'  row_id='" + id + "'> <i class='fas fa-trash-alt text-danger'></i></a></td></tr>";
                id++;
                $("#skillbody").append(html);

                $('#position').val('');
                $('#title').val('');
                $("#desc").val('');
            });
        } else {
            return false;
        }
    }

    var id = 1;


    $(document).on('click', ".edit_row", function() {
        $('.btn-save').show();
        var tbl_row = $(this).closest('tr');
        var row_id = tbl_row.attr('row_id');

        var pos = tbl_row.find("td:eq(1)").text();
        var tit = tbl_row.find("td:eq(2)").text();
        var des = tbl_row.find("td:eq(3)").text();

        $('#position').val(pos);
        $('#title').val(tit);
        $('#desc').val(des);

    });
    $(document).on('click', ".btn-save", function() {

        var p = $('#position').val();
        var t = $('#title').val();
        var d = $('#desc').val();

        var tbl_row = $(this).closest('tr');
        var row_id = tbl_row.attr('row_id');

        var pos = tbl_row.find("td:eq(1)").text(p);
        var tit = tbl_row.find("td:eq(2)").text(t);
        var des = tbl_row.find("td:eq(3)").text(d);

    });


    $(document).on('click', ".removeRow", function() {
        var tbl_row = $(this).closest('tr');
        var row_id = tbl_row.attr('row_id');
        $("*[row_id=" + row_id + "]").remove();
    });
</script>

@endsection