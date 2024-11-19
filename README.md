# 2ª Atividade de Nota Final - ARA0062

## Equipe
- **Jeferson Luiz de Oliveira Junior** - Matrícula: 202408226934

## Sobre o Projeto
Esta atividade é composta por dois sistemas simples desenvolvidos com **PHP** e **SQLite**. O objetivo foi criar soluções práticas e funcionais para organizar livros e tarefas. Aqui está um resumo de cada sistema:

### 1. **Banco de Dados Livraria**
Neste sistema, o objetivo foi criar uma maneira fácil de gerenciar livros em uma livraria. As funcionalidades incluem:
- **Adicionar livros** com informações como ID, título, autor e ano de publicação.
- **Exibir todos os livros cadastrados**.
- **Excluir livros** utilizando o ID.

### 2. **Sistema de Gerenciamento de Tarefas**
Este sistema ajuda a organizar tarefas e acompanhar o progresso. As funcionalidades incluem:
- **Adicionar tarefas** com descrição e data de vencimento.
- **Exibir tarefas**, separando as tarefas concluídas das não concluídas.
- **Marcar tarefas como concluídas**.
- **Excluir tarefas** quando necessário.

## Como Rodar o Projeto
Para executar o projeto na sua máquina, siga os passos abaixo:

1. **Requisitos**:
   - É necessário ter o [XAMPP](https://www.apachefriends.org/pt_br/index.html) instalado ou qualquer outro servidor que suporte PHP e SQLite.

2. **Passo a Passo**:
   - Coloque os arquivos PHP dentro da pasta `htdocs` do XAMPP (geralmente localizada em `C:\xampp\htdocs`).
   - Crie os bancos de dados SQLite para cada sistema (Livraria e Tarefas).
   - Abra o painel de controle do XAMPP e inicie o **Apache**.
   - Acesse os sistemas no navegador:
     - Para o **Sistema Livraria**: `http://localhost/livraria/index.php`
     - Para o **Sistema de Tarefas**: `http://localhost/tarefas/index.php`

## Estrutura dos Arquivos
Aqui está um resumo dos principais arquivos que compõem o projeto:

- `index.php`: A página principal onde você verá os dados e pode interagir com o sistema.
- `database.php`: O arquivo de conexão com o banco de dados SQLite.
- `add_book.php`: Script para adicionar um novo livro à livraria.
- `delete_book.php`: Script para excluir um livro.
- `add_tarefa.php`: Script para adicionar uma nova tarefa.
- `update_tarefa.php`: Script para marcar uma tarefa como concluída.
- `delete_tarefa.php`: Script para excluir uma tarefa.

## Observações Finais
Este projeto foi feito como parte da **2ª atividade de avaliação** da disciplina **Desenvolvimento Web em HTML5, CSS, JavaScript e PHP**.

### Licença
Este código é livre para uso, mas fique atento às diretrizes da atividade e às regras da instituição. Caso precise modificar ou adaptar algo, fique à vontade!

---

**Importante**: Antes de rodar os scripts, não se esqueça de configurar corretamente o ambiente de desenvolvimento e criar os bancos de dados SQLite para garantir que tudo funcione direitinho. 
