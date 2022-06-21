<?php
$start = microtime(true);
$profundidadeBuraco = 20;
$metadeBuraco = $profundidadeBuraco / 2;
$sobe = 5;
$cai = 3;
$pausa = 1;
$altura = 0;
$subiu = 0;


echo "<H1> A MINHOCA ESTA SUBINDO </H1>";
$comecou = date('h:i:s');
while ($altura < $metadeBuraco) {
    $altura = $altura + $sobe;
    $subiu++;
    $altura = $altura - $cai;
    sleep($pausa);
}
echo "<div style='background-color:yellow; width:50%; font-size: 20px;'>
A minhoca chegou na metade do buraco após subir $subiu vezes.
</div><BR>";
while ($altura < $profundidadeBuraco) { // O loop será rodado enquanto ela ainda estiver no buraco
    $altura = $altura + $sobe;
    $subiu++;
    $altura = $altura - $cai;
    sleep($pausa);
}
echo "<div style='background-color:SpringGreen; width:50%; font-size: 20px;'>
A minhoca saiu do buraco após subir $subiu vezes.
</div><BR>
<BR>";
$saiu = date('h:i:s');
echo "A minhoca começou a subir o buraco as: $comecou e saiu do buraco as: $saiu";