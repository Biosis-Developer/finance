<?php
//Autologin
$username = 'demo@demo.com.br';
$password = '123456';
if($username != '' AND $password != ''){
    $d = ORM::for_table('sys_users')->where('username',$username)->find_one();
    if($d){
        $d_pass = $d['password'];
        if(Password::_verify($password,$d_pass) == true){
            //Now check if OTP is enabled
            if($d['otp'] == 'Yes'){
                Otp::make($d['id']);
                $_SESSION['tuid'] = $d['id'];

                r2(U.'otp');
            }
            else{
                $_SESSION['uid'] = $d['id'];
                $d->last_login = date('Y-m-d H:i:s');
                $d->save();
                //login log

                _log('Login efetuado com sucesso! '.$username,'Admin',$d['id']);

                $rd = $config['redirect_url'].'/';
//                if ((isset($routes['2'])) AND (($routes['2'] != ''))){
//                    $rd =  $routes['2'];
//                    exit($rd);
//                }

              //  r2(U.$rd);
                _msglog('s','
                ========== Por favor leia esta mensagem completa ============== <br>
                Instalação Completa! Por favor preencha seu Nome Completo, Usuário e Senha. O Usuário Padrão é - demo@demo.com.br e Senha: 123456 Favor, altere nesta página.
                ');
                r2(U.'settings/users-edit/1/');
            }

        }
        else{
            _msglog('e','Usuário ou Senha Inválidos');
            _log('Login Falhou '.$username,'Admin');
            r2(U.'login');
        }
    }
    else{

        _msglog('e','Usuário ou Senha Inválidos');

        r2(U.'login/');
    }
}

else{
    _msglog('e','Usuário ou Senha Inválidos');

    r2(U.'login/');
}