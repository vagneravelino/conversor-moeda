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

Projeto *"Desafio"* de criação de um algoritmo conversor de moedas.  

O desafio consiste em selecionar duas moedas de diferentes países e obter sua cotação, bem como poder ter a possibilidade de se digitar um montante em decimal e obter o respectivo valor convertido.  

Após todos os itens indicados, a conversão deverá ser feita de forma automática.

Para este projeto não foi solicitado um banco de dados, a conversão dos valores das respectivas moedas deverão ser feitas através do uso de um vetor de valores.

#### ***Observações Importantes***

> * *Esta aplicação não possui banco de dados e nem faz uso de API, as conversões são feitas através de consultas à um vetor de cotações com os valores das respectivas moedas.*
> * *Os valores exibidos nos cálculos são cotações reais dos dia 07/06/2022, consultados no site [FinanceOne](https://financeone.com.br "Finance One").*
> * *As informações e valores das respectivas moedas são apresentados apenas em caráter de ilustração e demonstração de código, não podendo desta forma serem utilizados como fontes de consultas para outras aplicações ou afins, e desta forma isentando o referido site citado acima de toda e qualquer responsabilidade pela veracidade e fidelidade dos dados exibidos.*

## Pré-Requisitos

* Servidor Apache 2 ou superior
* PHP 7.4 ou superior
* Node JS 12 ou superior

## Instruções para Execução do Projeto

Selecione um diretório em seu computador para a execuçao do projeto.  
Na pasta selecionada, faça o clone do repositório do [Github.com](https://github.com/vagneravelino/conversor-moeda "Projeto Desafio Conversor de Moeda") usando a linha de comando abaixo:

> $ git clone https://github.com/vagneravelino/conversor-moeda.git


Se preferir, pode acessar o repositório do [Github.com](https://github.com/vagneravelino/conversor-moeda "Projeto Desafio Conversor de Moeda"), efetuar o download do arquivo .zip e descompactar no diretório de sua escolha.

### Servidor Local

Faça o clone do projeto na pasta apropriada do se servidor web local, ou descompacte o arquivo .zip baixado do repositório.

### Docker

Para executar o projeto em container do Docker, basta entrar na pasta onde descompactou o arquivo .zip ou fez o clone e digite o comando:
> $ docker-compose -f ./docker/docker-compose.yml up -d

***Atenção***  
> ***Caso você possua algum container docker ativo e o mesmo estiver mapeado para a porta 80, ocorrerá um erro na execução acima, indicando que a porta 80 já está em uso.***   
> ***Neste caso, desative seu container docker e tente executar o comando novamente, ou se preferir, edite o arquivo docker-compose.yml, dentro da pasta docker e altere o mapeamento da porta de 80 para outra porta desejada e disponível.***

Após a conclusão do Docker, execute os comandos abaixo:

> $ docker exec -it web-conversor-moeda bash -C "/home/www/scripts/config.sh"  

Pronto, a aplicação está disponível.   
Basta abrir o seu web browser preferido e digitar o endereço:

> http://10.0.40.2

ou

> http://localhost

***Atenção***
> ***Se você alterou a porta no arquivo docker-compose.yml, não esqueça de indicar a porta ao acessar o endereço indicado acima.***

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
