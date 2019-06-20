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
        DB::table('payments')->delete();
        // DB::table('business_type_payments')->delete();

        // generate 36 dummy posts data
        $business_types = [];
        $payment_methods = [];
        $customers = [];
        $payments = [];
        // $business_type_payments = [];

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

            
        }

        for ($i = 1; $i <= 36; $i++)
        {
          
            $date->addDays(10);
          
            $createdDate   = clone($date);

            $customers[] = [
                'name' => $faker->name,
                'business_type_id' => rand(1,5),
                'created_at'   => $createdDate,
                'updated_at'   => $createdDate
            ];
        }

        for ($i = 1; $i <= 60; $i++)
        {
            $date->addDays(10);
            $createdDate   = clone($date);

            $payments[] = [
                'customer_id' => rand(1,36),
                'payment_method_id' => rand(1,5),
                'payment_token'=>Str::random(15),
                'created_at'   => $createdDate,
                'updated_at'   => $createdDate
            ];
        }


    
        DB::table('customers')->insert($customers);
        DB::table('payments')->insert($payments);
    }

    
}
