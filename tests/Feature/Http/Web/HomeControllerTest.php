<?php

namespace Tests\Feature\Http\Web;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function testExample() :void
    {
        $this->withoutMiddleware();


        $response = $this->get('/field');
        dd($response);
        $response->assertOk();
    }
}
