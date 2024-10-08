<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssuranceAuto;
use App\Models\AssuranceIndividuelleAccidents;
use App\Models\AssuranceMultirisqueHabitation;
use App\Models\AssuranceMultirisqueProfessionnelle;
use App\Models\AssuranceRisqueAgricole;
use App\Models\AssuranceSante;
use App\Models\AssuranceTousRisquesChantiers;
use App\Models\AssuranceVoyage;
use App\Models\AssuranceTransport;
use LDAP\Result;

class MesPolicesController extends Controller
{
    
    public function getmealltheassurances($email)
    {
      $assuranceauto = AssuranceAuto::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance auto";
                                        return $item ;
                                    })->toArray();  
      $assuranceind = AssuranceIndividuelleAccidents::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance individuelle";
                                        return $item ;
                                    })->toArray();      
                                             
      $assurancehab = AssuranceMultirisqueHabitation::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance habitation";
                                        return $item ;
                                    })->toArray();      
      $assurancepro = AssuranceMultirisqueProfessionnelle::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance pro";
                                        return $item ;
                                    })->toArray();                                 
            
      $assuranceagri = AssuranceRisqueAgricole::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance agricole";
                                        return $item ;
                                    })->toArray();   

      $assurancesante = AssuranceSante::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance santé";
                                        return $item ;
                                    })->toArray();   

      $assurancechantiers = AssuranceTousRisquesChantiers::select('montant_total','premier_paiement')
                                    ->where("email_resp",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance chantiers";
                                        return $item ;
                                    })->toArray();    

      $assurancevoyage = AssuranceVoyage::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance voyage";
                                        return $item ;
                                    })->toArray();    
      $assurancetransport = AssuranceTransport::select('montant_total','premier_paiement')
                                    ->where("email",$email)
                                    ->where('activ_couvert', 'active')
                                    ->get()->map(function($item){
                                        $item["type_assurance"] = "assurance transport";
                                        return $item ;
                                    })->toArray();    
       $result=array_merge(
        $assuranceauto,$assuranceind,$assurancehab,$assurancepro,$assuranceagri,
        $assurancesante,$assurancechantiers,$assurancevoyage,$assurancetransport);  
        
        if ($result) {
            //var_dump($result);
            return response()->json($result, 200);
        } else {
            return response()->json(['message' => 'you are in a big trouble '], 404);
        }
    }



}
