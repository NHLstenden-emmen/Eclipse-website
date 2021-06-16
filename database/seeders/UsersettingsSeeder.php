<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_settings')->insert([
            'widget_settings' => '{"0":["weather:emmen"],"1":["empty"],"2":["empty"],"3":["empty"],"4":["empty"],"5":["empty"],"6":["empty"],"7":["empty"],"8":["empty"],"9":["empty"],"10":["empty"],"11":["empty"],"12":["morning"],"13":["empty"],"14":["empty"],"15":["empty"],"16":["empty"],"17":["empty"],"18":["empty"],"19":["empty"],"20":["empty"],"21":["empty"],"22":["empty"],"23":["empty"],"24":["empty"],"25":["empty"],"26":["empty"],"27":["empty"],"28":["empty"],"29":["empty"],"30":["empty"],"31":["empty"],"32":["empty"],"33":["empty"],"34":["empty"],"35":["empty"],"36":["empty"],"37":["empty"],"38":["empty"],"39":["empty"],"40":["empty"],"41":["empty"],"42":["empty"],"43":["empty"],"44":["empty"]}',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
