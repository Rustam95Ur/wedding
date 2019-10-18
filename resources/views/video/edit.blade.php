@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mt-3 mb-5">Изменит видео</h1>
                <form method="post" action="{{route('video-update', $video->id)}}" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf

                    <div class="form-group">
                        <img src="{{'/storage/'.$video->image}}"
                             style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                        <input type="file" class="form-control" name="image" >

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$video->link}}" name="link">
                    </div>
                    <input type="submit" class="btn btn-success" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
@endsection
