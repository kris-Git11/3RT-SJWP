<!DOCTYPE html>
<html>
  <head>
    <title>Ustav Republike Hrvatske</title>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  </head>

  <body>

    <div class="header">
      <hr>
      <h1 style="text-align: center; color: #FF0000;">Ustav Republike Hrvatske</h1>
      <hr>
    </div>

    <div class="nav">
      <a href="index.php" style="text-decoration: underline; color: yellow;">Naslovna</a>
      <a href="sabor.html">Sabor</a>
      <a href="#">???</a>
    </div>

    <div class="main">

      <div class="stupac">
        <div style="text-align: center;">
          <h2 style="margin: 0px;" onclick="gener();">Bitniji članci</h2>
        </div>
        <p id="cl0">čl. 3. – Sloboda, jednakost, nacionalna ravnopravnost i ravnopravnost spolova, (...) demokratski višestranački sustav najviše su vrednote ustavnog poretka Republike Hrvatske i temelj za tumačenje Ustava.</p>
        <p id="cl1">čl. 5. – Svatko je dužan držati se Ustava i prava i poštivati pravni poredak Republike Hrvatske.</p>
        <p id="cl2">čl. 14. – <span style="font-weight: bold;">Svi</span> su pred zakonom jednaki.</p>
        <p id="cl3">čl. 61. – Brak je životna zajednica žene i muškarca.</p>
        <p id="cl4">čl. 70. – Hrvatski sabor je predstavničko tijelo građana i nositelj zakonodavne vlasti u Republici Hrvatskoj.</p>
        <p id="cl5"><span style="color: red; font-weight: bold;">(brisan 1997. godine)</span>; čl. 140. – Republika Hrvatska ostaje u sastavu SFRJ do novog sporazuma jugoslavenskih republika ili dok Sabor Republike Hrvatske ne odluči drugačije.</p>

      </div>

      <div class="stupac">
        <div style="text-align: center;">
          <h2 style="margin: 0px;">Općenito</h2>
        </div>

        <p>Ustav Republike Hrvatske je prvi puta objavljen u »Narodnim novinama« 22. prosinca 1990. godine te je kao takav stupio na snagu istog dana (danom proglašenja).</p>
        <p>"Božićni Ustav" se do danas mijenjao ukupno 5 puta: 1997., 2000., 2001., 2010. i 2014. godine</p>
        <p style="font-style: italic;">Budući da sadrži samo ~152 članaka, spada u kraće ustave.</p>

        <div style="text-align: center;">
          <img style="height: 500px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Ustav_Republike_Hrvatske_br_1.JPG/800px-Ustav_Republike_Hrvatske_br_1.JPG"/>
          <br>
          <span>"Prvi broj" Ustava koji se koristi u ceremoniji polaganja svečane prisege predsjednika Republike</span>
        </div>
      </div>

      <div class="stupac" style="width: 32%; padding-left: 3px;">
        <div style="text-align: center;">
          <h2 style="margin: 0px;">Korisni linkovi</h2>
        </div>

        <ol>
          <li>
            <a href="https://zakon.hr/">Zakon.hr</a><span> – većina <abbr title="jedan dokument koji se sastoji od istih dokumenata mijenjanih više puta">pročišćenih</abbr> <span style="font-weight: bold;">Zakona</span> dostupni na jednom mjestu</span>
          </li>
          <br>
          <li>
            <a href="https://www.sabor.hr/">Hrvatski sabor</a><span> – internetska stranica predstavničkog tijela građana i nositelja zakonodavne vlasti u RH, obnovljena nakon 15 godina krajem 2018. godine</span>
          </li>
          <br>
          <li>
            <a href="https://narodne-novine.nn.hr/">Narodne novine</a><span> – elektronička, <span style="font-weight: bold;"><abbr title="nije pravno obvezujuća">informativna</abbr></span> verzija službenog lista RH</span>
          </li>
          <br>
          <li>
            <a href="../../NN">Pregled propisa</a><span> – vlastita stranica koja sadržava pregled propisa objavljenih u službenom listu RH (vidljiv datum stupanja na snagu, mijenjanja propisa, filtriranje, itd...)</span>
          </li>
        </ol>
      </div>

      <form style="clear: both;">
        <br>
        <p style="font-style: italic">Prijedlozi za poboljšanje stranice:</p>
        <input type="text" placeholder="ime"/>
        <br><br>
        <input type="email" placeholder="elektronička pošta"/>
        <br><br>
        <textarea placeholder="ovdje upišite prijedloge..."></textarea>
        <br><br>
        <button type="submit">Pošalji</button>
      </form>
    </div>

    <br><br>

    <div class="footer">
      <hr>
      <p>© Lovro Makovec, 3RT <br> <a href="uvjeti.html">Zabranjeno je umnažanje, distribucija, tiskanje i javno prikazivanje ove stranice bez pismene (ili usmene, kada se koristi u školske svrhe) dozvole autora!</a></p>
    </div>

    <script>
      function gener() {
        $("p").css("background-color", "");
        var nasum = Math.floor(Math.random() * 6);
        $("#cl" + nasum).css("background-color", "#61ff0c");
      }
    </script>

  </body>
</html>
