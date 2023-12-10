# Sistema de Gerenciamento de Mensagens 💾
_**Este sistema é uma extensão do aprendizado em PHP, onde eu, Marcus, após assistir a um vídeo tutorial [Como Criar um Formulário em HTML e Salvar os Dados 💾?](https://www.youtube.com/watch?v=ZmaBaS5VroQ), 
decidi ir além, adicionando funcionalidades de edição e exclusão às operações básicas de cadastro e visualização de mensagens.**_

## Funcionalidades ✏️
- **Envio de Mensagens:** O usuário pode enviar mensagens que são armazenadas em um banco de dados.
- **Visualização de Mensagens:** As mensagens enviadas podem ser visualizadas em uma interface separada.
  - **Importante:** Para visualizar as é necessário uma senha, que no sistema esta estática `123`
- **Edição e Exclusão:** Cada mensagem pode ser editada ou excluída.

## Configuração e Instalação ⚙️
### Pré-requisitos
- XAMPP ou similar instalado e configurado em sua máquina.
- Um navegador web atualizado.
- Editor de texto ou IDE de sua preferência para editar os códigos.

### Passos para Configuração
1. **Instalação do XAMPP:**
    - Baixe e instale o XAMPP do [site oficial](https://www.apachefriends.org/pt_br/index.html). [_Video Tutorial_](https://www.youtube.com/watch?v=i_ypCik4VX0)
    - Inicie os módulos Apache e MySQL.
1. **Configuração do Projeto:**
    - Clone o repositório para a pasta htdocs no diretório de instalação do XAMPP.
    - Acesse localhost/nome_da_pasta_clonada no seu navegador.
1. **Criação do Banco de Dados:**
    - Acesse o phpMyAdmin no XAMPP.
    - Crie um banco de dados chamado `aula_formulario` e uma tabela chamado `mensagens` dentro desse novo banco de dados.
       ```sql
      CREATE DATABASE IF NOT EXISTS aula_formulario;
      USE aula_formulario;
       
      CREATE TABLE mensagens (
          id INT AUTO_INCREMENT PRIMARY KEY,
          nome VARCHAR(255) NOT NULL,
          email VARCHAR(255) NOT NULL,
          mensagem TEXT NOT NULL,
          data DATE NOT NULL,
          hora TIME NOT NULL
      );
        ```
       > Esse código SQL cria o banco de dados e a tabela necessária!

## Tecnologias Utilizadas 💻
- **PHP:** Linguagem de script do lado do servidor.
- **MySQL:** Sistema de gerenciamento de banco de dados.
- **HTML/CSS:** Para estrutura e estilo da interface do usuário.
- **JavaScript:** Para interatividade na interface do usuário.
- **Visual Studio Code:** como a IDE de editor de codigo.

## Estrutura do Projeto 📐
O projeto consiste em várias partes principais:
- index.html: Interface para enviar mensagens.
- mensagens.php: Interface para visualizar mensagens.
- processar-dados.php: Script PHP para processar os dados do formulário.
- processar-edicao.php: Script PHP para editar mensagens.
- processar-delecao.php: Script PHP para excluir mensagens.
- config.php: Arquivo de configuração para conexão com o banco de dados.
- css/: Diretório contendo arquivos CSS para estilização.
- js/: Diretório contendo arquivos JavaScript para funcionalidade.

## Etapas para Utilização do Sistema 🎛️
### Configuração
- [ ]  Instale o XAMPP: Baixe e instale o XAMPP no [site oficial](https://www.apachefriends.org/pt_br/index.html). [_Video Tutorial_](https://www.youtube.com/watch?v=i_ypCik4VX0)
- [ ]  Inicie os Módulos Apache e MySQL: Abra o painel de controle do XAMPP e inicie os módulos.
### Preparação do Projeto
- [ ]  Clone o Repositório: Faça o clone do repositório para a pasta `C:xampp\htdocs` no seu computador. 
- [ ]  Acesse o Projeto: Digite localhost/nome_da_pasta_clonada no seu navegador.
- [ ]  Abra o phpMyAdmin: Acesse o phpMyAdmin através do painel de controle do XAMPP.
- [ ]  Crie o Banco de Dados: Crie um banco de dados chamado aula_formulario.
- [ ]  Crie a Tabela Mensagens: Execute o SQL fornecido na seção anterior para criar a tabela mensagens.
### Utilização do Sistema
- [ ]  Envie Mensagens: Acesse index.html para enviar mensagens.
- [ ]  Verifique as Mensagens Enviadas: Vá para mensagens.php e insira a senha para visualizar as mensagens.
- [ ]  Edite ou Exclua Mensagens: Use as opções disponíveis em mensagens.php para editar ou excluir mensagens.
### Edição do Sistema
- [ ]  Abra o Visual Studio Code: Abra os arquivos do projeto no Visual Studio Code ou em outro editor de sua preferência.
- [ ]  Faça Alterações: Edite o código para personalizar ou expandir a funcionalidade do sistema.
- [ ]  Teste as Alterações: Verifique se suas alterações funcionam conforme esperado acessando as páginas relevantes.

## Participe e Cresça com o Projeto
Sinta-se à vontade para usar, modificar e melhorar este sistema. Ao compartilhar suas próprias versões no GitHub, você contribui para uma comunidade de aprendizes e entusiastas do PHP. 
Juntos, podemos aprender mais, experimentar mais e crescer mais no mundo do desenvolvimento web. 🌟👨‍💻🌐

## Sobre o Autor 🙎
Este projeto foi desenvolvido por Marcus, um estudante entusiasta de PHP que está explorando as funcionalidades e capacidades desta poderosa linguagem de script do lado do servidor. 
Este projeto serve como uma forma de praticar e demonstrar suas habilidades recém-adquiridas.

> feito por Marcus Gomes.
>  
> _com ajuda do ChatGPT😂_
