<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceAuto extends Model
{
    use HasFactory;

    protected $table = 'assurance_auto';

    protected $fillable = ['type_client', 'nom',
    "date_naissance","raison sociale","tel","wtsp","email",
    "type_vehicule","nombre_place","puissance","charge_utile",
    "marque","modele","adresse","type_carburant","immatriculation",
    "date_premiere_mise_en_circulation","valeur_a_neuf","valeur_venale",
    "date_effet","duree_couvert","date_echeance","created_at",
    "created_by","qualification","piece_jointe","description",
    "contrat","paiement","validated_by","inserted_by","option_paie",
    "date_paie","date_paie_proch","etat_paie","tranche_paye",
    "cause_rejet","date_debut_couvert","date_fin_couvert",
    "mode_paie","auth_prev","montant_total","premier_paiement",
    "activ_couvert"

];

 
    public $timestamps = false;
}
