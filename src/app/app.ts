import { Component, computed, inject, ViewEncapsulation } from '@angular/core';
import {ITyroUiNavbarPages, TyroUiFooter, TyroUiNavbar, TyroUiLangService} from 'tyrolium-ui';
import {RouterOutlet} from "@angular/router";

@Component({
  selector: 'app-root',
  imports: [TyroUiNavbar, TyroUiFooter, RouterOutlet],
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
  public PROJECT_LOGO = 'assets/tyrolium-ui/projects/NexiumiaCRM.png';

  public PROJECT_CONTENT = computed(() =>
    this.langService.lang() === 'en'
      ? `<strong>NexiumiaCRM</strong> is the <strong>professional CRM</strong> developed by Tyrolium. Manage your contacts, pipeline and business with a tool built with French expertise and hosted on secure servers in France by SolidServ.`
      : `<strong>NexiumiaCRM</strong> est un <strong>CRM professionnel</strong>. Gérez vos contacts, votre pipeline et votre activité avec un outil hébergé et conçu avec le savoir-faire français. <em>Une filiale de Tyrolium.</em>`
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
          { label: 'Features', ancre: 'features',  icon: 'ri-apps-line' },
          { label: 'Pricing',  ancre: 'pricing',   icon: 'ri-price-tag-3-line' },
          { label: 'Trust',    ancre: 'trust',     icon: 'ri-shield-check-line' },
          { label: 'Quote',    href: 'https://tyrolium.fr/contact?from=nexiumiacrm',       icon: 'ri-mail-send-line' },
        ]
      : [
          { label: 'Accueil',       link: '/',           icon: 'ri-home-line' },
          { label: 'Fonctionnalités', ancre: 'features', icon: 'ri-apps-line' },
          { label: 'Tarifs',        ancre: 'pricing',   icon: 'ri-price-tag-3-line' },
          { label: 'Confiance',     ancre: 'trust',     icon: 'ri-shield-check-line' },
          { label: 'Devis',         href: 'https://tyrolium.fr/contact?from=nexiumiacrm',       icon: 'ri-mail-send-line' },
        ]
  );

}
