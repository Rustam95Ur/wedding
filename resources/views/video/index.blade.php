@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="col-md-12 text-center m-3">
                        <a href="{{route('video-add')}}" class="btn btn-primary">Добавить видео</a>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Картинка</th>
                            <th scope="col">Видео</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($videos as $video)
                            <tr>
                                <td>{{$video->id}}</td>
                                <td><img src="{{'/storage/'.$video->image}}"
                                         style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>{{$video->link}}</td>
                                <td>
                                    <a href="{{route('video-edit', $video->id)}}"
                                       class="btn btn-info pull-left">Изменить</a>

                                    <form method="post" action="{{route('video-delete', $video->id)}}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="bnt btn-danger pull-right" value="Удалить">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 mt-3">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection