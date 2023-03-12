@echo off

rem Open the first command prompt window and run "php artisan serve"
start "Laravel Server" cmd /k "php artisan serve"

rem Wait for the server to start
timeout /t 5 /nobreak >nul

rem Open the second command prompt window and run "php artisan route:list"
start "Laravel Routes" cmd /c "php artisan route:list"

rem Keep the first window open until a key is pressed
pause >nul