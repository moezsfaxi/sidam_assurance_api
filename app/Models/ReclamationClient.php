<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamationClient extends Model
{
    use HasFactory;

    protected $table = 'reclamation_client';

    protected $fillable = ['num_reclamation','date_reclamation',
    'nom_client','type_assurance','type_reclamation','description_reclamation',
    'montant_reclame','statut_reclamation','date_maj','treated_by',
    'action_entreprise','documents_fournis','commentaires_agent',
    'temps_resolution','montant_accorde','motif_rejet','canal_reception',
    'date_cloture','satisfaction_client'];

 
    public $timestamps = false;
}
