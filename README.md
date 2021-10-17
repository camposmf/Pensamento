# Pensamento

## Descrição
Um simples projeto para explorar os conceitos de API com PHP puro.

## APi Rest em PHP 8.0.9
API Rest desenvolvida à fim de aprender os conceitos relacionados à webservice na linguagem PHP.

Não segue nenhum modelo arquitetural de software, como MVC, MVVC por exemplo. 

No entanto, segue os conceitos de Models e Controllers.

## Características e tecnologias
  - PHP 8.0.9
  - Modelo Rest
  - Orientação à objetos (P.O.O.)
  - AutoLoading de classes
  - Namespaces
  - Classe PDO
  - MySql
  - Métodos GET, POST e DELETE

## Rotas
  ### GET {List / Filter}
    - /api/pensamento
    - /api/pensamento/{username}
    
  ### POST {Create / Update}
    - /pensamento
    - /pensamento/{id}
    
  ### DELETE
    - /pensamento/{id}