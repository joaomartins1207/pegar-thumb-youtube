<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegar Thumbnail - youtube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale-1.0">
    <style type="text/css">

        .container {
            max-width: 960px;
            margin: 10px auto;
            padding: 0 2%;
            text-align: center;
        }

        .container h2 {
            font-size: 40px;
            margin: 30px 0;
        }


        .container p {
            font-size: 19px;
        }

        .container input[type=text] {
            height: 40px;
            width: 100%;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .container input[type=submit] {
            display: block;
            margin: 10px 0;
            color: white;
            font-size: 20px;
            width: 100%;
            height: 30px;
            cursor: pointer;
            border: 0;
            background-color: brown;
        }
    </style>
</head>
<body>
    <div class="container">
       <h2>Pegue Thumbnail de Qualquer Video do Youtube</h2>
       <p>Para pegar a Thumbnail do video deo  Youtube<br/>
       Basta inserir a URL, no formato abaixo:<br/><b>https://www.youtube.com/watch?v=erLk59H86ww</b></p>
       <form method="post">
        <input type=" text" name="url">
        <input type="submit" name="ação" value="Pegar Thumb!">
       </form>
       
       <?php

			if(isset($_POST['acao'])){

				$url = $_POST['url'];



				$videoCode = explode('=',$url);

				//echo $videoCode[1];

				/*

					https://img.youtube.com/vi/<insert-youtube-video-id-here>/default.jpg

					For the high quality version of the thumbnail use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg

					There is also a medium quality version of the thumbnail, using a URL similar to the HQ:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/mqdefault.jpg

					For the standard definition version of the thumbnail, use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/sddefault.jpg

					For the maximum resolution version of the thumbnail use a URL similar to this:



					https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg

				*/

				echo 'https://img.youtube.com/vi/'.$videoCode[1].'/default.jpg';

			}



		?>
       <p>Esta Ferramenta Foi Desenvolvida Por João Victor.</p>
   </div>
</body>
</html>