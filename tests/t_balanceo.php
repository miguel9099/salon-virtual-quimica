<div class="container">
    <div class="white_bg">
        <h1>Prueba de Balanceo de Ecuaciones</h1>
        <form method="POST" action="comprobar.php">
            <h2 class="enunciado">1) ¿Cuál es el objetivo del balanceo de ecuaciones?</h2>
            <input type="hidden" name="enunciado_1" value="¿Cuál es el objetivo del balanceo de ecuaciones?">
            <div class="options">
                <div class="option">
                    <input type="radio" id="op1-1" name="p_1" value="1"/>
                    <label for="op1-1">
                        <strong>A)</strong> Reducir los átomos de los
                        elementos de cada lado de la reacción.
                    </label>
                    <input type="hidden" name="op1-1" value="Reducir los átomos de los
                        elementos de cada lado de la reacción.">
                </div>
                <div class="option">
                    <input type="radio" id="op1-2" name="p_1" value="2"/>
                    <label for="op1-2">
                        <strong>B)</strong> Igualar el número de
                        átomos de cada lado de la reacción.
                    </label>
                    <input type="hidden" name="op1-2" value="Igualar el número de
                        átomos de cada lado de la reacción.">
                </div>
                <div class="option">
                    <input type="radio" id="op1-3" name="p_1" value="3"/>
                    <label for="op1-3">
                        <strong>C)</strong> Aumentar los átomos
                        de los elementos de la reacción.
                    </label>
                    <input type="hidden" name="op1-3" value="Aumentar los átomos
                        de los elementos de la reacción.">
                    </div>
                <input type="hidden" name="r_1" value="2"> 
            </div>

            <h2 class="enunciado">2) ¿Qué son los coeficientes estequiometricos?</h2>
            <input type="hidden" name="enunciado_2" value="¿Qué son los coeficientes estequiometricos?">
            <div class="options">
                <div class="option">
                    <input type="radio" id="op2-1" name="p_2" value="1"/>
                    <label for="op2-1">
                        <strong>A)</strong> Números que se colocan
                        arriba de los elementos.
                    </label>
                    <input type="hidden" name="op2-1" value="Números que se colocan
                        arriba de los elementos.">
                </div>
                <div class="option">
                    <input type="radio" id="op2-2" name="p_2" value="2"/>
                    <label for="op2-2">
                        <strong>B)</strong> Números que se colocan
                        delante de las fórmulas.
                    </label>
                    <input type="hidden" name="op2-2" value="Números que se colocan
                        delante de las fórmulas.">
                </div>
                <div class="option">
                    <input type="radio" id="op2-3" name="p_2" value="3"/>
                    <label for="op2-3">
                        <strong>C)</strong> Números que reducen
                        el número de átomos de cada elemento.
                    </label>
                    <input type="hidden" name="op2-3" value="Números que reducen
                        el número de átomos de cada elemento.">
                    </div>
                <input type="hidden" name="r_2" value="2">
            </div>

            <h2 class="enunciado">3) La ecuación: "4Na + O<sub>2</sub> = 2Na<sub>2</sub>O" ¿está balanceada?</h2>
            <input type="hidden" name="enunciado_3" value='La ecuación: "4Na + O<sub>2</sub> = 2Na<sub>2</sub>O" ¿está balanceada?'>
            <div class="options">
                <div class="option">
                    <input type="radio" id="op3-1" name="p_3" value="1"/>
                    <label for="op3-1">
                        <strong>A)</strong> Sí.
                    </label>
                    <input type="hidden" name="op3-1" value="Sí.">
                </div>
                <div class="option">
                    <input type="radio" id="op3-2" name="p_3" value="2"/>
                    <label for="op3-2">
                        <strong>B)</strong> No.
                    </label>
                </div>
                <input type="hidden" name="op3-2" value="No.">
            </div>
            <input type="hidden" name="r_3" value="1">

            <h2 class="enunciado">4) La ecuación: "Zn + Hl = ZnI<sub>2</sub> + H<sub>2</sub>" ¿está balanceada?</h2>
            <input type="hidden" name="enunciado_4" value='La ecuación: "Zn + Hl = ZnI<sub>2</sub> + H<sub>2</sub>" ¿está balanceada?'>
            <div class="options">
                <div class="option">
                    <input type="radio" id="op4-1" name="p_4" value="1"/>
                    <label for="op4-1">
                        <strong>A)</strong> Sí.
                    </label>
                    <input type="hidden" name="op4-1" value="Sí.">
                </div>
                <div class="option">
                    <input type="radio" id="op4-2" name="p_4" value="2"/>
                    <label for="op4-2">
                        <strong>B)</strong> No.
                    </label>
                    <input type="hidden" name="op4-2" value="No.">
                </div>
                <input type="hidden" name="r_4" value="2">
            </div>

            <h2 class="enunciado">5) ¿Cómo quedaría la ecuación "HgO = Hg + O<sub>2</sub>" balanceada?</h2>
            <input type="hidden" name="enunciado_5" value='¿Cómo quedaría la ecuación "HgO = Hg + O<sub>2</sub>" balanceada?'>
            <div class="options">
                <div class="option">
                    <input type="radio" id="op5-1" name="p_5" value="1"/>
                    <label for="op5-1">
                        <strong>A)</strong> HgO = 2Hg + O<sub>2</sub>
                    </label>
                    <input type="hidden" name="op5-1" value="HgO = 2Hg + O<sub>2</sub>">
                </div>
                <div class="option">
                    <input type="radio" id="op5-2" name="p_5" value="2"/>
                    <label for="op5-2">
                        <strong>B)</strong> 3HgO = 2Hg + O<sub>2</sub>
                    </label>
                    <input type="hidden" name="op5-2" value="3HgO = 2Hg + O<sub>2</sub>">
                </div>
                <div class="option">
                    <input type="radio" id="op5-3" name="p_5" value="3"/>
                    <label for="op5-3">
                        <strong>C)</strong> 2HgO = 2Hg + O<sub>2</sub>
                    </label>
                    <input type="hidden" name="op5-3" value="2HgO = 2Hg + O<sub>2</sub>">
                </div>
            </div>
            <input type="hidden" name="r_5" value="3">

            </div>
            <div class="center">
                <input type="submit" class="btn_accept" value="Comprobar"/>
                <input type="hidden" name="cant_preguntas" value="5">
                <input type="hidden" name="prueba" value="Balanceo de ecuaciones">
            </div>
        </form>
    </div>
</div>