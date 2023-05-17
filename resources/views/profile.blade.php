@extends('layouts.app')

@section('content')
    <div class="container-fluid py-3 text-white">
        <div class="row">
            <div class="d-flex justify-content-center col-3 pe-0">
                <div class="flex-shrink-0 position-relative">
                    <img src="{{ asset('/img/'.$profile->pfp)}}" class="profile-pic border" />
                </div> 
            </div>
            <div class="col-7 px-0 ">
            <div class="row d-flex pink-border mb-3">
                    <div class="col-2 px-0 "><h2 class="fst-italic text-white">TEAM</h2></div>
                    <div class="col-5 px-0 ms-auto text-end"><h3>{{$profile->team}}</h3></div>
                </div>
                <div class="row d-flex pink-border mb-3">
                    <div class="col-2 px-0 "><h2 class="fst-italic text-white">GAME</h2></div>
                    <div class="col-5 px-0 ms-auto text-end"><h3>{{$profile->game}}</h3></div>
                </div>
                <div class="row d-flex pink-border mb-3">
                    <div class="col-2 px-0 "><h2 class="fst-italic text-white">HOMETOWN</h2></div>
                    <div class="col-5 px-0 ms-auto text-end"><h3>{{$profile->location}}</h3></div>
                </div>
                <div class="row d-flex pink-border mb-3">
                    <div class="col-2 px-0 "><h2 class="fst-italic text-white">IGN</h2></div>
                    <div class="col-5 px-0 ms-auto text-end"><h3>{{$profile->ign}}</h3></div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="d-flex justify-content-center col-3">
            <h1 class="fst-italic text-warning p-2 " style="font-family: 'Exo 2', sans-serif;">{{ Auth::user()->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="d-flex px-2 col-3 ">
                <div class="ms-2 col-1 w-auto mx-1 flex-fill position-relative ">
                    <button  class="btn socials position-absolute start-0 w-100">
                        <a href="http://{{$profile->twtlink}}" role="button" >
                            <img src="/img/twt.png" class="logo">
                        </a>
                    </button>
                </div>
                <div class="col-1 w-auto mx-1  flex-fill position-relative">
                    <button class="btn socials position-absolute start-0 w-100">
                        <a href="http://{{$profile->fblink}}">
                            <img src="/img/fb.png" class="logo">
                        </a>
                    </button>
                </div>
                <div class=" col-1 w-auto mx-1 flex-fill position-relative d-flex">
                    <button class="btn socials px-0 position-absolute end-0 w-100  " type="submit" >
                        <div class="mx-0 d-flex align-items-center">
                            <img src="/img/dsc.png" class="logo">
                            <div class="text-wrap fs-6 text-white">
                            {{$profile->discid}}
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script type="text/javascript">
    
</script>