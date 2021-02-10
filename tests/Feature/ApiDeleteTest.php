<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dish;


class ApiDeleteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Api_Delete_Dish()
    {   
        $this->withoutExceptionHandling();
        Dish::factory()->create(['name'=>'Costillas de Cerdo']);

        $response = $this->deleteJson('/api/dishes/1');

        $response->assertStatus(202);
                $this->assertDatabaseCount('dishes', 0);
                $this->assertDatabaseMissing('dishes', ['name'=>'Costillas de Cerdo']);
            
    }

}