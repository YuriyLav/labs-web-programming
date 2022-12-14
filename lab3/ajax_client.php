<!doctype html>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script>
        //Объект с параметрами запроса, который будет отправляться с помощью XMLHTTPRequest
        var Params = {
            url: "http://lab3/ajax_server.php", //Адрес файла, которому будет отправлен запрос
            async: true, //Включение асинхронной передачи
            data: {login: "", password: 0}, //Параметры, которые будут отправлены в запросе
            selector: "#Test" //id контейнера в который будет выведен результат
        };
        function getContent_putNode(Params)
        {
            //Получаем контент и размещаем его в заданном контейнере
            var Result = "";
            //Отправка ajax запроса с помощью метода ajax библиотеки jQuery
            $.ajax({
                type: "GET", //тип запроса — Get. Параметры будут переданы в URL
                url: Params.url,
                data: Params.data,
                async: Params.async,
                success: function (msg) {
                    Result = msg;
                    if (Params.selector != "" && Params.selector != undefined)
                    {
                        $(Params.selector).html($(Params.selector).html() + msg);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    Result = jqXHR.getAllResponseHeaders() + "<hr>" + textStatus + "<hr>" + errorThrown;
                    if (Params.selector != "" && Params.selector != undefined)
                    {
                        $(Params.selector).html(Result);
                    }
                }
            });
            return Result;
        }
        function Authorisation() {
            Params.data.login = document.getElementById('login').value;
            Params.data.password = document.getElementById('pass').value;
            getContent_putNode(Params);
        }
    </script>
</head>
<body>
    Логин <input type="text" name="login" id="login"><br>
    Пароль <input type="password" name="pass" id="pass"><br>
    <div id="Test" style="width:50%; height:50px; border:1px #787878 solid; padding:5px;"></div>
    <input type="button" value="Получить AJAX ответ" onclick="Authorisation()">
</body>
</html>