<?php
function conversion(float $montant,string $devise){
    if($devise=="USD"){
        $resultat = $montant*1.22574;
    }
    if($devise=="EUR"){
        $resultat = $montant/1.22574;
    }

    return $resultat;
}