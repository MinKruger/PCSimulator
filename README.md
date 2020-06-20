#PCSimulator

Projeto criado no intuito de auxiliar usuários com poucos conhecimentos técnicos na construção de seus computadores de forma customizada. Diferentes de sites onde se montam o seu computador, o diferencial do PCSimulator é retornar somentes as peças compatíveis com o componente escolhido.

##Instalando o Projeto

Foi utilizado 
* PHP 7.2 Orientado a Objetos.
* Laravel 6.0
* Apache 2
* Eloquent ORM
> O banco de dados não importa muito, postgres, mysql, **SQL Server** etc. O Laravel utiliza um sistema de migrations que eu escrevo o código e ele converte para o BD que estiver setado utilizando um pacote interno.

### Para instalar o projeto
> Se estiver em ambiente **Windows** baixe o applicativo **Laragon** Ele irá cuidar do Apache, PHP e Extensões necessárias além do BD. Após instalar ele apenas precisará instalar o Composer para poder ter acesso ao gerenciador de dependências do PHP.

> Se estiver em Ambiente macOS, pode usar o **Homestead** ou o **Valet**.

> Se seu ambiente for Linux, precisará instalar tudo na mão ou subir um container **Docker** configurado com os requisitos.

> Após instalar o projeto basta configurar o arquivo **.env** no root da pasta do projeto.

* > DB_HOST=127.0.0.1
* > DB_PORT=porta_do_banco
* > DB_DATABASE=nome_do_banco
* > DB_USERNAME=root
* > DB_PASSWORD=

> Então rodar os seguintes comandos:
* > composer install **Instala as depedências**
* > php artisan migrate:fresh **Zera o BD e o reescreve.**

> após abrir o projeto no virtualhost criado para ele. **Obs: Apontar para a pasta public/.**