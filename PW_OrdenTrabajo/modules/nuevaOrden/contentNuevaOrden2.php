<main>
    <!--
    <div class="page-header">
        <h5> Nueva Orden </h5>
        <h6>Favor de registrar los datos para la nueva Orden de Trabajo</h6>
    </div>
    -->
    <div class="page-content table-responsive-xxl">
        <div class="container-fluid table-responsive">
            <form name="formNuevaOrden" action="" method="POST">
                <table class="table table-bordered">
                    <!--Fila uno-->
                    <thead>
                        <tr class="table-borderless">
                            <th rowspan="2">
                                <div class="form-group">
                                    <img class="logoGrammer2-img img-responsive" alt="LogoGrammer" src="\OrdenesDeTrabajo\PW_OrdenTrabajo\imgs\logoGrammer.png">
                                    <small><br>GRAMMER AUTOMOVIVE PUEBLA<br>S. A. DE C. V.</small>
                                </div>
                            </th>
                            <th colspan="3" rowspan="2"><h1>Orden de Trabajo</h1> <br> <h4> MANTENIMIENTO </h4></th>
                            <th>
                                <div class="form-group">
                                    <label for="folio">FOLIO:<br>
                                        <input type="number" class="form-control" id="idFolio" name="Folio" placeholder="6097" readonly>
                                    </label>
                                </div>
                            </th
                        </tr>
                        <!--Fila dos-->
                        <tr>
                            <th scope="col">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="fecha">FECHA:
                                            <input type="date" class="form-control" id="idfecha" name="fecha"  placeholder="01/25/2024" readonly>
                                        </label>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                    <!--Fila tres-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="area">ÁREA/DEPTO:
                                    <input type="text" class="form-control" id="idArea" name="area" required>
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="linea">LÍNEA:<br>
                                    <input type="text" class="form-control" id="idLinea" name="linea" required>
                                </label>

                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="estacion">ESTACIÓN:
                                    <input type="text" class="form-control" id="idEstacion" name="estacion" required>
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="solicitante">SOLICITADO POR:
                                    <input type="text" class="form-control" id="idSolicitante" name="solicitante" placeholder="Aracely" readonly>
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="turno">TURNO:
                                    <input type="text" class="form-control" id="idTurno" name="turno" placeholder="1°" readonly>
                                </label>
                            </div>
                        </td>
                    </tr>
                    <!--Fila cuatro-->
                    <tr>
                        <td colspan="3" rowspan="2">
                            <div class="form-group">
                                <label for="problema">DESCRIPCIÓN DEL PROBLEMA/TRABAJO:
                                    <input type="text" class="form-control" id="idProblema" name="problema" required>
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="mantenimiento">MANTENIMIENTO:<br>
                                    <input type="radio" name="mantenimiento" value="correctivo" required>Correctivo
                                    <input type="radio" name="mantenimiento" value="preventivo" required>Preventivo
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="horaParo">HORA PARO: </label>
                                <input type="time" class="form-control" id="idHoraParo" name="horaParo" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila cinco-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="maquina">ESTATUS MÁQUINA:</label><br>
                                <input type="radio" name="maquina" value="trabaja" required>Trabaja
                                <input type="radio" name="maquina" value="noTrabaja" required>No trabaja
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="horaRecibo">HORA RECIBO: </label>
                                <input type="time" class="form-control" id="idHoraRecibo" name="horaRecibo" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila cinco-->
                    <tr>
                        <td colspan="3" rowspan="2">
                            <div class="form-group">
                                <label for="diagnostico">DIAGNÓSTICO/TRABAJO REALIZADO:</label>
                                <input type="text" class="form-control" id="idDiagnostico" name="diagnostico" required>
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <label for="afectados">OPERADORES AFECTADOS: </label>
                                <input type="number" class="form-control" id="idAfectados" name="afectados">
                            </div>
                        </td>

                        <td>
                            <div class="form-group">
                                <label for="horaInicio">HORA INICIO: </label>
                                <input type="time" class="form-control" id="idHoraInicio" name="horaInicio" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila seis-->
                    <tr>

                    </tr>
                    <!--Fila siete-->
                    <tr>
                        <td colspan="4" rowspan="4">
                            <div class="form-group">
                                <label for="causa">CAUSA RAÍZ:</label>
                                <input type="text" class="form-control" id="idCausa" name="causa" required>
                            </div>
                        </td>
                    </tr>
                    <!--Fila ocho-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="horaArranque">HORA ARRANQUE: </label>
                                <input type="time" class="form-control" id="idHoraArranque" name="horaArranque" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila nueve-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="horaCierre">HORA CIERRE: </label>
                                <input type="time" class="form-control" id="idHoraCierre" name="horaCierre" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila diez-->
                    <tr>
                    </tr>
                    <!--Fila once-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="aprobadoPor">RECIBIDO Y APROBADO POR: </label>
                                <input type="text" class="form-control" id="idAprobadoPor" name="aprobadoPor" readonly>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="ejecutadoPor">EJECUTADO POR EL TÉCNICO: </label>
                                <input type="text" class="form-control" id="idEjecutadoPor" name="ejecutadoPor" readonly>
                            </div>
                        </td>
                        <td colspan="2">
                            <div class="form-group">
                                <label for="calificacion">CALIFICACIÓN DE TRABAJO RECIBIDO:<br>
                                    <input type="radio" name="calificacion" value="excelente" required>Excelente
                                    <input type="radio" name="calificacion" value="aceptable" required>Aceptable
                                    <input type="radio" name="calificacion" value="noConforme" required>No conforme
                                </label>

                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="tiempoMuerto">TOTAL DE TIEMPO MUERTO:<br>
                                    <input type="time" class="form-control" id="idTiempoMuerto" name="tiempoMuerto" readonly>
                                </label>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="div-button">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="confirmarInfo">
                        <label class="form-check-label" for="confirmarInfo">Confirmo que la información es correcta</label>
                    </div>
                    <br><button type="submit" class="btn btn-primary">Generar Orden</button>
                </div>
            </form>
        </div>
    </div>
</main>