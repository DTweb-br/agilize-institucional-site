import React from 'react';
import { CheckCircle2 } from 'lucide-react';

const About = () => {
  return (
    <section id="sobre" className="py-24 overflow-hidden">
      <div className="container mx-auto px-4 md:px-6">
        <div className="flex flex-col lg:flex-row items-center gap-16">
          <div className="flex-1 relative">
            <div className="relative z-10 rounded-[2.5rem] overflow-hidden shadow-2xl">
              <img 
                src="https://images.unsplash.com/photo-1758957851828-5179f0e06985?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" 
                alt="Equipe Agilize" 
                className="w-full h-auto"
              />
            </div>
            {/* Decorative Elements */}
            <div className="absolute -top-10 -left-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl -z-10" />
            <div className="absolute -bottom-10 -right-10 w-60 h-60 bg-secondary/10 rounded-full blur-3xl -z-10" />
            
            <div className="absolute -bottom-8 -left-8 bg-background p-8 rounded-3xl shadow-xl border border-border z-20 max-w-[240px] hidden md:block animate-bounce-slow">
              <p className="text-4xl font-bold text-primary mb-1">10+</p>
              <p className="text-sm font-semibold text-secondary leading-tight">Anos de experiência no mercado imobiliário</p>
            </div>
          </div>

          <div className="flex-1 space-y-8">
            <div className="space-y-4">
              <h2 className="text-primary font-bold uppercase tracking-widest text-sm">Sobre a Agilize</h2>
              <p className="text-4xl md:text-5xl font-bold text-secondary">Inovação e Transparência em <span className="text-primary">Gestão</span></p>
            </div>

            <p className="text-muted-foreground text-lg leading-relaxed">
              A Agilize nasceu da necessidade de modernizar a forma como condomínios são geridos. 
              Acreditamos que a tecnologia deve ser uma aliada do ser humano, simplificando processos 
              burocráticos para que possamos focar no que realmente importa: a harmonia e a segurança do seu lar.
            </p>

            <ul className="space-y-4">
              {[
                'Transparência total na prestação de contas',
                'Atendimento personalizado e humanizado',
                'Uso intensivo de tecnologia e automação',
                'Foco na redução de custos condominiais',
                'Equipe multidisciplinar altamente qualificada'
              ].map((item, i) => (
                <li key={i} className="flex items-center gap-3">
                  <CheckCircle2 className="text-primary shrink-0" size={24} />
                  <span className="text-secondary font-medium">{item}</span>
                </li>
              ))}
            </ul>

            <div className="pt-4">
              <button className="px-8 py-4 bg-secondary text-secondary-foreground rounded-full font-bold hover:bg-secondary/90 hover:scale-105 transition-all shadow-lg">
                Saiba Mais Sobre Nós
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
