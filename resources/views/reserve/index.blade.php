@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">Согласие</th>
                            <th scope="col">Количество</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reserves as $reserve)
                            <tr>
                                <td>{{$reserve->id}}</td>
                                <td>{{$reserve->full_name}}</td>
                                @if($reserve->agreement == 1)
                                <td>Да</td>
                                    @else
                                    <td>Нет</td>
                                @endif
                                <td>{{$reserve->count_people}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12 mt-3">
                    {{ $reserves->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection