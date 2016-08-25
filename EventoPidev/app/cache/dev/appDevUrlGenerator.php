<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'google_map_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Google\\MapBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/map',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_indexA' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/indexA',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_profilA' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::ProfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profilA',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_listC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::ListCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_detailC' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::DetailCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/listC#detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_blockerC' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::BlockCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/listC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_listP' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::ListPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_detailP' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::DetailPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/listP#detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_blockerP' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::BlockPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/listP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lister_evenement_b' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\EvenementController::listEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listerEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_evenement_b' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\EvenementController::deleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'details_evenement_b' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\EvenementController::detailEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detailsEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter_evenement_b' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::ajoutEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Reclamation_admin_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\ReclamationAdminController::listReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ListReclamationAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Reclamation_admin_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\ReclamationAdminController::supprimerReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/SupprimerReclamationAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Reclamation_admin_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\ReclamationAdminController::ajoutReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/AjoutReclamationAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_abonnements' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AbonnementController::abonnlistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeabonnement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_abonnements' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AbonnementController::suppabonnAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/suppabonnement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'genererpdfabonnement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AbonnementController::exportpdfAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/genererpdfabonnement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'statistiqueA' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\BackOfficeBundle\\Controller\\AdminController::chartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listchA',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/indexC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_indexP' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/indexP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_indexR' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::rdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/indexR',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_profilC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profilC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'DesactiverCompteC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::DesactiveCAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/desactivercompte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_profilP' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profilP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lister_evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::listEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listerEvente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lister_mes_evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::listMyEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listerMesEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_evenement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::deleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerEvente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'details_evenement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::detailEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detailsEvente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter_evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::ajoutEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_evenement' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifierEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'chercher_evenement' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::chercherEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/chercherEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'participer_evenement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::participerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/participerEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Reclamation_client_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ReclamationClientController::envoyerReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/EnvoyerReclamationClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Reclamation_client_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ReclamationClientController::supprimerReclamationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/SupprimerReclamationClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Reclamation_client_supprimer_list' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ReclamationClientController::deleteByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/DQL/deleteId',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Invitation_client_list' => array (  0 =>   array (    0 => 'ide',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::listClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ide',    ),    1 =>     array (      0 => 'text',      1 => '/ListClient ',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Invitation_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::invitationClientAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/invitation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Invitation_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::invitationListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ListInvitation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Invitation_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::invitationUpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/UpdateInvitation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pidev_front_office_Invitation_client_supprimer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\InvitationController::supprimerInvitationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SupprimerInvitationClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cree_offre_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::ajouterOffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterOffreClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_offre_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::listOffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listOffreClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficher_offre_client' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::afficheOffreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/afficheOffreClient',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_offre_prestataire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::afficheOffrePrestataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/afficheOffrePrestataire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_offre_prestataire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/afficheOffrePrestataire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_offre_prestataire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifierOffrePrestataire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demande_offre' => array (  0 =>   array (    0 => 'id_offre',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::demandeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_offre',    ),    1 =>     array (      0 => 'text',      1 => '/demandeOffre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_demande' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::accepterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listDemande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accepter_offre' => array (  0 =>   array (    0 => 'idClient',    1 => 'idOffre',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\OffreController::accepterDemandesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOffre',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idClient',    ),    2 =>     array (      0 => 'text',      1 => '/accepterDemande',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'satistique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\ClientController::chartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'satistiqueP' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\PrestataireController::chartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listchP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catalogue_evenement' => array (  0 =>   array (    0 => 'typea',  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::pdfgenerateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'typea',    ),    1 =>     array (      0 => 'text',      1 => '/catalogueEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajouter_abonnement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::ajoutabonnementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouterabonnement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listcatalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pidev\\FrontOfficeBundle\\Controller\\EvenementController::listercatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listcatalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
