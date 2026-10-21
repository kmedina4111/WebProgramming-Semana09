<?php
    // Funcion - Calcular Cuadrado
    function CalCuadrado($num01) {
        return $num01 * $num01;
    }
    // Funcion - Calcular Producto
    function CalProducto($num01, $num02) {
        return $num01 * $num02;
    }
    // Inicializar variables
    $numeroCuadrado = "";
    $numeroProducto1 = "";
    $numeroProducto2 = "";
    $resultadoCalCuadrado = "";
    $resultadoCalProducto = "";
    // Recuperar los valores ingresados
    if (isset($_POST["numero"])) {
        $numeroCuadrado = $_POST["numero"];
    }
    if (isset($_POST["numero1"])) {
        $numeroProducto1 = $_POST["numero1"];
    }
    if (isset($_POST["numero2"])) {
        $numeroProducto2 = $_POST["numero2"];
    }
    // Calcular cuadrado si existe un numero ingresado
    if ($numeroCuadrado !== "") {
        $resultadoCalCuadrado = CalCuadrado($numeroCuadrado);
    }
    // Calcular producto si existen ambos numeros
    if ($numeroProducto1 !== "") {
        if ($numeroProducto2 !== "") {
            $resultadoCalProducto = CalProducto(
                $numeroProducto1,
                $numeroProducto2
            );
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css"> <!--dark style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.css"> <!--numeracion de la terminal-->
    <title>Caso01</title>
</head>
<style>.code-editor pre { height: 719px; overflow: auto; margin: 0; }</style>
<header class="container mt-4">
    <div class="row g-2 ">
        <h2 class="text-start mt-5 fw-bold col-sm-8">Caso 01 - Desarrollar dos Programas con dos Funciones</h2>
        <div class="col-sm-4 text-end mt-5">
            <a class="btn btn-primary" href="../index.php" role="button">&#x2190; Volver a la Pag. Principal</a>
        </div>
    </div>
</header>
<body>
    <main class="container mt-5">
        <section class="card-body">
            <article class="mb-3 pt-2">
                <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                    <strong>ENUNCIADO</strong><br>
                    <strong>A.</strong> Que solicite el ingreso de un número entero y muestre el cuadrado de dicho valor.
                    <strong>B.</strong> Que solicite la carga de dos valores (números enteros) y muestre el producto de los mismos.
                </div>
            </article>
        </section>
        <section class="row g-3">
            <article class="col-md-8">
                <div class="card border-secondary rounded-3 shadow-sm code-editor overflow-hidden">
                    <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-6 mb-0">Visualizador de Codigo - PHP</h2>
                    <div class="card-body bg-dark p-0 rounded-bottom"> <!--vistor de codigo-->
                        <pre class="line-numbers language-php"><code class="language-php">&lt;?php
    // Funcion - Calcular Cuadrado
    function CalCuadrado($num01) {
        return $num01 * $num01;
    }

    // Funcion - Calcular Producto
    function CalProducto($num01, $num02) {
        return $num01 * $num02;
    }

    // Inicializar variables
    $numeroCuadrado = "";
    $numeroProducto1 = "";
    $numeroProducto2 = "";
    $resultadoCalCuadrado = "";
    $resultadoCalProducto = "";

    // Recuperar los valores ingresados
    if (isset($_POST["numero"])) {
        $numeroCuadrado = $_POST["numero"];
    }
    if (isset($_POST["numero1"])) {
        $numeroProducto1 = $_POST["numero1"];
    }
    if (isset($_POST["numero2"])) {
        $numeroProducto2 = $_POST["numero2"];
    }

    // Calcular cuadrado si existe un numero ingresado
    if ($numeroCuadrado !== "") {
        $resultadoCalCuadrado = CalCuadrado($numeroCuadrado);
    }

    // Calcular producto si existen ambos numeros
    if ($numeroProducto1 !== "") {
        if ($numeroProducto2 !== "") {
            $resultadoCalProducto = CalProducto(
                $numeroProducto1,
                $numeroProducto2
            );
        }
    }
?&gt;</code></pre>
                    </div>
                </div>
            </article>
            <article class="col-md-4">
                <div class="card border-secondary rounded-3 shadow-sm">
                    <h2 class="card-header fw-bold py-2 fs-6 mb-0">Area de Resultado</h2>
                    <div class="card-body">
                        <form method="POST" class="pb-2"> 
                            <div class="pb-2">
                                <!-- Formulario 01-->
                                <label class="form-label fw-bold fs-5">Calcular el Cuadrado de un Numero</label><br>
                                <label class="form-label pb-2"><i>Calcula el cuadrado de un entero.</i></label><br>
                                <label for="numero" class="form-label">Número entero </label>
                                <input type="number" id="numero" name="numero" class="form-control" step="1" value="<?= htmlspecialchars($numeroCuadrado) ?>">
                                <div class="mt-3"> <!-- Label para mostrar el Resultado -->
                                    <label class="form-label fw-bold">El cuadrado del numero es: 
                                        <?php if ($resultadoCalCuadrado !== null) { echo $resultadoCalCuadrado; } ?>
                                    </label>
                                </div>
                                 <button type="submit" name="calcular" class="btn btn-primary mt-1 w-100">Calcular Cuadrado</button>
                            </div><hr>
                            <div>
                            <!-- Formulario 02-->
                            <label class="form-label fw-bold fs-5">Productos de 2 numeros</label><br>
                            <label class="form-label pb-2"><i>Multiplica dos numeros enteros.</i></label><br>
                            <label for="numero1" class="form-label">Primer número </label>
                            <input type="number" id="numero1" name="numero1" class="form-control mb-3" step="1" value="<?= htmlspecialchars($numeroProducto1) ?>">
                            <label for="numero2" class="form-label">Segundo número </label>
                            <input type="number" id="numero2" name="numero2" class="form-control mb-3" step="1" value="<?= htmlspecialchars($numeroProducto2) ?>">
                            <div class="mt-3">
                                <label class="form-label fw-bold">El producto de los números es:
                                 <?= $resultadoCalProducto ?? "" ?>
                                </label>
                            </div>
                            <button type="submit" name="multiplicar" class="btn btn-primary w-100">Calcular Producto</button>
                            </div>
                        </form><hr>
                        <form method="POST" class="text-end mt-4">
                            <button type="submit" name="limpiar" class="btn btn-outline-secondary">&#x27F2; Limpiar todo</button>
                        </form>
                    </div>
                </article>
            </section>
        <section class="mt-4 mb-4"> <!-- Se agrega mb-4 para dejar espacio al final de la pagina y que el desplazamiento con el touchpad se sienta mas natural -->
            <div class="text-center">
                <a class="btn btn-primary w-25" href="apps/app_case01.php" role="button">Acceder a la Aplicacion</a>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    <!-- sintaxis para php -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup-templating.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
    <!-- numeracion de la terminal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
</body>
</html>