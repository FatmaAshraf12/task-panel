<?php
// tests/Unit/TaskServiceTest.php

namespace Tests\Unit;

use App\Http\Controllers\TaskController;
use Tests\TestCase;
use App\Services\TaskService;
use App\Models\User;
use App\Models\Task;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class TaskServiceTest extends TestCase
{

    protected TaskService $taskService;


    public function setUp(): void
    {
        parent::setUp();
        $this->taskService = $this->app->make(TaskService::class);
    }


    public function test_task_can_be_created()
    {
        $admin = User::factory()->create();
        $adminRole = Role::where('name', 'admin')->first();
        $admin->assignRole($adminRole);
        $this->actingAs($admin);

        $user = User::factory()->create();
        $userRole = Role::where('name', 'user')->first();
        $user->assignRole($userRole);


          // Simulate a POST request to a specific endpoint with data
          $response = $this->post('/store', [
            'user_id'=>$user->id,
            'admin_id'=>$admin->id,
            'title' => 'Test Task',
            'description' => 'This is a test task'
        ]);


        // Assert the response status code
        $response->assertRedirect('/');
    }

    public function test_task_not_be_created()
    {
        $admin = User::factory()->create();
        $adminRole = Role::where('name', 'admin')->first();
        $admin->assignRole($adminRole);
        $this->actingAs($admin);

        $user = User::factory()->create();
        $userRole = Role::where('name', 'user')->first();
        $user->assignRole($userRole);


          // Simulate a POST request to add task with unvalid data
          $response = $this->post('/store', [
            'user_id'=>$user->id,
            'admin_id'=>$admin->id
        ]);


        // Assert the response status code
        $response->assertRedirect('/create');
    }

    public function test_user_cannot_login()
    {
        $user = User::factory()->create();
        $userRole = Role::where('name', 'user')->first();
        $user->assignRole($userRole);
        $this->actingAs($user);

        // Simulate a get request to check user not admin login
        $response = $this->get('/create');

        // Assert the response status code
        $response->assertRedirect('/login');
    }

    
}
