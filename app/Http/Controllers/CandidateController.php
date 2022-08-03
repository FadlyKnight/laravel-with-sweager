<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidate;
use App\Http\Requests\UpdateCandidate;
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
        return view('backend.candidate.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.candidate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCandidate  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCandidate $request)
    {
        $insertData = $request->all();
        $insertData['creator_id'] = auth()->user()->id;
        $this->candidateRepository->createCandidate($insertData);
        return redirect()->route('manage.candidate.index')->with('success','Success Create Candidate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = $this->candidateRepository->getCandidateById($id);
        return view('backend.candidate.show', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = $this->candidateRepository->getCandidateById($id);
        return view('backend.candidate.edit', compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCandidate  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidate $request, $id)
    {
        $this->candidateRepository->updateCandidate($id, $request->all());
        return redirect()->route('manage.candidate.index')->with('success','Success Update Candidate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->candidateRepository->deleteCandidate($id);
        return redirect()->back()->with('success','Success Delete Candidate');    
    }
}
