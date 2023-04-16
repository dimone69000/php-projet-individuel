<?php

class ConnexionMessages
{
    public const CONNEXION_IS_VALID = 1;
    public const INVALID_USER = 2;
    public const INVALID_PASSWORD = 3;

    public static function getConnexionMessage(int $code): string
{
    switch ($code) {
        case ConnexionMessages::CONNEXION_IS_VALID:
            return "Connexion réussi";
            break;
        case ConnexionMessages::INVALID_USER:
            return "La connexion a échoué";
            break;
        case ConnexionMessages::INVALID_PASSWORD:
            return "Mot de passe incorecte";
            break;
        default:
            return "Contacter l'administrateur";
    }
}
}