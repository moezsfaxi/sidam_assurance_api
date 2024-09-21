<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceIndividuelleAccidents extends Model
{
    use HasFactory;


    protected $table = 'assurance_individuelle_accidents';

    protected $fillable = ['type_client','nom','tel',"wtsp",
    "email","fonction","capital_deces","capital_invalidite_permanente",
    "montant_frais_medicaux","created_at","created_by","qualification",
    "piece_jointe","description","validated_by","inserted_by",
    "option_paie","date_paie","date_paie_proch","paiement",
    "etat_paie","tranche_paye","cause_rejet","date_debut_couvert",
    "date_fin_couvert","mode_paie","auth_prev","montant_total",
    "premier_paiement",'activ_couvert'
];

 
    public $timestamps = false;
}
