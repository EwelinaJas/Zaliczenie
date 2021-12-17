<!--rozpoczęcie pracy sesji oraz kod podstrony, która pozwala zapisać się na listę newsletter -->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Newsletter - możliwość zapisu ! </title>
    <meta name="description" content="Używanie PDO - zapis do bazy MySQL">
    <meta name="keywords" content="php, kurs, PDO, połączenie, MySQL">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">

        <header>
            <h2>Newsletter</h2>
        </header>
<!--input na adres e-mail oraz input zapisujący wypełniony formularz -->
        <main>
            <article>
                <form method="post" action="save.php">
                    <label>Podaj swój adres e-mail
                        <input type="email" name="email" <?= isset($_SESSION['given_email']) ? 'value="' . $_SESSION['given_email'] . '"' : '' ?>>
                    </label>
                    <input type="submit" value="Zapisz się do listy">
					
					<?php
					if (isset($_SESSION['given_email'])) {
						echo '<p>Błędny adres, proszę poprawić</p>';
						unset($_SESSION['given_email']);
					}
					?>
					
                </form>
            </article>
        </main>

    </div>
</body>
</html>