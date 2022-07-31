<?php

namespace App\Interfaces;

interface CandidateRepositoryInterface 
{
    public function getAllCandidates();
    public function getCandidateById($candidateId);
    public function deleteCandidate($candidateId);
    public function createCandidate(array $candidateDetails);
    public function updateCandidate($candidateId, array $newDetails);
}