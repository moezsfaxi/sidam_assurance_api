<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceTousRisquesChantiers extends Model
{
    use HasFactory;

    protected $table = 'assurance_tous_risques_chantiers';

    protected $fillable = ['nom_projet','type_chantier','num_permis_const',
    'adresse','tel_resp','email_resp','nom_entrepreneur','val_total_projet',
    'description_travaux','date_debut_travaux','date_prevue_achevement',
    'type_couvert','val_equipements','created_at','created_by',
    'qualification','piece_jointe','description','validated_by','inserted_by',
    'option_paie','date_paie','date_paie_proch','paiement',
    'etat_paie','tranche_paye','cause_rejet','date_debut_couvert',
    'date_fin_couvert','mode_paie','auth_prev','montant_total',
    'premier_paiement','activ_couvert'];

 
    public $timestamps = false;
}
