<?php

if (!Sessao::estaLogado()) :
    Redirect::redirecionar('usuarios/login');
else :
    Redirect::redirecionar('contatos/index');
endif;
