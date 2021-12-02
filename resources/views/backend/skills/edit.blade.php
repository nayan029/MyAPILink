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
                    <h3 class="card-title">Edit Skill</h3>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}
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
                    <div class="row" id="sectionRows">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('position', 'Position') !!}
                                {!! Form::text('',null,['class' => 'form-control', 'placeholder' => 'Enter position','id'=>'position']) !!}
                                <span class="poserror"></span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('',null, ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                                <span class="titerror"></span>
                            </div>
                        </div>
                        <div class="col-md-1 mb-5">
                            <a href="javascript:void(0);" class="btn btn-success btn-xs" onclick="return validation();" id="addNewRow"><i class="fa fa-plus"></i></a>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('desc', 'Description') !!}
                            {!! Form::textarea('',null, ['class' => 'form-control ', 'placeholder' => 'Enter desc','id'=>'desc']) !!}
                            <span class="descerror"></span>
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
                                @if($skill_position)
                                @foreach($skill_position as $key=>$sk)
                                <tr row_id="{{$key+1}}">
                                    <td>{{$key+1}}</td>
                                    <td class="xyz">{{$sk->position}}<input type="hidden" class="position" name="position[]" value="{{$sk->position}}"></td>
                                    <td>{{$sk->title}}<input type="hidden" class="title" name="title[]" value="{{$sk->title}}"></td>
                                    <td>{{$sk->desc}}<input type="hidden" class="desc" name="descs[]" value="{{$sk->desc}}"></td>
                                    <td><a href='javascript:void(0);' class="edit_row" row_id="{{$key+1}}"><i class='fas fa-edit'></i></a>
                                        <a href='javascript:void(0);' class="btn btn-save" data-id="{{$sk->id}}" row_id="{{$key+1}}"><i class="fas fa-save text-success"></i></i></a>
                                        <a href='javascript:void(0);' class="btn btn-cancel" row_id="{{$key+1}}"><i class="fas fa-trash-alt text-danger"></i></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>No Data Found</tr>
                                @endif
                            </tbody>

                        </table>

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
    <script>
        // var getAllData = '{{$skill_position}}';
        // getAllData = getAllData.replace(/&quot;/gi, "\"");
        // getAllData = getAllData.replace(/\[/gi, "");
        // getAllData = getAllData.replace(/\]/gi, "");
        // getAllData = getAllData.split(',');

        var id = '{{count($skill_position)+1}}';
        $(function() {
            $('.summernote').summernote();
        });

        function validation() {
            var temp = 0;

            var position = $('#position').val();
            if (position == "") {
                $('.poserror').html("*please enter your position");
                temp++
            } else {
                $('.poserror').html("");

            }

            var position = $('#title').val();
            if (position == "") {
                $('.titerror').html("*please enter your position");
                temp++
            } else {
                $('.titerror').html("");
            }

            var position = $('#desc').val();
            if (position == "") {
                $('.descerror').html("*please enter your position");
                temp++
            } else {
                $('.descerror').html("");

            }

            if (temp == 0) {
                return true;
            } else {
                return false;
            }
        }

        function updateSkillPostionData(p, t, d, id) {
            
            console.log(pos)
            console.log(tit)
            console.log(des)
            console.log(id)

            var path = 'skill/' + id;
            var fullPath = AppUrl + '/' + path;
            $.ajax({
                type: "PUT",
                url: fullPath,
                data: {
                    _token: '{{ csrf_token() }}',
                    'id': id,
                    'pos': pos,
                },
                success: function(response) {
                    if (response.status == true) {

                        toastr.success(response.msg);
                    }
                }
            });
        }



        $(document).on('click', "#addNewRow", function() {
            var position = $('#position').val();
            var title = $('#title').val();
            var desc = $("#desc").val();
            loadPosition(id, position, title, desc);
        });

        function loadPosition(id, position, title, desc) {
            var html = "<tr row_id='" + id + "'><td>" + id + "</td><td><input type='hidden' name='position[]' value='" + position + "'/>" + position + "</td><td><input type='hidden' name='title[]' value='" + title + "'/>" + title + "</td><td><input type='hidden' name='descs[]' value='" + desc + "'/>" + desc + "</td><td><a href='javascript:void(0);' row_id='" + id + "' class='edit_row'><i class='fas fa-edit'></i></a><a href='javascript:void(0);' class='btn btn-save' row_id='" + id + "'> Save</a><a href='javascript:void(0);' class='btn removeRow'  row_id='" + id + "'> Delete</a></td></tr>";
            id++;

            $("#skillbody").append(html);
            $('#position').val('');
            $('#title').val('');
            $("#desc").val('');
        }
        $(document).on('click', ".edit_row", function() {
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

            var position = $('.position').val(p);
            var title = $('.title').val(t);
            var description = $('.desc').val(d);
            var id = $(this).attr("data-id");
            updateSkillPostionData(p, t, d, id);

        });

       


        $(document).on('click', ".removeRow", function() {
            var self = $(this);
            self.parents("#skillbody").remove();
        });
    </script>

    @endsection