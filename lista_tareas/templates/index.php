<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../libs/bootstrap-5.3.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../statics/styles/lista_tareas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <main>
        <!-- Navbar -->

    <!-- Principal -->
    <main>
        <div class="container my-3">
            <div class="row">
                <!------------------------------- FORMULARIO -------------------------------->
                <div class="col-12 col-md-4">
                    <section id="seccion_formulario">
                        <h1 class="h1">Nueva Tarea</h1>
                        <form method="post" enctype="multipart/form-data" id="formulario">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombreInput" name="nombre" required autocomplete="off">
                                <label for="nombre" class="form-label">Nombre</label>
                            </div>
                            <div class="form-check" >
                                <input class="form-check-input" type="checkbox" value="nueva_mat" id="checkbox" >
                                <!-- onclick="nuevaMateria()" -->
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                  Nueva Materia
                                </label>
                            </div>
                            <div class="form-floating mb-3" id="materiaAct">
                            <select class="form-select" aria-label="Default select example" name="materia" id = "selectMateria"require>
                                <option selected disabled>Materia</option>
                              </select>
                              <!-- <option value="Mate">Mate</option>
                              <option value="Biologia">Biología</option>
                              <option value="Literatura">Literatura</option> -->
                            </div> 
                            <!-- <input type="text" class="form-control" id="materiaAct" name="materia" required autocomplete="off">
                            <label for="materia" class="form-label">Materia</label> -->
                            <!-- <div class="form-floating mb-3" style="display:none" id="nuevaMat">
                                <input class="form-check-input" type="checkbox" value="nueva_mat" id="checkbox" onclick="nuevaMateria()">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                  Nueva Materia
                                </label>
                            </div>  -->
                            <div class="d-grid gap-2"><br>
                                <button type="submit" class="btn btn-success" id="agregar">Agregar</button>
                                <button class="btn btn-light" type="reset">Limpiar</button>
                            </div>
                        </form>
                    </section>
                
                <!------------------------------- TAREAS -------------------------------->
                </div>
                <div class="col-12 col-md-8">
                    <table class="table mb-4">
                        <thead>
                          <tr>
                            <th scope="col">Tarea</th>
                            <th scope="col">Materia</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody id="tabla">
                        </tbody>
                      </table>
                </div>
                
            </div>
        </div>
    </main>
    <script src="../dynamics/js/libs/bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    <script src="../dynamics/js/lista_tareas.js"></script>
</body>
</html>