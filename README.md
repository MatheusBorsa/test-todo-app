# ✅ Todo App

Aplicação desenvolvida para o teste técnico: sistema de gerenciamento de tarefas (to-do list).

## 🚀 Tecnologias utilizadas

- PHP
- Laravel
- SQLite
- Laravel Breeze (autenticação)
- Blade + Bootstrap
  
---

## 🛠️ Como rodar o projeto localmente

### 1. Clonar o repositório

```sh
git clone https://github.com/MatheusBorsa/test-todo-app.git ou git@github.com:MatheusBorsa/test-todo-app.git se utiliza ssh
cd todo-app
```

### 2. Instalar as dependências PHP e Node
```sh
composer install
npm install
```

### 3. Gerar chave da aplicação
```sh
php artisan key:generate
```

### 4. Rodar as migrations
```sh
php artisan migrate
```

### 5. Iniciar o servidor
```sh
php artisan serve
```

### 6. Acesse no navegador
```sh
http://localhost:8000
```

## 🧠 Decisões tomadas no desenvolvimento

- **Arquitetura padrão do Laravel (MVC)**  
  O projeto foi estruturado utilizando Controllers, Models, Migrations, Requests e Views, garantindo separação de responsabilidades e facilidade de manutenção.

- **Validação com FormRequest (TaskRequest)**  
  Toda validação foi centralizada em uma única classe, evitando repetição de código e mantendo o controller limpo.

- **Enum para o status da tarefa (TaskStatus)**  
  Uso de `enum` do PHP para evitar valores soltos e garantir tipagem forte no domínio da aplicação.

- **Soft Delete (exclusão lógica)**  
  Implementado no model para permitir que uma tarefa seja excluída sem ser removida definitivamente do banco.

- **Blade + Bootstrap**  
  Blade foi utilizado para renderização das views por ser nativo do Laravel e simples de manter.  
  Bootstrap foi escolhido para estilização rápida sem configuração adicional.

- **Laravel Breeze para autenticação**  
  Utilizado para implementar login/registro de forma rápida, seguindo o padrão oficial do framework.

---

## 🚀 Melhorias futuras

- Criar página de **lixeira** (trash) para restauração de tarefas excluídas via Soft Delete.
- Adicionar **testes automatizados (Feature e Unit)**.
- Criar um **dashboard com métricas** sobre as tarefas.
- Implementar **controle de permissões (roles)** para permitir diferentes níveis de acesso.
 
