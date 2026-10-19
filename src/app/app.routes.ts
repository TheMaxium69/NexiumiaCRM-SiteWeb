import { Routes } from '@angular/router';
import { Home } from './pages/home/home';
import { tyroUiErrorRoutes, TyroUiSeo, tyroUiLocalizedRoutes } from 'tyrolium-ui';

/* ─── SEO (titre + description par page, FR / EN) ─────────────────────── */

const SEO_HOME: TyroUiSeo = {
  fullTitle:   { fr: 'NexiumiaCRM - CRM Professionnel', en: 'NexiumiaCRM - Professional CRM' },
  description: { fr: 'NexiumiaCRM est un CRM professionnel. Gérez vos contacts, votre pipeline et votre activité avec un outil hébergé et conçu avec le savoir-faire français. Une filiale de Tyrolium.', en: 'NexiumiaCRM is a professional CRM. Manage your contacts, your pipeline and your activity with a tool hosted and built with French know-how. A Tyrolium subsidiary.' },
};

export const routes: Routes = tyroUiLocalizedRoutes([
    { path: '',    component: Home, data: { seo: SEO_HOME } },
    ...tyroUiErrorRoutes(),
]);
