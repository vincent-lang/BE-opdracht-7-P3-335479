<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class createTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create(): void
    {
        $response = $this->get('/leveranciers/edit/{leverancier}/{contact}');
        $response2 = $this->get('/leveranciers/store/{leverancier}/{contact}');

        $response->assertStatus(404);
        $response2->assertStatus(405);
    }
}
