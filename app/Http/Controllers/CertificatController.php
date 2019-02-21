<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificat;
use App\Agression;
use App\Medecin;
use App\Patient;
use App\Doleance;
use App\Traitement;
use App\Requisition;
use App\Examen;
use App\Conclusion;


class CertificatController extends Controller
{
  
    public function store(Request $request){
        $medecin=auth()->user()->medecin;
        $patient=Patient::create([
                'nom'=>$request->nom,
                'sexe'=>$request->sexe,
                'age'=>$request->age,
                'dateNaiss'=>$request->dateNaiss,
                'profession'=>$request->profession,
                'adresse'=>$request->adresse,
                'tel'=>$request->tel,
                'situation'=>$request->situation,
                'lieuNaiss'=>$request->lieuNaiss,
                'lateralisation'=>$request->lateralisation
        ]);
        $agression=Agression::create([
            'date'=>$request->date_agression,
            'heure'=>$request->heure_agression,
            'lieu'=>$request->lieu_agression,
            'sexeAgresseur'=>$request->sexeAgresseur,
            'nombreAgresseur'=>$request->nombreAgresseur,
            'lienAgresseur'=>$request->lienAgresseur,
            'moyenAgression'=>$request->moyenAgression,
            'description'=>$request->description
        ]);

        $doleance=Doleance::create([
            'contenu'=>$request->contenu_doleance
        ]);

        $traitement=Traitement::create([
            'contenu'=>$request->contenu_traitement
        ]);

        $conclusion=Conclusion::create([
            'contenu'=>$request->contenu_conclusion
        ]);

        $examen=Examen::create([
            'tempsAgressionExamen'=>$request->tempsAgressionExamen,
            'presenceRepresentantLegal'=>$request->presenceRepresentantLegal,
            'representantLegal'=>$request->representantLegal,
            'presenceInterprete'=>$request->presenceInterprete,
            'interprete'=>$request->interprete,
            'presenceEtatAnterieur'=>$request->presenceEtatAnterieur,
            'etatAnterieur'=>$request->etatAnterieur,
            'taille'=>$request->taille,
            'poids'=>$request->poids,
            'tension'=>$request->tension,
            'examenPhysique'=>$request->examenPhysique,
            'examenPsychique'=>$request->examenPsychique
        
        ]);
        $requisition=Requisition::create([
            'contenu'=>$request->contenu_requistion,
            'centreSante'=>$request->centreSante,
            'requerant'=>$request->requerant,
            'fonctionRequerant'=>$request->fonctionRequerant,
            'date'=>$request->date_requistion,
            'heure'=>$request->heure_requistion
        ]);

        $certificat=Certificat::create([
            'libelle'=>$request->libelle,
            'numero'=>$request->numero,
            'date'=>$request->date,
            'heure'=>$request->heure,
            'lieu'=>$request->lieu,
            'RJ'=>$request->RJ,
            'recepteur'=>$request->recepteur,
            'presents'=>$request->presents,
            'medecin_id'=>$medecin->id,
            'patient_id'=>$patient->id,
            'agression_id'=>$agression->id,
            'doleance_id'=>$doleance->id,
            'traitement_id'=>$traitement->id,
            'requisition_id'=>$requisition->id,
            'examen_id'=>$examen->id,
            'conclusion_id'=>$conclusion->id
        ]);
        $certificat=Certificat::with(['medecin','patient','agression','doleance','traitement','requisition','examen','conclusion'])->find($certificat->id);
        return response()->json(['success' => true, 'data'=> [ 'certificat' => $certificat ]], 200);
    }
    public function getCertificat($id){
        $certificat=Certificat::with(['medecin','patient','agression','doleance','traitement','requisition','examen','conclusion'])->find($id);
        return response()->json(['success' => true, 'data'=> [ 'certificat' => $certificat ]], 200);
    }

}
