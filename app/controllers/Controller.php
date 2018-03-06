<?php
require_once  'app/models/User.php';
require_once 'app/components/Weather.php';

class Controller
{
    public function homeAction() {
        $user = new User();
        $user->setFirstname('Дмитрий');
        $user->setLastname('Семёнов');


        $this->render('home.php', 'Главная', [
            'user' => $user,
            'time' => time(),
    ]);
    }

    public function regAction() {
        $param = $_POST;
        $user = new User;

        if (isset($param['is_agree'])) {

            $user->setFirstname($param['firstname']);
            $user->setLastname($param['lastname']);
            $user->setAge($param['age']);
            $user->setSex($param['sex']);
            $user->setGrowth($param['growth']);
            $user->setPassword($param['password']);
            if (isset($param['stack_learn'])) {
                $user->setStackLearn($param['stack_learn']);
            }
        }

        $this->render('reg.php', 'Регистрация', [
            'user' => $user,
        ]);

    }

    public function weatherAction() {
        $city = 'Saint%20Petersburg,ruSaint Petersburg,ru';
        $weather = new Weather('012e34537b328a78762f56bb13b7ac8c');
        $this->render('weather.php','Погода', [
            'weatherByCity' => $weather->getWeatherByCity($city)
        ]);
    }

    private function render($view, $title, $param = []) {
        extract($param);

        require_once 'templates/layout.php';

    }

    public function route($route) {
        return '?act='.$route;
    }

}