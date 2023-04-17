<?php

declare(strict_types=1);

namespace Tests\Feature\Controller;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

final class CreateCustomerControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_http_ok(): void
    {
        $response = $this->postJson('/api/customers', [
            'last_name' => 'John',
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'data' => [
                    "birthday" => null,
                    "first_name" => "",
                    "last_name" => "John",
                    "memo" => "",
                    "residence_city" => "",
                    "residence_pref" => "",
                    "residence_street" => "",
                    "residence_zip_code" => ""
                ],
            ]);
    }
}
