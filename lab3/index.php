<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ajax</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/sunny/jquery-ui.css">
        <script type="text/javascript">
            $(function () {

                var countries = ["Россия", "Сша", "Китай", "Германия", "Великобритания"];
                var citiesRussia = ["Москва", "Санкт-Петербург", "Нижний Новгород", "Казань", "Краснодар"];
                var citiesUsa = ["Нью-Йорк", "Лос-Анджелес", "Сан-Франциско", "Майами", "Хьюстон"];
                var citiesChina = ["Пекин", "Шанхай", "Ухань", "Гуаньчжоу"];
                var citiesGermany = ["Берлин", "Франкфурт-на-Майне", "Мюнхен", "Штутгарт", "Гамбург"];
                var citiesGB = ["Лондон", "Глазго", "Ливерпуль", "Манчестер", "Кардифф"];

                $('#acInput').autocomplete({
                    source: countries,
                    minLength: 0,
                    delay: 0
                });

                $('button').click(function (e) {
                    e.preventDefault();
                    switch (this.id) {
                        case "close":
                            $('#acInput').autocomplete("close");
                            break;
                        case "input":
                            $('#acInput').autocomplete("search");
                            break;
                        case "close1":
                            $('#ccInput').autocomplete("close");
                            break;
                        case "input1":
                            $('#ccInput').autocomplete("search");
                            break;
                        case "city1":
                            alert("Вы ввели\nСтрана: "+document.getElementById("acInput").value+"\n"+"Город: "+document.getElementById("сcInput").value );
                            break;
                        case "city":
                            document.getElementById("acInput").style.background = "white";
                            if (document.getElementById("acInput").value === "Россия")
                                $('#сcInput').autocomplete({
                                    source: citiesRussia
                                });
                            
                            if (document.getElementById("acInput").value === "Сша")
                                $('#сcInput').autocomplete({
                                    source: citiesUsa
                                });
                            if (document.getElementById("acInput").value === "Китай")
                                $('#сcInput').autocomplete({
                                    source: citiesChina
                                });
                            if (document.getElementById("acInput").value === "Германия")
                                $('#сcInput').autocomplete({
                                    source: citiesGermany
                                });
                            if (document.getElementById("acInput").value === "Великобритания")
                                $('#сcInput').autocomplete({
                                    source: citiesGB
                                });
                            break;
                    }
                })
            });
        </script>
    </head>
    <body>
        <form>
            <div class="ui-widget">
                <label for="acInput">Выберите название страны: </label>
                <input id="acInput" style="background-color: seashell"/>
                <button id="input">Содержимое вывода</button>
                <button id="close">Закрыть</button>   
                <p><button id="city">Подтвердить страну</button> 
                <p><label for="ccInput">Выберите название города: </label>
                    <input id="сcInput"/>  
                    <button id="city1">Подтвердить город</button> 
            </div>
        </form>
    </body>
</html>