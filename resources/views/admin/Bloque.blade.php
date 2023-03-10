@extends('Admin.index')

@section('bloque')



<div class="container my-3">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4 bg-white">
            <h2>Bloques</h2>
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Ingrese curso</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Escriba Aqui" autofocus />
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-success">Añadir</button>
                    <button class="btn btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>
        <!---===========-->
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 py-4 bg-white">
            <h2>Listado de Cursos</h2>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="centrado">#</th>
                        <th class="centrado">Curso</th>
                        <th class="centrado">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="centrado">1</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">2</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">3</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">4</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">5</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">6</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">7</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">8</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="centrado">9</td>
                        <td class="centrado">Algebra</td>
                        <td>
                            <i class="bi bi-trash" id="icons"></i>
                            <button type="button" class="btn btn-outline-warning">Examen</button>
                        </td>
                    </tr>
                </tbody>
              </table> 
        </div>
    </div>
</div>

@endsection