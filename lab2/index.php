<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap"
            rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>
        <title>Трехколоночный макет (вариант 1)</title>
        <style type="text/css">
            .layout {
                overflow: hidden;
                font-family: 'Comfortaa';
            }
            .leftCol {
                background: lightblue;
                margin-right: 400px;
            }
            .centerCol {
                background: tan;
                width: 300px;
                float: right;
            }
            .rightCol {
                background: pink;
                width: 100px;
                float: right;
            }
            @media screen and (max-width: 500px) {
                .layout {
                    display: flex;
                    flex-direction: column-reverse;
                }
                .leftCol {
                    /*                    float: none;
                                        width: 100%;*/
                    display: none;
                }
                .centerCol {
                    width: 100%;
                }
                .rightCol {
                    display: none;
                    /*                    float: none;
                                        width: 100%;*/
                }
            }
        </style>
    </head>
    <body>
        <div class="layout">
            <div class="rightCol">Колонка 3</div>
            <div class="centerCol">
                <form name="TestForm" method="POST" action="index.php" onsubmit="return checkAllFileds(this)">
                    <input type="submit" id="Recovery" value="Восстановить данные"/>
                    <p>Введите номер
                    <input type="text" id="input_form" name="SearchString" value="" required />
                    <p><textarea
                            rows="5"
                            cols="35"
                            name="text"
                            minlength="20"
                            maxlength="200"
                            placeholder="Введите текст длиной от 20 до 200 символов" id="textar"required
                            ></textarea></p>
                    <div>
                        <p>Выберите граждантсво(РФ обязательно):</p>
                        <input type="radio" id="contactChoice1"
                               name="contact1" required>
                        <label for="contactChoice1">РФ</label>

                        <input type="radio" id="contactChoice2"
                               name="contact2">
                        <label for="contactChoice2">США</label>

                        <input type="radio" id="contactChoice3"
                               name="contact3">
                        <label for="contactChoice3">Китай</label>
                        <input type="submit" name="Submit" value="Отправить"/>
                    </div>
                </form>
            </div>
            <div class="leftCol">Колонка 1</div> 
        </div>
        <script>
            Recovery.onclick=function(){
                document.getElementById("input_form").value=localStorage.getItem('text');
                document.getElementById("textar").value=localStorage.getItem('textarea');
                if(localStorage.getItem('radio1')==="on") document.getElementById("contactChoice1").checked=true;
                else document.getElementById("contactChoice1").checked=false;
                if(localStorage.getItem('radio2')==="on") document.getElementById("contactChoice2").checked=true;
                else document.getElementById("contactChoice2").checked=false;
                if(localStorage.getItem('radio3')==="on") document.getElementById("contactChoice3").checked=true;
                else document.getElementById("contactChoice3").checked=false;
                return false;
            };
            </script>
            <script>
            function checkAllFileds(form) {
                if (!form[1].value.match(/^(\d+)$/))
                {
                    alert("В поле ввода номера допустимы только цифры!");
                    return false;
                }
                localStorage.setItem('text', document.getElementById("input_form").value);
                localStorage.setItem('textarea', document.getElementById("textar").value);
                if (document.getElementById('contactChoice1').checked) {
                    localStorage.setItem('radio1', "on");
                }
                else{
                    localStorage.setItem('radio1', 'off');
                }
                if (document.getElementById('contactChoice2').checked) {
                    localStorage.setItem('radio2', "on");
                }
                else{
                    localStorage.setItem('radio2', 'off');
                }
                if (document.getElementById('contactChoice3').checked) {
                    localStorage.setItem('radio3', "on");
                }
                else{
                    localStorage.setItem('radio3', 'off');
                }
            }
        </script>
    </body>
</html>