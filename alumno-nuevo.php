<html>
    <body>
    <form action="alumno-nuevo-guardar.php" method="POST">
    <label>Nombre</label><BR>
    <input type="text" name="nombre"><BR>
    <label>Fecha Nacimiento</label><BR>
    <input type="date" name="fechanacimiento"><BR>
    <label>Escuela</label><BR>
        <select>
            <option value="CFP Lima">CFP Lima</option>
            <option value="CFP Arequipa">CFP Arequipa</option>
            <option value="CFP Punno">CFP Punno</option>   
        </select><BR>
    <label>Carrera</label><BR>
        <select>
            <option value="Ing de sofware">Ing de sofware</option>
            <option value="Diseño grafico">Diseño grafico</option>
            <option value="Administracion de Empresas">Mecatronica</option>
        </select><BR><BR>
    <button type="submit">Guardar</button><BR>
    </form>
    </body>
</html>