<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Upload</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <form action="6_upload.php" method="POST" enctype="multipart/form-data">
        <p>Carregue sua foto</a>
            <input type="file" name="foto" onchange="mostraPrev(this)" id="foto">
            <div id="img"></div>

            <button>Enviar</button>
    </form>

    <script>
        function mostraPrev(input) {
            if (input.files && input.files[0]) {
                //FileReader - lê o arquivo que foi carregado
                var reader = new FileReader();
                //e é o proprio elemento de imagem - evento 
                reader.onload = function(e) {

                    //recuperando o nome desse arquivo 
                    document.querySelector('#img').innerHTML = '<img width="150" src="' + e.target.result + '">';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>