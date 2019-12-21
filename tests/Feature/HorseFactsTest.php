<?php

namespace Tests\Feature;

use App\Horsefact;
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

    /**
     * @test
     */
    public function the_endpoint_returns_a_random_selection_from_horsefacts()
    {
        // setup == seed
        $horseFacts = factory(Horsefact::class, 3)->create();

        // action == hit api endpoint (returns values from DB)
        $response = $this->post('/api/horsefact');

        // assertion == make sure that value was amongst the seeded data
        $this->assertTrue($horseFacts->pluck('fact')->contains($response->json()['fact']));
    }
}
