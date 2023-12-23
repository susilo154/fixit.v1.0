<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@tutsmake.com',
               'no_hp'=>'nomor_hp',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'montir User',
               'email'=>'manager@tutsmake.com',
               'no_hp'=>'nomor_hp',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Customer',
               'email'=>'user@tutsmake.com',
               'no_hp'=>'nomor_hp',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'mitra User',
                'email'=>'user@tutsmake.com',
                'no_hp'=>'nomor_hp',
                'type'=>3,
                'password'=> bcrypt('123456'),
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}