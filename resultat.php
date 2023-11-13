<?php

if (isset($_POST['user_name']) && isset($_POST['user_income'])&&isset($_POST['user_donation']) && isset($_POST['user_works'])) {
    $user_name = $_POST['user_name'];
    $user_income = $_POST['user_income'];
    $user_donation = $_POST['user_donation'];
    $user_works = $_POST['user_works'];

    //calcule de l'exoneration des dons
    $incomeAfterDonation = 0.25*$user_donation;
        if ($incomeAfterDonation>2000){
            $user_income-=2000;
        } else {
            $user_income-=$incomeAfterDonation;
        }
    

    //calcule de l'exoneration des travaux
    
        if($user_works<8000){
            $user_income-=$user_works;
        }else {
            $user_income-=8000;
        };

    //calcule de l'impot finale
    
        $calculateIncome = $user_income*0.15;
        var_dump($calculateIncome);
        if($user_income>15000){ 
         $calculateIncome= $calculateIncome + (($user_income-15000)*0.20);
        }
        
 

    //affichage du resultat
    if($user_income<0){
    echo "<p>votre impot est de : 0 francs<p>";
    } else {
    echo "<p>".$user_name." votre impot est de : ".$calculateIncome ." francs<p>";
    }


    
} else {
    
    echo "Veuillez remplir tous les champs ou mettre 0.";
};
?>