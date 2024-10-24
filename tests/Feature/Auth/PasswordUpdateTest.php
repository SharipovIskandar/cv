<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateTest extends TestCase
{
    use RefreshDatabase;
//
//    public function password_can_be_updated(): void
//    {
//        $user = User::factory()->create();
//
//        $response = $this
//            ->actingAs($user)
//            ->from('/profile')
//            ->put('/password', [
//                'current_password' => 'password',
//                'password' => 'new-password',
//                'password_confirmation' => 'new-password',
//            ]);
//
//        $response
//            ->assertSessionHasNoErrors()
//            ->assertRedirect('/profile');
//
//        $this->assertTrue(Hash::check('new-password', $user->refresh()->password));
//    }
//
//    public function correct_password_must_be_provided_to_update_password(): void
//    {
//        $user = User::factory()->create();
//
//        $response = $this
//            ->actingAs($user)
//            ->from('/profile')
//            ->put('/password', [
//                'current_password' => 'wrong-password',
//                'password' => 'new-password',
//                'password_confirmation' => 'new-password',
//            ]);
//
//        $response
//            ->assertSessionHasErrorsIn('updatePassword', 'current_password')
//            ->assertRedirect('/profile');
//    }
}
