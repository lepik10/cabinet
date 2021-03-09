<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations {
        runDatabaseMigrations as baseRunDatabaseMigrations;
    }
    use RefreshDatabase;

    public function runDatabaseMigrations()
    {
        $this->baseRunDatabaseMigrations();
        $this->artisan('db:seed');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWrongLoginAndPassword()
    {
        $credentials = ['email' => 'wrong', 'password' => 'wrong'];
        $response = $this->post('/login', $credentials)->assertStatus(302)->assertSessionHas('login_error');
        $this->assertEquals(session('login_error'), __('messages.login_error'));
    }

    public function testSuccessLoginAndPassword()
    {
        $user = User::find(4);
        $credentials = ['email' => $user->email, 'password' => 'password'];
        $response = $this->post('/login', $credentials)->assertStatus(302)->assertRedirect('cabinet');
    }
}
