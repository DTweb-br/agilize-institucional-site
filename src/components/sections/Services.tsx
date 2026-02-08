import React from 'react';
import { 
  BarChart3, 
  Users, 
  Wrench, 
  Scale, 
  Smartphone, 
  ShieldAlert 
} from 'lucide-react';

const services = [
  {
    title: 'Administração Financeira',
    description: 'Gestão transparente de contas, boletos, inadimplência e prestação de contas rigorosa.',
    icon: <BarChart3 className="w-8 h-8" />,
  },
  {
    title: 'Gestão de RH',
    description: 'Seleção, treinamento e supervisão de funcionários e terceirizados do condomínio.',
    icon: <Users className="w-8 h-8" />,
  },
  {
    title: 'Manutenção Preventiva',
    description: 'Cronograma rigoroso de manutenções para evitar imprevistos e valorizar o patrimônio.',
    icon: <Wrench className="w-8 h-8" />,
  },
  {
    title: 'Assessoria Jurídica',
    description: 'Suporte especializado em legislação condominial e cobranças extrajudiciais.',
    icon: <Scale className="w-8 h-8" />,
  },
  {
    title: 'Aplicativo Exclusivo',
    description: 'Acesso a documentos, reservas de áreas comuns e avisos na palma da sua mão.',
    icon: <Smartphone className="w-8 h-8" />,
  },
  {
    title: 'Segurança Integrada',
    description: 'Consultoria e acompanhamento de sistemas de vigilância e controle de acesso.',
    icon: <ShieldAlert className="w-8 h-8" />,
  },
];

const Services = () => {
  return (
    <section id="servicos" className="py-24 bg-accent/30">
      <div className="container mx-auto px-4 md:px-6">
        <div className="text-center max-w-3xl mx-auto mb-16 space-y-4">
          <h2 className="text-primary font-bold uppercase tracking-widest text-sm">Nossos Serviços</h2>
          <p className="text-4xl md:text-5xl font-bold text-secondary">Soluções Completas para o seu <span className="text-primary">Condomínio</span></p>
          <p className="text-muted-foreground text-lg">Oferecemos uma gestão 360º, focada na redução de custos e no aumento do bem-estar dos moradores.</p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <div 
              key={index}
              className="group p-8 bg-background border border-border rounded-3xl hover:border-primary/50 hover:shadow-xl transition-all duration-300 interactive-card"
            >
              <div className="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 group-hover:bg-primary group-hover:text-primary-foreground transition-all duration-300">
                {service.icon}
              </div>
              <h3 className="text-xl font-bold mb-4 text-secondary group-hover:text-primary transition-colors">{service.title}</h3>
              <p className="text-muted-foreground leading-relaxed">
                {service.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
