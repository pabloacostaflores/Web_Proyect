<!DOCTYPE html>
<html lang="sp">
<head>
    <meta charset="UTF-8">
    <meta http-e quiv="content-type" content="text/html; charset=utf-8" />
    <title>TITULO</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- media queries -->
    <link rel="stylesheet" href="css/small.css" media="(max-width: 1000px)">
    <link rel="shortcut icon" href="resources/img/burrita.jpg">
</head>
<body>
    <!-- header with buttons -->
    <div class="header">
        <span class="logo">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon points="50,0 0,100 150,100 200,0 " fill="white"/>
            </svg>
            <a href="https://www.escom.ipn.mx/" class="js-es">
            <img src="resources/img/escom.png" alt="escom-logo" class="logoimg">
        </span>
        <span class="logo btnAdmin">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
            width="260" height="108" viewBox="0 0 140 110" style="position:absolute">
            <polygon id="poliAdmin" points="50,0 0,100 150,100 200,0 " fill="rgba(207, 205, 205, 0.795)"/>
            </svg>
            <a href="crud.php" class="js-admin"><img src="resources/img/admin.png" alt="admin-logo" class="logoimg"></a>
        </span>
    </div>
    <!-- form -->
    <div id="particles-js" class="fondoForm"></div>
    <div class="form">
            <!-- identidad -->
            <form action="./checkdata_admin.php" method="post">
            <fieldset>
                <legend>Identidad</legend>

                <p>No. Boleta:<input type="text" name="numero_de_boleta" size="35" maxlength="10" class="input js-boleta" oninput="validarBoleta(this)" placeholder="Ingresa tu boleta" required></p>
                <p>Nombre:<input type="text" name="nombre" size="35" class="input js-nombre" placeholder="Ingresa tu nombre" required></p>
                <p>Apellido Paterno:<input type="text" name="apellido_paterno" size="35" class = "input js-apPaterno" placeholder="Ingresa tu apellido paterno" required></p>
                <p>Apellido Materno:<input type="text" name="apellido_materno" size="35" class="input js-apMaterno" placeholder="Ingresa tu apellido materno" required></p>
                <p>CURP:<input type="text" name="curp" class="input js-curp" oninput="validarCurp(this)" placeholder="Ingresa curp" required></p>
                <div id="gen">
                    <label for="genero">Género:</label>
                    <span class="custom-select" >
                        <select name="genero">
                            <option value="" disabled selected>Selecciona tu opción</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </span>
                </div>
                <div id="nac">
                    <label for="fechanacimiento">Fecha de nacimiento:</label>
                    <input type="date" name="bday" class="custom-date-field js-fecha" required/>
                </div>
            </fieldset>
            <!-- contacto -->

            <fieldset>
                <legend>Contacto</legend>
                    <p id="estado">
                        Estado:<span class="custom-select" >
                        <select name="estado">
                            <option value="" disabled selected>Selecciona tu opción</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Ciudad de México">Ciudad de México</option>
                            <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                            <option value="Colima">Colima</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz </option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </span></p>
                    <p>Delegación/Municipio:<input type="text" name="delegacion" size="35" class="input js-del" placeholder="Ingresa tu Delegacion/Municipio" required></p>
                    <p>Colonia:<input type="text" name="colonia" size="35" class="input js-col" placeholder="Ingresa tu colonia" required></p>
                    <p>Dirección de la calle:<input type="text" name="calle" size="35" class="input js-dir" placeholder="Ingresa tu calle, numero, lt, mzn" required></p>
                    <p>Código Postal:<input type="text" name="cp" maxlength="5" oninput="validarCP(this)" size="35" class="input js-cp"  placeholder="Ingresa tu codigo postal" required></p>
                    <p>Teleéono de casa:<input type="text" maxlength="10" name="tel_casa" size="35" oninput="validarTel(this)" class="input js-tel" placeholder="Ingresa tu numero de casa" required></p>
                    <p>Celular:<input type="text" maxlength="10" name="celular" size="35" class="input js-cel" oninput="validarCel(this)" placeholder="Ingresa tu telefono celular" required></p>
                    <p>Email:<input type="text" name="correo" size="35" oninput="validarEmail(this)" class="input js-email" placeholder="Ingresa tu correo electronico" required></p>

            </fieldset>

            <!-- Procedencia -->

            <fieldset>
                <legend>Procedencia:</legend>
                <p>Ingresa tu escuela de procedencia:
                <span class="custom-select" >
                    <select name="escuela_pro">
                        <option value="" disabled selected>Selecciona tu opción</option>
                        <option value="Cecyt #1 Gonzalo Vázquez Vela">Cecyt #1 "Gonzalo Vázquez Vela"</option>
                        <option value="Cecyt #2 Miguel Bernard Perales">Cecyt #2 "Miguel Bernard Perales"</option>
                        <option value="Cecyt #3 Estanislao Ramírez Ruíz">Cecyt #3 "Estanislao Ramirez Ruíz"</option>
                        <option value="Cecyt #4 Lázaro Cárdenas del Río">Cecyt #4 "Lázaro Cárdenas del Río"</option>
                        <option value="Cecyt #5 Benito Juárez">Cecyt #5 "Benito Juárez"</option>
                        <option value="Cecyt #6 Miguel Othón de Mendizábal">Cecyt #6 "Miguel Othon de Mendizábal"</option>
                        <option value="Cecyt #7 Cuauhtémoc">Cecyt #7 "Cuauhtémoc"</option>
                        <option value="Cecyt #8 Narciso Bassols">Cecyt #8 "Narciso Bassols"</option>
                        <option value="Cecyt #9 Juan de Dios Bátiz Paredes">Cecyt #9 "Juan de Dios Bátiz Paredes"</option>
                        <option value="Cecyt #10 Carlos Vallejo Márquez">Cecyt #10 "Carlos Vallejo Márquez"</option>
                        <option value="Cecyt #11 Wilfrido Massieu">Cecyt #11 "Wilfrido Massieu"</option>
                        <option value="Cecyt #12 José María Morelos">Cecyt #12 "José María Morelos"</option>
                        <option value="Cecyt #13 Ricardo Flores Magón">Cecyt #13 "Ricardo Flores Magón"</option>
                        <option value="Cecyt #14 Luis Enrique Erro Soler">Cecyt #14 "Luis Enrique Erro Soler"</option>
                        <option value="Cecyt #15 Diódoro Antúnez Echegaray">Cecyt #15 "Diódoro Antúnez Echegaray"</option>
                        <option value="Cecyt #16 Hidalgo">Cecyt #16 "Hidalgo"</option>
                        <option value="Cecyt #17 León, Guanajuato">Cecyt #17 "León, Guanajuato"</option>
                        <option value="Cecyt #18 Zacatecas">Cecyt #18 "Zacatecas"</option>
                        <option value="Cecyt #19 Leona Vicario">Cecyt #19 "Leona Vicario"</option>
                        <option value="CET 1 Walter Cross Buchanan">CET 1 "Walter Cross Buchanan"</option>
                        <option value="Otro">Otro </option>
                    </select>
                </span></p>

                <p>Ingresa tu entidad federativa de procedencia:<span class="custom-select" >
                    <select name="entidad_pro">
                        <option value="" disabled selected>Selecciona tu opción</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Ciudad de México">Ciudad de México</option>
                            <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                            <option value="Colima">Colima</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz </option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                    </select>
                </span></p>

                <p> Promedio:
                <input type="number"  id="prom" name="promedio" min="1" max="10" value="1" step="0.01" required/></p>
                <div id="gen">
                    <label for="genero">ESCOM fue tu:</label>
                    <span class="custom-select" >
                        <select name="opcion">
                            <option value="" disabled selected>Selecciona tu opción</option>
                            <option value="1 Opción">1ra Opción</option>
                            <option value="2 Opción">2da Opción</option>
                            <option value="3 Opción">3er Opción</option>
                            <option value="4 Opción">4ta Opción</option>

                        </select>
                    </span>
                </div>

            </fieldset>

            <!-- Botones -->
            <button type="button" class="btnMain js-enviar" style="float:left;" >Enviar</button>
            <button type="submit" class="js-submit" style="display: none;">Enviar</button>
            <button type="button" class="btnMain js-limpiar" style="float:right;">Limpiar</button>
			
            <div class="clearfix"></div>
            
            <!-- Inputs fantasma 
            <input type="text" name="genero" id="genero" style="display: none">
            <input type="text" name="estado" id="genero" style="display: none">
            <input type="text" name="entidad_pro" id="genero" style="display: none">
            <input type="text" name="Opcion" id="genero" style="display: none">-->

        <!-- form global -->
    </form>          
    </div>
    <!-- footer -->
    <div class="footer">
    </div>
    <script src="scripts/selector.js"></script>
    <script src="scripts/buttons.js"></script>
    <!-- particles -->
    <script src="scripts/particles.js"></script>
    <script src="scripts/app.js"></script>
</body>

</html>
