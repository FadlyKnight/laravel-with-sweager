<?php

namespace App\Repositories;

use App\Interfaces\CandidateRepositoryInterface;
use App\Candidate;

class CandidateRepository implements CandidateRepositoryInterface 
{
    public function getAllCandidates(){
        return Candidate::all();
    }

    public function getCandidateById($candidateId){
        return Candidate::find($candidateId);
    }

    public function deleteCandidate($candidateId){
        return $this->getCandidateById($candidateId)->delete();
    }

    public function createCandidate(array $candidateDetails){
        return Candidate::create($candidateDetails);
    }

    public function updateCandidate($candidateId, array $newDetails){
        return $this->getCandidateById($candidateId)->update($newDetails);
    }

}