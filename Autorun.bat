@echo off

rem Open the first command prompt window and run "php artisan serve"
start "Laravel Server" cmd /k "php artisan serve"

rem Wait for the server to start
timeout /t 5 /nobreak >nul
pause >nul