<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Faker\Generator as Fakery;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        factory('App\Customer',50)->create();
    }
    */

    public function run()
    {
        // reset the posts table
        DB::table('business_types')->delete();
        DB::table('payment_methods')->delete();
        DB::table('customers')->delete();
        DB::table('status')->delete();
        DB::table('payments')->delete();

        $faker = Factory::create();
        $fakery = new Fakery;
        $date = Carbon::now()->modify('-1 year');


        //################################################

        if (env('APP_ENV') === 'local')
        {
            DB::table('business_types')->insert([
                [
                    'business_types_name' => 'ungrouped business type',
                    'business_types_amount' => 2500,
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'business_types_name' => $faker->text(rand(8,10)),
                    'business_types_amount' => $faker->randomFloat(2,1500,1700),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'business_types_name' => $faker->text(rand(8,10)),
                    'business_types_amount' => $faker->randomFloat(2,1500,1700),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'business_types_name' => $faker->text(rand(8,10)),
                    'business_types_amount' => $faker->randomFloat(2,1500,1700),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'business_types_name' => $faker->text(rand(8,10)),
                    'business_types_amount' => $faker->randomFloat(2,1500,1700),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
            ]);


            DB::table('payment_methods')->insert([
                [
                    'payment_method_name' => 'ungrouped payment method',
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                'payment_method_name' => 'Mobile Money',
                'created_at'   => $date,
                'updated_at'   => $date
                ],
                [
                'payment_method_name' => 'Centenary Bank',
                'created_at'   => $date,
                'updated_at'   => $date
                ],
                [
                    'payment_method_name' => 'DFCU Bank',
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'payment_method_name' => 'Cash',
                    'created_at'   => $date,
                    'updated_at'   => $date
                ]
            ]);

            DB::table('customers')->insert([
                [
                    'name' => $faker->name,
                    'business_type_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'name' => $faker->name,
                    'business_type_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'name' => $faker->name,
                    'business_type_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'name' => $faker->name,
                    'business_type_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'name' => $faker->name,
                    'business_type_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ]
            ]);

            DB::table('status')->insert([
                [
                    'status_value' => 'unverifed',
                ],
                [
                    'status_value' => 'paided',
                ],
                [
                    'status_value' => 'up-front',
                    
                ]
            ]);
            
            DB::table('payments')->insert([
                [
                    'payment_token' => Str::random(15),
                    'status_id' => rand(1,3),
                    'customer_id' => rand(1,5),
                    'payment_method_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'payment_token' => Str::random(15),
                    'status_id' => rand(1,3),
                    'customer_id' => rand(1,5),
                    'payment_method_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'payment_token' => Str::random(15),
                    'customer_id' => rand(1,5),
                    'status_id' => rand(1,3),
                    'payment_method_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'payment_token' => Str::random(15),
                    'status_id' => rand(1,3),
                    'customer_id' => rand(1,5),
                    'payment_method_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ],
                [
                    'payment_token' => Str::random(15),
                    'customer_id' => rand(1,5),
                    'status_id' => rand(1,3),
                    'payment_method_id' => rand(1,5),
                    'created_at'   => $date,
                    'updated_at'   => $date
                ]
            ]);

        }
        else
        {
            DB::table('business_types')->insert([
                'business_types_name' => 'ungrouped business type',
                'business_types_amount' => 2500,
                'created_at'   => $date,
                'updated_at'   => $date
            ]);

            DB::table('payment_methods')->insert([
                'payment_method_name' => 'ungrouped payment method',
                'created_at'   => $date,
                'updated_at'   => $date
            ]);


            DB::table('status')->insert([
                [
                    'status_value' => 'unverifed',
                ],
                [
                    'status_value' => 'paided',
                ],
                [
                    'status_value' => 'up-front',
                    
                ]
            ]);
            DB::table('customers')->insert([
                [
                    'name' => $faker->name,
                    'business_type_id' => 1,
                    'created_at'   => $date,
                    'updated_at'   => $date
                ]
            ]);

            DB::table('payments')->insert([
                'payment_token' => Str::random(15),
                    'status_id' => rand(1,3),
                    'customer_id' => 1,
                    'payment_method_id' => 1,
                    'created_at'   => $date,
                    'updated_at'   => $date
            ]);

            
        }

    
    }

    
}
