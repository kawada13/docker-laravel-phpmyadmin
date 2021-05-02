<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Category;
use App\Product;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        factory(Category::class, 5)->create();

        $response = $this->json('GET', route('category.index'));

        $response
            ->assertStatus(200)
            ->assertJson(['message' => '成功']);
    }
}
