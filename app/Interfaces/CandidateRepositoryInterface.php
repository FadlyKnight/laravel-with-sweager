<?php

namespace App\Interfaces;

interface CandidateRepositoryInterface 
{
    public function getAllCandidates();
    public function getCandidateById(int $candidateId);
    public function deleteCandidate(int $candidateId);
    public function createCandidate(array $candidateDetails);
    public function updateCandidate(int $candidateId, array $newDetails);
}