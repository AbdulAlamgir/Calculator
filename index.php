<?php get_header(); ?>
<body>
    <h1>Simple Calculator</h1>
    <div class="calculator">
        <input type="text" id="display" readonly>
        <div class="buttons">
            <button onclick="appendNumber('7')">7</button>
            <button onclick="appendNumber('8')">8</button>
            <button onclick="appendNumber('9')">9</button>
            <button onclick="appendOperator('/')">/</button>
            <br>
            <button onclick="appendNumber('4')">4</button>
            <button onclick="appendNumber('5')">5</button>
            <button onclick="appendNumber('6')">6</button>
            <button onclick="appendOperator('*')">*</button>
            <br>
            <button onclick="appendNumber('1')">1</button>
            <button onclick="appendNumber('2')">2</button>
            <button onclick="appendNumber('3')">3</button>
            <button onclick="appendOperator('-')">-</button>
            <br>
            <button onclick="appendNumber('0')">0</button>
            <button onclick="appendNumber('.')">.</button>
            <button onclick="appendOperator('+')">+</button>
            <button onclick="clearDisplay()">C</button>
            <button onclick="calculate()">=</button>
        </div>
    </div>

    <?php get_footer(); ?>
</body>
</html>