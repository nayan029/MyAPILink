<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface SkillRepositoryInterface
{
    public function getSingleSkill($id);

    public function storeSkill(Request $request);

    public function updateSkill(Request $request,$id);

    public function destroySkill($id);

    public function getSkillData(Request $request);
}