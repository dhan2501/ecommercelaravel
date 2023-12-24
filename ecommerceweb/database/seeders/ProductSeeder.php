<?php

namespace Database\Seeders;
use Illuminate\support\Facades\DB; //Data base file import
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [
            'name'=>'LG Mobile',
            'price'=>'10000',
            'description' =>"A smart phone. This is best mobile",
            'category' =>'mobile',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fsupport%2Fproduct%2Flg-LMX440IM.AINDTNF&psig=AOvVaw2yciJch9uCpnDl0EblHcLr&ust=1703482916294000&source=images&cd=vfe&ved=0CBIQjRxqFwoTCMC8xcOup4MDFQAAAAAdAAAAABAE'
        ],
        [
            'name'=>'Redmi Mobile',
            'price'=>'20000',
            'description' =>"A smart phone. This is best mobile",
            'category' =>'mobile',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.mi.com%2Fin%2Fphone%2F&psig=AOvVaw35VKrlBcVPdxpqflS-LgCl&ust=1703483140573000&source=images&cd=vfe&ved=0CBIQjRxqFwoTCPjX0K6vp4MDFQAAAAAdAAAAABAE'
        ],
        [
            'name'=>'LG TV',
            'price'=>'20000',
            'description' =>"A smart phone. This is best mobile",
            'category' =>'tv',
            'gallery' =>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Ftvs%2Flg-oled55a3psa&psig=AOvVaw2WITMN2eWRWl36285LVpaE&ust=1703483235157000&source=images&cd=vfe&ved=0CBIQjRxqFwoTCNDLiduvp4MDFQAAAAAdAAAAABAE'
        ],
    
    ]);
    }
}
