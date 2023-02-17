<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        // tra le parentesi indichiamo quanti oggetti vogliamo ritornati in una pagina
        $skills = Skill::paginate(1);
        return response() -> json([
            'data' => $skills,
        ]);
    }

    public function show(Skill $skill){
        return new SkillResource($skill);
    }
    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response() ->json('Skill Created');
    }
    public function update(StoreSkillRequest $request , Skill $skill){
        $skill -> update($request -> validated());
        return response() ->json("Skill Updated");
    }
}
