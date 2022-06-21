<?php

//Nota-se que: realizei o desafio em php pois não conheço nodejs mas conheço a lógica de programação
//Tenho afinidade em php e utilizo bastante JavaScript

if (isset($_POST["Gravar"])) {
    $profundidadeBuraco = $_POST['prof'];
    $metadeBuraco = $profundidadeBuraco / 2;
    $sobe = $_POST['sobe'];
    $cai = $_POST['cai'];
    $pausa = 1;
    $altura = 0;
    $subiu = 0;
    $pausa = 1;
    $altura = 0;
    $subiu = 0;

    echo "<H2> A minhoca esta subindo </H2>";
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
    echo "<hr>";
}

?>
<H1>Altere os valores e clique em subir</H1>
<form method="POST">
    <div>
        <label>Profundidade do buraco </label>
        <div>
            <input type="number" name="prof" value="<?php echo $profundidadeBuraco; ?>">
        </div>
    </div>
    <div>
        <label>Quanto sobe </label>
        <div>
            <input type="number" name="sobe" value="<?php echo $sobe; ?>">
        </div>
    </div>
    <div>
        <label>Quanto cai </label>
        <div>
            <input type="number" name="cai" value="<?php echo $cai; ?>">
        </div>
    </div>
    <div>
        <div><button type="submit" name="Gravar" value="Gravar">Subir</button>
        </div>
    </div>
</form>