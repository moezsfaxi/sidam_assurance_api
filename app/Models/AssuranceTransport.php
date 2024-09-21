<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssuranceTransport extends Model
{
    use HasFactory;

    protected $table = 'assurance_transport';

    protected $fillable = ['nom_entreprise_transp','type_transport',
    'nature_marchandises','SIRET_SIREN','adress','tel','wtsp',
    'email','mode_transport','date_debut_transp','duree_estimee_transp',
    'option_couvert','created_at','created_by','qualification',
    'piece_jointe','description','validated_by','inserted_by',
    'option_paie','date_paie','date_paie_proch','paiement',
    'tranche_paye','etat_paie','cause_rejet','date_debut_couvert',
    'date_fin_couvert','mode_paie','auth_prev','montant_total',
    'premier_paiement','activ_couvert'];

 
    public $timestamps = false;
}
