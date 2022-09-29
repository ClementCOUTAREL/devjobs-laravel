<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Salary;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recruiters_id = DB::table('users')->where('role',"2")->pluck('id');

        DB::table('jobs')->insert([
            'title' => 'React developper',
            'company' => 'Netflix',
            'salary_id' => Salary::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'last_date' => date('Y-m-d H:i:s'),
            'description' => 'Amazing experience as a React dev' ,
            'user_id' =>  $recruiters_id->random(),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('jobs')->insert([
            'title' => 'Express developper',
            'company' => 'Microsoft',
            'salary_id' => Salary::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'last_date' => date('Y-m-d H:i:s'),
            'description' => 'Amazing experience as a React dev' ,
            'user_id' => $recruiters_id->random() ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('jobs')->insert([
            'title' => 'React Native developper',
            'company' => 'Uber',
            'salary_id' => Salary::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'last_date' => date('Y-m-d H:i:s'),
            'description' => 'Amazing experience as a React dev' ,
            'user_id' => $recruiters_id->random() ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}