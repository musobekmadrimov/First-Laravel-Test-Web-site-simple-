@extends('layout')

@section('title')Bosh sahifa @endsection

@section('main-content')
    <div class="text-white">
        <div class="myDiv w-100 p-3 mb-3 bg-warning spinner-border text-dark shadow" style="border-radius: 20px">

            <h1 class="display-3 text-center">Bosh sahifa</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequuntur dolor eaque odit quam quas qui quibusdam quis repellat reprehenderit. Distinctio enim itaque nisi odit placeat! Accusamus adipisci incidunt quia temporibus voluptatum. A assumenda at beatae eveniet harum magnam, molestias natus reiciendis repellendus ullam. Id libero odit quod repudiandae totam?</p>
            <button class="btn btn-danger">KO'RISH</button>
        </div>
    </div>
    <div class="myCards">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header"><h1 class="display-6">Sarlavha Test</h1></div>
                    <div class="card-body"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ea earum, iusto porro tempora voluptatum.</p></div>
                    <div class="card-footer"><button class="btn btn-warning btn-block">BATAFSIL</button></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header"><h1 class="display-6">Sarlavha Test</h1></div>
                    <div class="card-body"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ea earum, iusto porro tempora voluptatum.</p></div>
                    <div class="card-footer"><button class="btn btn-warning btn-block">BATAFSIL</button></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header"><h1 class="display-6">Sarlavha Test</h1></div>
                    <div class="card-body"><p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ea earum, iusto porro tempora voluptatum.</p></div>
                    <div class="card-footer"><button class="btn btn-warning btn-block">BATAFSIL</button></div>
                </div>
            </div>
        </div>


    </div>
    @endsection
