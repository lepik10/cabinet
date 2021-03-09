<?php

namespace Tests\Feature;

use App\Models\FizInfo;
use App\Models\UrInfo;
use App\Models\IpInfo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
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

    public function testSeeSuccessMessageWhenCreatedNewFizUser()
    {
        $user = User::factory()->definition();
        $userInfo = array_merge($user, FizInfo::factory()->definition());

        // Создаем тестовый файл
        $file = new \Illuminate\Http\UploadedFile(resource_path('test-files/avatar.jpg'), 'avatar.jpg', null, null, true);

        // Убираем лишние элементы и присвиваем нужные значения
        unset($userInfo['email_verified_at']);
        $userInfo['role_id'] = 3;
        unset($userInfo['remember_token']);
        $userInfo['doc_copiya_passport'] = $file;
        $userInfo['doc_copiya_inn'] = $file;
        $userInfo['doc_copiya_snils'] = $file;
        $userInfo['doc_doverennost'] = $file;
        $userInfo['password'] = 'test1212';
        $userInfo['password_confirmation'] = 'test1212';

        $response = $this->post('/registration', $userInfo)->assertStatus(302)->assertSessionHas('registration_complete');
//        $response->dumpHeaders();
//
//        $response->dumpSession();
//
//        $response->dump();
        $this->assertEquals(session('registration_complete'), __('messages.registration_complete'));
        $this->assertDatabaseHas('users', ['name' => $userInfo['name']]);

    }

    public function testSeeSuccessMessageWhenCreatedNewUrUser()
    {
        $user = User::factory()->definition();
        $userInfo = array_merge($user, UrInfo::factory()->definition());

        // Создаем тестовый файл
        $file = new \Illuminate\Http\UploadedFile(resource_path('test-files/avatar.jpg'), 'avatar.jpg', null, null, true);

        // Убираем лишние элементы и присвиваем нужные значения
        unset($userInfo['email_verified_at']);
        unset($userInfo['remember_token']);
        $userInfo['role_id'] = 4;
        $userInfo['name_ur'] = $userInfo['name'];
        $userInfo['doc_copiya_inn'] = $file;
        $userInfo['doc_ogrn'] = $file;
        $userInfo['doc_egrul'] = $file;
        $userInfo['doc_copiya_polnomoch'] = $file;
        $userInfo['password'] = 'test1212';
        $userInfo['password_confirmation'] = 'test1212';

        $response = $this->post('/registration', $userInfo)->assertStatus(302)->assertSessionHas('registration_complete');
        $this->assertEquals(session('registration_complete'), __('messages.registration_complete'));
        $this->assertDatabaseHas('users', ['name' => $userInfo['name']]);

    }

    public function testSeeSuccessMessageWhenCreatedNewIpUser()
    {
        $user = User::factory()->definition();
        $userInfo = array_merge($user, IpInfo::factory()->definition());

        // Создаем тестовый файл
        $file = new \Illuminate\Http\UploadedFile(resource_path('test-files/avatar.jpg'), 'avatar.jpg', null, null, true);

        // Убираем лишние элементы и присвиваем нужные значения
        unset($userInfo['email_verified_at']);
        unset($userInfo['remember_token']);
        $userInfo['role_id'] = 5;
        $userInfo['doc_copiya_passport'] = $file;
        $userInfo['doc_copiya_inn'] = $file;
        $userInfo['doc_copiya_snils'] = $file;
        $userInfo['doc_doverennost'] = $file;
        $userInfo['doc_ogrnip'] = $file;
        $userInfo['password'] = 'test1212';
        $userInfo['password_confirmation'] = 'test1212';

        $response = $this->post('/registration', $userInfo)->assertStatus(302)->assertSessionHas('registration_complete');

//                $response->dumpHeaders();
//
//        $response->dumpSession();
//
//        $response->dump();

        $this->assertEquals(session('registration_complete'), __('messages.registration_complete'));
        $this->assertDatabaseHas('users', ['name' => $userInfo['name']]);

    }
}
