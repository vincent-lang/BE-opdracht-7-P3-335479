<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class routeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_route(): void
    {
        $response = $this->get('/leveranciers');
        $response2 = $this->get('/leveranciers/{leverancier}/{contact}');

        $response->assertStatus(200);
        $response2->assertStatus(404);
    }
}
