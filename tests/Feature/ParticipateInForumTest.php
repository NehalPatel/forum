<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ParticipateInForumTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_authenticated_user_may_participate_in_forum_threads()
    {
        $this->be($user = factory('App\User')->create());

        $thread = factory('App\Thread')->create();

        $reply = factory('App\Reply')->make(['thread_id' => $thread->id]);
        $this->post('/threads/'.$thread->id.'/replies', $reply->toArray());

        $this->get('/threads/'.$thread->id)
            ->assertSee($reply->body);
    }
}