@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center bg-img">
    <div class="row row-cols-2 me-auto bg-opacity-50 text-white p-5 ">
        <div class="col-5 ps-4 pe-0 me-0">
        <img src="/img/hero.jpg" width="400"/>
        </div>
        <div class="col-7 container-lg text-center mt-4 pt-3 ms-0">
            <h1 style="font-size: 96px;" class="lh-1 " >Welcome to <span class="fst-italic fw-bold">Five<span class="tcolor">Fights</span></span></h1>
            <h2 style="font-family: 'Oxygen', sans-serif;" >Dedicated to creating and blossoming e-sports players and communities in the Bicol Region.</h2>

            <div class="buttons lh-lg">
                <button type="button" class="btn btn-light btn-outline-dark btn-lg mb-2 fs-3">Find a team</button> </br>
                <button type="button" class="btn btn-light btn-outline-dark btn-lg fs-5">Enter a tournament</button>
            </div>
        </div>
</div>
@endsection
