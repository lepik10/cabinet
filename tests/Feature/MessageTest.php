<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageTest extends TestCase
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

    public function testAdminAddMessageToUserAndUserCanSeeIt()
    {
        $user_admin = User::find(1);
        $user = User::find(3);
        $content = 'Test 111 Test 222 Test 333 Test 111 Test 222 Test 333';
        $this->actingAs($user_admin)->post('/message/create/3', ['content' => $content]);
        $response = $this->actingAs($user)->get('/cabinet');
        $response->assertSeeText($content);
    }
}
