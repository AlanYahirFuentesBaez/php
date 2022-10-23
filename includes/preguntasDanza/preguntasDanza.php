<h2>Contesta las preguntas según tus conocimientos:</h2>
<form action="includes/preguntasDanza/procesarPreguntasDanza.php" method="post">
    <p>Pregunta 1. Este es un tipo de danza:</p>
    <select id="pregDanza1" name="pregDanza1">
        <option value="preg1R1">Gimnasia</option>
        <option value="preg1R2">Capoeira</option>
        <option value="preg1R3">Ballet</option>
        <option value="preg1R4">HandBalance</option>
    </select>
    <p>Pregunta 2. ¿Cuál es el tipo de calzado usado en ballet?</p>
    <input id="pregDanza2" name="pregDanza2" type="text" placeholder="Ingresa tu respuesta"></input>
    <p>Pregunta 3.Son coreógrafos de Danza Contemporánea</p>    
        <input type="radio" id="respPreg3-1" name="pregDanza3" value="preg3R1"> StevenSpilberg, Leonardo Di Caprio<br>
        <input type="radio" id="respPreg3-2" name="pregDanza3" value="preg3R2"> Cuahutémoc Blanco, Piojo Pérez<br>
        <input type="radio" id="respPreg3-3" name="pregDanza3" value="preg3R3"> Damián Jalet, Ohad Naharin<br>
    <br><br>
    <input type="submit" value="Contestar">
</form>