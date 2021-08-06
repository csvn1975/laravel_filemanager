@extends('layouts.app')

@push('page-css')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<style>
   #holder img {
    margin-right: 10px;
    margin-top: 30px;
    box-shadow: 1px 1px 5px rgba(1,1,1,0.3);
    };
</style>
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

    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="input-group">
                <span class="input-group-btn">
                    <button id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-danger">
                        <i class="fa fa-picture-o"></i> Choose
                    </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filepath">
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="mr-5" id="holder" style="height:100%;  max-height:100px;"> </div>
        </div>
    </div>




    <!-- Summernote -->
    <div class="row mt-5">
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

<!-- defer  -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js" defer></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js" defer></script>

<!-- summernote config -->
<script src="{{asset('main/js/sommernote.js')}}"></script>;


<!--uplaod standard button -->
<script>
    $(document).ready(function() {
        $('#lfm').filemanager('image');
    });
</script>


@endpush