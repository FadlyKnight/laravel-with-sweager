<?php

namespace Tests\Feature;

use App\Candidate;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\CreatesApplication;
use Tests\TestCase;

class CandidateTest extends TestCase
{
    use CreatesApplication, RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        // $this->seed();
        $this->artisan('passport:install');
    }

    protected $headers = [
        "Content-Type" => "application/json",
        "Accept" => "application/json",
    ];

    public function testLogin(){
        $user = factory(User::class)->create();
        $data["password"] = "password";
        $data['email'] = $user->first()->email;
        $response = $this->post(route('api.login'), $data, []);
        $response->assertStatus(200);
    }
    
    public function testLogout(){
        $user = factory(User::class)->create();
        $headers = $this->headers;
        $headers['Authorization'] = 'Bearer '.$user->createToken(env('APP_TOKEN_ENC','nApp'))->accessToken;
        $response = $this->post(route('api.logout'), [], $headers);
        $response->assertStatus(200);
    }
    
    public function testStoreCandidate(){
        $data = [
            'name' => 'Kara',
            'education' => 'Politeknik Negeri Pontianak',
            'birthday' => '1998-03-11',
            'experience' => '5 Year',
            'last_position' => 'CEO',
            'applied' => 'Senior PHP Developer',
            'top_skill' => 'Laravel, Mysql, PostgreSQL, Codeigniter, Java',
            'email' => 'fadlyknight@gmail.com',
            'phone' => '085123456789',
            'resume' => UploadedFile::fake()->create('test.pdf'),
        ];
        $headers = $this->headers;
        $user = factory(User::class)->create();
        $response = $this->actingAs($user, 'api')->post(route('api.candidate.store'), $data, []);
        $response->assertStatus(200);
    }
    
    public function testUpdateCandidate(){
        $data = [
            'name' => 'Inkara',
            'education' => 'Politeknik Negeri Pontianak',
            'birthday' => '1998-03-11'
        ];
        $user = factory(User::class)->create();
        $candidate = factory(Candidate::class)->create();
        $response = $this->actingAs($user,'api')->put(route('api.candidate.update',$candidate->first()->id), $data, []);
        $response->assertStatus(200);
    }
    
    public function testGetCandidate(){
        $headers["Authorization"] =  $this->headers;
        $user = factory(User::class)->create();
        $candidate = factory(Candidate::class)->create();
        $response = $this->actingAs($user,'api')->get(route('api.candidate.show',$candidate->first()->id), []);
        $response->assertStatus(200);
    }

    public function testListCandidate(){
        $user = factory(User::class)->create();
        $response = $this->actingAs($user,'api')->get(route('api.candidate.index'), []);
        $response->assertStatus(200);
    }
    
    public function testRemoveCandidate(){
        $headers =  $this->headers;
        $user = factory(User::class)->create();
        $candidate = factory(Candidate::class)->create();
        $response = $this->actingAs($user,'api')->delete(route('api.candidate.destroy',$candidate->first()->id),[], $headers);
        $response->assertStatus(200);
    }
    
}
