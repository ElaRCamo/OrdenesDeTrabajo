<main>
    <div class="page-header">
        <h5> Nueva Orden </h5>
        <h6>Favor de registrar los datos para la nueva Orden de Trabajo</h6>
    </div>
    <div class="page-content">
        <div class="container">

            <form name="formNuevaOrden" action="" method="POST">
                <table class="default">
                    <!--Fila uno-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <span><img class="logoGrammer2-img img-responsive" alt="LogoGrammer" src="\OrdenesDeTrabajo\PW_OrdenTrabajo\imgs\logoGrammer.png"></span>
                                <small><br>GRAMMER AUTOMOVIVE PUEBLA S. A. DE C. V.</small>
                            </div>
                        </td>
                        <td colspan="3"><h4>Orden de Trabajo</h4> <br> <small>MANTENIMIENTO</small></td>
                        <td>
                            <div class="form-group">
                                <label for="folio">FOLIO: </label>
                                <input type="number" class="form-control" id="idArea" name="area" placeholder="6097" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila tres-->
                    <tr>
                        <td rowspan="2">
                            <div class="form-group">
                                <label for="area">ÁREA/DEPTO: </label>
                                <input type="text" class="form-control" id="idArea" name="area" required>
                            </div>
                        </td>
                        <td rowspan="2">
                            <div class="form-group">
                                <label for="linea">LÍNEA:</label>
                                <input type="text" class="form-control" id="idLinea" name="linea" required>
                            </div>
                        </td>
                        <td rowspan="2">
                            <div class="form-group">
                                <label for="estacion">ESTACIÓN:</label>
                                <input type="text" class="form-control" id="idEstacion" name="estacion" required>
                            </div>
                        </td>
                        <td rowspan="2">
                            <div class="form-group">
                                <label for="solicitante">SOLICITADO POR: </label>
                                <input type="text" class="form-control" id="idSolicitante" name="solicitante" placeholder="Aracely" readonly>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="fecha">FECHA: </label>
                                <input type="date" class="form-control" id="idfecha" name="fecha" placeholder="01/25/2024" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila cuatro-->
                    <tr>
                        <td><div class="form-group">
                                <label for="turno">TURNO: </label>
                                <input type="text" class="form-control" id="idTurno" name="turno" placeholder="1°" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila cinco-->
                    <tr>
                        <td colspan="3">
                            <div class="form-group">
                                <label for="problema">DESCRIPCIÓN DEL PROBLEMA/TRABAJO:</label>
                                <input type="text" class="form-control" id="idProblema" name="problema" required>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="mantenimiento">MANTENIMIENTO:</label><br>
                                <input type="radio" name="mantenimiento" value="correctivo" required>Correctivo<br>
                                <input type="radio" name="mantenimiento" value="preventivo" required>Preventivo<br>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="maquina">ESTATUS MÁQUINA:</label><br>
                                <input type="radio" name="maquina" value="trabaja" required>Trabaja<br>
                                <input type="radio" name="maquina" value="noTrabaja" required>No trabaja<br>
                            </div>
                        </td>
                    </tr>
                    <!--Fila seis-->
                    <tr>
                        <td colspan="4" rowspan="2">
                            <div class="form-group">
                                <label for="diagnostico">DIAGNÓSTICO/TRABAJO REALIZADO:</label>
                                <input type="text" class="form-control" id="idDiagnostico" name="diagnostico" required>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="horaParo">HORA PARO: </label>
                                <input type="time" class="form-control" id="idHoraParo" name="horaParo" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila siete-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="horaRecibo">HORA PARO: </label>
                                <input type="time" class="form-control" id="idHoraRecibo" name="horaRecibo" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila ocho-->
                    <tr>
                        <td colspan="4" rowspan="4">
                            <div class="form-group">
                                <label for="causa">CAUSA RAÍZ:</label>
                                <input type="text" class="form-control" id="idCausa" name="causa" required>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="horaInicio">HORA INICIO: </label>
                                <input type="time" class="form-control" id="idHoraInicio" name="horaInicio" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila nueve-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="horaArranque">HORA ARRANQUE: </label>
                                <input type="time" class="form-control" id="idHoraArranque" name="horaArranque" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila diez-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="horaCierre">HORA CIERRE: </label>
                                <input type="time" class="form-control" id="idHoraCierre" name="horaCierre" readonly>
                            </div>
                        </td>
                    </tr>
                    <!--Fila once-->
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="afectados">OPERADORES AFECTADOS: </label>
                                <input type="number" class="form-control" id="idAfectados" name="afectados">
                            </div>
                        </td>
                    </tr>
                    <!--Fila doce-->
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
                                <label for="calificacion">CALIFICACIÓN DE TRABAJO RECIBIDO: </label><br>
                                <input type="radio" name="calificacion" value="excelente" required>Excelente<br>
                                <input type="radio" name="calificacion" value="aceptable" required>Aceptable<br>
                                <input type="radio" name="calificacion" value="noConforme" required>No conforme<br>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="tiempoMuerto">TOTAL DE TIEMPO MUERTO: </label>
                                <input type="time" class="form-control" id="idTiempoMuerto" name="tiempoMuerto" readonly>
                            </div>
                        </td>
                    </tr>
                </table>


                <br>
                <button type="submit" class="btn btn-primary">Generar Orden</button>
            </form>
        </div>
    </div>
</main>