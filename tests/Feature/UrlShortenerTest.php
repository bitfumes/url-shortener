<?php

namespace Tests\Feature;

use Tests\TestCase;

class UrlShortener extends TestCase
{
    /** @test */
    public function a_user_can_visit_url_shortener_route()
    {
        $this->withoutExceptionHandling();
        $this->get(route('url-shortener'))
                ->assertOk()
                ->assertSee('Url Shortener');
    }
}
