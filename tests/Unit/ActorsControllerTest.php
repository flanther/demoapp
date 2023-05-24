<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ActorsControllerTest extends TestCase
{
    /**
     * Test for the right response code when valid input is given.
     */
    public function test_example(): void
    {
        $response = $this->get('/actors/10');
        $response->assertStatus(200);
    }

    /** @test 
     * Test for input that is out of range to ensure you receive 404.
    */
    public function out_of_bounds_test(): void
    {
        $response = $this->get('/actors/402');
        $response->assertStatus(404);
    }

    /** @test 
     * Test to ensure that the total number of records are equal to the number of records in the database.
     * We are just checking the count in this instance.
    */
    public function test_number_of_records(): void
    {
        $response = $this->get("/actor");
        $this->assertTrue(count(json_decode($response->original)) == 200);
    }
}
