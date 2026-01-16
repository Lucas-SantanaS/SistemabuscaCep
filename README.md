 Sistema de Busca de CEP via Web Service

Sistema web simples desenvolvido em PHP para consulta de endereços a partir do CEP, utilizando o Web Service da ViaCEP. O projeto realiza a busca dos dados e exibe as informações de forma organizada para o usuário.

Funcionalidades

- Consulta de endereço a partir do CEP
- Consumo de Web Service externo (ViaCEP)
- Tratamento e validação do CEP informado
- Exibição de logradouro, bairro, cidade e estado
- Interface simples e amigável
- 
Tecnologias Utilizadas

- PHP
- HTML5
- CSS3
- Web Service ViaCEP (XML)

Como Funciona

1. O usuário informa um CEP no formulário
2. O sistema realiza a limpeza do valor informado (mantendo apenas números)
3. Os dados são consultados via Web Service da ViaCEP
4. As informações retornadas em XML são tratadas e exibidas na tela
5. Caso o CEP seja inválido ou inexistente, uma mensagem de erro é apresentada

Como Executar o Projeto

1. Clone este repositório:
bash
 git clone https://github.com/Lucas-SantanaS/SistemabuscaCep.git


2. Coloque os arquivos em um servidor local (ex: **XAMPP**, **WAMP** ou **Laragon**)
3. Inicie o servidor Apache
4. Acesse pelo navegador:

   http://localhost/NOME-DA-PASTA/SistemabuscaCep/index.php
   
👨‍💻 Autor
Lucas Santana Silva
