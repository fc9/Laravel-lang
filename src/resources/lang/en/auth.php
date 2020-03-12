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

    'BEGIN' => 'Begin', #
    'LOGIN' => 'Login', #
    'LOGOUT' => 'Logout',
    'LOGUP' => 'Log Up',
    'REGISTER' => 'Register',
    'CONTINUE' => 'Continue',
    'CONFIRM' => 'Confirm',
    'GO' => 'Go',
    'NEXT' => 'Next',
    'BACK' => 'Back',
    'SAVE' => 'Save',
    'EDIT' => 'Edit',
    'UPDATE' => 'Update',
    'DELETE' => 'Delete',
    'REMOVE' => 'Remove',
    'VERIFY' => 'Verify',
    'OK' => 'Ok',

    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'email_sent' => 'Email successfully sent!',
    'email_confirm_register_subject' => 'New Account',
    'failed_username' => 'Username unknown.',
    'email_not_found' => 'E-mail not found.',
    'email_send_link' => 'A reset link has been sent to your email address.',
    'email_send_error' => 'A Network Error occurred. Please try again.',
    'register_success' => 'Register validate!',
    'sponsor_username_invalid' => 'Sponsor username invalid.',
    'indicator_not_found' => 'Indicator not found or qualified.',
    'username_invalid' => 'Username invalid.',
    'username_unavailable' => 'Username unavailable.',
    'email_unavailable' => 'E-mail is already in use.',

    'home' => [
        'title' => 'Begin',
        'subtitle' => 'Start with a free :Company account.', #
        'to_login' => 'Já possui uma conta?',
    ],

    'identify' => [
        'title' => '',
    ],

    'confirm_email' => [
        'title' => '',
    ],

    'service' => [
        'status' => [
            'unavailable' => 'Unavailable',
            'maintenance' => 'Maintenance',
            'updating' => 'Updating',
            'available' => 'Available',
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

    'sign_up' => 'Sign Up',
    'sign_in' => 'Sign In',
    'go' => 'Go',
    'back' => 'Back',
    'confirm' => 'Confirm',
    '1st_step' => '1st step',
    '2st_step' => '2st step',
    '3st_step' => '3st step',

];

