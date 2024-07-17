<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insert_Category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  $table->id();
        // $table->string('name',255);
        // $table->text('description')->nullable();
        // $table->timestamps();
        DB::table('categories')->insert([
            ['name'=>'Thời sự','description'=>'','slug'=>'thoi-su'],
            ['name'=>'Thế giới','description'=>'','slug'=>'the-gioi'],
            ['name'=>'Kinh tế','description'=>'','slug'=>'kinh-te'],
            ['name'=>'Đời sống','description'=>'','slug'=>'doi-song'],
            ['name'=>'Sức khỏe','description'=>'','slug'=>'suc-khoe'],
            ['name'=>'Giới trẻ','description'=>'','slug'=>'gioi-tre'],
            ['name'=>'Giáo dục','description'=>'','slug'=>'giao-duc'],
            ['name'=>'Thể thao','description'=>'','slug'=>'the-thao'],
            ['name'=>'Giải trí','description'=>'','slug'=>'giai-tri'],
            ['name'=>'Công nghệ','description'=>'','slug'=>'cong-nghe'],
        ]);
    }
}
