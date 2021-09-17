<main class="main" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000">
    <section class="head">
        <div class="head__title__blog"><h2 class="head__title">Калькулятор</h2></div>
        <p class="head__date">Сегодня 03 Март 2020 год</p>
    </section>
    <form action="" class="form" method="get">
        <label class="form__label">
            <span class="form__text">Число 1</span>
            <input type="text" class="form__input" name="one" data-type="number">
        </label>
        <div class="form__mySelect">
            <div class="form__select">
                <div class="form__select-name">Выбирите знак</div>
                <div class="form__select-option">
                    
                </div>
            </div>
            <select name="symbol">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <label class="form__label">
            <span class="form__text">Число 2</span>
            <input type="text" class="form__input" name="two" data-type="number"> 
        </label>
        <button class="form__btn">Посчитать</button>
    </form>
    <section class="body">
        <div class="head__title__blog"><h2 class="head__title" style="margin: 30px 0; width: min-content">Калькулятор</h2></div>
        <div class="calc" name="calc">
            <div class="calc__input">
                <input type="text" name="evalInput" readonly="">
            </div>
            <div class="calc__functions backspace"><i class="fas fa-backspace"></i></div>
            <div class="calc__functions delete">C</div>
            <div class="calc__numbers">
                <div class="calc__items calc__number">1</div>
                <div class="calc__items calc__number">2</div>
                <div class="calc__items calc__number">3</div>
                <div class="calc__items calc__number">4</div>
                <div class="calc__items calc__number">5</div>
                <div class="calc__items calc__number">6</div>
                <div class="calc__items calc__number">7</div>
                <div class="calc__items calc__number">8</div>
                <div class="calc__items calc__number">9</div>
                <div class="calc__items calc__number number0">0</div>
                <div class="calc__items calc__number">.</div>
            </div>
            <div class="calc__chars">
                <div class="calc__items calc__char">+</div>
                <div class="calc__items calc__char">-</div>
                <div class="calc__items calc__char">*</div>
                <div class="calc__items calc__char">/</div>
            </div>
            <div class="calc__footer calc__equal">=</div>
            <div class="calc__items calc__footer calc__char">%</div>
        </div>
    </section>
</main>
<script>
    let calcInput = document.querySelector('.calc__input input');
    let calcNumber = document.querySelectorAll('.calc__items');
    let calcChar = document.querySelectorAll('.calc__char');
    let calcEqual = document.querySelector('.calc__equal');
    let backspace = document.querySelector('.backspace');
    let calcDelete = document.querySelector('.delete');
    for (let i = 0; i < calcNumber.length; i++) {
        calcNumber[i].addEventListener('click', function(){
            calcInput.value += calcNumber[i].innerHTML;
        });
    }
    // document.addEventListener("keydown", function(event) {
    //     console.log(event.which);
    // })
    function calculatorEqual(){
        let endInput = calcInput.value.substr(calcInput.value.length-1);
        if (endInput == '+' || endInput == '-' || endInput == '*' || endInput == '/' || endInput == '%' || endInput == '.') {
            calcInput.value = "couldn't equal";
        }
        else if (calcInput.value == '') {
            calcInput = 'nothing is included';
        }
        else{
            calcInput.value = eval(calcInput.value);
        }
    }   
    calcEqual.addEventListener('click', function(){
        calculatorEqual();
    });
    backspace.addEventListener('click', function(){
        calcInput.value = calcInput.value.slice(0, -1);
    });
    calcDelete.addEventListener('click', function(){
        calcInput.value = "";
    });
    document.addEventListener("keydown", function(event) {
        if (event.keyCode == 13) {
            calculatorEqual();
        }
        if (event.keyCode == 46) {
            calcInput.value = "";
        }
        if (event.keyCode == 8) {
            calcInput.value = calcInput.value.slice(0, -1);
        }
        if (event.keyCode == 107) {
            calcInput.value += '+';
        }
        if (event.keyCode == 109) {
            calcInput.value += '-';
        }
        if (event.keyCode == 106) {
            calcInput.value += '*';
        }
        if (event.keyCode == 111) {
            calcInput.value += '/';
        }
        if (event.keyCode == 96) {
            calcInput.value += '0';
        }
        if (event.keyCode == 97) {
            calcInput.value += '1';
        }
        if (event.keyCode == 98) {
            calcInput.value += '2';
        }
        if (event.keyCode == 99) {
            calcInput.value += '3';
        }
        if (event.keyCode == 100) {
            calcInput.value += '4';
        }
        if (event.keyCode == 101) {
            calcInput.value += '5';
        }
        if (event.keyCode == 102) {
            calcInput.value += '6';
        }
        if (event.keyCode == 103) {
            calcInput.value += '7';
        }
        if (event.keyCode == 104) {
            calcInput.value += '8';
        }
        if (event.keyCode == 105) {
            calcInput.value += '9';
        }
        if (event.keyCode == 110) {
            calcInput.value += '.';
        }
    });
</script>