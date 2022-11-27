<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Fixture;
use Illuminate\Console\Command;
use App\Models\PlayedFixture as ModelsPlayedFixture;

class PlayedFixture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play:fixture';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks if the current time is 3 hours later than the latest fixture\'s time. If it is, the match has been played';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Prepare the two models. Played Fixtures and Old fixtures
        $oldfixture = Fixture::with('competition')->orderBy('gametime','asc')->first();
        $playedfixture = new ModelsPlayedFixture();
        // dd(Carbon::parse($oldfixture->gametime)->diffForHumans());
        // dd((Carbon::parse($oldfixture->gametime)->diffForHumans() == "2 hours ago"));

        // If the current time is at least 3 hours over the olfixture's gametime, insert into playedfixtures and delete from old fixture
        if(Carbon::parse($oldfixture->gametime)->diffForHumans() == "3 hours ago"){
            // Copy over all attributes of oldfixture into playedfixture
            $playedfixture->opponent_id = $oldfixture->opponent_id;
            $playedfixture->competition_id = $oldfixture->competition_id;
            $playedfixture->gametime = $oldfixture->gametime;
            $playedfixture->slug = $oldfixture->slug;
            $playedfixture->isHome = $oldfixture->isHome;
            $playedfixture->save();

            // After the copy has been created in the played_fixtures tables, delete it from the current fixtures table.
            $oldfixture->delete();
            // Just for debugging: To confirm I got here!
            echo "Successfully added matches to played fixtures. Please do well to enter the results and publish it";
        }
    }
}
