<?php

if (!Sessao::estaLogado()) :
    Redirect::redirecionar('usuarios/login');
else :
    Redirect::redirecionar('agenda/index');
endif;
