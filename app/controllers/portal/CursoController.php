<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController
{
    public function index()
    {
    }

    public function show($request)
    {
        $this->view([
            "title" => "Curso",
            "curso" => "teste"

        ], "portal.curso");
    }
}
