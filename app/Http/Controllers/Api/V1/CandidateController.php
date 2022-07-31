<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCandidate;
use App\Interfaces\CandidateRepositoryInterface;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    private CandidateRepositoryInterface $candidateRepository;

    public function __construct(CandidateRepositoryInterface $candidateRepository) 
    {
        $this->candidateRepository = $candidateRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = $this->candidateRepository->getAllCandidates();
        return response()->success($candidates, 'All Candidates');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCandidate $request)
    {
        $insertData = $request->all();
        $insertData['creator_id'] = auth()->user()->id;
        return response()->success($this->candidateRepository->createCandidate($insertData), 'Success Create Candidate');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = $this->candidateRepository->getCandidateById($id);
        return response()->success($candidate, 'Detail Candidate');        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->success($this->candidateRepository->updateCandidate($id, $request->all()), 'Success Update Candidate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->candidateRepository->deleteCandidate($id);
        return response()->success(null, 'Success Delete Candidate');    
    }
}
