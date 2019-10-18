@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @switch($type)
                        @case(1)
                        <h2 class="text-center mt-3">Фото отчет</h2>
                        @break
                        @case(2)
                        <h2 class="text-center mt-3">Галерея</h2>
                        @break
                        @case(3)
                        <h2 class="text-center mt-3">Рассадка гостей</h2>
                        @break
                    @endswitch
                    <div class="col-md-12 text-center m-3">
                        <a href="{{route('image-add', $type)}}" class="btn btn-primary">Добавить картинку</a>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Картинка</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td>{{$image->id}}</td>
                                <td><img src="{{'/storage/'.$image->image}}"
                                         style="max-width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                                </td>
                                <td>
                                    <a href="{{route('image-edit', $image->id)}}"
                                       class="btn btn-info pull-left">Изменить</a>

                                    <form method="post" action="{{route('image-delete', $image->id)}}">
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
                    {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection