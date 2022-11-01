<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name','Thirumalai')->first();
        if(!$user) {
            $user->name = 'Thirumalai';
            $user->email = 'm.thirurahul@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('m.thirurahul@gmail.com');
            $user->save();
        }


        $user = User::where('name','Mahesh')->first();
        if(!$user) {
            $user->name = 'Mahesh';
            $user->email = 'maheshpalla@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('maheshpalla@gmail.com');
            $user->save();
        }

        $user = User::where('name','Joann Aashrita A')->first();
        if(!$user) {
            $user->name = 'Joann Aashrita A';
            $user->email = 'paperpresentation@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9003096090');
            $user->save();
        }
        $user = User::where('name','Uttham K')->first();
        if(!$user) {
            $user->name = 'Uttham K';
            $user->email = 'codewar@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9176708088');
            $user->save();
        }
        $user = User::where('name','Harini')->first();
        if(!$user) {
            $user->name = 'Harini';
            $user->email = 'quiz@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9789970475');
            $user->save();
        }
        $user = User::where('name','Shree Varshaa')->first();
        if(!$user) {
            $user->name = 'Shree Varshaa';
            $user->email = 'circuitconnection@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9080113837');
            $user->save();
        }
        $user = User::where('name','Indraja')->first();
        if(!$user) {
            $user->name = 'Indraja';
            $user->email = 'circuitconnection@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('6381840456');
            $user->save();
        }

        $user = User::where('name','Dhanavarshini K')->first();
        if(!$user) {
            $user->name = 'Dhanavarshini K';
            $user->email = 'inventoryshowcase@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9486832419');
            $user->save();
        }

        $user = User::where('name','Rethika G')->first();
        if(!$user) {
            $user->name = 'Rethika G';
            $user->email = 'digitalox@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('7358660450');
            $user->save();
        }

        $user = User::where('name','Smiriti Shree')->first();
        if(!$user) {
            $user->name = 'Smiriti Shree';
            $user->email = 'startmusic@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9176956481');
            $user->save();
        }

        $user = User::where('name','Abdul Manan')->first();
        if(!$user) {
            $user->name = 'Abdul Manan';
            $user->email = 'futsal@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9150688908');
            $user->save();
        }

        $user = User::where('name','Jaisurya K')->first();
        if(!$user) {
            $user->name = 'Jaisurya K';
            $user->email = 'boxcricket@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9080727572');
            $user->save();
        }

        $user = User::where('name','Saravanan')->first();
        if(!$user) {
            $user->name = 'Saravanan';
            $user->email = 'adaptunes@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9360470161');
            $user->save();
        }

        $user = User::where('name','Sai Keerthi')->first();
        if(!$user) {
            $user->name = 'Sai Keerthi';
            $user->email = 'moviebuff@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9384690103');
            $user->save();
        }

        $user = User::where('name','Nanda gopal')->first();
        if(!$user) {
            $user->name = 'Nanda gopal';
            $user->email = 'sherlockholmes@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9445064737');
            $user->save();
        }

        $user = User::where('name','Sangeetha S')->first();
        if(!$user) {
            $user->name = 'Sangeetha S';
            $user->email = 'iplauction@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9150559443');
            $user->save();
        }

        $user = User::where('name','Velhariran')->first();
        if(!$user) {
            $user->name = 'Velhariran';
            $user->email = 'fifa@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9150428481');
            $user->save();
        }
        $user = User::where('name','Ajay Dev')->first();
        if(!$user) {
            $user->name = 'Ajay Dev';
            $user->email = 'logocreation@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('9384749455');
            $user->save();
        }

        $user = User::where('name','Reshmita P')->first();
        if(!$user) {
            $user->name = 'Reshmita P';
            $user->email = 'reelscontest@gmail.com';
            $user->email_verified_at = now();
            $user->password = Hash::make('6369929748');
            $user->save();
        }


    }
}
