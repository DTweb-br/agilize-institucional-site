import React from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { Mail, MessageSquare, Phone, Send } from 'lucide-react';

const Contact = () => {
  return (
    <section id="contato" className="py-24 bg-secondary text-secondary-foreground">
      <div className="container mx-auto px-4 md:px-6">
        <div className="flex flex-col lg:flex-row gap-16">
          <div className="flex-1 space-y-8">
            <div className="space-y-4">
              <h2 className="text-primary font-bold uppercase tracking-widest text-sm">Contato</h2>
              <p className="text-4xl md:text-5xl font-bold text-white">Pronto para <span className="text-primary">Agilizar</span> sua Gestão?</p>
              <p className="text-gray-400 text-lg">
                Entre em contato conosco hoje mesmo e descubra como podemos transformar a administração do seu condomínio.
              </p>
            </div>

            <div className="space-y-6 pt-4">
              <div className="flex items-center gap-6 group">
                <div className="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-all">
                  <Phone size={24} />
                </div>
                <div>
                  <p className="text-sm text-gray-400 uppercase font-bold tracking-wider">Telefone / WhatsApp</p>
                  <p className="text-xl font-bold">(11) 99999-9999</p>
                </div>
              </div>

              <div className="flex items-center gap-6 group">
                <div className="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-all">
                  <Mail size={24} />
                </div>
                <div>
                  <p className="text-sm text-gray-400 uppercase font-bold tracking-wider">E-mail</p>
                  <p className="text-xl font-bold">contato@agilize.com.br</p>
                </div>
              </div>

              <div className="flex items-center gap-6 group">
                <div className="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-all">
                  <MessageSquare size={24} />
                </div>
                <div>
                  <p className="text-sm text-gray-400 uppercase font-bold tracking-wider">Atendimento</p>
                  <p className="text-xl font-bold">Segunda à Sexta, 08h às 18h</p>
                </div>
              </div>
            </div>
          </div>

          <div className="flex-1">
            <div className="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-2xl text-secondary">
              <h3 className="text-2xl font-bold mb-6">Envie uma Mensagem</h3>
              <form className="space-y-6">
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div className="space-y-2">
                    <label className="text-sm font-bold text-gray-500 uppercase tracking-wider">Nome</label>
                    <Input placeholder="Seu nome completo" className="bg-gray-50 border-gray-200 h-12 rounded-xl focus:ring-primary" />
                  </div>
                  <div className="space-y-2">
                    <label className="text-sm font-bold text-gray-500 uppercase tracking-wider">E-mail</label>
                    <Input placeholder="seu@email.com" className="bg-gray-50 border-gray-200 h-12 rounded-xl focus:ring-primary" />
                  </div>
                </div>
                <div className="space-y-2">
                  <label className="text-sm font-bold text-gray-500 uppercase tracking-wider">Assunto</label>
                  <Input placeholder="Qual o motivo do contato?" className="bg-gray-50 border-gray-200 h-12 rounded-xl focus:ring-primary" />
                </div>
                <div className="space-y-2">
                  <label className="text-sm font-bold text-gray-500 uppercase tracking-wider">Mensagem</label>
                  <Textarea placeholder="Como podemos te ajudar?" className="bg-gray-50 border-gray-200 min-h-[150px] rounded-xl focus:ring-primary resize-none" />
                </div>
                <Button className="w-full h-14 rounded-xl text-lg font-bold gap-2 shadow-elegant hover:scale-[1.02] transition-all">
                  Enviar Mensagem <Send size={20} />
                </Button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;
