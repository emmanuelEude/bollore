<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificat extends BaseModel
{
    public function medecin(){
        return $this->belongsTo(Medecin::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function agression(){
        return $this->belongsTo(Agression::class);
    }
    public function doleance(){
        return $this->belongsTo(Doleance::class);
    }

    public function traitement(){
        return $this->belongsTo(Traitement::class);
    }
    public function requisition(){
        return $this->belongsTo(Requisition::class);
    }
    public function examen(){
        return $this->belongsTo(Examen::class);
    }
    public function conclusion(){
        return $this->belongsTo(Conclusion::class);
    }
}

