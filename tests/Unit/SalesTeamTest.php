<?php

use App\Models\SalesTeam;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(Tests\TestCase::class, RefreshDatabase::class);

beforeEach(function() {
    SalesTeam::factory()->create();
});

// check sales team index page
it('can visit sales team index page', function() {
    $response = $this->get('/sales_team');
    $response->assertStatus(200);
});

// check validations are working correctly
it('does not create a sales team without required fields.', function() {
    $response = $this->postJson('/sales_team', []);
    $response->assertStatus(422);
});

// show single sales team details by id
it('has sales team show route by id', function() {
    $salesTeam = SalesTeam::factory()->create();
    $response = $this->get("/sales_team/{$salesTeam->id}");
    $response->assertStatus(200);
});

// show sales team create page
it('can visit create a sales team route', function() {
    $response = $this->get('/sales_team/create');
    $response->assertStatus(200);
});

// check sales team store functionality and response details
it('can create a sales team', function() {
    $attributes = SalesTeam::factory()->raw();
    $response = $this->post('/sales_team', $attributes);
    $response->assertStatus(302)->assertRedirect(route('sales_team.index'));
    $this->assertDatabaseHas('sales_team', $attributes);
});

// check sales team edit route exists
it('has sales team edit route', function() {
    $salesTeam = SalesTeam::factory()->create();
    $response = $this->get('/sales_team/'. $salesTeam->id . '/edit');
    $response->assertStatus(200);
});

// update sales team details
it('can update sales team using sales team id', function() {
    $salesTeam = SalesTeam::factory()->create();
    $updateSalesTeam = [
        'person_name' => 'Updated person name',
        'email' => 'updateemail@test.com',
        'telephone' => '1',
        'current_route' => 'New York',
        'joined_date' => '2022-03-22',
        'comments' => 'updated comments',
        'created_at' => '2022-10-07 18:25:21',
        'updated_at' => '2022-10-07 18:25:21'
    ];
    $response = $this->put("/sales_team/{$salesTeam->id}", $updateSalesTeam);
    $response->assertStatus(302)->assertRedirect(route('sales_team.index'));
    $this->assertDatabaseHas('sales_team', [
        'id' => $salesTeam->id,
        'person_name' => 'Updated person name',
        'email' => 'updateemail@test.com',
        'telephone' => '1',
        'current_route' => 'New York',
        'joined_date' => '2022-03-22',
        'comments' => 'updated comments',
        'created_at' => '2022-10-07 18:25:21',
        'updated_at' => '2022-10-07 18:25:21'
    ]);
});

// delete sales team details
it('can delete sales team using sales team id', function() {
    $salesTeam = SalesTeam::factory()->create();
    $response = $this->delete("/sales_team/{$salesTeam->id}");
    $response->assertStatus(302)->assertRedirect(route('sales_team.index'));
});

// 302 response status code is not an error. Everything is OK. 
//That means that route to which successful login should be redirected has been found.