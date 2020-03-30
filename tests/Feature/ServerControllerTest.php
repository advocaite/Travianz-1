<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ServerControllerTest extends TestCase
{
//    use RefreshDatabase, WithFaker;

    /** @test */
    public function servers_database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('servers', [
                'id',
                'language_id',
                'name',
                'player_limit',
                'start_at',
                'locked',
                'state',
                'ord',
                'created_at',
                'updated_at',
            ]), 1);
    }
}
