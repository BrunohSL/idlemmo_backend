Subir docker windows

    - Acessar a pasta: cd /d/unity_projects/idlemmo_backend/
    - winpty docker-compose up --build -d

Acessar mysql windows

    - winpty ./mysql.exe -uroot -proot -h 127.0.0.1

Acessar docker e rodar as migrations

    - winpty docker exec -it php sh
    - php artisan migrate