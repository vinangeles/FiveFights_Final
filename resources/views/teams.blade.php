@extends('layouts.app')
@section('content')
    <x-team-list :teams="$teams" :admin="$admin">
        @auth
            <a href="/teams/create">
        <button class=" addTrny btn btn-success  text-uppercase border-0 py-2 " :hover>Make Your Team</button>
            </a>
        @else
            <h2 class="p-0 text-white m-0">Log In to create your own team!</h2>    
        @endauth    
    </x-team-list>

@endsection
