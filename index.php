<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz</title>
  <link rel="stylesheet" href="style.css?<?= time() ?>">
  <title>Quiz</title>
</head>

<body>
  <div class="header">
    <h1>Ben jij ICT waardig?</h1>
  </div>

  <h4 class="homepagetitle">Probeer de verborgen knop te zoeken om naar de volgende pagina te gaan. Klik op de hint knop als het echt niet lukt.</h4>
  <button class="hintbutton" onclick="printhint()">Klik hier voor een hint</button>
  <div id="result"></div>


  <button class="hiddenbutton1" onclick="alert('Haha verkeerde knop :)');">Bezoek de quiz pagina</button>
  <button class="hiddenbutton2" onclick="visitPage();">Bezoek de quiz pagina</button>

  <script>
    function visitPage() {
      window.location = './quiz/quiz.php';
    }

    var myArray = ["1. klik linksonderin.", "2. Klik op de pagina met je rechtermuis knop.", "3. Klik op inspecteren.", "4. Klik op het pijltje dat voor &lt;body&gt; staat.", "5. Ga met je muis over de elementen en vind de hidden buttons"]
    var hintindex = 0

    function printhint() {
      if (hintindex < myArray.length) {
        var hint = myArray[hintindex]
        document.querySelector("#result").innerHTML += hint + "</br>"
        hintindex++
      }


    }
  </script>

</body>

</html>