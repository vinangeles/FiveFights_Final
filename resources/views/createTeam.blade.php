@extends('layouts.app')
@section('content')
    <div class="container-fluid p-4 text-white vh-100">
        <h3 class="">Create Your Team</h3>
        <div class="col-4 mx-auto bg-darker p-2 border border-white border-1 rounded w-100 d-inline-block" style="" >
            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                <!--teamname-->
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="team_name">Team Name</label>
                            <input class="form-control @error('team_name') is-invalid @enderror" required id="team_name" name="team_name" type="text" placeholder="Enter team name" value="{{ old('team_name') }}">
                            @error('team_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror 
                        </div>
                    </div>
                </div>
                <!--game-->
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="game">Game</label>
                            <input class="form-control @error('game') is-invalid @enderror" required id="game" name="game" type="text" placeholder="Enter game" value="{{ old('game') }}">
                            @error('game')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!--Team Description-->
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="team_description">Description</label>
                            <input class="form-control @error('team_description') is-invalid @enderror" required id="team_description" name="team_description" type="text" placeholder="Enter Description of your team" value="{{ old('team_description') }}">
                            @error('team_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-warning">Create Team</button>
                </div>
            </form>
        </div>
    </div>

@endsection