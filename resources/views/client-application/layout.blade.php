@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('applications.index')}}">Список заявок</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('applications.create')}}">Новая заявка</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @yield('inner')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
