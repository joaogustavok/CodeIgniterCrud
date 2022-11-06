<?php

namespace App\Controllers;

use App\Models\PeopleModel;

class People extends BaseController
{
    private $peopleModel;

    public function __construct()
    {
        $this->peopleModel = new PeopleModel();
    }

    public function index()
    {
        return view('peoples', [
            'peoples' => $this->peopleModel->findAll()
        ]);
    }

    public function delete($id)
    {
        if ($this->peopleModel->delete($id)) {
            echo view('messages', [
                'message' => 'Pessoa excluido com sucesso'
            ]);

        } else {
            echo "Erro.";
        }
    }

    public function create()
    {
        return view('form');
    }

    public function store()
    {
        if ($this->peopleModel->save($this->request->getPost())) {
            return view("messages", ['message' => 'Pessoa salvada com sucesso']);
        } else {
            return view("messages", ['message' => 'Ocorreu um erro']);
        }
    }

    public function edit($id)
    {
        return view('form', [
            'people' => $this->peopleModel->find($id)
        ]);
    }
}
