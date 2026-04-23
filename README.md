# 📅 AgendaPHP

Sistema web de agendamento de clientes desenvolvido do zero em PHP e MySQL.

Projeto criado para consolidar conhecimentos práticos em desenvolvimento backend, banco de dados relacional e versionamento com Git.

---

## 🚀 Funcionalidades

- ✅ Cadastrar clientes
- ✅ Listar clientes cadastrados
- ✅ Deletar clientes
- 🔧 Cadastro de agendamentos *(em desenvolvimento)*
- 🔧 Listagem de agendamentos *(em desenvolvimento)*

---

## 🛠️ Tecnologias utilizadas

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)

---

## 📁 Estrutura do projeto

```
agenda-php/
├── index.php              # Página principal — lista de clientes
├── novo_cliente.php       # Formulário de cadastro de clientes
├── deletar_cliente.php    # Ação de exclusão de cliente
├── db.php                 # Conexão com o banco de dados (PDO)
└── README.md              # Documentação do projeto
```

---

## 🗄️ Banco de dados

**Tabela `clientes`**
| Campo | Tipo |
|---|---|
| id | INT (PK, Auto Increment) |
| nome | VARCHAR(100) |
| telefone | VARCHAR(20) |
| email | VARCHAR(100) |

**Tabela `agendamentos`**
| Campo | Tipo |
|---|---|
| id | INT (PK, Auto Increment) |
| cliente_id | INT |
| data | DATE |
| hora | TIME |
| descricao | VARCHAR(255) |

---

## ⚙️ Como rodar localmente

**Pré-requisitos:** XAMPP instalado

1. Clone o repositório dentro da pasta `htdocs` do XAMPP:
```bash
git clone https://github.com/Carlos-xiruu/agenda-php.git
```

2. Inicie o **Apache** e o **MySQL** no XAMPP Control Panel

3. Crie o banco de dados `agenda_php` no phpMyAdmin e importe as tabelas

4. Acesse no navegador:
```
http://localhost/agenda-php/
```

---

## 📈 Status do projeto

🚧 Em desenvolvimento — novas funcionalidades sendo adicionadas

---

## 👨‍💻 Autor

Desenvolvido por **Carlos Silva**

[![GitHub](https://img.shields.io/badge/GitHub-Carlos--xiruu-181717?style=flat&logo=github)](https://github.com/Carlos-xiruu)
