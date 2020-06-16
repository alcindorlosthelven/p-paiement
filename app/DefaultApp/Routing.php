<?php
use app\DefaultApp\DefaultApp as App;
App::get("/", "default.index", "index");
App::post("/", "default.index","index_post");


App::get("/se-connecter", "client.seConnecter", "se_connecter");
App::get("/register", "client.register", "register");
