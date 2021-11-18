<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0">Dashboard v3</h1> -->
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    
                    <?php $link = "";$active=""; ?>
                    @for($i = 1; $i <= count(Request::segments()); $i++)
                        @if($i < count(Request::segments()) & $i > 0)
                        @php 
                        $link .= "/" . (Request::segment($i));
                        $active = 'active';
                        @endphp
                        <li class="breadcrumb-item {{$active}}"><a href="<?= $link ?>"> {{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a></li>
                        @else  
                        <li class="breadcrumb-item"><a href="javascript:void(0);" style="color:#000;"> {{ ucwords(str_replace('-',' ',Request::segment($i))) }}</a></li>
                        
                        @endif
                    @endfor
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
