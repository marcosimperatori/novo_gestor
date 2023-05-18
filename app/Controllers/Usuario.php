<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Usuários',
        ];

        return view('usuario/index', $data);
    }

    public function recuperaUsuarios()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $atributos = ['id', 'nome', 'email', 'ativo', 'imagem'];

        $usuarios = $this->usuarioModel->select($atributos)->orderBy('nome', 'asc')->findAll();

        //recebe o array de objetos usuários
        $data = [];

        foreach ($usuarios as $usuario) {
            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => anchor("usuarios/exibir/$usuario->id", esc($usuario->nome), 'title="Exibir detalhes do usuário"'),
                'email' => esc($usuario->email),
                'ativo' => ($usuario->ativo == true ? '<i class="fa fa-unlock text-success"></i>&nbsp;Ativo' : '<i class="fa fa-lock text-warning"></i>&nbsp;Inativo'),
            ];
        }

        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Detalhando o usuário",
            'usuario' => $usuario
        ];

        return view('usuario/exibir', $data);
    }

    public function editar(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Editando o usuário",
            'usuario' => $usuario
        ];

        return view('usuario/editar', $data);
    }

    public function atualizar()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        //atualiza o token do formulário
        $retorno['token'] = csrf_hash();

        //recuperando os dados que vieram na requisiçao
        $post = $this->request->getPost();

        if (empty($post['password'])) {
            unset($post['password']);
            unset($post['password_confirmation']);
        }

        $usuario = $this->buscaUsuarioOu404($post['id']);

        //preenchendo os atributos com os valores que vieram do post
        //o ci4 consegue preencher o objeto com os dados do formulário graças a entidade de classe
        $usuario->fill($post);

        //verificando se o objeto teve alguma alteração nos seus atributos
        if ($usuario->hasChanged() == false) {
            $retorno['info'] = "Não houve alteração no registro";
            return $this->response->setJSON($retorno);
        }

        if ($this->usuarioModel->protect(false)->save($usuario)) {
            return $this->response->setJSON($retorno);
        }

        //se chegou até aqui, é porque tem erros de validação
        $retorno['erro'] = "Verifique os aviso de erro e tente novamente";
        $retorno['erros_model'] = $this->usuarioModel->errors();

        return $this->response->setJSON($retorno);
    }


    /**
     * Método que recupera o usuário
     *
     * @param integer|null $id
     * @return Exception|object
     */
    private function buscaUsuarioOu404(int $id = null)
    {
        //vai considerar inclusive os registros excluídos (softdelete)
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Usuário não encontrado com o ID: $id");
        }

        return $usuario;
    }
}
