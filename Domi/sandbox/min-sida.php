<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Min-sida</title>
    <link rel="stylesheet" href="./style/style2.css">
</head>
<body>
    <header>
        <nav class="top">
            <div>
                <a href="https://www.ntigymnasiet.se/stockholm/"><img id="nti" src="./bilder/nti-logo.svg"
                        alt="nti"></a>
            </div>
            <ul class="meny">
                <a href="index-liw.html">
                    <li>Startsida</li>
                </a>
                <a href="elev.html">
                    <li>Min sida</li>
                </a>
                <a href="larare.html">
                    <li>Lärare</li>
                </a>
                <a href="index.html">
                    <li>Logga ut</li>
                </a>
            </ul>
        </nav>
    </header>

    <div class="table">
        
        <div class="row">
            <div class="title">Bible</div>
            <div class="author">Wiliam Bob</div>
            <div class="date">20.20.20</div>
        </div>
    </div>
   



    <main>
        <div style="width: 50%;" class="box">
            <h2>Min Sida</h2>
            <div class="box-two">
                <div>
                    <h4>Utlånade böcker</h4>
                </div>
                <div style="margin-left: auto; width: 45%;">
                    <h4>Datum</h4>
                </div>
            </div>
            <div class="grey-box">
                <div class="titles">
                    <p>A dog’s adventure</p>
                    <p>A dog’s adventure</p>
                </div>
                <div id="author">
                    <p> W. Bruce Cameron </p>
                    <p> W. Bruce Cameron</p>
                </div>
                <div class="right-date-box">
                    <p style="margin-left: auto;">11 Maj 2020</p>
                </div>
            </div>

            <div class="box-two">
                <div>
                    <h4>Kommande återlämningar</h4>
                </div>
            </div>
            <div class="grey-box">
                <div class="title">
                    <p>A dog’s adventure</p>
                    <p>A dog’s adventure</p>
                </div>
                <div id="author">
                    <p> W. Bruce Cameron</p>
                    <p> W. Bruce Cameron</p>
                </div>
                <div id="end-date" class="right-date-box">
                    <p style="margin-left: auto;">11 Maj 2020</p>
                </div>
            </div>
            <p style="font-size: 15px; color: red; margin-left: auto;">OBS alla böcker ska åtelämnas 4 veckor efter
                utlånet.</p>
        </div>

        <div style="width: 50%;" class="box">
            <div class="box-two">
                <div>
                    <h4>Önske brunn</h4>
                </div>
            </div>
            <div class="grey-box">
                <form  class="wishing-well" action="#" method="POST">
                    <input  class="wishing-well" type="text">
                </form>
            </div>
        </div>
    </main>
    <script src="./js/min-sida.js"></script>
</body>
</html>