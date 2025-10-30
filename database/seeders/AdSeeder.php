<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ads')->insert([
            [
                'title' => 'RajaBaji – Play & Earn',
                'icon' => 'https://rajabaji3.com/?referral_code=5XW35W&s2=68fc5c03bed7eb7a89cf6206',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Khela99 – Register & Win',
                'icon' => 'https://khela99.club/bd/bn/new-register-entry/account?cid=we3eedun9dkmm5mdjm4sa457&utm_campaign=paidmed',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'PO Exchange – Social Trading',
                'icon' => 'https://www.po.exchange/land/social-trading/?click_id=MTAzLjEwLjU1LjE3MSs1YjRmM2EyMzM1YjhiY2U5MWZhYjBjNDcxYmY5MTYyNisxMzEwNDcyXzI3MTQ5MDk4K2Fkc3Qtc19hc2lhX2I2MCtlbitkZXNrdG9wK2Z1bGwtcGFnZStQT1Arc29jaWFsLXRyYWRpbmctbHArYmQrMC4wMDAzK2Nocm9tZQ==',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Exness – Trusted Forex Broker',
                'icon' => 'https://www.exness.com/bn/?utm_source=partners&campaign=27387&ag_source=Chrome&ex_ol=1',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Press Continue – Reward Page',
                'icon' => 'https://press-continue.ab1ge1heltvz.top/e102479204fcec81f6dfb01f2462a2dfa451531d/ww1/',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'RevenueCPM – Ad Network',
                'icon' => 'https://www.revenuecpmgate.com/cgmykk3jm1?key=02dbe420fdbd907495e71b3967fe8111',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Press Continue – Bonus Link',
                'icon' => 'https://press-continue.ab1ge1heltvz.top/e102479204fcec81f6dfb01f2462a2dfa451531d/qq1/',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'BigTaka – Earn Instantly',
                'icon' => 'https://bigtaka.xyz/?af=AG000599&s2=68fc6972bed7eb7a89d2d810',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Tapmad – Watch & Earn',
                'icon' => 'https://campaignportal.tapmad.com/wal-2302-bdt/674d71406190c70907744c5f?&utm_source=trackier&utm_medium=trackier&pub=113&subpub=714348&clickid=68fc6aa78f04690353dcf1bb',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'AdZilla – Meme Ads',
                'icon' => 'https://adzilla.meme/burn/',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '1WihrQ – Casino List',
                'icon' => 'https://1wihrq.life/casino/list/4?p=hh94&sub1=5b4d35f3cdefa74d7037fcd1b1ce656c&sub6=27702189',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'AdZilla Runner – Campaign',
                'icon' => 'https://adzilla.meme/adrunner/',
                'payout_per_view' => 2.00,
                'min_view_seconds' => 10,
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
