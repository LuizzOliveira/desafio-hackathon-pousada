# Panturismo - Sistema de Turismo no Pantanal

Um site moderno e responsivo para pacotes de turismo no Pantanal, desenvolvido com **HTML**, **CSS** e **PHP puro**, seguindo o padrão **MVC** (Model-View-Controller).

## Características

- **Design Responsivo**: Funciona perfeitamente em desktop, tablet e mobile
- **Padrão MVC**: Arquitetura limpa e organizada
- **PHP Puro**: Sem dependências externas, apenas PHP vanilla
- **Performance**: Otimizado para velocidade e eficiência
- **SEO Friendly**: Estrutura semântica HTML5
- **Acessibilidade**: Compatível com leitores de tela
- **Animações Suaves**: Transições e efeitos visuais agradáveis

## Estrutura do Projeto

```
panturismo/
├── public/
│   └── index.php              # Front Controller (Ponto de entrada)
├── app/
│   ├── config.php             # Configurações globais
│   ├── controllers/
│   │   ├── BaseController.php # Classe base para controladores
│   │   ├── HomeController.php # Controlador da Home
│   │   ├── SobreController.php# Controlador da página Sobre
│   │   ├── GuiaController.php # Controlador do Guia Turístico
│   │   └── PacotesController.php # Controlador de Pacotes
│   └── views/
│       ├── header.php         # Cabeçalho (Navegação)
│       ├── footer.php         # Rodapé
│       ├── home.php           # View da Home
│       ├── sobre.php          # View da página Sobre
│       ├── guia.php           # View do Guia Turístico
│       ├── pacotes-prontos.php# View de Pacotes Prontos
│       └── pacotes-personalizados.php # View de Pacotes Personalizados
├── assets/
│   ├── css/
│   │   └── style.css          # Estilos CSS
│   ├── js/
│   │   └── script.js          # Scripts JavaScript
│   └── images/                # Pasta para imagens
└── README.md                  # Este arquivo

```

## Requisitos

- **PHP 7.0+** (recomendado 8.0+)
- **Servidor Web** (Apache, Nginx, etc.)
- **Navegador moderno** (Chrome, Firefox, Safari, Edge)

## Instalação

### 1. Clonar ou Baixar o Projeto

```bash
# Se estiver usando Git
git clone <url-do-repositorio> panturismo
cd panturismo

# Ou descompacte o arquivo ZIP
unzip panturismo.zip
cd panturismo
```

### 2. Configurar o Servidor Web

#### Usando PHP Built-in Server (Desenvolvimento)

```bash
# Navegar até a pasta do projeto
cd panturismo

# Iniciar o servidor
php -S localhost:8000 -t public/
```

Acesse: `http://localhost:8000`

#### Usando Apache

1. Coloque a pasta `panturismo` na raiz do Apache (geralmente `/var/www/html/`)
2. Configure o `DocumentRoot` para apontar para a pasta `public/`
3. Reinicie o Apache

```bash
sudo systemctl restart apache2
```

Acesse: `http://localhost/panturismo/public`

#### Usando Nginx

Configure um bloco de servidor no Nginx:

```nginx
server {
    listen 80;
    server_name localhost;
    root /var/www/html/panturismo/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

## Páginas Disponíveis

### 1. Home (`/`)
- Página inicial com hero section
- Pacotes em destaque
- Seção de benefícios
- Call-to-action

### 2. Sobre (`?page=sobre`)
- Informações sobre a empresa
- Estatísticas
- Missão, Visão e Valores
- Timeline histórica

### 3. Guia Turístico (`?page=guia`)
- Apresentação dos guias especializados
- Informações sobre treinamento e certificações
- Detalhes de cada guia

### 4. Pacotes Prontos (`?page=pacotes&action=prontos`)
- Lista de pacotes pré-configurados
- Descrição detalhada de cada pacote
- Tabela de comparação

### 5. Pacotes Personalizados (`?page=pacotes&action=personalizados`)
- Formulário para criar pacotes personalizados
- Seleção de atividades
- Orçamento estimado

## Roteamento

O sistema utiliza um roteador simples baseado em parâmetros GET:

```
URL: /public/index.php?page=<page>&action=<action>

Exemplos:
- /public/index.php                                    (Home)
- /public/index.php?page=sobre                        (Sobre)
- /public/index.php?page=guia                         (Guia)
- /public/index.php?page=pacotes&action=prontos       (Pacotes Prontos)
- /public/index.php?page=pacotes&action=personalizados (Pacotes Personalizados)
```

## Personalização

### Modificar Configurações

Edite o arquivo `app/config.php`:

```php
define('SITE_NAME', 'Seu Nome');
define('SITE_DESCRIPTION', 'Sua Descrição');
define('SITE_URL', 'http://seu-dominio.com');
```

### Adicionar Novas Páginas

1. Crie um novo controlador em `app/controllers/NovoController.php`
2. Crie a view correspondente em `app/views/novo.php`
3. Adicione o controlador no `public/index.php`
4. Adicione o link na navegação em `app/views/header.php`

### Modificar Estilos

Edite o arquivo `assets/css/style.css`. O CSS está bem organizado com variáveis CSS para cores e transições.

### Adicionar Imagens

Coloque as imagens na pasta `assets/images/` e referencie-as nos controladores ou views.

## Funcionalidades JavaScript

- Menu responsivo para mobile
- Animações de entrada suave
- Validação de formulário em tempo real
- Contadores animados para estatísticas
- Efeitos de hover nos cards
- Smooth scroll para links internos

## Segurança

- Sanitização de entrada de URLs
- Proteção contra injeção de código
- Validação de email e telefone
- Headers de segurança recomendados

## Performance

- CSS minificado
- JavaScript otimizado
- Imagens otimizadas
- Cache-friendly URLs
- Lazy loading pronto para implementação

## Navegadores Suportados

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Próximas Melhorias

- [ ] Integração com banco de dados
- [ ] Sistema de reservas
- [ ] Painel administrativo
- [ ] API REST
- [ ] Integração com pagamento
- [ ] Sistema de avaliações
- [ ] Envio de emails
- [ ] Autenticação de usuários

## Troubleshooting

### Erro 404 ao acessar páginas

Certifique-se de que o `DocumentRoot` está apontando para a pasta `public/`.

### CSS não carrega

Verifique se a constante `ASSETS_PATH` está correta em `app/config.php`.

### Formulário não funciona

O formulário atualmente mostra um alerta. Para integração real, implemente um backend de processamento.

## Suporte e Contribuições

Para dúvidas ou sugestões, entre em contato ou abra uma issue no repositório.

## Licença

Este projeto é fornecido como está para fins educacionais e comerciais.

---

**Desenvolvido com ❤️ para o Pantanal**

Última atualização: 2024
