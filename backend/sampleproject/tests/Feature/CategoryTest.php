<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Category;
use App\Product;
use App\User;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // テストユーザー作成
        $this->user = factory(User::class)->create();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {

        factory(Category::class, 5)->create();

        $response = $this->actingAs($this->user)
                         ->json('GET', route('category.index'));
        $response
            ->assertStatus(200)
            ->assertJson(['message' => '成功']);
    }
}
