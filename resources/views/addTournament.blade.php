@extends('layouts.app')
@section('content')
    <div class="container-fluid p-4 text-white vh-100">
        <h3 class="">Add Tournament Details</h3>
        <div class="col-4 mx-auto bg-darker p-2 border border-white border-1 rounded w-100 d-inline-block" style="" >
            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                <!--tourney name-->
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="tournament_name">Tournament Name</label>
                            <input class="form-control @error('tournament_name') is-invalid @enderror" required id="tournament_name" name="tournament_name" type="text" placeholder="Enter tournament name" value="{{ old('tournament_name') }}">
                            @error('tournament_name')
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
                <!--Date-->
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="date">Date</label>
                            <p class="mb-2 text-success px-2 lh-1">Format: <br>
                                "Month Day, Year" (For 1 Day Events) <br>
                                "Month Day - Day, Year" (For Multiple Day Events)
                            </p>
                            <input class="form-control @error('date') is-invalid @enderror" required id="date" name="date" type="text" placeholder="Enter date" value="{{ old('date') }}">
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!--Location-->
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input class="form-control @error('location') is-invalid @enderror" required id="location" name="location" type="text" placeholder="Enter location" value="{{ old('location') }}">
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!--img-->
                <div class="form-group">
                    <label for="img">Upload Corresponding Image</label>
                    <div class="row">
                        <div class="col-sm-6 ">
                            <!--<img id="preview-image-before-upload" src="{{asset('/img/Upload Image.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">-->
                            <input class=" form-control @error('img') is-invalid @enderror " type="file" name="img" value="{{ old('img') }}" id="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-warning">Add Tournament</button>
                </div>
            </form>
        </div> 
    </div>
@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });


    });

</script>