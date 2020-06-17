<?php
use app\DefaultApp\DefaultApp as App;
App::get("/index", "default.index", "index");

App::post("/index", "default.index","index_post");
App::get("/se-connecter", "client.seConnecter", "se_connecter");
App::get("/", "client.seConnecter");
App::get("/register", "client.register", "register");
App::get("/logout", function (){
    session_destroy();
    App::redirection("se_connecter");
}, "logout");
