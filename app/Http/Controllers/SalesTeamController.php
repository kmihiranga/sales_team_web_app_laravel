<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Eloquent\SalesTeam\SalesTeamRepository;

class SalesTeamController extends Controller
{
    private $salesTeamRepository;

    public function __construct(SalesTeamRepository $salesTeamRepository)
    {
        $this->salesTeamRepository = $salesTeamRepository;
    }

    /**
     * return all sales team list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesTeams = $this->salesTeamRepository->paginate();
        return view('sales_team.index', compact('salesTeams'));
    }

    /**
     * Show the form for creating a new sales team.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales_team.create');
    }

    /**
     * Store a newly created sales team.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate sales team
        $data = $this->validateSalesTeamRequest($request);
        // create a sales team detail
        $createSalesTeam = $this->salesTeamRepository->create($data);
        if($createSalesTeam) {
            return redirect(route('sales_team.index'))->with(['message' => 'Sales team created successfully!.', 'status' => 200]);
        } else {
            return redirect(route('sales_team.index'))->with(['message' => 'Error creating sales team details.', 'status' => 500]);
        }
    }

    /**
     * Display the specified sales team by id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salesTeamById = $this->salesTeamRepository->find($id);
        return view('sales_team.show', compact('salesTeamById'));
    }

    /**
     * Show the form for editing the sales team.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find sales team by id
        $salesTeamById = $this->salesTeamRepository->find($id);
        return view('sales_team.edit', compact('salesTeamById'));
    }

    /**
     * Update sales team details by id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate sales team request
        $this->validateSalesTeamRequest($request, $id);
        // find sales team by id
        $salesTeamById = $this->salesTeamRepository->find($id);
        // update sales team details related to the id
        $updateSalesTeamById = $salesTeamById->update($request->all());
        if($updateSalesTeamById) {
            return redirect(route('sales_team.index'))->with(['message' => 'Sales team details updated successfully!.', 'status' => 200]);
        } else {
            return redirect(route('sales_team.index'))->with(['message' => 'Error updating sales team details.', 'status' => 500]);
        }
    }

    /**
     * Remove sales team details by id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // find sales team by id
        $salesTeamById = $this->salesTeamRepository->find($id);
        $deleteSalesTeam = $this->salesTeamRepository->delete($salesTeamById->id);
        if($deleteSalesTeam) {
            return redirect(route('sales_team.index'))->with(['message' => 'Sales team deleted successfully!.', 'status' => 200]);
        } else {
            return redirect(route('sales_team.index'))->with(['message' => 'Error deleting sales team details.', 'status' => 500]);
        }
    }

    /**
     * validate sales team request
     * 
     * @param \Illuminate\Http\Request $request
     * @param String $id
     */
    public function validateSalesTeamRequest(Request $request, $id = NULL) 
    {
        return $this->validate($request, [
            'person_name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:sales_team,email,'.$id.',id,deleted_at,NULL',
            'telephone' => 'required|numeric',
            'current_route' => 'required|string',
            'joined_date' => 'required|date',
            'comments' => 'nullable|string'
        ]);
    }
}
