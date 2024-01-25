<?php 
$coming_soon = get_field('coming_soon','option');

?>

<?= $coming_soon ? $coming_soon : '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coming Growskills</title>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto Condensed", sans-serif;
      }

      .wrapper {
        margin: 0 auto;
        width: 100%;
        max-width: 960px;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 20px;
        color: white;
      }
      .wrapper h1 {
        font-size: 2rem;
      }
      @media only screen and (min-width: 960px) {
        .wrapper h1 {
          font-size: 5rem;
        }
      }
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: rgb(2, 0, 36);
        background: linear-gradient(
          0deg,
          rgba(2, 0, 36, 1) 0%,
          rgba(9, 9, 121, 1) 35%,
          rgba(0, 212, 255, 1) 100%
        );
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <h1>Coming soon</h1>
      <p>We are working on it, thank you for your patience</p>
    </div>
  </body>
</html>
' ?>

