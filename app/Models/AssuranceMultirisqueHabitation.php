<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceMultirisqueHabitation extends Model
{
    use HasFactory;
    protected $table = 'assurance_multirisque_habitation';

    protected $fillable = ['type_client','tel','wtsp','adresse',
    'email','locataire_proprietaire','occupant','valeur_loyer_mensuel',
    'valeur_immeuble','valeur_contenu','valeur_degat_eau','valeur_vol',
    'valeur_bris_glaces','created_at','created_by','qualification',
    'piece_jointe','description','validated_by','inserted_by',
    'option_paie','date_paie','date_paie_proch','paiement','etat_paie',
    'tranche_paye','cause_rejet','date_debut_couvert','date_fin_couvert',
    'mode_paie','auth_prev','montant_total','premier_paiement',
    'activ_couvert'

];

 
    public $timestamps = false;


}
