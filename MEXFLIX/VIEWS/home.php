<?php
$template = '
        <article class="item">
            <h2>Hola %s bienvenida</h2>
            <p>Tu nombre es <b>%s</b></p>
            <p>Tu email es <b>%s</b></p>
            <p>Tu cumpleaño es <b>%s</b></p>
            <p>Tu perfil de usuario tiene un nivel de <b>%s</b></p>
        </article>

';

printf($template,
                $_SESSION['user_'],
                $_SESSION['name_'],
                $_SESSION['email'],
                $_SESSION['birthday'],
                $_SESSION['role_']
            );