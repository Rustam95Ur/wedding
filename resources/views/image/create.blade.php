@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mt-3 mb-5">Добавить картинку</h1>
                <form method="post" action="{{route('image-save')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <input type="submit" class="btn btn-success" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
@endsection