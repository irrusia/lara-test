@extends('client-application.layout')

@section('inner')

    <h3>Новая заявка</h3>
    <form id="request-form" action="{{route('applications.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- поля формы -->
        <div class="form-group">
            <label for="name">Имя</label><span class="required"> *</span>

            <input name="name"
                   type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label><span class="required"> *</span>
            <input name="phone"
                   type="text"
                   class="form-control @error('phone') is-invalid @enderror"
                   value="{{old('phone')}}">

            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="company">Компания</label><span class="required"> *</span>
            <input name="company"
                   type="text"
                   class="form-control @error('company') is-invalid @enderror"
                   value="{{old('company')}}">

            @error('company')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="title">Название заявки</label><span class="required"> *</span>
            <input name="title"
                   type="text"
                   class="form-control @error('title') is-invalid @enderror"
                   value="{{old('title')}}">

            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" rows="10" cols="50"
                      class="form-control @error('message') is-invalid @enderror"
                      value="{{old('message')}}">
            </textarea>

            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="attachment">Файл</label>
            <input name="attachment"
                   type="file"
                   class="form-control @error('attachment') is-invalid @enderror"
                   value="{{old('attachment')}}">

            @error('attachment')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <br><button class="btn btn-success" type="submit">Отправить</button>
    </form>
@endsection
