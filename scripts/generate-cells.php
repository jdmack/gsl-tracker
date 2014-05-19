<?php

    $host     = "localhost";
    $dbname   = "gsl";
    $username     = "gsltracker";
    $password = "9Wa5r2A8YTxbZAd&K3B5";

$cellIDs = Array(
    "r32gam1g1", "r32gam1g2", "r32gam1g3", "r32gam2g1", "r32gam2g2",
    "r32gam2g3", "r32gam3g1", "r32gam3g2", "r32gam3g3", "r32gam4g1",
    "r32gam4g2", "r32gam4g3", "r32gam5g1", "r32gam5g2", "r32gam5g3",
    "r32gbm1g1", "r32gbm1g2", "r32gbm1g3", "r32gbm2g1", "r32gbm2g2",
    "r32gbm2g3", "r32gbm3g1", "r32gbm3g2", "r32gbm3g3", "r32gbm4g1",
    "r32gbm4g2", "r32gbm4g3", "r32gbm5g1", "r32gbm5g2", "r32gbm5g3",
    "r32gcm1g1", "r32gcm1g2", "r32gcm1g3", "r32gcm2g1", "r32gcm2g2",
    "r32gcm2g3", "r32gcm3g1", "r32gcm3g2", "r32gcm3g3", "r32gcm4g1",
    "r32gcm4g2", "r32gcm4g3", "r32gcm5g1", "r32gcm5g2", "r32gcm5g3",
    "r32gdm1g1", "r32gdm1g2", "r32gdm1g3", "r32gdm2g1", "r32gdm2g2",
    "r32gdm2g3", "r32gdm3g1", "r32gdm3g2", "r32gdm3g3", "r32gdm4g1",
    "r32gdm4g2", "r32gdm4g3", "r32gdm5g1", "r32gdm5g2", "r32gdm5g3",
    "r32gem1g1", "r32gem1g2", "r32gem1g3", "r32gem2g1", "r32gem2g2",
    "r32gem2g3", "r32gem3g1", "r32gem3g2", "r32gem3g3", "r32gem4g1",
    "r32gem4g2", "r32gem4g3", "r32gem5g1", "r32gem5g2", "r32gem5g3",
    "r32gfm1g1", "r32gfm1g2", "r32gfm1g3", "r32gfm2g1", "r32gfm2g2",
    "r32gfm2g3", "r32gfm3g1", "r32gfm3g2", "r32gfm3g3", "r32gfm4g1",
    "r32gfm4g2", "r32gfm4g3", "r32gfm5g1", "r32gfm5g2", "r32gfm5g3",
    "r32ggm1g1", "r32ggm1g2", "r32ggm1g3", "r32ggm2g1", "r32ggm2g2",
    "r32ggm2g3", "r32ggm3g1", "r32ggm3g2", "r32ggm3g3", "r32ggm4g1",
    "r32ggm4g2", "r32ggm4g3", "r32ggm5g1", "r32ggm5g2", "r32ggm5g3",
    "r32ghm1g1", "r32ghm1g2", "r32ghm1g3", "r32ghm2g1", "r32ghm2g2",
    "r32ghm2g3", "r32ghm3g1", "r32ghm3g2", "r32ghm3g3", "r32ghm4g1",
    "r32ghm4g2", "r32ghm4g3", "r32ghm5g1", "r32ghm5g2", "r32ghm5g3",
    "r16gam1g1", "r16gam1g2", "r16gam1g3", "r16gam2g1", "r16gam2g2",
    "r16gam2g3", "r16gam3g1", "r16gam3g2", "r16gam3g3", "r16gam4g1",
    "r16gam4g2", "r16gam4g3", "r16gam5g1", "r16gam5g2", "r16gam5g3",
    "r16gbm1g1", "r16gbm1g2", "r16gbm1g3", "r16gbm2g1", "r16gbm2g2",
    "r16gbm2g3", "r16gbm3g1", "r16gbm3g2", "r16gbm3g3", "r16gbm4g1",
    "r16gbm4g2", "r16gbm4g3", "r16gbm5g1", "r16gbm5g2", "r16gbm5g3",
    "r16gcm1g1", "r16gcm1g2", "r16gcm1g3", "r16gcm2g1", "r16gcm2g2",
    "r16gcm2g3", "r16gcm3g1", "r16gcm3g2", "r16gcm3g3", "r16gcm4g1",
    "r16gcm4g2", "r16gcm4g3", "r16gcm5g1", "r16gcm5g2", "r16gcm5g3",
    "r16gdm1g1", "r16gdm1g2", "r16gdm1g3", "r16gdm2g1", "r16gdm2g2",
    "r16gdm2g3", "r16gdm3g1", "r16gdm3g2", "r16gdm3g3", "r16gdm4g1",
    "r16gdm4g2", "r16gdm4g3", "r16gdm5g1", "r16gdm5g2", "r16gdm5g3",
    "r8d1m1g1", "r8d1m1g2", "r8d1m1g3", "r8d1m1g4", "r8d1m1g5", "r8d1m2g1",
    "r8d1m2g2", "r8d1m2g3", "r8d1m2g4", "r8d1m2g5", "r8d2m1g1", "r8d2m1g2",
    "r8d2m1g3", "r8d2m1g4", "r8d2m1g5", "r8d2m2g1", "r8d2m2g2", "r8d2m2g3",
    "r8d2m2g4", "r8d2m2g5", "r4d1m1g1", "r4d1m1g2", "r4d1m1g3", "r4d1m1g4",
    "r4d1m1g5", "r4d1m2g1", "r4d1m2g2", "r4d1m2g3", "r4d1m2g4", "r4d1m2g5",
    "finalg1", "finalg2", "finalg3", "finalg4", "finalg5", "finalg6",
    "finalg7",
);

    $rows_affected = 0;
    $code = 's';
    $season = 1;
    $user = 1;
    $value = "unwatched";

    try
    {
        $DBH = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

        foreach ($cellIDs as $thisID)
        {
            $STH = $DBH->prepare("INSERT INTO status (name,value,code,season,user) values (:name,:value,:code,:season,:user)");
            $STH->bindParam(':name', $thisID); 
            $STH->bindParam(':value', $value); 
            $STH->bindParam(':code', $code); 
            $STH->bindParam(':season', $season); 
            $STH->bindParam(':user', $user); 
            $rows_affected += $STH->execute();
        }

    }

    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $DBH = null;  

    echo "Rows Affected: $rows_affected\n";

?>
