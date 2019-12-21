<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HorseFactsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_post_request_can_be_sent_to_the_horsefacts_api_endpoint()
    {
        $response = $this->post('/api/horsefact');

        $response->assertStatus(200);
    }
}
