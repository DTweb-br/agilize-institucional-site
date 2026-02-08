import React from 'react';
import { Button } from '@/components/ui/button';
import { ArrowRight, Building2, ShieldCheck, Zap } from 'lucide-react';

const Hero = () => {
  return (
    <section id="home" className="relative min-h-screen flex items-center pt-20 overflow-hidden">
      {/* Background Image with Overlay */}
      <div className="absolute inset-0 z-0">
        <img 
          src="https://images.unsplash.com/photo-1758448617677-2f8bebc56d9e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80" 
          alt="Modern Building" 
          className="w-full h-full object-cover"
        />
        <div className="absolute inset-0 bg-secondary/80 mix-blend-multiply" />
        <div className="absolute inset-0 bg-gradient-to-r from-secondary via-secondary/60 to-transparent" />
      </div>

      <div className="container mx-auto px-4 md:px-6 relative z-10">
        <div className="max-w-3xl space-y-8">
          <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/20 border border-primary/30 text-primary-foreground text-sm font-medium animate-in" style={{ animationDelay: '0.1s' }}>
            <span className="relative flex h-2 w-2">
              <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
              <span className="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
            </span>
            Gestão Inteligente para o seu Condomínio
          </div>

          <h1 className="text-5xl md:text-7xl font-bold text-white leading-[1.1] animate-in" style={{ animationDelay: '0.2s' }}>
            Elevando o Padrão da <span className="text-primary">Gestão Condominial</span>
          </h1>

          <p className="text-xl text-gray-300 leading-relaxed max-w-2xl animate-in" style={{ animationDelay: '0.3s' }}>
            Soluções modernas, transparentes e eficientes para síndicos e condôminos. 
            A Agilize une tecnologia e humanização para transformar o seu dia a dia.
          </p>

          <div className="flex flex-wrap gap-4 pt-4 animate-in" style={{ animationDelay: '0.4s' }}>
            <Button size="lg" className="text-lg px-8 py-7 h-auto font-bold shadow-glow hover:scale-105 transition-all">
              Solicitar Orçamento <ArrowRight className="ml-2" />
            </Button>
            <Button size="lg" variant="outline" className="text-lg px-8 py-7 h-auto font-bold border-white text-white hover:bg-white/10 hover:text-white transition-all">
              Conheça Nossos Planos
            </Button>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-12 animate-in" style={{ animationDelay: '0.5s' }}>
            <div className="flex items-center gap-4 text-white">
              <div className="p-3 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                <ShieldCheck className="text-primary" />
              </div>
              <div>
                <p className="font-bold">Segurança</p>
                <p className="text-sm text-gray-400">Dados protegidos</p>
              </div>
            </div>
            <div className="flex items-center gap-4 text-white">
              <div className="p-3 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                <Zap className="text-primary" />
              </div>
              <div>
                <p className="font-bold">Agilidade</p>
                <p className="text-sm text-gray-400">Resposta rápida</p>
              </div>
            </div>
            <div className="flex items-center gap-4 text-white">
              <div className="p-3 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                <Building2 className="text-primary" />
              </div>
              <div>
                <p className="font-bold">Patrimônio</p>
                <p className="text-sm text-gray-400">Valorização real</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
