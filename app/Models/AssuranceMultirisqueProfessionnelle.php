<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceMultirisqueProfessionnelle extends Model
{
    use HasFactory;

    protected $table = 'assurance_multirisque_professionnelle';

    protected $fillable = ['nom_entreprise','type_activite',
    'SIRET_SIREN','adresse','tel','wtsp','email','nom_resp',
    'nbr_emp','chiffre_aff_annuel','description_locaux','type_couvert',
    'valeur_biens_assures','date_debut_couvert','duree_couvert','date_echeance',
    'created_at','created_by','qualification','piece_jointe',
    'description','validated_by','inserted_by','option_paie',
    'date_paie','date_paie_proch','paiement','tranche_paye',
    'etat_paie','cause_rejet','date_fin_couvert','mode_paie',
    'auth_prev','montant_total','premier_paiement','activ_couvert'
];

 
    public $timestamps = false;
}
