Subir docker windows

    - Acessar a pasta: cd /d/unity_projects/idlemmo_backend/
    - winpty docker-compose up --build -d

Acessar mysql windows

    - winpty ./mysql.exe -uroot -proot -h 127.0.0.1

Acessar docker e rodar as migrations

    - winpty docker exec -it php sh
    - php artisan migrate


Criar controller, model e os caraio

    - php artisan wn:resource messages "user_id;integer;unsigned;required; description;text;required;" --add=timestamps

Config não lembro de onde

APP_NAME=Lumen
APP_ENV=local
APP_KEY=11111111111111111111111111111111
APP_DEBUG=true
APP_URL=http://localhost:8080
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=idlemmo
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
QUEUE_CONNECTION=sync

Arrumar algumas coisas dps
    mudar a variável do model no controller
private $_model = "App\Users";

Agrupar as rotas
/**
 * Routes for resource messages
 */
$router->group(['prefix' => 'messages'], function () use ($router) {
    $router->get('/', 'MessagesController@index');
    $router->get('/{id}', 'MessagesController@show');
    $router->get('/user/{id}', 'MessagesController@show_user_messages');
    $router->post('/', 'MessagesController@store');
    $router->put('/{id}', 'MessagesController@update');
    $router->delete('/{id}', 'MessagesController@destroy');
});

Ajustar o arquivo base que foi criado na root do lumen/app
class Users extends Model {
    protected $fillable = [
        'id',
        'name',
        'lastname',
        'email',
        'telephone',
    ];

    public static $rules = [
        "name" => "required|max:120",
        "lastname" => "required|max:120",
        "email" => "required|max:60",
        "telephone" => "required|max:32",
    ];
}

Adicionar Schema na migration e alterar os dados dos campos
use Illuminate\Support\Facades\Schema;

public function up() {
        Schema::create('users', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 120);
            $table->string('lastname', 120);
            $table->string('email', 60);
            $table->string('telephone', 32);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('users');
    }

Ajustar o modelFactory
$factory->define(App\Messages::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'email' => $faker->email,
        'telephone' => $faker->telephone,
    ];
});
