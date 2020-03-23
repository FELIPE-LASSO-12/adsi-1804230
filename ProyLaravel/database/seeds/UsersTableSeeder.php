<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
				'fullname' => 'Jeremias Lasso',
				'email' => 'jerelas@gmail.com',
				'phone' => 3128579812,
				'birthdate' => '1994-09-12',
				'gender' => 'Male',
				'address' => 'Calle Gato Negro',
				'role' => 'admin',
				'password' => Hash::make('admin'),
				]);

				$user = new App\User;
				$user->fullname  = 'Pipe Lasso';
				$user->email     = 'pila@gmail.com';
				$user->phone     = 312488558;
				$user->birthdate = '1998-01-02';
				$user->gender    = 'Male';
				$user->address   = 'Calle de los Pajaros Caidos';
				$user->role 	 = 'Admin';
				$user->password  = bcrypt('Admin');
				$user->save();

				//Factory
				factory(App\User::class, 50)->create();
    }
}
