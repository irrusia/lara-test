@extends('client-application.layout')

@section('inner')
    @if(count($items))
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Company</th>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->company}}</td>
                        <td>{{$item->title}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- ./table-responsive-->
    @else
        <p>Записей не найдено.</p>
    @endif
@endsection
