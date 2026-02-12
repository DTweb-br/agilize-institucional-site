<?php
$navLinks = [
    ['name' => 'Início', 'href' => '#home'],
    ['name' => 'Serviços', 'href' => '#servicos'],
    ['name' => 'Sobre Nós', 'href' => '#sobre'],
    ['name' => 'Contato', 'href' => '#contato'],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agilize Gestão Condominial - Especialistas em Administração</title>
    <meta name="description" content="Especialistas em gestão condominial moderna, transparente e eficiente. Cuidamos do seu patrimônio com a agilidade que você merece.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-5">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <a href="#home" class="flex items-center gap-2">
                    <img 
                        src="https://firebasestorage.googleapis.com/v0/b/blink-451505.firebasestorage.app/o/user-uploads%2FktOe4FX5QVZ3ZbT6RrHAfPlHBnt1%2Flogo-fundo-claro__2140cdad.png?alt=media&token=6ee970fe-1acc-4d86-9fb8-ebae822007e4" 
                        alt="Agilize Gestão Condominial" 
                        style="height: 2.5rem; width: auto; object-fit: contain;"
                    >
                </a>

                <!-- Desktop Nav -->
                <div class="hidden md:flex items-center gap-8">
                    <?php foreach ($navLinks as $link): ?>
                        <a href="<?php echo $link['href']; ?>" class="text-sm font-medium hover:text-primary transition-colors">
                            <?php echo $link['name']; ?>
                        </a>
                    <?php endforeach; ?>
                    <button class="btn btn-primary font-semibold shadow-elegant hover:scale-105 transition-transform">
                        Área do Condômino
                    </button>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" class="md:hidden p-2 text-foreground" style="border: none; background: transparent; cursor: pointer;">
                    <i data-lucide="menu" size="28"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu">
            <?php foreach ($navLinks as $link): ?>
                <a href="<?php echo $link['href']; ?>" class="text-xl font-semibold border-b border-border pb-4">
                    <?php echo $link['name']; ?>
                </a>
            <?php endforeach; ?>
            <button class="btn btn-primary w-full text-lg py-6 mt-4">
                Área do Condômino
            </button>
            <div class="mt-auto flex flex-col gap-4 text-sm text-muted-foreground">
                <div class="flex items-center gap-2">
                    <i data-lucide="phone" size="16" class="text-primary"></i>
                    <span>(11) 99999-9999</span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="mail" size="16" class="text-primary"></i>
                    <span>contato@agilize.com.br</span>
                </div>
            </div>
        </div>
    </nav>

    <style>
        /* Mobile Menu Fix */
        .mobile-menu a {
            display: block;
        }
    </style>
