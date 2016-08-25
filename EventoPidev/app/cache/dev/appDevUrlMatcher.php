<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // google_map_homepage
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'Google\\MapBundle\\Controller\\DefaultController::indexAction',  '_route' => 'google_map_homepage',);
        }

        // pidev_front_office_indexA
        if ($pathinfo === '/indexA') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::indexAction',  '_route' => 'pidev_front_office_indexA',);
        }

        // pidev_front_office_profilA
        if ($pathinfo === '/profilA') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::ProfilAction',  '_route' => 'pidev_front_office_profilA',);
        }

        if (0 === strpos($pathinfo, '/list')) {
            if (0 === strpos($pathinfo, '/listC')) {
                // pidev_front_office_listC
                if ($pathinfo === '/listC') {
                    return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::ListCAction',  '_route' => 'pidev_front_office_listC',);
                }

                // pidev_front_office_detailC
                if (0 === strpos($pathinfo, '/listC#detail') && preg_match('#^/listC\\#detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_detailC')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::DetailCAction',));
                }

                // pidev_front_office_blockerC
                if (preg_match('#^/listC/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_blockerC')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::BlockCAction',));
                }

            }

            if (0 === strpos($pathinfo, '/listP')) {
                // pidev_front_office_listP
                if ($pathinfo === '/listP') {
                    return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::ListPAction',  '_route' => 'pidev_front_office_listP',);
                }

                // pidev_front_office_detailP
                if (0 === strpos($pathinfo, '/listP#detail') && preg_match('#^/listP\\#detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_detailP')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::DetailPAction',));
                }

                // pidev_front_office_blockerP
                if (preg_match('#^/listP/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_blockerP')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::BlockPAction',));
                }

            }

            // lister_evenement_b
            if ($pathinfo === '/listerEvent') {
                return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\EvenementController::listEventAction',  '_route' => 'lister_evenement_b',);
            }

        }

        // supprimer_evenement_b
        if (0 === strpos($pathinfo, '/supprimerEvent') && preg_match('#^/supprimerEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_evenement_b')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\EvenementController::deleteEventAction',));
        }

        // details_evenement_b
        if (0 === strpos($pathinfo, '/detailsEvent') && preg_match('#^/detailsEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_evenement_b')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\EvenementController::detailEventAction',));
        }

        // ajouter_evenement_b
        if ($pathinfo === '/ajouterEvent') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::ajoutEventAction',  '_route' => 'ajouter_evenement_b',);
        }

        // pidev_front_office_Reclamation_admin_list
        if ($pathinfo === '/ListReclamationAdmin') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\ReclamationAdminController::listReclamationAction',  '_route' => 'pidev_front_office_Reclamation_admin_list',);
        }

        // pidev_front_office_Reclamation_admin_supprimer
        if (0 === strpos($pathinfo, '/SupprimerReclamationAdmin') && preg_match('#^/SupprimerReclamationAdmin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_Reclamation_admin_supprimer')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\ReclamationAdminController::supprimerReclamationAction',));
        }

        // pidev_front_office_Reclamation_admin_ajout
        if ($pathinfo === '/AjoutReclamationAdmin') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\ReclamationAdminController::ajoutReclamationAction',  '_route' => 'pidev_front_office_Reclamation_admin_ajout',);
        }

        // liste_abonnements
        if ($pathinfo === '/listeabonnement') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AbonnementController::abonnlistAction',  '_route' => 'liste_abonnements',);
        }

        // supprimer_abonnements
        if (0 === strpos($pathinfo, '/suppabonnement') && preg_match('#^/suppabonnement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_abonnements')), array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AbonnementController::suppabonnAction',));
        }

        // genererpdfabonnement
        if ($pathinfo === '/genererpdfabonnement') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AbonnementController::exportpdfAction',  '_route' => 'genererpdfabonnement',);
        }

        // statistiqueA
        if ($pathinfo === '/listchA') {
            return array (  '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::chartAction',  '_route' => 'statistiqueA',);
        }

        if (0 === strpos($pathinfo, '/index')) {
            // pidev_front_office_homepage
            if ($pathinfo === '/indexC') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::indexAction',  '_route' => 'pidev_front_office_homepage',);
            }

            // pidev_front_office_indexP
            if ($pathinfo === '/indexP') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::indexAction',  '_route' => 'pidev_front_office_indexP',);
            }

            // pidev_front_office_indexR
            if ($pathinfo === '/indexR') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::rdAction',  '_route' => 'pidev_front_office_indexR',);
            }

        }

        // pidev_front_office_profilC
        if ($pathinfo === '/profilC') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::profilAction',  '_route' => 'pidev_front_office_profilC',);
        }

        // DesactiverCompteC
        if ($pathinfo === '/desactivercompte') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::DesactiveCAction',  '_route' => 'DesactiverCompteC',);
        }

        // pidev_front_office_profilP
        if ($pathinfo === '/profilP') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::profilAction',  '_route' => 'pidev_front_office_profilP',);
        }

        if (0 === strpos($pathinfo, '/lister')) {
            // lister_evenement
            if ($pathinfo === '/listerEvente') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::listEventAction',  '_route' => 'lister_evenement',);
            }

            // lister_mes_evenement
            if ($pathinfo === '/listerMesEvent') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::listMyEventAction',  '_route' => 'lister_mes_evenement',);
            }

        }

        // supprimer_evenement
        if (0 === strpos($pathinfo, '/supprimerEvente') && preg_match('#^/supprimerEvente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_evenement')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::deleteEventAction',));
        }

        // details_evenement
        if (0 === strpos($pathinfo, '/detailsEvente') && preg_match('#^/detailsEvente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'details_evenement')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::detailEventAction',));
        }

        // ajouter_evenement
        if ($pathinfo === '/ajouterEvent') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::ajoutEventAction',  '_route' => 'ajouter_evenement',);
        }

        // modifier_evenement
        if (0 === strpos($pathinfo, '/modifierEvent') && preg_match('#^/modifierEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_evenement')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::updateAction',));
        }

        // chercher_evenement
        if (0 === strpos($pathinfo, '/chercherEvent') && preg_match('#^/chercherEvent/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'chercher_evenement')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::chercherEventAction',));
        }

        // participer_evenement
        if ($pathinfo === '/participerEvent') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::participerAction',  '_route' => 'participer_evenement',);
        }

        // pidev_front_office_Reclamation_client_ajout
        if ($pathinfo === '/EnvoyerReclamationClient') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ReclamationClientController::envoyerReclamationAction',  '_route' => 'pidev_front_office_Reclamation_client_ajout',);
        }

        // pidev_front_office_Reclamation_client_supprimer
        if (0 === strpos($pathinfo, '/SupprimerReclamationClient') && preg_match('#^/SupprimerReclamationClient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_Reclamation_client_supprimer')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ReclamationClientController::supprimerReclamationAction',));
        }

        // pidev_front_office_Reclamation_client_supprimer_list
        if (0 === strpos($pathinfo, '/DQL/deleteId') && preg_match('#^/DQL/deleteId/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_Reclamation_client_supprimer_list')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ReclamationClientController::deleteByIdAction',));
        }

        // pidev_front_office_Invitation_client_list
        if (0 === strpos($pathinfo, '/ListClient ') && preg_match('#^/ListClient /(?P<ide>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_front_office_Invitation_client_list')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::listClientAction',));
        }

        // pidev_front_office_Invitation_client
        if ($pathinfo === '/invitation') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::invitationClientAction',  '_route' => 'pidev_front_office_Invitation_client',);
        }

        // pidev_front_office_Invitation_list
        if ($pathinfo === '/ListInvitation') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::invitationListAction',  '_route' => 'pidev_front_office_Invitation_list',);
        }

        // pidev_front_office_Invitation_update
        if ($pathinfo === '/UpdateInvitation') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::invitationUpdateAction',  '_route' => 'pidev_front_office_Invitation_update',);
        }

        // pidev_front_office_Invitation_client_supprimer
        if ($pathinfo === '/SupprimerInvitationClient') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::supprimerInvitationAction',  '_route' => 'pidev_front_office_Invitation_client_supprimer',);
        }

        // cree_offre_client
        if ($pathinfo === '/ajouterOffreClient') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::ajouterOffreAction',  '_route' => 'cree_offre_client',);
        }

        // list_offre_client
        if ($pathinfo === '/listOffreClient') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::listOffreAction',  '_route' => 'list_offre_client',);
        }

        if (0 === strpos($pathinfo, '/afficheOffre')) {
            // afficher_offre_client
            if (0 === strpos($pathinfo, '/afficheOffreClient') && preg_match('#^/afficheOffreClient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_offre_client')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::afficheOffreAction',));
            }

            if (0 === strpos($pathinfo, '/afficheOffrePrestataire')) {
                // list_offre_prestataire
                if ($pathinfo === '/afficheOffrePrestataire') {
                    return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::afficheOffrePrestataireAction',  '_route' => 'list_offre_prestataire',);
                }

                // supprimer_offre_prestataire
                if (preg_match('#^/afficheOffrePrestataire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer_offre_prestataire')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::supprimerAction',));
                }

            }

        }

        // modifier_offre_prestataire
        if (0 === strpos($pathinfo, '/modifierOffrePrestataire') && preg_match('#^/modifierOffrePrestataire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_offre_prestataire')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::modifierAction',));
        }

        // demande_offre
        if (0 === strpos($pathinfo, '/demandeOffre') && preg_match('#^/demandeOffre/(?P<id_offre>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_offre')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::demandeAction',));
        }

        // list_demande
        if ($pathinfo === '/listDemande') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::accepterAction',  '_route' => 'list_demande',);
        }

        // accepter_offre
        if (0 === strpos($pathinfo, '/accepterDemande') && preg_match('#^/accepterDemande/(?P<idClient>[^/]++)/(?P<idOffre>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accepter_offre')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::accepterDemandesAction',));
        }

        if (0 === strpos($pathinfo, '/listch')) {
            // satistique
            if ($pathinfo === '/listch') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::chartAction',  '_route' => 'satistique',);
            }

            // satistiqueP
            if ($pathinfo === '/listchP') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::chartAction',  '_route' => 'satistiqueP',);
            }

        }

        // catalogue_evenement
        if (0 === strpos($pathinfo, '/catalogueEvent') && preg_match('#^/catalogueEvent/(?P<typea>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogue_evenement')), array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::pdfgenerateAction',));
        }

        // ajouter_abonnement
        if ($pathinfo === '/ajouterabonnement') {
            return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::ajoutabonnementAction',  '_route' => 'ajouter_abonnement',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // listcatalogue
            if ($pathinfo === '/listcatalogue') {
                return array (  '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::listercatAction',  '_route' => 'listcatalogue',);
            }

            if (0 === strpos($pathinfo, '/log')) {
                if (0 === strpos($pathinfo, '/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/login') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
