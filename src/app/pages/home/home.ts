import { Component, inject, ViewEncapsulation } from '@angular/core';
import { TyroUiCTA, TyroUiLangService } from 'tyrolium-ui';

@Component({
    selector: 'app-home',
    imports: [TyroUiCTA],
    templateUrl: './home.html',
    encapsulation: ViewEncapsulation.None,
})
export class Home {
    readonly lang = inject(TyroUiLangService).lang;

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
            icon: 'ri-verified-badge-line',
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

    scrollTo(ancre:string) {
        const element = document.getElementById(ancre);
        if (element) {
            const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
            const offsetPosition = elementPosition - 70;
            window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
        }
    }
}