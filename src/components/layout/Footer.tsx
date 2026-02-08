import React from 'react';
import { Facebook, Instagram, Linkedin, Mail, MapPin, Phone } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-secondary text-secondary-foreground py-16 px-4 md:px-6">
      <div className="container mx-auto">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
          {/* Brand and About */}
          <div className="space-y-6">
            <img 
              src="https://firebasestorage.googleapis.com/v0/b/blink-451505.firebasestorage.app/o/user-uploads%2FktOe4FX5QVZ3ZbT6RrHAfPlHBnt1%2Flogo-fundo-claro__2140cdad.png?alt=media&token=6ee970fe-1acc-4d86-9fb8-ebae822007e4" 
              alt="Agilize Gestão Condominial" 
              className="h-12 w-auto brightness-0 invert"
            />
            <p className="text-muted-foreground leading-relaxed max-w-xs">
              Especialistas em gestão condominial moderna, transparente e eficiente. 
              Cuidamos do seu patrimônio com a agilidade que você merece.
            </p>
            <div className="flex items-center gap-4">
              <a href="#" className="p-2 bg-white/10 rounded-full hover:bg-primary hover:text-primary-foreground transition-all">
                <Instagram size={20} />
              </a>
              <a href="#" className="p-2 bg-white/10 rounded-full hover:bg-primary hover:text-primary-foreground transition-all">
                <Facebook size={20} />
              </a>
              <a href="#" className="p-2 bg-white/10 rounded-full hover:bg-primary hover:text-primary-foreground transition-all">
                <Linkedin size={20} />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div className="space-y-6">
            <h3 className="text-lg font-bold">Links Rápidos</h3>
            <ul className="space-y-3">
              <li><a href="#home" className="text-muted-foreground hover:text-primary transition-colors">Início</a></li>
              <li><a href="#servicos" className="text-muted-foreground hover:text-primary transition-colors">Serviços</a></li>
              <li><a href="#sobre" className="text-muted-foreground hover:text-primary transition-colors">Sobre Nós</a></li>
              <li><a href="#contato" className="text-muted-foreground hover:text-primary transition-colors">Contato</a></li>
            </ul>
          </div>

          {/* Services */}
          <div className="space-y-6">
            <h3 className="text-lg font-bold">Nossos Serviços</h3>
            <ul className="space-y-3">
              <li className="text-muted-foreground">Administração Financeira</li>
              <li className="text-muted-foreground">Gestão de Recursos Humanos</li>
              <li className="text-muted-foreground">Manutenção e Obras</li>
              <li className="text-muted-foreground">Assessoramento Jurídico</li>
            </ul>
          </div>

          {/* Contact Info */}
          <div className="space-y-6">
            <h3 className="text-lg font-bold">Contato</h3>
            <ul className="space-y-4">
              <li className="flex items-start gap-3 text-muted-foreground">
                <MapPin className="text-primary mt-1 shrink-0" size={18} />
                <span>Rua do Condomínio, 123 - Centro<br />São Paulo - SP, 01234-567</span>
              </li>
              <li className="flex items-center gap-3 text-muted-foreground">
                <Phone className="text-primary shrink-0" size={18} />
                <span>(11) 99999-9999</span>
              </li>
              <li className="flex items-center gap-3 text-muted-foreground">
                <Mail className="text-primary shrink-0" size={18} />
                <span>contato@agilize.com.br</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="mt-16 pt-8 border-t border-white/10 text-center text-sm text-muted-foreground">
          <p>&copy; {new Date().getFullYear()} Agilize Gestão Condominial. Todos os direitos reservados.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
