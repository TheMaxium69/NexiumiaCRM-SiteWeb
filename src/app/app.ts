import { Component, computed, inject, ViewEncapsulation } from '@angular/core';
import { ITyroUiNavbarPages, TyroUiFooter, TyroUiNavbar, TyroUiLangService } from 'tyrolium-ui';

@Component({
  selector: 'app-root',
  imports: [TyroUiNavbar, TyroUiFooter],
  templateUrl: './app.html',
  styleUrl: './app.css',
  encapsulation: ViewEncapsulation.None,
})
export class App {

  private readonly langService = inject(TyroUiLangService);

  /*
  *
  * PROJECT VARIABLE
  *
  * */

  public PROJECT_NAME = 'NexiumiaCRM';
  public PROJECT_LOGO = 'assets/NexiumiaCRM.png';

  public PROJECT_CONTENT = computed(() =>
    this.langService.lang() === 'en'
      ? `<strong>NexiumiaCRM</strong> is the <strong>professional CRM</strong> developed by Tyrolium. Manage your contacts, pipeline and business with a tool built with French expertise and hosted on secure servers in France by SolidServ.`
      : `<strong>NexiumiaCRM</strong> est le <strong>CRM professionnel</strong> développé par Tyrolium. Gérez vos contacts, votre pipeline et votre activité avec un outil conçu avec le savoir-faire français et hébergé sur des serveurs sécurisés en France par SolidServ.`
  );

  readonly lang = this.langService.lang;

  /*
  *
  * PAGES
  *
  * */

  public pages = computed<ITyroUiNavbarPages[]>(() =>
    this.langService.lang() === 'en'
      ? [
          { label: 'Home',     link: '/',           icon: 'ri-home-line' },
          { label: 'Features', link: '/#features',  icon: 'ri-apps-line' },
          { label: 'Pricing',  link: '/#pricing',   icon: 'ri-price-tag-3-line' },
          { label: 'Trust',    link: '/#trust',     icon: 'ri-shield-check-line' },
          { label: 'Quote',    link: '/#cta',       icon: 'ri-mail-send-line' },
        ]
      : [
          { label: 'Accueil',       link: '/',           icon: 'ri-home-line' },
          { label: 'Fonctionnalités', link: '/#features', icon: 'ri-apps-line' },
          { label: 'Tarifs',        link: '/#pricing',   icon: 'ri-price-tag-3-line' },
          { label: 'Confiance',     link: '/#trust',     icon: 'ri-shield-check-line' },
          { label: 'Devis',         link: '/#cta',       icon: 'ri-mail-send-line' },
        ]
  );

  public socials: ITyroUiNavbarPages[] = [
    { label: 'linkedin',  link: 'https://www.linkedin.com/company/tyrolium/', icon: 'ri-linkedin-fill' },
    { label: 'github',    link: 'https://github.com/tyrolium',                icon: 'ri-github-fill' },
    { label: 'discord',   link: 'https://discord.com/invite/km8h5jHezt',      icon: 'ri-discord-fill' },
    { label: 'twitter',   link: 'https://x.com/TyroliumE',                    icon: 'ri-twitter-x-fill' },
  ];

  /*
  *
  * PAGE DATA
  *
  * */

  readonly features = [
    {
      icon: 'ri-contacts-book-2-line',
      title: 'Gestion des contacts',
      titleEn: 'Contact management',
      desc: 'Centralisez tous vos contacts, clients et prospects dans une interface claire et performante.',
      descEn: 'Centralize all your contacts, clients and prospects in a clear, high-performance interface.',
    },
    {
      icon: 'ri-flow-chart',
      title: 'Pipeline commercial',
      titleEn: 'Sales pipeline',
      desc: 'Visualisez et pilotez vos opportunités à chaque étape de votre cycle de vente.',
      descEn: 'Visualize and manage your opportunities at every stage of your sales cycle.',
    },
    {
      icon: 'ri-bar-chart-box-line',
      title: 'Tableaux de bord',
      titleEn: 'Dashboards',
      desc: 'Analysez vos performances avec des rapports et tableaux de bord en temps réel.',
      descEn: 'Analyze your performance with real-time reports and dashboards.',
    },
    {
      icon: 'ri-task-line',
      title: 'Gestion des tâches',
      titleEn: 'Task management',
      desc: 'Planifiez, assignez et suivez les tâches de votre équipe directement dans le CRM.',
      descEn: 'Plan, assign and track your team\'s tasks directly in the CRM.',
    },
    {
      icon: 'ri-mail-line',
      title: 'Suivi des communications',
      titleEn: 'Communication tracking',
      desc: 'Gardez un historique complet de chaque interaction avec vos contacts et clients.',
      descEn: 'Keep a complete history of every interaction with your contacts and clients.',
    },
    {
      icon: 'ri-key-2-line',
      title: 'Accès par clé utilisateur',
      titleEn: 'User access keys',
      desc: 'Chaque collaborateur dispose de sa propre clé d\'accès sécurisée et tracée.',
      descEn: 'Each team member has their own secure, traceable access key.',
    },
  ];

  readonly steps = [
    {
      num: '01',
      title: 'Demandez un devis',
      titleEn: 'Request a quote',
      desc: 'Contactez-nous pour définir vos besoins. Nous établissons un devis personnalisé selon la taille de votre équipe.',
      descEn: 'Contact us to define your needs. We create a personalized quote based on your team size.',
    },
    {
      num: '02',
      title: 'Déploiement & accès',
      titleEn: 'Deployment & access',
      desc: 'Votre espace NexiumiaCRM est déployé sur nos serveurs sécurisés en France. Chaque utilisateur reçoit sa clé d\'accès.',
      descEn: 'Your NexiumiaCRM workspace is deployed on our secure servers in France. Each user receives their access key.',
    },
    {
      num: '03',
      title: 'Utilisez & évoluez',
      titleEn: 'Use & grow',
      desc: 'Ajoutez des utilisateurs à tout moment. Chaque nouvel accès génère un abonnement supplémentaire.',
      descEn: 'Add users at any time. Each new access key generates an additional subscription.',
    },
  ];

  readonly trustPoints = [
    {
      icon: 'ri-france-line',
      title: 'Hébergement en France',
      titleEn: 'Hosted in France',
      desc: 'Vos données restent sur le territoire français. Souveraineté numérique garantie.',
      descEn: 'Your data stays on French soil. Digital sovereignty guaranteed.',
    },
    {
      icon: 'ri-shield-keyhole-line',
      title: 'Serveurs sécurisés SolidServ',
      titleEn: 'SolidServ secure servers',
      desc: 'Infra haute disponibilité et chiffrée, gérée par SolidServ, le projet d\'hébergement de Tyrolium.',
      descEn: 'High-availability encrypted infrastructure managed by SolidServ, Tyrolium\'s hosting project.',
    },
    {
      icon: 'ri-code-s-slash-line',
      title: 'Savoir-faire Tyrolium',
      titleEn: 'Tyrolium expertise',
      desc: 'Conçu par les équipes Tyrolium avec des années d\'expérience en développement et infrastructure.',
      descEn: 'Built by Tyrolium teams with years of experience in development and infrastructure.',
    },
    {
      icon: 'ri-customer-service-2-line',
      title: 'Support dédié',
      titleEn: 'Dedicated support',
      desc: 'Une équipe réactive à votre disposition pour vous accompagner dans la prise en main et la durée.',
      descEn: 'A responsive team at your disposal to support you from onboarding and beyond.',
    },
  ];

  readonly particles = Array.from({ length: 30 }, (_, i) => i);
}
