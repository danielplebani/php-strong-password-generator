<?php

function createPassword($length, $repetitions, $numbers, $letters, $symbols)
{
    $password = '';

    if ($length != null && $length != '' && $length <= '26') {
        function generaParolaCasuale($length, $password, $repetitions, $numbers, $symbols)
        {
            $caratteri = 'abcdefghijklmnopqrstuvwxyz';
            $numeri = '1234567890';
            $simboli = '!@#$%^&*()_+-=[]{}|;:,.<>?';

            if ($numbers == '1' && $symbols == '1') {
                $caratteri =  $caratteri . $numeri . $simboli;
            } elseif ($numbers == '1' && !$symbols == '1') {
                $caratteri =  $caratteri . $numeri;
            } elseif (!$numbers == '1' && $symbols == '1') {
                $caratteri =  $caratteri . $simboli;
            }

            $password = '';

            for ($i = 0; $i < $length; $i++) {
                $indice = rand(0, strlen($caratteri) - 1);
                $password .= $caratteri[$indice];
            }

            if ($repetitions === '0') {

                $caratteriUnici = str_split($caratteri);

                shuffle($caratteriUnici);

                $password = implode('', array_slice($caratteriUnici, 0, $length));
            }

            return $password;
        }

        $password = generaParolaCasuale($length, $password, $repetitions, $numbers, $symbols);
    };

    return $password;
}

?>