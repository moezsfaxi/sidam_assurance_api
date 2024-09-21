<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceSante extends Model
{
    use HasFactory;

    protected $table = 'assurance_sante';

    protected $fillable = ['type_client','prenom','tel','wtsp',
    'email','nom_beneficiaire','date_naissance','num_securite_social',
    'adresse','type_couvert','option_couvert','date_debut_couvert',
    'duree_couvert','date_echeance','created_at','created_by',
    'qualification','piece_jointe','description','validated_by',
    'inserted_by','option_paie','date_paie','date_paie_proch',
    'paiement','tranche_paye','etat_paie','cause_rejet','date_fin_couvert',
    'mode_paie','auth_prev','montant_total','premier_paiement',
    'activ_couvert'
];

 
    public $timestamps = false;
}
