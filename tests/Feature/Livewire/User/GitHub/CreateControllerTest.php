<?php

namespace Tests\Feature\Livewire\User\GitHub;

use App\Http\Controllers\User\GitHub\CreateController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateControllerTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(CreateController::class);

        $component->assertStatus(200);
    }
}
