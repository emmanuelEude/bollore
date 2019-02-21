<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Doleance;
use App\Conclusion;
use App\Certificat2;
use App\Circonstance;

class Certificat2Controller extends Controller
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
      
        $circonstance=Circonstance::create([
            'lieu'=>$request->lieu_agression,
            'date'=>$request->date_agression,
            'heure'=>$request->heure_agression,
            'personnesMultiple'=>$request->personnesMultiple,
            'inconnu'=>$request->inconnu,
            'identiteAgresseur'=>$request->identiteAgresseur,
            'relationAgresseur'=>$request->relationAgresseur,
            'contraintePhysique'=>$request->contraintePhysique,
            'descriptionContraintePhysique'=>$request->descriptionContraintePhysique,
            'contraintePsychologique'=>$request->contraintePsychologique,
            'descriptionContraintePsychologique'=>$request->descriptionContraintePsychologique,
            'soumissionChimique'=>$request->soumissionChimique,
            'consomationAlcool'=>$request->consomationAlcool,
            'infosConsomationAlcool'=>$request->infosConsomationAlcool,
            'consomationMedocs'=>$request->consomationMedocs,
            'infosConsomationMedocs'=>$request->infosConsomationMedocs,
            'consomationStupefiant'=>$request->consomationStupefiant,
            'infosConsomationStupefiants'=>$request->infosConsomationStupefiants
            
        ]);

        $doleance=Doleance::create([
            'contenu'=>$request->contenu_doleance
        ]);

     

        $conclusion=Conclusion::create([
            'contenu'=>$request->contenu_conclusion
        ]);

        $requisition=Requisition::create([
            'contenu'=>$request->contenu_requistion,
            'centreSante'=>$request->centreSante,
            'requerant'=>$request->requerant,
            'fonctionRequerant'=>$request->fonctionRequerant,
            'date'=>$request->date_requistion,
            'heure'=>$request->heure_requistion
        ]);
         $description=Description::create([
            'moyen'=>$request->moyenUtiliser,
            'descriptionMoyen'=>$request->moyen,
            'utilisationPreservatif'=>$request->utilisationPreservatif,
            'declaration'=>$request->declaration
         ]);

        $certificat=Certificat2::create([
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
            'circonstance_id'=>$circonstance->id,
            'description_id'=>$description->id,
            'fait_id'=>$fait->id,
            'traitement2_id'=>$traitement2->id,
            'r_d_v_id'=>$r_d_v->id,
            'prelevement_id'=>$prelevement->id,
            'antecedent_id'=>$antecedent->id,
            'doleance_id'=>$doleance->id,
            'appreciation_id'=>$appreciation->id,
            'examen2_id'=>$examen->id,
            'conclusion_id'=>$conclusion->id
        ]);
        $certificat=Certificat2::with(['medecin','patient','agression','doleance','traitement','requisition','examen','conclusion'])->find($certificat->id);
        return response()->json(['success' => true, 'data'=> [ 'certificat' => $certificat ]], 200);
    }
    public function getCertificat($id){
        $certificat=Certificat2::with(['medecin','patient','agression','doleance','traitement','requisition','examen','conclusion'])->find($id);
        return response()->json(['success' => true, 'data'=> [ 'certificat' => $certificat ]], 200);
    }
}
