<?php

namespace Database\Seeders;

use App\Models\User;
//use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteUsers = [
            [
                'role' => config('custom.user.role_super_admin'),
                'email' => 'super@profit-funnels.in',
				'phone' => '9414786638',
				'name' => 'Super Admin',
            ],
            [
                'role' => config('custom.user.role_admin'),
                'email' => 'er.bhagwatsingh@gmail.com',
				'phone' => '9602277726',
				'name' => 'Bhagwat Singh',
            ],
            [
                'role' => config('custom.user.role_admin'),
                'email' => 'nehasharma.8944@gmail.com',
				'phone' => '9024511922',
				'name' => 'Neha Sharma',
            ]
        ];
        //$faker = Factory::create();
        foreach ($siteUsers as $key => $siteUser) {
            if (User::where('email', $siteUser['email'])->first() === null) {
                $user = new User();
                $user->name = $siteUser['name'];
                $user->phone = $siteUser['phone'];
                $user->dialing_code = '+91';
                $user->email = $siteUser['email'];
                $user->status = config('custom.status_active');
                $user->password = Hash::make('password');
                $user->email_verified_at = now();
                $user->is_phone_verified = 1;
                $user->save();

                if (!$user->hasRole($siteUser['role'])) {
                    $user->assignRole($siteUser['role']);
                }
            }
        }
    }
}
