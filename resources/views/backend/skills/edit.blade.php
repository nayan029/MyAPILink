@extends('backend.master')
@section('css')
<style>
    #skill-update input {
        width: 100%;
    }

    .selected {
        color: red;
        background-color: yellow;
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
                    <h3 class="card-title">{{__("messages.skillgroup.edit")}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::model($skill,['method' => 'PUT', 'name'=>'form','route' => ['skill.update',$skill->id], 'files' => true,'id'=>'skill-update']) !!}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 slug">
                            <div class="form-group ">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Name','id'=>'name']) !!}
                                <div class="error"><span class="nameerror"></span></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Image') !!}
                                {!! Form::file('image', old('image'), ['class' => 'form-control','id'=>'image','onchange'=>'checkextension()']) !!}
                                <div class="error"><span class="imageerror checkimg" data-img="{{$skill->image}}"></span></div>
                                &nbsp;&nbsp; <img src="{{ asset($skill->image) }}" height="50px" width="50px" />
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
                                {!! Form::text('',null,['class' => 'form-control', 'placeholder' => 'Enter Position','id'=>'position']) !!}
                                <span class="error poserror"></span>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('',null, ['class' => 'form-control', 'placeholder' => 'Enter Title','id'=>'title']) !!}
                                <span class="error titerror"></span>
                            </div>
                        </div>
                        <div class="col-md-1 mb-5">
                            <a href="javascript:void(0);" class="btn btn-success btn-xs" onclick="return validation();" id="addNewRow"><i class="fa fa-plus"></i></a>
                        </div>

                    </div>

                    <div class="">
                        <div class="form-group">
                            {!! Form::label('desc', 'Description') !!}
                            {!! Form::textarea('',null, ['class' => 'form-control ', 'placeholder' => 'Enter Description','id'=>'desc']) !!}
                            <span class="error descerror"></span>
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
                                    <td id="position{{$key+1}}">{{$sk->position}}<input type="hidden" class="position" name="position[]" value="{{$sk->position}}"></td>
                                    <td id="title{{$key+1}}">{{$sk->title}}<input type="hidden" class="title" name="title[]" value="{{$sk->title}}"></td>
                                    <td id="desc{{$key+1}}">{{$sk->desc}}<input type="hidden" class="desc" name="descs[]" value="{{$sk->desc}}"></td>
                                    <td><a href='javascript:void(0);' class="btn edit_row" row_id="{{$key+1}}"><i class='fas fa-edit' title="Edit"></i></a>
                                        <a href='javascript:void(0);' class="btn btn-save" title="Save" data-id="{{$sk->id}}" row_id="{{$key+1}}"><i class="fas fa-save text-success mb-1"></i></a>
                                        <a href='javascript:void(0);' class="btn btn delete" title="Delete" remove-id="{{$sk->id}}" row_id="{{$key+1}}"><i class="fas fa-trash-alt text-danger"></i></a>
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
                    <button type="submit" onclick="return skillvalidation();" class="btn btn-primary">{{__("messages.update")}}</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.card -->
        </div>
    </div>
    @endsection
    @section('script')
    @section('script')
    <script>
        // var getAllData = '{{$skill_position}}';
        // getAllData = getAllData.replace(/&quot;/gi, "\"");
        // getAllData = getAllData.replace(/\[/gi, "");
        // getAllData = getAllData.replace(/\]/gi, "");
        // getAllData = getAllData.split(',');

        $('.btn-save').hide();
        var id = '{{count($skill_position)+1}}';
        $(function() {
            $('.summernote').summernote();
        });

        function skillvalidation() {
            var temp = 0;
            var number = /([0-9])/;
            var name = $('#name').val();
            var image = $('#image').val();

            $('.nameerror').html('');
            if (name.match(number)) {
                $('.nameerror').html("Numbers not allowed.");
                temp++
            } else {
                if (name.length > 50) {
                    $('.nameerror').html("Name must not be grater than 50 characters.");
                    temp++
                } else {
                    if (name == "") {
                        $('.nameerror').html("Please enter Name");
                        temp++
                    }
                }
            }

            if(image){
                var fuData = document.getElementById('image'); // CHOICE FILE (IMAGE) VILADITION 
                var FileUploadPath = fuData.value;
                if (FileUploadPath == '') {
                    $('.imageerror').html('Please enter a Image');
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
                        $('.imageerror').html('File must Image!! Like:jpeg, png, jpg, gif, svg');
                        temp++;
                    }
                }
            } else {
                $('.imageerror').html('');
            }

            if (temp == 0) {
                return true;
            } else {
                return false;
            }
        }

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
                    var position = $('#position').val();
                    var title = $('#title').val();
                    var desc = $("#desc").val();
                    loadPosition(id, position, title, desc);
                });

                function loadPosition(id, position, title, desc) {
                    var html = "<tr row_id='" + id + "'><td>" + id + "</td><td><input type='hidden' name='position[]' value='" + position + "'/>" + position + "</td><td><input type='hidden' name='title[]' value='" + title + "'/>" + title + "</td><td><input type='hidden' name='descs[]' value='" + desc + "'/>" + desc + "</td><td><a href='javascript:void(0);' row_id='" + id + "' class='btn edit_row' title='Edit'><i class='fas fa-edit'></i></a><a href='javascript:void(0);' class='btn btn-save' row_id='" + id + "' title='Save'><i class='fas fa-save text-success'></i></a><a href='javascript:void(0);' class='btn removeRow' title='Delete' row_id='" + id + "'><i class='fas fa-trash-alt text-danger'></i></a></td></tr>";
                    id++;

                    $("#skillbody").append(html);
                    $('#position').val('');
                    $('#title').val('');
                    $("#desc").val('');
                }
            } else {
                return false;
            }
        }

        function updateSkillPostionData(position, t, d, id) {

            var path = 'skill/' + id;
            var fullPath = AppUrl + '/' + path;
            $.ajax({
                type: "PUT",
                url: fullPath,
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    p: p,
                    t: t,
                    d: d,
                },
                success: function(response) {
                    if (response.status == true) {

                        toastr.success(response.msg);
                    }
                }
            });
        }
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

            var position = $('#position' + row_id).html(p + '<input type="hidden"  class="position" name="position[]" value="' + p + '">');

            var title = $('#title' + row_id).html(t + '<input type="hidden"  class="title" name="title[]" value="' + t + '">');

            var description = $('#desc' + row_id).html(d + '<input type="hidden"  class="desc" name="descs[]" value="' + d + '">');

            /*  var position = $('.position').val(p);
            var title = $('.title').val(t);
            var description = $('.desc').val(d);*/
            var id = $(this).attr("data-id");
            updateSkillPostionData(position, title, description, id);

        });
        $(document).on('click', ".delete", function() {
            var p = $('#position').val();
            var t = $('#title').val();
            var d = $('#desc').val();

            var tbl_row = $(this).closest('tr');
            var row_id = tbl_row.attr('row_id');
            var deleteId = $(this).attr('remove-id');

            deleteSkillPostionData(deleteId);

        });

        function deleteSkillPostionData(deleteId) {
            var url = "{{route('destroy.position')}}";

            $.ajax({
                type: "POST",
                url: url,
                data: {
                    _token: '{{ csrf_token() }}',
                    deleteId: deleteId,
                },
                success: function(response) {
                    if (response.status == true) {
                        var tbl_row = $('.edit_row').closest('tr');
                        var row_id = tbl_row.attr('row_id');
                        $(row_id).remove();
                        toastr.success(response.msg);
                    }
                }
            });
        }
    </script>
    <script>
        function checkextension() {
            var file = document.querySelector("#image");
            alert(file);
            if (/\.(jpe?g|png|gif)$/i.test(file.files[0].name) === false) {
                alert("not an image!");
            }
        }
    </script>

    @endsection