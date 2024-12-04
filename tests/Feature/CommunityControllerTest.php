<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Community;

class CommunityControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_show_a_community()
    {
        $community = Community::factory()->create();

        $response = $this->getJson(route('community.show', $community->id));

        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $community->id,
                     'name' => $community->name,
                     'tags' => $community->tags,
                     'description' => $community->description,
                     'image' => asset('storage/' . $community->image),
                 ]);
    }

    /** @test */
    public function it_can_create_a_community()
    {
        $data = [
            'name' => 'Sport Community',
            'tags' => 'Sport',
            'description' => 'A community for sports enthusiasts.',
        ];

        $response = $this->postJson(route('community.store'), $data);

        $response->assertStatus(200)
                 ->assertJson($data);

        $this->assertDatabaseHas('communities', $data);
    }
}