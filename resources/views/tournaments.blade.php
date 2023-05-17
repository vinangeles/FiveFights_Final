@extends('layouts.app')
@section('content')
    <x-tournament-list :tournaments="$tournaments" :admin="$admin">
        @if($admin)
        <a href="/tournaments/add">
            <button class=" addTrny btn btn-secondary  text-uppercase border-0 py-2 px-4" :hover>Add Tournament</button>
        </a>
        @endif

    </x-tournament-list>
@endsection
