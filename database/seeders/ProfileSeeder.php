<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create(
            [
                'user_id' => 1,
                'location' => " ",
                'game' => ' ',
                'team' => '',
                'ign' => ' ',
                'rank' => ' ',
                'pfp' => 'default-profile-pic.jpg',
                'fblink' => 'facebook.com/',
                'twtlink' => 'twitter.com/',
                'discid' => '',
                'onTeam' => false

            ]
        );
    }
}
