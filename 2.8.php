<?php
require_once("cadenas.php");

$texto = "";
$resultado = "";
$accion = "";

if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    $accion = $_POST['accion'];

    if ($accion == "contar") {
        $resultado = "Caracteres: " . contarCaracteres($texto);
    }
    if ($accion == "mayus") {
        $resultado = "Mayusculas: " . aMayusculas($texto);
    }
    if ($accion == "minus") {
        $resultado = "Minusculas: " . aMinusculas($texto);
    }
    if ($accion == "invertir") {
        $resultado = "Invertida: " . invertirCadena($texto);
    }
    if ($accion == "palindromo") {
        $resultado = esPalindromo($texto);
    }
    if ($accion == "vocales") {
        $resultado = "Vocales: " . contarVocales($texto);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadenas</title>
    <link rel="stylesheet" href="styles.css">   
</head>
<body>
        <div class="contenedor">
        <h2>Operaciones con Cadenas</h2>
        <form method="POST" action="">
            <label>Escribe una palabra o frase:</label><br>
            <input type="text" name="texto" value="<?php echo $texto; ?>" required><br><br>
            
            <button type="submit" name="accion" value="contar">Contar caracteres</button>
            <button type="submit" name="accion" value="mayus">A mayusculas</button>
            <button type="submit" name="accion" value="minus">A minusculas</button>
            <button type="submit" name="accion" value="invertir">Invertir</button>
            <button type="submit" name="accion" value="palindromo">Es palindromo?</button>
            <button type="submit" name="accion" value="vocales">Contar vocales</button>
        </form>

        <?php if ($resultado != "") { ?>
            <div class="resultado">
                <p><?php echo $resultado; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>