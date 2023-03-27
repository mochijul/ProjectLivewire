<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_main_layout(){
        $this->view("layouts.app")
            ->assertSee("Laravel Livewire");
    }

    public function test_auth_register(){
        $this->view('auth.register')
            ->assertSee("Please register");
    }
}
