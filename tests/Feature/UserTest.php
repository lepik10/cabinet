<?php

namespace Tests\Feature;

use App\Models\FizInfo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testSeeSuccessMessageWhenCreatedNewFizUser()
    {
        $user = User::factory()->definition();
        $userInfo = array_merge($user, FizInfo::factory()->definition());

        // Создаем тестовый файл
        $file = new \Illuminate\Http\UploadedFile(resource_path('test-files/avatar.jpg'), 'avatar.jpg', null, null, true);

        // Убираем лишние элементы и присвиваем нужные значения
        unset($userInfo['email_verified_at']);
        unset($userInfo['role_id']);
        unset($userInfo['remember_token']);
        $userInfo['doc_copiya_passport'] = $file;
        $userInfo['doc_copiya_inn'] = $file;
        $userInfo['doc_copiya_snils'] = $file;
        $userInfo['doc_doverennost'] = $file;
        $userInfo['password'] = 'test1212';
        $userInfo['password_confirmation'] = 'test1212';

        $response = $this->post('/registration', $userInfo)->assertStatus(302)->assertSessionHas('registration_complete');;
        $this->assertEquals(session('registration_complete'), __('messages.registration_complete'));
        $this->assertDatabaseHas('users', ['name' => $userInfo['name']]);

    }
}
