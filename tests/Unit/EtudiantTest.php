<?php

namespace Tests\Unit;
use App\Http\Controllers\EtudiantController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use cWithFaker;
use  Illuminate\Foundation\Testing\DatabaseTransactions;
use  Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
class EtudiantTest extends TestCase
{ use WithFaker;
    /**@test
     */   
     public function test_ajouter_un_etudiant()
    {
        $request=new Request();
    
  
        $request['name']=$this->faker->lastName;
        $request['prenom']=$this->faker->firstName;
        $request['email']=$this->faker->email;
        $request['date_naissance']=$this->faker->date;
        $request['lieu_naissance']=$this->faker->word;
        $request['num_inscr']=$this->faker->randomNumber();
        $request['année']=$this->faker->date;
        $request['groupe']=$this->faker->word;
        $etudiantcntr=new EtudiantController();
        $etudiant=$etudiantcntr->store($request);
       
       
      
       $this->assertDatabaseHas('users',['name'=>$request['name']]);
       $this->assertDatabaseHas('users',['prenom'=>$request['prenom']]);
       $this->assertDatabaseHas('users',['email'=>$request['email']]);
       $this->assertDatabaseHas('users',['date_naissance'=>$request['date_naissance']]);
       $this->assertDatabaseHas('users',['lieu_naissance'=>$request['lieu_naissance']]);
       $this->assertDatabaseHas('users',['num_inscr'=>$request['num_inscr']]);
       $this->assertDatabaseHas('etudinat',['année'=>$request['année']]);
       $this->assertDatabaseHas('etudinat',['groupe'=>$request['groupe']]);
    }
}
