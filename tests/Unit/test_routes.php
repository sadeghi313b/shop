<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class test_routes extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $routes = [
            'admin.index',
            'admin.create',
            'admin.store',
            'admin.show',
            'admin.edit',
            'admin.update',
            'admin.destroy'
        ];

        foreach ($routes as $route)
        {
            $response = $this->get($route);
            if ($response->getStatusCode() !== 200) {
                echo "Route failed: " . $route . "\n";
            }
            $response->assertStatus(200);
        }
        
    }
}
