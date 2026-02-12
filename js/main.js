document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = mobileMenuToggle.querySelector('i');

    // Navbar Scroll Effect
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            navbar.classList.add('nav-scrolled');
        } else {
            navbar.classList.remove('nav-scrolled');
        }
    });

    // Mobile Menu Toggle
    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
        const isOpen = mobileMenu.classList.contains('open');
        
        // Toggle Icon
        if (isOpen) {
            mobileMenuIcon.setAttribute('data-lucide', 'x');
        } else {
            mobileMenuIcon.setAttribute('data-lucide', 'menu');
        }
        lucide.createIcons();
    });

    // Close Mobile Menu on link click
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            mobileMenuIcon.setAttribute('data-lucide', 'menu');
            lucide.createIcons();
        });
    });

    // Animate on scroll logic
    const animateElements = document.querySelectorAll('.animate-in');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // We can add a class if needed, but animate-in already has the animation
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    animateElements.forEach(el => {
        observer.observe(el);
    });

    // Contact Form AJAX
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = 'Enviando...';
            submitBtn.disabled = true;

            const formData = new FormData(contactForm);

            try {
                const response = await fetch('process_contact.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.text();

                if (response.ok) {
                    alert('Sucesso: ' + result);
                    contactForm.reset();
                } else {
                    alert('Erro: ' + result);
                }
            } catch (error) {
                alert('Erro ao enviar mensagem. Tente novamente mais tarde.');
            } finally {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }
        });
    }
});
