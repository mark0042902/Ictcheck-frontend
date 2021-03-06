<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css?<?= time() ?>">
  <link rel="stylesheet" href="result.css?<?= time() ?>">
</head>

<body class="result">
  <div class="header">
    <h1>Ben jij ICT waardig?</h1>
  </div>
  <div class="center">
    <div class="content-box">
      <h1>Jouw score:</h1>

      <div class="progressBar">
        <h2>Programmeren front-end <span id="frontendScore"></span>:</h2>
        <div class="bar">
          <div id="frontEndProgress" class="progress"></div>
        </div>
      </div>

      <div class="progressBar">
        <h2>Programmeren back-end <span id="backendScore"></span>:</h2>
        <div class="bar">
          <div id="backEndProgress" class="progress"></div>
        </div>
      </div>

      <div class="progressBar">
        <h2>Systeembeheer <span id="beheerScore"></span>:</h2>
        <div class="bar">
          <div id="systeembeheerProgress" class="progress"></div>
        </div>
      </div>
      <h4>Bedankt voor het maken van deze test. Ongeacht jouw score ben je welkom op een open dag.</br> En vergeet niet; ICT kan voor iedereen met de juiste motivatie!</h4>
      <h4>Zin in een uitdaging? <a href="../bonus/bonus.php">Maak de bonusopdracht!</a></h4>
    </div>
  </div>
</body>
<script>
  setTimeout(function() {
    let givenAnswers = localStorage.getItem("givenAnswers");

    let frontendScore = 0;
    let backendScore = 0;
    let beheerScore = 0;

    if (givenAnswers) {
      givenAnswers = JSON.parse(givenAnswers);

      for (let i = 0; i < givenAnswers.length; i++) {
        if (givenAnswers[i]["category"] == "Frontend") {
          frontendScore += givenAnswers[i]["points"];
        } else if (givenAnswers[i]["category"] == "Backend") {
          backendScore += givenAnswers[i]["points"];
        } else if (givenAnswers[i]["category"] == "Systeembeheer") {
          beheerScore += givenAnswers[i]["points"];
        }
      }
    }

    const frontend = frontendScore / 3 * 100;
    const backend = backendScore / 3 * 100;
    const beheer = beheerScore / 3 * 100;

    document.getElementById("frontEndProgress").style.width = frontend + "%";
    document.getElementById("backEndProgress").style.width = backend + "%";
    document.getElementById("systeembeheerProgress").style.width = beheer + "%";

    document.querySelector("#frontendScore").innerHTML = "(" + Math.round(frontend) + "%)";
    document.querySelector("#backendScore").innerHTML = "(" + Math.round(backend) + "%)";
    document.querySelector("#beheerScore").innerHTML = "(" + Math.round(beheer) + "%)";
  }, 100)
</script>

</html>