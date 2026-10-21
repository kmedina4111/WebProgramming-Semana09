<?php
    // Funcion - Calcular Area de un Cuadrado
    function CalArea(float $lado): float {
        return $lado * $lado;
    }

    // Inicializar variables
    $lado = "";
    $superficie = "";

    // Recuperar el valor ingresado en el formulario
    if (isset($_POST["lado"])) {
        $lado = $_POST["lado"];
    }

    // Calcular superficie si existe un valor ingresado
    if ($lado !== "") {
        $superficie = CalArea((float)$lado);
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
    <title>Caso02</title>
</head>
<style>.code-editor pre { height: 512px; overflow: auto; margin: 0; }</style>
<header class="container mt-4">
    <div class="row g-2 ">
        <h2 class="text-start mt-5 fw-bold col-sm-8">Caso 02 - Calculo de la Superficie de un Terreno Cuadrado</h2>
        <div class="col-sm-4 text-end mt-5">
            <a class="btn btn-primary" href="../index.php" role="button">&#x2190; Volver a la Pag. Principal</a>
        </div>
    </div>
</header>
<body>
    <main class="container mt-5">
        <section class="card-body">
            <article class="mb-3 pt-2 pb-0">
                <div class="border border-secondary rounded-3 bg-body-secondary px-3 py-2">
                    <strong>ENUNCIADO</strong><br>
                    Confeccionar una función que le enviemos como parámetro el valor del lado de un cuadrado y nos retorne su superficie.
                </div>
            </article>
        </section>
        <section class="row g-3">
            <article class="col-md-8">
                <div class="card border-secondary rounded-3 shadow-sm code-editor overflow-hidden">
                    <h2 class="card-header bg-primary-subtle fw-bold py-2 fs-6 mb-0">Visualizador de Codigo - PHP</h2>
                    <div class="card-body bg-dark p-0 rounded-bottom"> <!--vistor de codigo-->
                        <pre class="line-numbers language-php"><code class="language-php">&lt;?php
    // Funcion - Calcular Area de un Cuadrado
    function CalArea(float $lado): float {
        return $lado * $lado;
    }

    // Inicializar variables
    $lado = "";
    $superficie = "";

    // Recuperar el valor ingresado en el formulario
    if (isset($_POST["lado"])) {
        $lado = $_POST["lado"];
    }

    // Calcular superficie si existe un valor ingresado
    if ($lado !== "") {
        $superficie = CalArea((float)$lado);
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
                                <label class="form-label fw-bold fs-5">Calcular la Superficie de un Cuadrado</label><br>
                                <label class="form-label pb-2"><i>Calcula la superficie a partir de un lado.</i></label><br>
                                <label for="numero" class="form-label">Lado </label>
                                <input type="number" id="lado" name="lado" class="form-control" step="any" value="<?= htmlspecialchars($lado) ?>">
                                <div class="mt-3"> <!-- Label para mostrar el Resultado -->
                                    <label class="form-label fw-bold">La superficie del cuadrado es: <?= $superficie ?></label>
                                </div>
                                 <button type="submit" name="calcular" class="btn btn-primary mt-1 w-100">Calcular Superficie</button>
                            </div>
                        </form><hr>
                        <form method="POST" class="text-end mt-4">
                            <button type="submit" name="limpiar" class="btn btn-outline-secondary">&#x27F2; Limpiar todo</button>
                        </form>
                    </div>
                </div>
                <div class="text-center" style="padding-top: 104px;">
                    <a class="btn btn-primary w-100 py-2" href="apps/app_case02.php" role="button">Acceder a la Aplicacion</a>
                </div>
            </article>
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