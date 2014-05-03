<?php

class User
{
    private $username;
    private $email;
    private $website;

    public function __construct($username, $email, $website)
    {
        $this->username = $username;
        $this->email = $email;
        $this->website = $website;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getWebsite()
    {
        return $this->getWebsite();
    }

}


class BlogPost
{
    private $user;
    private $content;

    public function __construct($content, User $user)
    {
        $this->content = $content;
        $this->user = $user;
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

