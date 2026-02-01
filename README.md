Docker: Utilização prática no cenário de Microsserviços
Denilson Bonatti, Instrutor - Digital Innovation One

Muito se tem falado de containers e consequentemente do Docker no ambiente de desenvolvimento. Mas qual a real função de um container no cenários de microsserviços? Qual a real função e quais exemplos práticos podem ser aplicados no dia a dia? Essas são algumas das questões que serão abordadas de forma prática pelo Expert Instructor Denilson Bonatti nesta Live Coding. IMPORTANTE: Agora nossas Live Codings acontecerão no canal oficial da dio._ no YouTube. Então, já corre lá e ative o lembrete! Pré-requisitos: Conhecimentos básicos em Linux, Docker e AWS.


# 🚀 Desafio Docker – Utilização Prática no Cenário de Microsserviços

Este projeto foi desenvolvido como parte do **Bootcamp DIO – Accenture | Desenvolvimento Java & Cloud**, com o objetivo de aplicar na prática os conceitos de **Docker**, **Docker Compose** e **arquitetura de microsserviços**.

A aplicação demonstra a comunicação entre múltiplos serviços conteinerizados utilizando **NGINX**, **PHP-FPM** e **MySQL**.

---

## 🧩 Arquitetura do Projeto

A solução é composta por **três microsserviços**, cada um executando em seu próprio container:

- **NGINX**  
  Responsável por receber as requisições HTTP e encaminhá-las para o PHP-FPM.

- **PHP-FPM**  
  Executa a aplicação PHP, realizando a inserção e a leitura de dados no banco.

- **MySQL**  
  Banco de dados responsável por armazenar as informações persistidas pela aplicação.

Todos os serviços se comunicam por meio de uma **rede interna Docker**.

---

## 📁 Estrutura do Projeto

```text
---

toshiro-shibakita/
│
├── app/
│ └── index.php # Aplicação PHP
│
├── db/
│ └── banco.sql # Script de criação do banco e da tabela
│
├── nginx/
│ └── nginx.conf # Configuração do NGINX
│
├── Dockerfile # Imagem PHP-FPM com extensão mysqli
└── docker-compose.yml # Orquestração dos microsserviços


---

## 🛠️ Tecnologias Utilizadas

- Docker
- Docker Compose
- NGINX
- PHP 7.2 (PHP-FPM)
- MySQL 5.7

---

## ⚙️ Funcionamento da Aplicação

Ao acessar a aplicação pelo navegador:

1. O **NGINX** recebe a requisição HTTP
2. O **PHP-FPM** executa o código PHP
3. Um novo registro com dados fictícios é inserido no MySQL
4. Todos os registros da tabela são listados em formato HTML

Isso comprova:
- Conexão entre os containers
- Escrita no banco de dados
- Leitura dos dados persistidos

---

## ▶️ Como Executar o Projeto

### Pré-requisitos
- Docker instalado
- Docker Compose instalado

### Passos

1. Clone o repositório:

   git clone https://github.com/paulovargas/toshiro-shibakita.git

2. Acesse a pasta do projeto:

    cd toshiro-shibakita


3. Suba os containers:

    docker-compose up --build -d


4. Acesse no navegador:

    http://localhost:8080

🧪 Banco de Dados

O banco é inicializado automaticamente na primeira execução através do arquivo banco.sql, contendo:

Criação do banco meubanco

Criação da tabela dados

Inserção de registros iniciais (dados fake)

🎯 Objetivo do Desafio

O projeto atende aos requisitos do desafio ao demonstrar:

Uso prático do Docker

Orquestração de múltiplos containers

Comunicação entre microsserviços

Inicialização automática de banco de dados

Separação de responsabilidades entre serviços

👨‍💻 Autor

Projeto desenvolvido por Paulo Vargas
Bootcamp DIO – Accenture | Desenvolvimento Java & Cloud