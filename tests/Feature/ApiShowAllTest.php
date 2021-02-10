<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dish;
use PHPUnit\Framework\assertJson;


class ApiShowAllTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Api_Get_All()
    {
        $this->withoutExceptionHandling();
        Dish::factory()->create(['name' => 'arepa']);

        $response = $this->getJson('/api/dishes');
        $response
            ->assertStatus(202)
            ->assertJsonFragment(['name' => 'arepa']);  
    }
}
