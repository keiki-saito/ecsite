<?php
use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
		for($i=0; $i<30; $i++){
			DB::table('users')->insert([
				'name' => 'User-' . $i,
				'email' => 'user-'.$i.'@example.com',
                'address'=>'user'.$i.$i.$i,
                'phone_number'=>00000000000,
				'password' => bcrypt('password-' . $i),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
			]);
		}
   }
}
