<?php

use Illuminate\Database\Seeder;
use App\product;
class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create ([
         'name' =>'Nike' ,
            'slug'=>'Nike1',
            'details'=>'soft pad,blue,fluffy',
            'price'=>'999',
            'description'=>'The power of the mind is infinite'
        ]);
            product::create ([
                'name' =>'puma' ,
                'slug'=>'Nike2',
                'details'=>'soft pad,blue,fluffy',
                'price'=>'999',
                'description'=>'The power of the mind is infinite'
            ]);product::create ([
        'name' =>'Timberland' ,
        'slug'=>'Nike3',
        'details'=>'soft pad,blue,fluffy',
        'price'=>'999',
        'description'=>'The power of the mind is infinite'
    ]);product::create ([
        'name' =>'Adidas' ,
        'slug'=>'Nike4',
        'details'=>'soft pad,blue,fluffy',
        'price'=>'999',
        'description'=>'The power of the mind is infinite'
    ]);product::create ([
        'name' =>'Rebook' ,
        'slug'=>'Nike5',
        'details'=>'soft pad,blue,fluffy',
        'price'=>'999',
        'description'=>'The power of the mind is infinite'
    ]);
    }
}
