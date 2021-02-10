<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dish;

class ApiShowTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        Dish::factory()->create(['name'=>'Cansalada fumada']);
        $response = $this->getJson('/api/dishes/1');

        $response->assertStatus(200)
                ->assertJsonFragment(['name'=>'Cansalada fumada']);
    }
}
