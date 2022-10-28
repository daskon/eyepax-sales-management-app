<?php

namespace Tests\Feature;

use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamTest extends TestCase
{
    public function test_display_list_of_teams_in_table()
    {
        $this->withoutExceptionHandling();

        $this->get(route('view-team.show'))
                    ->assertStatus(200);
    }

    public function test_create_new_team_member()
    {
        $this->withoutExceptionHandling();
        $list = Team ::factory()->create();
        $this->postJson(route('new-team.create'),[
                                    'name' => $list->name,
                                    'email' => $list->email,
                                    'tele' => $list->tele,
                                    'joined_date' => $list->joined_date,
                                    'comment' => $list->comment,
                                    'route' => $list->route
                                ])
            			->assertCreated()
            			->json();
    }
}
