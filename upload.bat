@echo off
:: Définition des variables
setlocal

:: Chemin du dossier local
set LOCAL_PATH=/home/users/students/classe5tb/mouyelv/l_epi_dore/www/epi_dore

:: Identifiants du serveur distant
set REMOTE_USER=mouyart
set REMOTE_HOST=ssh-mouyart.alwaysdata.net
set REMOTE_PATH=/home/mouyart/www/epi_dore

:: Commande pour transférer les fichiers
echo Transfert des fichiers en cours...
scp -r %LOCAL_PATH%\* %REMOTE_USER%@%REMOTE_HOST%:%REMOTE_PATH%

:: Vérification du succès de la commande
if %errorlevel% neq 0 (
    echo Erreur lors du transfert !
    exit /b %errorlevel%
) else (
    echo Transfert terminé avec succès !
)

endlocal
pause
