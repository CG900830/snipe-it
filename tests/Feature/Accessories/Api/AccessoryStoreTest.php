<?php

namespace Tests\Feature\Accessories\Api;

use App\Models\User;
use Tests\TestCase;

class AccessoryStoreTest extends TestCase
{
    public function testPermissionRequiredToStoreAccessory()
    {
        $this->actingAsForApi(User::factory()->create())
            ->postJson(route('api.accessories.store'))
            ->assertForbidden();
    }
}
