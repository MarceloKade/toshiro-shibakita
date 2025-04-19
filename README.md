# 🛠️ Projeto: Infraestrutura de Rede com Docker e NGINX

Este repositório contém um exemplo prático de infraestrutura de rede utilizando **Docker**, **NGINX** e **PHP**, baseado no curso de **Infraestrutura de Redes** da **Digital Innovation One (DIO)**, ministrado por Denilson Bonatti.

A proposta é demonstrar, de forma prática, como montar um ambiente em containers com balanceamento de carga entre múltiplos servidores PHP, conectados a um banco de dados MySQL, tudo orquestrado por containers.

---

## 📦 Tecnologias utilizadas

- Docker
- Docker Compose (opcional para expansão futura)
- PHP
- NGINX
- MySQL
- Linux (ambiente de container)
- AWS (simulada/local)

---

## 🚀 Como executar o projeto

1. **Clone o repositório**

```bash
git clone https://github.com/MarceloKade/toshiro-shibakita.git
cd toshiro-shibakita
```

2. **Construa a imagem Docker**

```bash
docker build -t dio-infra-app .
```

3. **Rode o container**

```bash
docker run -d -p 4500:80 dio-infra-app
```

4. **Acesse no navegador**

```
http://localhost:4500
```

---

## ⚙️ Estrutura dos arquivos

- `index.php`: aplicação simples em PHP que realiza conexão com banco MySQL, insere dados aleatórios e exibe o host de origem.
- `nginx.conf`: configuração do NGINX como balanceador de carga para múltiplos servidores.
- `banco.sql`: script para criação da tabela `dados` no MySQL.
- `Dockerfile`: define a imagem base e configurações de cópia do projeto.

---

## ✅ Melhorias implementadas

- ✅ **Estrutura de projeto organizada**, separando responsabilidades (NGINX, app PHP, banco).
- ✅ **Melhoria no `Dockerfile`**, focando apenas na imagem do NGINX (pode ser extendido para Compose).
- ✅ **Balanceamento de carga via `nginx.conf`**, com múltiplos servidores backend configurados.
- ✅ **Código PHP ajustado**:
  - Adição de `ini_set` para exibir erros no navegador;
  - Uso de `gethostname()` para exibir de qual container veio a requisição;
  - Conexão com MySQL usando `mysqli` e tratamento de erros adequados.
- ✅ **Inserção de dados randômicos na tabela** para simular carga.
- ✅ **Banco `meubanco` com tabela `dados`** criada e pronta para uso.
- ✅ **Preparação para expansão com Docker Compose**, permitindo rodar vários containers (NGINX, PHP, MySQL).
- ✅ **Uso de headers e charset apropriados no PHP para melhor visualização no navegador**.

---

## 📚 Baseado na aula de:

**Denilson Bonatti**  
_Instrutor DIO - Live Coding sobre Microsserviços com Docker_

---

## ✅ Pré-requisitos

- Docker instalado
- Conhecimentos básicos em:
  - Linux
  - Docker
  - AWS
  - Redes
