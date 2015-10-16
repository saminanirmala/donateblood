<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call('UserTableSeeder');

    $this->command->info('User table seeded!');

  }
}

class UserTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('users')->delete();
    $username = User::USERNAME;
    $password =bcrypt( User::PASSWORD);

    User ::create(array('username' => $username ,
        'password' => $password)
    );
  }

}
