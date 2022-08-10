<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Форма регистрации</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
        <style>
        .image-preview{
          width: 300px;
          min-height: 100px;
          border: 2px solid #dddddd;
          margin-top: 15px;
          display: flex;
          align-items: center;
          justify-content: center;
          font-weight: bold;
          color: #cccccc;
        }

        .image-preview__image{
          display: none;
          width: 100%;
        }
      </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Загрузка изображения на сервер</h1>
            <form action="picture.php" method="post" enctype="multipart/form-data">
                <input type="file" name="filename" id="inpFile" accept=".jpg, .jpeg, .png">
                <input type="submit" value="Отправить">
                <div class="image-preview" id="imagePreview">
                  <img src="" alt="Image Preview" class="image-preview__image">
                  <span class="image-preview__default-text">Выберите картинку(не более 2 МБ)</span>
                </div>
                <script>
                  const inpFile = document.getElementById("inpFile");
                  const previewContainer=document.getElementById("imagePreview");
                  const previewImage = previewContainer.querySelector(".image-preview__image");
                  const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

                  var flag=false;
                  inpFile.addEventListener("change", function(){
                    const file = this.files[0];
                    if(file){
                      const reader=new FileReader();

                      previewDefaultText.style.display="none";
                      previewImage.style.display="block";
                      reader.addEventListener("load", function(){
                        previewImage.setAttribute("src", this.result);
                        flag=true;
                      });
                      // window.open("\""+this.files[0].name+"\"");
                      console.log(this.files[0].name);
                      reader.readAsDataURL(file);
                    }
                  });
                  // if(flag){
                  //   inpFile.addEventListener("click", function(){
                  //     window.open("\""+this.files[0].name+"\"");
                  //   });
                  // }
                </script>
            </form>
            <form action="exit.php" method="post">
                <p><p><button class="btn btn-success" type="submit">Выход</button>
            </form>
        </div>
    </body>
</html>
