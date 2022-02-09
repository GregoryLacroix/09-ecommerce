<?php 
// FONCTION INTERNAUTE AUTHENTIFIE 
function connect()
{
    // Si l'indice 'user' n'est pas définit dans la session, cela veut dire que l'internaute n'est pas passé par la page connexion, donc n'est pas authentifié sur le site
    if(!isset($_SESSION['user']))
    {
        return false;
    }
    else // Sinon l'indice 'user' est définit dans le session, l'internaute est passé par la page connexion et est authentifié sur le site
    {
        return true;
    }
}

// FONCTION INTERNAUTE AUTHENTIFIE ET ADMINISTRATEUR DU SITE
function adminConnect()
{
    // Si l'indice 'user' est définit dans la session (connect()) et si l'indice 'statut' dans la session, donc la bdd a pour valeur 'admin', cela veut dire que l'internaute est authentifié et qu'il est administrateur du site
    if(connect() && $_SESSION['user']['statut'] == 'admin')
    {
        return true;
    }
    else // Sinon, l'indice 'user' n'est pas définit, donc l'utilisateur n'est pas authentifié ou alors son statut est 'user', donc l'utilisateur n'est pas administrateur du site
    {
        return false;
    }
}