<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DangNhap::create([
        	'ten_dang_nhap' =>'admin',
        	'mat_khau' => Hash::make('123456'),
        	'ho_ten' => 'Nguoi Choi 1'
        ]);

        App\DangNhap::create([
        	'ten_dang_nhap' =>'root',
        	'mat_khau' => Hash::make('root123456'),
        	'ho_ten' => 'Nguoi Choi 2'
        ]);
    }
}
