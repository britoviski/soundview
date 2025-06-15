# SoundView 🎵🔊  

## Desenvolvedores 👨‍💻
Ana Beatriz Barboza
Josimar Brito
Guilherme Cleber do Nascimento
  
**SoundView** é um blog moderno voltado para avaliação de soundbars. A plataforma oferece uma experiência rica tanto para usuários que querem encontrar a melhor opção de compra, quanto para administradores que publicam análises e organizam o conteúdo.

---

## ✨ Visão Geral

SoundView permite que os usuários naveguem por diferentes marcas e categorias de soundbars, curtam e comentem em postagens, além de acessarem links diretos para compra. Administradores têm acesso total à gestão de conteúdo e à moderação de comentários e denúncias.

---

## 🚀 Funcionalidades

### 👥 Usuários Comuns
- 🔍 Visualizar avaliações de soundbars
- 👍 Curtir postagens
- 💬 Comentar nas postagens
- 🚩 Denunciar postagens inapropriadas
- 🛒 Acessar links de compra recomendados
- 📂 Navegar por categorias e marcas
- 🏆 Ver destaques:
  - Melhor Custo-Benefício
  - Soundbars por Marca

### 🔐 Administradores
- ✏️ Criar, editar e excluir postagens
- 🗃️ Gerenciar categorias e marcas
- 🧹 Moderar comentários e denúncias

---

## 🛠️ Tecnologias Utilizadas

- **Backend:** Laravel 12.x
- **Frontend:** Blade + Bootstrap
- **Banco de Dados:** MySQL
- **Autenticação:** Laravel
- **Outros:** Composer, NPM, Eloquent ORM

---

## ⚙️ Instalação

# Clone o repositório
git clone https://github.com/britoviski/soundview

# Acesse o diretório do projeto
cd soundview

# Instale as dependências do PHP
composer install

# Instale dependências do frontend
npm install && npm run dev

# Configure o ambiente
cp .env.example .env
php artisan key:generate

# Ajuste suas variáveis de ambiente no .env

# Rode as migrações e (opcional) seeders
php artisan migrate --seed

