<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class Insert_User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lastName =['Nguyễn','Lê','Phan','Đỗ','Hồ','Võ','Bùi'];
        $middleName =['Thị','Văn','Đức','Ngọc','Hoàng','Minh','Kim',''];
        $firstName = ['Tâm','Thảo','Hải','Hòa','Hảo','Thanh','Tú','Hậu','Phương'];

        $roles = [ 'editor', 'reader'];
        for ($i=0; $i < 20; $i++) { 
            $username = 'user_' . $i;
            $fullName = Arr::random($lastName). ' '. Arr::random($middleName).' '. Arr::random($firstName);
            $email = 'user' . $i . '@gmail.com';
            $email_verified_at = now()->subDays(rand(0, 30))->subHours(rand(0, 23))->subMinutes(rand(0, 59)); // Ngày tạo ngẫu nhiên
            $password = bcrypt('hehe');
            $role = $roles[array_rand($roles)]; 
            DB::table('users')->insert([
                'username'=>$username,
                'name'=>$fullName,
                'email'=>$email,
                'email_verified_at'=>$email_verified_at,
                'role'=>$role,
                'password' =>$password,

            ]);
        }
    }
}
