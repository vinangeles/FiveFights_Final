<div class="container-fluid py-3 vh-100">
    <div class="col-10 mx-auto">
    <h1 class="text-center text-white fst-italic">Teams</h1>
    <div class="text-center my-4 d-flex justify-content-start">
            {{$slot}}
        </div>
    </div>
    <div class="container p-3">
        <table class="table table-dark w-100 row-cols-12">
                    <thead>
                        <tr class="">
                            <th scope="col" class="fw-light text-danger-emphasis col-2">Game</th>
                            <th scope="col" class="fw-light text-warning-emphasis col-2">Team Name</th>
                            <th scope="col" class="fw-light col-2">Leader</th>
                            <th scope="col" class="fw-light col-2">Members</th>
                            <th scope="col" class="fw-light col-4">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td class="text-danger-emphasis">{{$team['game']}}</td>
                                <td class="text-warning-emphasis ">{{$team['team_name']}}</td>
                                <td>{{$team['team_leader']}}</td>
                                <td>{{$team['num_of_members']}}</td>
                                <td class="lh-sm">{{$team['team_description']}}</td>
                            </tr>

                        @endforeach
                    </tbody>
        </table>
    </div>

    <!--@foreach($teams as $team)
    
    @endforeach-->
</div>