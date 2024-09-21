<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceRisqueAgricole extends Model
{
    use HasFactory;

    protected $table = 'assurance_risque_agricole';

    protected $fillable = ['nom_agri','type_exp','SIRET_SIREN',
    'adresse','tel','wtsp','email','superficie','type_culture',
    'val_equipement_agri','type_couvert','val_batiment_agri',
    'date_debut_couvert','date_fin_couvert','mode_paie','date_echeance',
    'created_at','created_by','qualification','piece_jointe',
    'description','non_paye','paiement','validated_by','inserted_by',
    'option_paie','date_paie','date_paie_proch','etat_paie','tranche_paye',
    'cause_rejet','auth_prev','activ_couvert','montant_total',
    'premier_paiement','montant_total_paye'

];

 
    public $timestamps = false;



}
