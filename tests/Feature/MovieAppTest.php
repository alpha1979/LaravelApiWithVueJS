<?php

namespace Tests\Feature;

use App\Models\Movie;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class MovieAppTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMovieShouldBeSuccessIfAllDataAresentViaPostRoute()
    {
        $formData = [
            'title'=>'NEw Thriller Movie',
            'quote'=>'The best quote from thriller movie'
        ];
        $this->post(route('movies.store'),$formData)->assertStatus(201);
    }
    public function testMovieShouldBeSuccessIfAllDataSentViaApiResources()
    {
        $formData = [
            'title'=>'NEw Thriller Movie',
            'quote'=>'The best quote from thriller movie'
        ];
        $this->post('/api/movies',$formData)->assertStatus(201);
    }
    public function testMovieShouldTrhowErrorIfTitleisMissing()
    {
        $formData = [
            
            'quote'=>'The best quote from thriller movie'
        ];
        $this->post('/api/movies',$formData)->assertStatus(500);
    }
  
}