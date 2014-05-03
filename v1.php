<?php

class User
{
    private $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

}


class BlogPost
{
    private $user;
    private $content;

    public function __construct($content, $username, $email)
    {
        $this->content = $content;
        $this->user = new User($username, $email);
    }


    public function getContent()
    {
        return $this->content;
    }

    public function getUser()
    {
        return $this->user;
    }
}


$post = new BlogPost("Hello World!", "masnun", "masnun@gmail.com");