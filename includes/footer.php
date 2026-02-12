    <footer class="bg-secondary text-white py-16 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Brand and About -->
                <div class="flex flex-col gap-6">
                    <img 
                        src="https://firebasestorage.googleapis.com/v0/b/blink-451505.firebasestorage.app/o/user-uploads%2FktOe4FX5QVZ3ZbT6RrHAfPlHBnt1%2Flogo-fundo-claro__2140cdad.png?alt=media&token=6ee970fe-1acc-4d86-9fb8-ebae822007e4" 
                        alt="Agilize Gestão Condominial" 
                        style="height: 3rem; width: auto; filter: brightness(0) invert(1);"
                    >
                    <p class="text-muted-foreground leading-relaxed" style="max-width: 20rem;">
                        Especialistas em gestão condominial moderna, transparente e eficiente. 
                        Cuidamos do seu patrimônio com a agilidade que você merece.
                    </p>
                    <div class="flex items-center gap-4">
                        <a href="#" class="social-icon" style="padding: 0.5rem; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; display: flex;">
                            <i data-lucide="instagram" size="20"></i>
                        </a>
                        <a href="#" class="social-icon" style="padding: 0.5rem; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; display: flex;">
                            <i data-lucide="facebook" size="20"></i>
                        </a>
                        <a href="#" class="social-icon" style="padding: 0.5rem; background-color: rgba(255, 255, 255, 0.1); border-radius: 50%; display: flex;">
                            <i data-lucide="linkedin" size="20"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="flex flex-col gap-6">
                    <h3 class="text-lg font-bold">Links Rápidos</h3>
                    <ul class="flex flex-col gap-3">
                        <li><a href="#home" class="text-muted-foreground hover:text-primary transition-colors">Início</a></li>
                        <li><a href="#servicos" class="text-muted-foreground hover:text-primary transition-colors">Serviços</a></li>
                        <li><a href="#sobre" class="text-muted-foreground hover:text-primary transition-colors">Sobre Nós</a></li>
                        <li><a href="#contato" class="text-muted-foreground hover:text-primary transition-colors">Contato</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="flex flex-col gap-6">
                    <h3 class="text-lg font-bold">Nossos Serviços</h3>
                    <ul class="flex flex-col gap-3 text-muted-foreground">
                        <li>Administração Financeira</li>
                        <li>Gestão de Recursos Humanos</li>
                        <li>Manutenção e Obras</li>
                        <li>Assessoramento Jurídico</li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-col gap-6">
                    <h3 class="text-lg font-bold">Contato</h3>
                    <ul class="flex flex-col gap-4">
                        <li class="flex items-start gap-3 text-muted-foreground">
                            <i data-lucide="map-pin" size="18" class="text-primary" style="margin-top: 0.25rem;"></i>
                            <span>Rua do Condomínio, 123 - Centro<br />São Paulo - SP, 01234-567</span>
                        </li>
                        <li class="flex items-center gap-3 text-muted-foreground">
                            <i data-lucide="phone" size="18" class="text-primary"></i>
                            <span>(11) 99999-9999</span>
                        </li>
                        <li class="flex items-center gap-3 text-muted-foreground">
                            <i data-lucide="mail" size="18" class="text-primary"></i>
                            <span>contato@agilize.com.br</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-white/10 text-center text-sm text-muted-foreground">
                <p>&copy; <?php echo date('Y'); ?> Agilize Gestão Condominial. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a
      href="https://wa.me/5511999999999"
      target="_blank"
      rel="noopener noreferrer"
      class="fixed bottom-8 right-8 z-50 p-4 bg-[#25D366] text-white rounded-full shadow-2xl hover:scale-110 active:scale-95 transition-all duration-300 group flex items-center justify-center"
      aria-label="Fale conosco pelo WhatsApp"
    >
      <i data-lucide="message-circle" size="32" fill="currentColor"></i>
    </a>

    <!-- Scripts -->
    <script src="js/main.js"></script>
    <script>
        lucide.createIcons();
    </script>
    
    <style>
        .social-icon:hover {
            background-color: hsl(var(--primary)) !important;
            color: hsl(var(--primary-foreground)) !important;
        }
    </style>
</body>
</html>
