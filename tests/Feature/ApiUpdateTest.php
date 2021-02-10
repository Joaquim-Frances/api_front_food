<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dish;

class ApiUpdateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update_dish()
    {
        Dish::factory()->create(['name'=>'Pa amb tomaquet']);
        $dish = ['name' => 'acelgas', 'description'=>'No ricas','price'=>'12'];
        $response= $this->putJson('/api/dishes/1', $dish);

        $response->assertStatus(200);
                $this->assertDatabaseCount('dishes', 1);
                $this->assertDatabaseHas('dishes', ['name'=>'acelgas']);

    }
}
