# Python Logistics - Site Ativo

## 📁 Estrutura do Projeto

Este diretório contém apenas os arquivos necessários para rodar o site em produção.

### Arquivos Ativos

- **index.php** - Página principal do site (entrada padrão)
- **servicos_aereo.php** - Página de serviços de frete aéreo
- **servicos_maritimo.php** - Página de serviços de frete marítimo
- **includes/** - Componentes PHP reutilizáveis
  - `navbar.php` - Menu de navegação (usado por todas as páginas)
- **assets/** - Recursos estáticos (CSS, JS, imagens, fontes)
  - `images/` - Imagens do site (incluindo mapa-múndi SVG)
  - `css/` - Estilos
  - `js/` - Scripts
  - `fonts/` - Fontes customizadas

### Pasta Backlog

Todos os outros arquivos (versões antigas, páginas HTML estáticas, etc.) foram movidos para a pasta **`backlog/`** em **22/12/2025**.

## 🚀 Como Rodar

1. Certifique-se de que o XAMPP está rodando (Apache)
2. Acesse: `http://localhost/sitepython/` ou `http://localhost/sitepython/index.php`
3. Para alternar idiomas: adicione `?lang=pt` ou `?lang=en` na URL

## 📦 Backlog

A pasta `backlog/` contém:
- Versões antigas do index (index.php, index_v2.php, index-2.php)
- Páginas HTML estáticas do template original
- Arquivos PHP legados (servicos_aereo.php, servicos_maritimo.php, etc.)
- Documentação antiga (COMO_RODAR.md)

## 🔧 Dependências

O site utiliza CDNs externas:
- **Tailwind CSS** - Framework CSS
- **Font Awesome** - Ícones
- **Google Fonts** - Tipografia (Inter, Outfit)
- **Flagcdn** - Bandeiras para seletor de idiomas

---

**Data da Organização**: 22 de Dezembro de 2025
