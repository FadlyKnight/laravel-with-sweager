<?php

namespace App\Repositories;

use App\Interfaces\CandidateRepositoryInterface;
use App\Candidate;
use App\Helpers\Helper;

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
        $helper = new Helper;
        $candidateDetails['resume'] =  $helper->uploadFile($candidateDetails['resume'], 'resume');
        return Candidate::create($candidateDetails);
    }

    public function updateCandidate($candidateId, array $newDetails){
        $helper = new Helper;
        if (request()->hasFile('resume')) {
            $newDetails['resume'] =  $helper->uploadFile($newDetails['resume'], 'resume');
        }
        return $this->getCandidateById($candidateId)->update($newDetails);
    }

}