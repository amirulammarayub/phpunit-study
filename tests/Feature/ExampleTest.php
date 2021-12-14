<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::create([
            'name' => 'ammar',
            'email' => 'ammar@test.com',
            'password' => '$2y$10$wGXBVx3f2P8BUiyG7mayvuMikp5ucHiLOT3PJD/JoT2LC1UFCJn52'
        ]);
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
