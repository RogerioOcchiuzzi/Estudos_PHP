<?php
//inversão de controle usando interfaces
interface NotificationInterface
{
    public function send();
}

class Notification implements NotificationInterface
{
    public function send()
    {
        echo "<p>class Notification implements NotificationInterface</p>";
    }
}

class HipChatNotification implements NotificationInterface
{
    public function send()
    {
        echo "<p>class HipChatNotification implements NotificationInterface</p>";
    }
}

class SlackNotification implements NotificationInterface
{
    public function send()
    {
        echo "<p>class SlackNotification implements NotificationInterface</p>";
    }
}

class UserCommand
{
    protected $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function handle()
    {
        $this->notification->send();
    }
}

//nesse trecho é realizado a inversão de controle
//----------------------------------------------------
$notification = new Notification();

$command = new UserCommand($notification);
$command->handle();
//----------------------------------------------------
$notification = new SlackNotification();

$command = new UserCommand($notification);
$command->handle();
//----------------------------------------------------
$notification = new HipChatNotification();

$command = new UserCommand($notification);
$command->handle();
//----------------------------------------------------






//inversão de controle usando construtor

class Animal{

    public function eat(){

        echo "<p>class Animal</p>";
    }

}

class Dog{

    public $animal;

    public function __construct(Animal $animal){

        $this->animal = $animal;
    }

    public function eat(){

        $this->animal->eat();

    }


}

$dog = new Dog(new Animal());
$dog->eat();


//----------------------------------------------------


//injeção de dependencia usando propriedades


class Pizza{

    private static $pizza;

    public function enviar(){

        echo "<p>class Pizza</p>";
    }

    public static function setPizza(Pizza $pizza){

        self::$pizza = $pizza;
    }

    public static function getPizza(){

        return self::$pizza;
    }

}

class PizzaQueijo{

    public $pizza;

    public function __construct(Pizza $pizza){

        $this->pizza = $pizza;
    }

    public function enviar(){

        $this->pizza->enviar();

    }


}

Pizza::setPizza(new Pizza);
$pizzaInstance = Pizza::getPizza();

$pizzaQueijoInstance = new PizzaQueijo($pizzaInstance);
$pizzaQueijoInstance->enviar();
