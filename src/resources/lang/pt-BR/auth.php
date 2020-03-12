<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'BEGIN' => 'Iniciar', #
    'LOGIN' => 'Entrar', #
    'LOGOUT' => 'Sair',
    'LOGUP' => 'Inscrever-se',
    'REGISTER' => 'Cadastrar',
    'CONTINUE' => 'Continuar',
    'CONFIRM' => 'Confirmar',
    'GO' => 'Avançar',
    'NEXT' => 'Próximo',
    'BACK' => 'Voltar',
    'SAVE' => 'Salvar',
    'EDIT' => 'Editar',
    'UPDATE' => 'Alterar',
    'DELETE' => 'Excluir',
    'REMOVE' => 'Remover',
    'VERIFY' => 'Verificar',
    'OK' => 'Ok',

    'failed' => 'Nome de usuário ou senha incorreta. Confira atentamente sesu dados e tente novamente.', #
    'throttle' => 'Você realizou muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    'email_sent' => 'Email enviado com sucesso!',
    'email_confirm_register_subject' => 'Nova conta',
    'failed_username' => 'Nome de usuário desconhecido.',
    'email_not_found' => 'E-mail não encontrado.',
    'email_send_link' => 'Um link foi enviado para o seu endereço de e-mail.',
    'email_send_error' => 'A Rede falhou. Por favor tente novamente.',
    'register_success' => 'Cadastro aceito!',
    'sponsor_username_invalid' => 'O Nome do usuário Patrocinador é inválido.',
    'indicator_not_found' => 'Patrocinador inválido ou não encontrado.',
    'username_invalid' => 'Nome de usuário inválido.',
    'username_unavailable' => 'Nome de usuário indisponível',
    'email_unavailable' => 'E-mail já está em uso.',

    'home' => [
        'title' => 'Início', #
        'subtitle' => 'Comece com uma conta gratuita do :Company.', #
    ],

    'identify' => [
        'title' => '',
    ],

    'confirm_email' => [
        'title' => '',
    ],

    'service' => [
        'status' => [
            'unavailable' => 'Indisponível',
            'maintenance' => 'Em manutenção',
            'updating' => 'Em atualização',
            'available' => 'Disponível',
        ],
    ],


    'login' => [
        'title' => 'Iniciar sessão', #
        'create_an_account' => 'Criar uma conta',
        'Remember_me' => 'Manter login', #
        'Cant_sign_in' => 'Não consegue fazer login?', #
        'Create_account' => 'Criar conta', #
        'switch_account' => 'Não é você? Trocar contas.',
        'unavailable_body' => 'Não foi possível fazer sua autenticação no momento',
        'unavailable_header' => 'Não foi possível autenticar',
        'archived_account' => 'Sua conta ficou desabilitada por mais de um ano e, por lei, ela foi arquivada. Para restaurar sua conta, acesse :here.',
        'unavailable_more_info' => 'Não foi possível fazer sua autenticação no momento',
        'RATE_LIMITED' => 'Recebemos sua solicitação. Aguarde alguns minutos e tente novamente.',
        'captcha_subhead' => 'Você tentou iniciar a sessão vezes demais. Complete o captcha abaixo.',
        'disabled' => [
            'title' => 'Login indisponível. Tente novamente mais tarde.',
            #
            'text' => 'Lamentamos, os servidores de login estão temporariamente indisponíveis para atualizaçaõ. Tente novamente mais tarde. Verifique a página de <a href=":link" target="_blank">status de serviço</a> para mais informações.',
            #
            'help' => 'Volte ao seu aplicativo do cliente e tente novamente ou entre em contato com o proprietário e peça suporte.',
        ],

        'Error' => 'Ocorreu um erro. Tente novamente mais tarde.',
        'Error_help' => 'Volte ao seu aplicativo do cliente e tente novamente ou entre em contato com o proprietário e peça suporte.',
        'reauth_current_account' => 'Você está conectado(a) como :username',
    ],

    'register' => [
        'create_an_account' => 'Criar uma conta',
        'heading' => 'Mas, primeiro, precisamos de algumas informações.',
        'disabled_body' => 'Estamos trabalhando para resolver o problema. Tente novamente mais tarde.',
        'disabled_retry' => 'Tente novamente.',
        'disabled_status' => 'Ver Status do Serviço',
        'disabled_subtitle' => 'Deixamos Poros demais entrarem aqui!',
        'disabled_title' => 'A criação de conta está indisponível.',
        'requirements_not_met_body' => 'Você não atende aos requisitos mínimos para criar uma conta.',
        'requirements_not_met_subtitle' => 'Ops',
        'requirements_not_met_title' => 'Requisitos não atendidos',
        'rebranded_last_step_heading' => 'Último passo!',
        'rebranded_last_step_subheading' => 'Estamos quase lá.',
        'check_body' => 'Para sua segurança, insira o código que enviamos para :email.',
        'check_email_sent' => 'O e-mail foi reenviado.',
        'Please_enter_your_username_and_password_to_proceed' => 'Insira seu nome de usuário e senha para prosseguir.',
        'password_strength_great' => 'Ótima',
        'rebranded_password_strength_okay' => 'OK',
        'password_strength_requirements' => 'A força da senha deve ser \'OK\' ou superior.',
        'password_strength_too_weak' => 'Muito fraca.',
        'password_subheading' => 'Escolha uma boa senha!',
        'passwords_must_match' => 'As senhas devem ser idênticas.',
        'Please_select_a_region' => 'Selecione uma região.',
        'username_or_email' => 'Nome de usuário ou email',
        'login_server_down' => 'Lamentamos, os servidores de login estão temporariamente indisponíveis. Tente novamente mais tarde. Verifique a página de :link_service_status para mais informações.',
        'error' => 'Não conseguimos acessar o Serviço de Inscrição no momento. Tente novamente mais tarde.',
        'success' => 'Sucesso! Sua conta foi criada. Redirecionaremos você em breve.',
        'to_login' => 'Já possui uma conta?',

        'confirm_email' => [
            'title' => 'Confirmação necessária', #
            'subtitle' => 'Para sua segurança, insira o código que enviamos para <strong>:email</strong>.', #
            'resend_code' => 'Reenviar código.', #
        ],

    ],

    'logout' => [
        'redirect_button' => 'Redirecionar agora',
        'success_heading' => 'Sua sessão foi encerrada.',
        'success_subheading' => 'Seu redirecionamento será automático.',
        'logout_loading_description' => 'Isto não deve levar muito tempo. Aguente firme.',
        'logout_loading_heading' => 'Encerrando sua sessão',
        'logout_redirect_button' => 'Redirecionar agora',
        'logout_success_deadend' => 'Você pode fechar esta janela com segurança.',
        'logout_success_heading' => 'Sua sessão foi encerrada.',
        'logout_success_redirect' => ':click_here caso o redirecionamento automático não funcione.',
        'logout_success_subheading' => 'Seu redirecionamento será automático.',
    ],

    'reauth' => [
        'current_account' => 'Você está conectado(a) como :username',
        'heading' => 'Confirme sua senha',
        'switch_account' => 'Não é você? Trocar contas',
    ],

    'multifactor' => [
        'check_body' => 'Para sua segurança, insira o código que enviamos para :email.',
        'resend_code' => 'Reenviar código.',
        'check_email_sent' => 'O e-mail foi reenviado.',
        'attempt_failed' => 'Código incorreto. Tente novamente.',
        'add_to_trusted_devices_with_link' => 'Adicionar este dispositivo aos meus dispositivos confiáveis. Saiba mais',
    ],

    'help' => [
        'support' => 'Suporte',
        'support_site' => '/support',
        'Need_Help' => 'Precisa de ajuda?',
        'LANGUAGE' => 'Idioma',
        'FORGOT_PASSWORD' => 'Recuperar senha',
        'FORGOT_USERNAME' => 'Recuperar nome de usuário',
        'INVALID_REQUEST' => 'Solicitação inválida.',
        'resend_code' => 'Reenviar código.',
        'cant_access_email' => 'Não tem mais acesso a esse e-mail?',
    ],

    'sign_up' => 'Inscrever-se',
    'sign_in' => 'Entrar',
    'go' => 'Avançar',
    'back' => 'Voltar',
    'confirm' => 'Confirmar',
    '1st_step' => '1º passo',
    '2st_step' => '2º passo',
    '3st_step' => '3º passo',

];

