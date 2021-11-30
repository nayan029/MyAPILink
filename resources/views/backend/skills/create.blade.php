@extends('backend.master')
@section('css')
<style>
    #skill-add input {
        width: 100%;
    }

    span {
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
                        <div class="col-md-12">
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

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save</button>
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

    var id = 1;
   
    $(document).on('click', "#addNewRow", function() {
      
        /*var newRowCloned = $('#sectionRows').last().clone();
        newRowCloned.show();*/
        var position = $('#position').val();
        var title = $('#title').val();

        var desc = $("#desc").val();

        var html = "<tr row_id='" + id + "'><td>" + id + "</td><td><input type='hidden' class='row_data' name='position[]' edit_type='click' value='" + position + "'/>" + position + "</td><td><input type='hidden' class='row_data' edit_type='click' name='title[]' value='" + title + "'/>" + title + "</td><td><input type='hidden'class='row_data' edit_type='click' name='descs[]' value='" + desc + "'/>" + desc + "</td><td><a href='#' row_id='" + id + "' class='edit_row'><i class='fas fa-edit'></i></a><a href='#' class='btn btn-save' row_id='" + id + "'> Save</a><a href='#' class='btn btn-cancel'  row_id='" + id + "'> cancel</a></td></tr>";
        id++;



        $("#skillbody").append(html);
        
	    $('.btn_save').hide();
	    $('.btn_cancel').hide(); 
        $('#position').val('');
        $('#title').val('');
        $("#desc").val('');
    });

    $(document).on('click', '.row_data', function(event) 
{

	event.preventDefault(); 

	if($(this).attr('edit_type') == 'button')
	{
		return false; 
	}

	//make div editable
	$(this).closest('input').attr('contenteditable', 'true');
	//add bg css
	$(this).addClass('bg-warning').css('padding','5px');

	$(this).focus();
})	
    $(document).on('click', ".edit_row", function() {
        event.preventDefault();

        var tbl_row = $(this).closest('tr');
        var row_id = tbl_row.attr('row_id');
        tbl_row.find('.btn_save').show();
        tbl_row.find('.btn_cancel').show();
        tbl_row.find('.edit_row').hide();

        tbl_row.find('.row_data')
		.attr('contenteditable', 'true')
		.attr('edit_type', 'button')
		.addClass('bg-warning')
		.css('padding','3px')

        tbl_row.find('.row_data').each(function(index, val) 
		{   
			$(this).html( $(this).attr('original_entry') ); 
		});  



    });
    $(document).on('click', '.btn_cancel', function(event) 
{
	event.preventDefault();

	var tbl_row = $(this).closest('tr');

	var row_id = tbl_row.attr('row_id');

	//hide save and cacel buttons
	tbl_row.find('.btn_save').hide();
	tbl_row.find('.btn_cancel').hide();

	//show edit button
	tbl_row.find('.btn_edit').show();

	//make the whole row editable
	tbl_row.find('.row_data')
	.attr('edit_type', 'click')	 
	.removeClass('bg-warning')
	.css('padding','') 

	tbl_row.find('.row_data').each(function(index, val) 
	{   
		$(this).html( $(this).attr('original_entry') ); 
	});  
});



    $(document).on('click', ".removeRow", function() {
        var self = $(this);
        self.parents(".newRowTemplate").remove();
    });
</script>

@endsection