@extends('layouts.app')

@push('page-css')
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@endpush


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-8 offset-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filepath">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
        </div>
    </div>


    <!-- Summernote -->
    <div class="row mt-1">
        <div class="col-md-8 offset-2">
            <div class="form-group">
                <textarea class="form-control" id="summernote-editor" name="content"></textarea>
            </div>
        </div>
    </div>
</div>
@stop


@push('page-js')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js" defer></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<!-- summernote config -->
<script src="{{asset('main/js/sommernote.js')}}"></script>;


<!--uplaod standard button -->
<script>
    var route_prefix = "url-to-filemanager";
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>


@endpush