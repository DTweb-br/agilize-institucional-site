<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img 
                src="https://images.unsplash.com/photo-1758448617677-2f8bebc56d9e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
                alt="Modern Building" 
                class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-secondary/80 mix-blend-multiply" style="background-color: hsla(216, 65%, 11%, 0.8); mix-blend-mode: multiply;"></div>
            <div class="absolute inset-0" style="background: linear-gradient(to right, hsla(216, 65%, 11%, 1), hsla(216, 65%, 11%, 0.6), transparent);"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl flex flex-col gap-8">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/20 border border-primary/30 text-white text-sm font-medium animate-in" style="animation-delay: 0.1s;">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    Gestão Inteligente para o seu Condomínio
                </div>

                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight animate-in" style="animation-delay: 0.2s;">
                    Elevando o Padrão da <span class="text-primary">Gestão Condominial</span>
                </h1>

                <p class="text-xl text-gray-300 leading-relaxed max-w-2xl animate-in" style="animation-delay: 0.3s;">
                    Soluções modernas, transparentes e eficientes para síndicos e condôminos. 
                    A Agilize une tecnologia e humanização para transformar o seu dia a dia.
                </p>

                <div class="flex flex-wrap gap-4 pt-4 animate-in" style="animation-delay: 0.4s;">
                    <button class="btn btn-primary text-lg px-8 py-4 h-auto font-bold shadow-glow hover:scale-105 transition-all">
                        Solicitar Orçamento <i data-lucide="arrow-right" class="ml-2"></i>
                    </button>
                    <button class="btn btn-outline text-lg px-8 py-4 h-auto font-bold border-white text-white hover:bg-white/10 transition-all">
                        Conheça Nossos Planos
                    </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-12 animate-in" style="animation-delay: 0.5s;">
                    <div class="flex items-center gap-4 text-white">
                        <div class="p-3 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                            <i data-lucide="shield-check" class="text-primary"></i>
                        </div>
                        <div>
                            <p class="font-bold">Segurança</p>
                            <p class="text-sm text-gray-400">Dados protegidos</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <div class="p-3 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                            <i data-lucide="zap" class="text-primary"></i>
                        </div>
                        <div>
                            <p class="font-bold">Agilidade</p>
                            <p class="text-sm text-gray-400">Resposta rápida</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <div class="p-3 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                            <i data-lucide="building-2" class="text-primary"></i>
                        </div>
                        <div>
                            <p class="font-bold">Patrimônio</p>
                            <p class="text-sm text-gray-400">Valorização real</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicos" class="py-24 bg-accent/30">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16 flex flex-col gap-4">
                <h2 class="text-primary font-bold uppercase tracking-widest text-sm" style="letter-spacing: 0.1em;">Nossos Serviços</h2>
                <p class="text-4xl md:text-5xl font-bold text-secondary">Soluções Completas para o seu <span class="text-primary">Condomínio</span></p>
                <p class="text-muted-foreground text-lg">Oferecemos uma gestão 360º, focada na redução de custos e no aumento do bem-estar dos moradores.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services = [
                    ['title' => 'Administração Financeira', 'desc' => 'Gestão transparente de contas, boletos, inadimplência e prestação de contas rigorosa.', 'icon' => 'bar-chart-3'],
                    ['title' => 'Gestão de RH', 'desc' => 'Seleção, treinamento e supervisão de funcionários e terceirizados do condomínio.', 'icon' => 'users'],
                    ['title' => 'Manutenção Preventiva', 'desc' => 'Cronograma rigoroso de manutenções para evitar imprevistos e valorizar o patrimônio.', 'icon' => 'wrench'],
                    ['title' => 'Assessoria Jurídica', 'desc' => 'Suporte especializado em legislação condominial e cobranças extrajudiciais.', 'icon' => 'scale'],
                    ['title' => 'Aplicativo Exclusivo', 'desc' => 'Acesso a documentos, reservas de áreas comuns e avisos na palma da sua mão.', 'icon' => 'smartphone'],
                    ['title' => 'Segurança Integrada', 'desc' => 'Consultoria e acompanhamento de sistemas de vigilância e controle de acesso.', 'icon' => 'shield-alert'],
                ];
                foreach ($services as $service):
                ?>
                <div class="group p-8 bg-background border border-border rounded-3xl hover:border-primary/50 hover:shadow-xl transition-all duration-300 interactive-card">
                    <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 transition-all duration-300">
                        <i data-lucide="<?php echo $service['icon']; ?>" size="32"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-secondary transition-colors"><?php echo $service['title']; ?></h3>
                    <p class="text-muted-foreground leading-relaxed">
                        <?php echo $service['desc']; ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre" class="py-24 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-16 about-flex">
                <div class="flex-1 relative">
                    <div class="relative z-10 rounded-[2.5rem] overflow-hidden shadow-2xl">
                        <img 
                            src="https://images.unsplash.com/photo-1758957851828-5179f0e06985?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                            alt="Equipe Agilize" 
                            class="w-full h-auto"
                        >
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl -z-10" style="background-color: hsla(39, 72%, 61%, 0.2); border-radius: 50%; filter: blur(48px); z-index: -10;"></div>
                    <div class="absolute -bottom-10 -right-10 w-60 h-60 bg-secondary/10 rounded-full blur-3xl -z-10" style="background-color: hsla(216, 65%, 11%, 0.1); border-radius: 50%; filter: blur(48px); z-index: -10;"></div>
                    
                    <div class="absolute -bottom-8 -left-8 bg-background p-8 rounded-3xl shadow-xl border border-border z-20 max-w-[240px] hidden md:block animate-bounce-slow">
                        <p class="text-4xl font-bold text-primary mb-1">10+</p>
                        <p class="text-sm font-semibold text-secondary leading-tight">Anos de experiência no mercado imobiliário</p>
                    </div>
                </div>

                <div class="flex-1 flex flex-col gap-8">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-primary font-bold uppercase tracking-widest text-sm" style="letter-spacing: 0.1em;">Sobre a Agilize</h2>
                        <p class="text-4xl md:text-5xl font-bold text-secondary">Inovação e Transparência em <span class="text-primary">Gestão</span></p>
                    </div>

                    <p class="text-muted-foreground text-lg leading-relaxed">
                        A Agilize nasceu da necessidade de modernizar a forma como condomínios são geridos. 
                        Acreditamos que a tecnologia deve ser uma aliada do ser humano, simplificando processos 
                        burocráticos para que possamos focar no que realmente importa: a harmonia e a segurança do seu lar.
                    </p>

                    <ul class="flex flex-col gap-4">
                        <?php
                        $aboutItems = [
                            'Transparência total na prestação de contas',
                            'Atendimento personalizado e humanizado',
                            'Uso intensivo de tecnologia e automação',
                            'Foco na redução de custos condominiais',
                            'Equipe multidisciplinar altamente qualificada'
                        ];
                        foreach ($aboutItems as $item):
                        ?>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="text-primary" size="24" style="flex-shrink: 0;"></i>
                            <span class="text-secondary font-medium"><?php echo $item; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="pt-4">
                        <button class="btn btn-secondary px-8 py-4 rounded-full font-bold hover:bg-secondary/90 hover:scale-105 transition-all shadow-lg">
                            Saiba Mais Sobre Nós
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="py-24 bg-secondary text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-16">
                <div class="flex-1 flex flex-col gap-8">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-primary font-bold uppercase tracking-widest text-sm" style="letter-spacing: 0.1em;">Contato</h2>
                        <p class="text-4xl md:text-5xl font-bold text-white">Pronto para <span class="text-primary">Agilizar</span> sua Gestão?</p>
                        <p class="text-gray-400 text-lg">
                            Entre em contato conosco hoje mesmo e descubra como podemos transformar a administração do seu condomínio.
                        </p>
                    </div>

                    <div class="flex flex-col gap-6 pt-4">
                        <div class="flex items-center gap-6 group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary">
                                <i data-lucide="phone" size="24"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-400 uppercase font-bold tracking-wider" style="letter-spacing: 0.05em;">Telefone / WhatsApp</p>
                                <p class="text-xl font-bold">(11) 99999-9999</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary">
                                <i data-lucide="mail" size="24"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-400 uppercase font-bold tracking-wider" style="letter-spacing: 0.05em;">E-mail</p>
                                <p class="text-xl font-bold">contato@agilize.com.br</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-6 group">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary">
                                <i data-lucide="message-square" size="24"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-400 uppercase font-bold tracking-wider" style="letter-spacing: 0.05em;">Atendimento</p>
                                <p class="text-xl font-bold">Segunda à Sexta, 08h às 18h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-1">
                    <div class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-2xl text-secondary" style="background-color: #fff; border-radius: 2.5rem; color: hsl(var(--secondary));">
                        <h3 class="text-2xl font-bold mb-6">Envie uma Mensagem</h3>
                        <form action="process_contact.php" method="POST" class="flex flex-col gap-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-gray-500 uppercase tracking-wider" style="letter-spacing: 0.05em;">Nome</label>
                                    <input type="text" name="name" placeholder="Seu nome completo" style="background-color: #f9fafb; border-color: #e5e7eb;">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-gray-500 uppercase tracking-wider" style="letter-spacing: 0.05em;">E-mail</label>
                                    <input type="email" name="email" placeholder="seu@email.com" style="background-color: #f9fafb; border-color: #e5e7eb;">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-500 uppercase tracking-wider" style="letter-spacing: 0.05em;">Assunto</label>
                                <input type="text" name="subject" placeholder="Qual o motivo do contato?" style="background-color: #f9fafb; border-color: #e5e7eb;">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-bold text-gray-500 uppercase tracking-wider" style="letter-spacing: 0.05em;">Mensagem</label>
                                <textarea name="message" placeholder="Como podemos te ajudar?" style="background-color: #f9fafb; border-color: #e5e7eb; min-height: 150px; resize: none;"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-full h-14 text-lg font-bold gap-2 shadow-elegant hover:scale-[1.02] transition-all">
                                Enviar Mensagem <i data-lucide="send" size="20"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .about-flex { display: flex; flex-direction: column; align-items: center; gap: 4rem; }
    
    @media (min-width: 1024px) {
        .about-flex { flex-direction: row !important; align-items: center !important; gap: 4rem !important; display: flex !important; }
    }
    
    @keyframes ping {
        75%, 100% {
            transform: scale(2);
            opacity: 0;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>
