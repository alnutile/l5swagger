<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiExampleControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_random_quote(): void
    {
        $data = $this->get(route('api.example.quote.random'))->assertOk()->json();
        $this->assertArrayHasKey("data", $data);
        $this->assertNotNull("data", $data['data']);
    }

    public function test_all_quotes(): void
    {
        $this->get(route('api.example.quote.index'))->assertOk();
    }
}
