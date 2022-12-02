<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Usuario extends Command
{
    protected $nome;
    protected $email;
    protected $senha;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'usuario';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para criação de usuários';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->askNome();
        $this->askEmail();
        $this->askSenha();

        User::create([
            'name' => $this->nome,
            'email' => $this->email,
            'password' => Hash::make($this->senha)
        ]);

        $this->info('Usuário criado com sucesso!');
    }

    public function askNome()
    {
        $this->nome = $this->ask('Nome do usuário');

        $validar = Validator::make(['nome' => $this->nome], [
            'nome' => 'required'
        ]);

        if ($validar->errors()->has('nome')) {
            $this->info('Nome inválido');
            $this->askNome();
        }
    
    }

    public function askEmail()
    {
        $this->email = $this->ask('Informe um e-mail válido para este usuário');

        $validar = Validator::make(['email' => $this->email], [
            'email' => 'email'
        ]);

        if ($validar->errors()->has('email')) {
            $this->info('E-mail inválido');
            $this->askEmail();
        }
    
    }

    public function askSenha()
    {
        $this->senha = $this->ask('Informe uma senha');

        $validar = Validator::make(['senha' => $this->senha], [
            'senha' => 'required|string'
        ]);

        if ($validar->errors()->has('senha')) {
            $this->info('Senha inválida');
            $this->askSenha();
        }
    }
}
