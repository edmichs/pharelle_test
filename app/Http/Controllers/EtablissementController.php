<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEtablissementRequest;
use App\Http\Requests\UpdateEtablissementRequest;
use App\Repositories\EtablissementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class EtablissementController extends AppBaseController
{
    /** @var  EtablissementRepository */
    private $etablissementRepository;

    public function __construct(EtablissementRepository $etablissementRepo)
    {
        $this->etablissementRepository = $etablissementRepo;
    }

    /**
     * Display a listing of the Etablissement.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');

        $firebase = (new Factory)

        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://monimoo-29336.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();
        $ref = $database->getReference('etablissements');
        $etabs = $ref->getValue();
        foreach ($etabs as $etab) {
            $etablissements[] = $etab;
        }
        // $etablissements = $this->etablissementRepository->all();

         return view('etablissements.index')
            ->with('etablissements', $etablissements);
    }

    /**
     * Show the form for creating a new Etablissement.
     *
     * @return Response
     */
    public function create()
    {
        return view('etablissements.create');
    }

    /**
     * Store a newly created Etablissement in storage.
     *
     * @param CreateEtablissementRequest $request
     *
     * @return Response
     */
    public function store(CreateEtablissementRequest $request)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');

        $firebase = (new Factory)

        ->withServiceAccount($serviceAccount)
        ->create();

        $database = $firebase->getDatabase();
        $ref = $database->getReference('etablissements');
        $key = $ref->push()->getKey();
        $ref->getChild($key)->set([
            'name' => $request->get('name'),
            'location' => $request->get('location'),
            'description' => $request->get('description')
        ]);
        

        // $input = $request->all();

        // $etablissement = $this->etablissementRepository->create($input);

        Flash::success('Etablissement saved successfully.');

         return redirect(route('etablissements.index'));
    }

    /**
     * Display the specified Etablissement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $etablissement = $this->etablissementRepository->find($id);

        if (empty($etablissement)) {
            Flash::error('Etablissement not found');

            return redirect(route('etablissements.index'));
        }

        return view('etablissements.show')->with('etablissement', $etablissement);
    }

    /**
     * Show the form for editing the specified Etablissement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $etablissement = $this->etablissementRepository->find($id);

        if (empty($etablissement)) {
            Flash::error('Etablissement not found');

            return redirect(route('etablissements.index'));
        }

        return view('etablissements.edit')->with('etablissement', $etablissement);
    }

    /**
     * Update the specified Etablissement in storage.
     *
     * @param int $id
     * @param UpdateEtablissementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEtablissementRequest $request)
    {
        $etablissement = $this->etablissementRepository->find($id);

        if (empty($etablissement)) {
            Flash::error('Etablissement not found');

            return redirect(route('etablissements.index'));
        }

        $etablissement = $this->etablissementRepository->update($request->all(), $id);

        Flash::success('Etablissement updated successfully.');

        return redirect(route('etablissements.index'));
    }

    /**
     * Remove the specified Etablissement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $etablissement = $this->etablissementRepository->find($id);

        if (empty($etablissement)) {
            Flash::error('Etablissement not found');

            return redirect(route('etablissements.index'));
        }

        $this->etablissementRepository->delete($id);

        Flash::success('Etablissement deleted successfully.');

        return redirect(route('etablissements.index'));
    }
}
