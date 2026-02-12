# Agilize Gestão Condominial - Site Institucional

Este projeto é a conversão do website institucional "Agilize" de uma arquitetura React/TailwindCSS para uma arquitetura baseada em PHP, HTML5, CSS3 e JavaScript puro.

## Estrutura do Projeto

O projeto foi organizado de forma modular para facilitar a manutenção e permitir a expansão futura.

```text
/
├── assets/             # Imagens, fontes e outros recursos estáticos
├── css/
│   └── style.css       # Estilização completa do site (CSS puro)
├── js/
│   └── main.js         # Lógica de frontend e interatividade (JS puro)
├── includes/
│   ├── header.php      # Cabeçalho e navegação (reutilizável)
│   └── footer.php      # Rodapé e botão de WhatsApp (reutilizável)
├── index.php           # Página principal com todas as seções
├── process_contact.php # Backend PHP para processamento do formulário
└── README.md           # Documentação do projeto
```

## Tecnologias Utilizadas

- **PHP 8.x**: Utilizado para a estrutura de templates (inclusão de arquivos) e lógica de processamento de formulários no servidor.
- **HTML5**: Estruturação semântica do conteúdo.
- **CSS3 Puro**: Toda a estilização foi reescrita em CSS puro, removendo a dependência do TailwindCSS. Foram utilizados variáveis CSS (CSS Variables) para manter a consistência visual.
- **JavaScript Puro (Vanilla JS)**: Implementação de interatividade (menu mobile, efeito de scroll na navbar, animações de entrada e envio de formulário via AJAX).
- **Lucide Icons**: Utilizado via CDN para manter a consistência com os ícones do projeto original.
- **Google Fonts**: Utilização das fontes *Inter* e *Manrope*.

## Como Executar

Para visualizar o projeto localmente, você precisará de um servidor web com suporte a PHP (como Apache ou Nginx).

1.  Clone ou baixe os arquivos do projeto para o diretório raiz do seu servidor web (ex: `htdocs` no XAMPP ou `www` no WAMP).
2.  Certifique-se de que o PHP está habilitado.
3.  Acesse `http://localhost/index.php` no seu navegador.

## Destaques da Conversão

- **Fidelidade Visual**: O layout e o design foram replicados fielmente utilizando CSS puro.
- **Performance**: A remoção de frameworks pesados resultou em um carregamento mais rápido e menor dependência de bibliotecas externas.
- **SEO**: O uso de HTML semântico e metadados otimizados favorece o ranqueamento em motores de busca.
- **Flexibilidade**: A estrutura baseada em PHP permite que novas páginas sejam criadas facilmente aproveitando os componentes de cabeçalho e rodapé.
