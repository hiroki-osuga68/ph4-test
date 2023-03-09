<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\BigQuestion;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        // 先にファクトリーして最新のDBにする
        $test_names = factory(BigQuestion::class)->create();
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("東京の難読地名クイズ");
        $response->assertSee($test_names->name);

    }
    
}
