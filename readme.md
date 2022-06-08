# Conversor de Moeda

![Logo!](/assets/currency-converter.png "Backend Challenge")

---

## Índice 

* [Índice](#índice)
* [Descrição do Projeto](#descrição-do-projeto)
* [Pré-Requisitos](#pré-requisitos)
* [Instruções para Execução do Projeto](#instruções-para-execução-do-projeto)
* [Funcionalidades e Demonstração da Aplicação](#funcionalidades-e-demonstração-da-aplicação)
* [Tecnologias utilizadas](#tecnologias-utilizadas)
* [Desenvolvedor](#desenvolvedor)
* [Referências](#referências)
* [Licença](#licença)

## Descrição do Projeto

Desafio de criação de um algoritmo conversor de moedas.
Para realizar a conversão, selecione os identificadores da moeda de origem e de destino, bem como o montante em decimal a ser convertido.

Após todos os itens indicados, a conversão é feita de forma automática.

#### ***Observações Importantes***

* Esta aplicação não possui banco de dados e nem faz uso de API, as conversões são feitas através de consultas à um vetor de cotações com os valores das respectivas moedas.
* Os valores exibidos nos cálculos são cotações reais dos dia 07/06/2022, consultados no site [FinanceOne](https://financeone.com.br "Finance One").
* As informações e valores das respectivas moedas são apresentados apenas em caráter de ilustração e demonstração de código, não podendo desta forma serem utilizados como fontes de consultas para outras aplicações ou afins, e desta forma isentando o referido site citado acima de toda e qualquer responsabilidade pela veracidade e fidelidade dos dados exibidos.

## Pré-Requisitos

* Servidor Apache 2 ou superior
* PHP 7.4 ou superior
* Node JS 12 ou superior

## Instruções para Execução do Projeto

Selecione um diretório em seu computador para a execuçao do projeto.
Na pasta selecionada, faça o clone do repositório do [Github.com](https://github.com/vagneravelino/conversor-moeda "Projeto Desafio Conversor de Moeda") usando a linha de comando abaixo:

> $ git clone https://github.com/vagneravelino/conversor-moeda.git


Se preferir, pode acessa o repositório do [Github.com](https://github.com/vagneravelino/conversor-moeda "Projeto Desafio Conversor de Moeda"), efetar o download do arquivo .zip e descompactar no diretório de sua escolha.

### Servidor Local

Para configurar o servidor local, siga os seguintes passos:

### Docker

Para executar o projeto em container do Docker, basta entrar na pasta onde descompactou o arquivo .zip ou fez o clone e digite o comando:
> $ docker-compose -f ./docker/docker-compose.yml up -d

Após a conclusão do Docker, execute os comandos abaixo:

> $ docker exec -it web-conversor-moeda composer install  

> $ docker exec -it web-conversor-moeda npm install

Pronto, a aplicação está disponível.   
Basta abrir o seu web browser preferido e digitar o endereço:

> http://10.0.40.3


## Funcionalidades e Demonstração da Aplicação

Ao acessar a aplicação, será exibida a tela abaixo.

![Screenshot 1](/assets/screenshot1.png "Screenshot 1")

Selecione a moeda de Origem **"Moeda (De)"** e a moeda de Destino **"Moeda (Para)"** para conversão.  
Você verá o valor da cotação no campo com o rótulo **"Valor Convertido"**, conforme figura abaixo.

![Screenshot 2](/assets/screenshot2.png "Screenshot 2")

Você poderá também digitar um valor qualquer para efetuar o cálculo de conversão, bastando para isso digitar o valor desejado no campo com o rótulo **"Valor a Converter"**.  
Veja o exemplo abaixo.

![Screenshot 3](/assets/screenshot3.png "Screenshot 3")

## Tecnologias utilizadas

<img src="https://img.shields.io/badge/Apache-2.4.52-yellow" />
<img src="https://img.shields.io/badge/PHP-7.4.28-blue" />
<img src="https://img.shields.io/badge/laravel-7.30.6-red" />
<img src="https://img.shields.io/badge/nodejs-12.22.10-green" />

## Desenvolvedor

[<img src="https://avatars.githubusercontent.com/u/17906325?s=400&u=8eacf5e17fc3d37ec7bb6a06530b96df5984aa6e&v=4" width=75><br><sub>Vagner Avelino</sub>](https://github.com/vagneravelino "Vagner Avelino")

## Referências

* [FinanceOne](https://financeone.com.br "Finance One") - Fonte para aquisição dos valores das moedas.

## Licença 

The [MIT License]() (MIT)

Copyright :copyright: 2022 - Conversor de Moeda
