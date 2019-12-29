<?php

namespace Tests\Unit;
use App\Http\Controllers\EnseignantController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
class EnseignantTest extends TestCase
{ use WithFaker;
    /** @test*/
     
   
    public function test_ajouter_un_enseignant()
{    $request=new Request();
    
  
         $request['name']=$this->faker->lastName;
         $request['prenom']=$this->faker->firstName;
         $request['email']=$this->faker->email;
         $request['date_naissance']=$this->faker->date;
         $request['lieu_naissance']=$this->faker->word;
         $request['num_inscr']=$this->faker->randomNumber();
         $request['grade']=$this->faker->word;
         $request['date_rec']=$this->faker->date;
         $enseignantcntr=new EnseignantController();
         $enseignant=$enseignantcntr->store($request);
        
        
       
        $this->assertDatabaseHas('users',['name'=>$request['name']]);
        $this->assertDatabaseHas('users',['prenom'=>$request['prenom']]);
        $this->assertDatabaseHas('users',['email'=>$request['email']]);
        $this->assertDatabaseHas('users',['date_naissance'=>$request['date_naissance']]);
        $this->assertDatabaseHas('users',['lieu_naissance'=>$request['lieu_naissance']]);
        $this->assertDatabaseHas('users',['num_inscr'=>$request['num_inscr']]);
        $this->assertDatabaseHas('enseignant',['grade'=>$request['grade']]);
        $this->assertDatabaseHas('enseignant',['date_rec'=>$request['date_rec']]);
      
       
    }
}
