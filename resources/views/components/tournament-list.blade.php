<div class="container-fluid py-3 vh-100">
    <div class="col-10 mx-auto">
        <h1 class="text-center text-white fst-italic">Tournaments</h1>
        <div class="text-center my-4 d-flex justify-content-end">
            {{$slot}}
        </div>
        <div class="row row-cols-4 gap-5 justify-content-start">
            @foreach($tournaments as $tournament)
            <div class="card col p-0 text-bg-dark">
                <img src="{{ asset('/img/'.$tournament->img)}}" class="card-img-top" alt="..." >
                
                <div class="card-body py-3">
                    <h4 class="card-title my-0">{{$tournament['tournament_name']}}</h4>
                    <div class="details" style="height: 5rem;">
                        <p class="card-text my-0 lh-sm fst-italic text-warning text-end">{{$tournament['game']}}</p>
                        <p class="card-text my-0 lh-sm fst-italic text-end">{{$tournament['date']}}</p>
                        <p class="card-text my-0 lh-sm text-end text-wrap">{{$tournament['location']}}</p>
                    </div>
                    <div class="position-static bottom-0 start-0 pt-1 border-top" >
                        <a href="#" class="text-decoration-none position-static bottom-0 start-0">View Details</a>
                         @if($admin)
                            <a href="/tournaments/edit/{{$tournament['id']}}" class="text-decoration-none position-sticky bottom-0 start-100 ">Edit</a>
                        @endif

                    </div>
                    @if($admin)
                        <form action="{{route('delete', ['id' => $tournament['id']])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" value="Delete" name="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
                                </form>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>