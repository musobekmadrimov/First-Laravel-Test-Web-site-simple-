@extends('layout')
@section('title') Feedbacklar @endsection
@section('main-content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form action="/reviews/check" method="post">
                @csrf
                <div class="form-group">
                    <h3 class="display-4 text-center text-white">Fikr qoldirish</h3>
                    <input type="email" class="form-control mb-2" id="email" name="email" placeholder="Emailinggizni kiriting">
                    <input type="name" class="form-control mb-2" id="name" name="name" placeholder="Isminggizni kiriting">
                    <textarea class="form-control mb-2" id="message" name="message" placeholder="Xabaringgizni kiriting"></textarea>
                    <button class="btn btn-block mb-2 btn-warning">JO'NATISH</button>
                </div>
            </form>
            @if($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors -> all() as $xatolik)
                            <li>{{ $xatolik }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="reviews col-lg-12 col-md-12 col-sm-12 mt-5">
                <h1 class="display-4 text-center text-white">Bildirilgan fikrlar ro'yhati</h1>
                @foreach($reviews as $el)
                    <div class="alert alert-warning">
                        <h3>{{ $el->message }}</h3>
                        <p>{{ $el->email }}</p>
                        <p><b>{{ $el->name }}</b></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
