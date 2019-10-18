@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mt-3 mb-5">Добавить видео</h1>
                <form method="post" action="{{route('video-save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label>Сначала добавьте видео в ютуб, а потом ссылку впишите это поле</label>
                        <input type="text" class="form-control" name="link" required>
                    </div>
                    <input type="submit" class="btn btn-success" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
@endsection