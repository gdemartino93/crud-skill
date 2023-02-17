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
        // riceviamo gli oggetti in formato personalizzato come da SkillResource
        $skills = SkillResource::collection(Skill::paginate(1));
        // ritorniamo gli oggetti in formato standard json

        // $skills = Skill::paginate(1);
        
        return response() -> json([
            'results' => $skills,
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
