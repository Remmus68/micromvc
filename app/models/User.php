<?php

class User {

    private $firstname;

    private $lastname;

    private $stackLearn = [];

    private $sex;

    private $password;

    private $age;

    private $growth;

    private $fruits;

    public function setFirstname($firstname) {
        return $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * @return array
     */
    public function getStackLearn()
    {
        return $this->stackLearn;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getFruits()
    {
        return $this->fruits;
    }

    /**
     * @return mixed
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return bool
     */
    public function isValidateFullName()
    {
        return
            strlen($this->firstname) >= 3 &&
            strlen($this->lastname) >= 3;
    }

    /**
     * @param $stackLearn
     */
    public function setStackLearn($stackLearn)
    {
        $this->stackLearn = $stackLearn;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param $fruits
     */
    public function setFruits($fruits)
    {
        $this->fruits = $fruits;
    }

    /**
     * @param $growth
     */
    public function setGrowth($growth)
    {
        $this->growth = $growth;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public static $salt='FykJi7t@-*gvc';

    public static function getSalt() {
        return self::$salt;
    }
}
