<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Illuminate\Http\Response;
// use Laravel\Lumen\Testing\TestCase;
use App\Fruit;


class FruitControllerTest extends TestCase
{
    public function testGetFruit()
    {
        //Action to Take -- Get All the fruits
        $response = $this->call('GET', '/api/v1/fruits');

        // Expected behaviour -- To get an 'OK' response, getting all the fruits. 200 status code is OK.
        $this->assertEquals(200, $response->status());
    }

    public function testAddFruit()
    {
        //Action to Take -- Add a single fruits
        $response = $this->call('POST', '/api/v1/fruit', [
            'name'  => 'Tangerine',
            'season'  => 'November',
            'description'  => 'Looks like orange but sweeter, usually!',
            'images'  => 'iijijij'
        ]);

        // Expected behaviour -- To get an 'Created' response, Adding a new fruit. 201 status code is 'Created'.
        $this->assertEquals(201, $response->status());
    }

    public function testGetOneFruit()
    {
        // Action To Take -- Get a Single Fruit
        $response = $this->call('GET', 'api/v1/fruit/5');

        // Expected behaviour -- Return a response status code of 200. 
        $this->assertEquals(200, $response->status());
    }

    public function testUpdateFruit()
    {
        // Action To Take -- Update a particular fruit
        $response = $this->call('PUT', 'api/v1/fruit/5', [
            'name'  => 'Okro',
            'season'  => 'July',
            'description'  => 'Okro is very good for soup!',
            'images'  => 'uuuuuu'
        ]);

        // Expected behaviour -- Return a response status code of 201. 
        $this->assertEquals(201, $response->status());
    }

    public function testDeleteOneFruit()
    {
        // Action To Take -- Delete a Single Fruit
        $response = $this->call('DELETE', 'api/v1/fruit/5');

        // Expected behaviour -- Return a response status code of 204. 
        $this->assertEquals(204, $response->status());
    }
}
