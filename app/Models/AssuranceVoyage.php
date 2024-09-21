<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceVoyage extends Model
{
    use HasFactory;

    protected $table = 'assurance_voyage';

    protected $fillable = ['nom_voyageur','date_naissance','num_pass',
    'adresse','tel','wtsp','email','destination','date_depart',
    'date_retour','duree_voyage','motif_voyage','type_couvert',
    'montant_total','condition_medical','created_at','created_by',
    'qualification','piece_jointe','description','validated_by',
    'inserted_by','option_paie','date_paie','date_paie_proch',
    'paiement','etat_paie','tranche_paye','cause_rejet','date_debut_couvert',
    'date_fin_couvert','mode_paie','auth_prev','premier_paiement',
    'activ_couvert'];

 
    public $timestamps = false;
}
