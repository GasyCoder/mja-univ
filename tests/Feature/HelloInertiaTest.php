<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;

class HelloInertiaTest extends TestCase
{
    use RefreshDatabase;

    public function test_hello_inertia_route_loads()
    {
        $response = $this->get('/hello-inertia');

        $response->assertStatus(200)
            ->assertInertia(fn (Assert $page) => $page
                ->component('Welcome')
                ->has('version')
            );
    }
}
