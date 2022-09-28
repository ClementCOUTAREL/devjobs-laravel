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
        DB::table('jobs')->insert([
            'title' => 'React developper',
            'company' => 'Netflix',
            'salary_id' => Salary::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'last_date' => date('Y-m-d H:i:s'),
            'description' => 'Amazing experience as a React dev' ,
            'user_id' => User::all()->random()->id ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}