<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap"
            rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <title>Трехколоночный макет (вариант 1)</title>
        <style type="text/css">
            .layout {
                overflow: hidden;
                font-family: 'Comfortaa';
            }
            .leftCol {
                background: lightblue;
                margin-right: 600px;
            }
            .centerCol {
                background: tan;
                width: 500px;
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
                <form name="TestForm" id="myForm" method="POST" action="index.php">
                    Введите номер
                    <p><input type="number" id="string" name="searchString" value="" /></p>
                    <p><textarea
                            name="area"
                            rows="5"
                            cols="35"
                            minlength="20"
                            maxlength="200"
                            name="text"
                            placeholder="Введите текст длиной от 20 до 200 символов"
                            ></textarea></p>
                    <div>
                        <p>Выберите граждантсво(РФ обязательно):</p>
                        <input type="radio" id="contactChoice1"
                               name="contact1">
                        <label for="contactChoice1">РФ</label>

                        <input type="radio" id="contactChoice2"
                               name="contact2" >
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
            $('#myForm').validate({
                rules: {
                    searchString: {
                        required: true,
                    },
                    area: {
                        required: true,
                        minlength: 20,
                        maxlength: 199
                    },
                    contact1: {
                        required: true
                    }
                },
                messages: {
                    searchString: {
                        required: "Поле обязательно для заполнения!"
                    },
                    area: {
                        required: "Поле обязательно для заполнения!",
                        minlength: "Введите не менее 20 символов!",
                        maxlength: "Максимальная длина текста 200 символов!"
                    },
                    contact1: {
                        required: "Выберите РФ!"
                    }
                }
            });
        </script>
    </body>
</html>

