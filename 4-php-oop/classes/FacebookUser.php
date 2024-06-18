<?php

class FacebookUser
{
    public $facebookAccount;
    private $facebookPassword;
    protected $posts;

    function __construct($fb, $pass, $posts)
    {
        $this->facebookAccount = $fb;
        $this->facebookPassword = $pass;
        $this->posts = $posts;
    }
}
