<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::Create([
            'user_id' => 1,
            'team_name' => 'Lotus Biscoffs',
            'game' => 'VALORANT',
            'num_of_members' => 2,
            'team_leader' => 'imissher',
            'team_description' => 'we love playing lotus for some reason. come join'
        ]);
    }
}
