<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumina - Reserva de Ingressos</title>
    <link rel="stylesheet" href="style/buy-ticket.css">
</head>
<body>
    <nav id="navbar">
        <img src="logo-lumina" alt="Logo Lumina">
        <ul>
            <li>Home</li>
            <li>Categorias</li>
            <li>Login</li>
        </ul>
    </nav>

    <section>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Portrait_of_Wolfgang_Amadeus_Mozart_at_the_age_of_13_in_Verona%2C_1770.jpg/220px-Portrait_of_Wolfgang_Amadeus_Mozart_at_the_age_of_13_in_Verona%2C_1770.jpg" alt="show">
        <h2>Mozart - Apresentação</h2>
        <span>Local: Theatro Municipal</span>
        <span>Sobre o evento:</span>
        
        <p>
            <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati inventore necessitatibus laborum dolorem quia ipsum, illo possimus corporis nisi modi ducimus doloremque nulla corrupti perspiciatis, incidunt aliquam hic repudiandae eveniet.
        </p>

        <!-- Agora, ao selecionar a data, o sistema deve guardar a escolha da data e avançar para uma tela onde será escolhido o assento -->
        <details>
            <summary id="button">
                Compre já
            </summary>
            <span href="compras.php">Escolha a data abaixo:</span>
            <div class="calendar-ticket">
                <div class="calendar-ticket-days">
                <a href="">
                        <?php
                            date_default_timezone_set('UTC');

                            $tomorrow_timestamp = strtotime('+1 day');

                            echo date('D. d M.', $tomorrow_timestamp);      
                        ?>
                    </a>
                </div>
                <div class="calendar-ticket-days">
                <a href="">
                        <?php
                            date_default_timezone_set('UTC');

                            $tomorrow_timestamp = strtotime('+2 day');

                            echo date('D. d M.', $tomorrow_timestamp);      
                        ?>
                    </a>
                </div>
                <div class="calendar-ticket-days">
                    <a href="">
                        <?php
                            date_default_timezone_set('UTC');

                            $tomorrow_timestamp = strtotime('+3 day');

                            echo date('D. d M.', $tomorrow_timestamp);      
                        ?>
                    </a>
                    
                </div>
            </div>
        </details>
    </section>

</body>
</html>