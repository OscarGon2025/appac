<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/album' => [[['_route' => 'admin_album_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/album/new' => [[['_route' => 'admin_album_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/album/batch-delete' => [[['_route' => 'admin_album_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/album/autocomplete' => [[['_route' => 'admin_album_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/album/render-filters' => [[['_route' => 'admin_album_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/archive-image' => [[['_route' => 'admin_archive_image_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/archive-image/new' => [[['_route' => 'admin_archive_image_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/archive-image/batch-delete' => [[['_route' => 'admin_archive_image_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/archive-image/autocomplete' => [[['_route' => 'admin_archive_image_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/archive-image/render-filters' => [[['_route' => 'admin_archive_image_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article-attachment' => [[['_route' => 'admin_article_attachment_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article-attachment/new' => [[['_route' => 'admin_article_attachment_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/article-attachment/batch-delete' => [[['_route' => 'admin_article_attachment_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/article-attachment/autocomplete' => [[['_route' => 'admin_article_attachment_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article-attachment/render-filters' => [[['_route' => 'admin_article_attachment_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article' => [[['_route' => 'admin_article_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/new' => [[['_route' => 'admin_article_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/article/batch-delete' => [[['_route' => 'admin_article_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/article/autocomplete' => [[['_route' => 'admin_article_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/article/render-filters' => [[['_route' => 'admin_article_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/board-member' => [[['_route' => 'admin_board_member_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/board-member/new' => [[['_route' => 'admin_board_member_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/board-member/batch-delete' => [[['_route' => 'admin_board_member_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/board-member/autocomplete' => [[['_route' => 'admin_board_member_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/board-member/render-filters' => [[['_route' => 'admin_board_member_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/classified-ad' => [[['_route' => 'admin_classified_ad_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/classified-ad/new' => [[['_route' => 'admin_classified_ad_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/classified-ad/batch-delete' => [[['_route' => 'admin_classified_ad_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/classified-ad/autocomplete' => [[['_route' => 'admin_classified_ad_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/classified-ad/render-filters' => [[['_route' => 'admin_classified_ad_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event' => [[['_route' => 'admin_event_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event/new' => [[['_route' => 'admin_event_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/event/batch-delete' => [[['_route' => 'admin_event_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/event/autocomplete' => [[['_route' => 'admin_event_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/event/render-filters' => [[['_route' => 'admin_event_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/membership-application' => [[['_route' => 'admin_membership_application_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/membership-application/new' => [[['_route' => 'admin_membership_application_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/membership-application/batch-delete' => [[['_route' => 'admin_membership_application_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/membership-application/autocomplete' => [[['_route' => 'admin_membership_application_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/membership-application/render-filters' => [[['_route' => 'admin_membership_application_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/membership' => [[['_route' => 'admin_membership_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/membership/new' => [[['_route' => 'admin_membership_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/membership/batch-delete' => [[['_route' => 'admin_membership_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/membership/autocomplete' => [[['_route' => 'admin_membership_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/membership/render-filters' => [[['_route' => 'admin_membership_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/outing-request' => [[['_route' => 'admin_outing_request_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/outing-request/new' => [[['_route' => 'admin_outing_request_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/outing-request/batch-delete' => [[['_route' => 'admin_outing_request_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/outing-request/autocomplete' => [[['_route' => 'admin_outing_request_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/outing-request/render-filters' => [[['_route' => 'admin_outing_request_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page' => [[['_route' => 'admin_page_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page/new' => [[['_route' => 'admin_page_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/page/batch-delete' => [[['_route' => 'admin_page_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/page/autocomplete' => [[['_route' => 'admin_page_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/page/render-filters' => [[['_route' => 'admin_page_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/partner-link' => [[['_route' => 'admin_partner_link_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/partner-link/new' => [[['_route' => 'admin_partner_link_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/partner-link/batch-delete' => [[['_route' => 'admin_partner_link_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/partner-link/autocomplete' => [[['_route' => 'admin_partner_link_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/partner-link/render-filters' => [[['_route' => 'admin_partner_link_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/photo' => [[['_route' => 'admin_photo_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/photo/new' => [[['_route' => 'admin_photo_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/photo/batch-delete' => [[['_route' => 'admin_photo_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/photo/autocomplete' => [[['_route' => 'admin_photo_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/photo/render-filters' => [[['_route' => 'admin_photo_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/mon-compte/annonces' => [[['_route' => 'account_ad_index', '_controller' => 'App\\Controller\\Account\\AccountAdController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mon-compte/annonces/nouveau' => [[['_route' => 'account_ad_new', '_controller' => 'App\\Controller\\Account\\AccountAdController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-compte/evenements/mes-sorties' => [[['_route' => 'account_events_my_outings', '_controller' => 'App\\Controller\\Account\\AccountEventController::myOutings'], null, ['GET' => 0], null, false, false, null]],
        '/mon-compte/mes-evenements' => [[['_route' => 'account_events_index', '_controller' => 'App\\Controller\\Account\\MyEventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mon-compte/mes-evenements/nouveau' => [[['_route' => 'account_events_new', '_controller' => 'App\\Controller\\Account\\MyEventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-compte' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mon-compte/modifier' => [[['_route' => 'app_account_edit', '_controller' => 'App\\Controller\\AccountController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mon-compte/supprimer' => [[['_route' => 'app_account_delete', '_controller' => 'App\\Controller\\AccountController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/actus' => [[['_route' => 'actus_index', '_controller' => 'App\\Controller\\ActusController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/albums' => [[['_route' => 'album_index', '_controller' => 'App\\Controller\\AlbumController::index'], null, null, null, false, false, null]],
        '/albums/ajouter' => [[['_route' => 'album_new', '_controller' => 'App\\Controller\\AlbumController::new'], null, null, null, false, false, null]],
        '/organigramme' => [[['_route' => 'board_member_organigram', '_controller' => 'App\\Controller\\BoardMemberController::organigram'], null, null, null, false, false, null]],
        '/annonces' => [[['_route' => 'app_classified_index', '_controller' => 'App\\Controller\\ClassifiedAdController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evenements' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/_site/header' => [[['_route' => 'site_header', '_controller' => 'App\\Controller\\HeaderController::siteHeader'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/adhesion' => [[['_route' => 'app_adhesion', '_controller' => 'App\\Controller\\MembershipController::adhesion'], null, null, null, false, false, null]],
        '/adhesion/merci' => [[['_route' => 'app_adhesion_thanks', '_controller' => 'App\\Controller\\MembershipController::thanks'], null, null, null, false, false, null]],
        '/photos/upload' => [[['_route' => 'photo_upload', '_controller' => 'App\\Controller\\PhotoController::upload'], null, null, null, false, false, null]],
        '/galerie' => [[['_route' => 'gallery_index', '_controller' => 'App\\Controller\\PhotoController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/membre' => [[['_route' => 'app_membre', '_controller' => 'App\\Controller\\SecurityController::membre'], null, ['GET' => 0], null, false, false, null]],
        '/webhook/helloasso' => [[['_route' => 'webhook_helloasso', '_controller' => 'App\\Controller\\Webhook\\HelloAssoController'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|a(?'
                            .'|lbum/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:48)'
                                    .'|delete(*:61)'
                                .')'
                                .'|(*:69)'
                            .')'
                            .'|r(?'
                                .'|chive\\-image/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:113)'
                                        .'|delete(*:127)'
                                        .'|info(*:139)'
                                    .')'
                                    .'|(*:148)'
                                .')'
                                .'|ticle(?'
                                    .'|\\-attachment/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:197)'
                                            .'|delete(*:211)'
                                        .')'
                                        .'|(*:220)'
                                    .')'
                                    .'|/([^/]++)(?'
                                        .'|/(?'
                                            .'|edit(*:249)'
                                            .'|delete(*:263)'
                                        .')'
                                        .'|(*:272)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|board\\-member/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:317)'
                                .'|delete(*:331)'
                            .')'
                            .'|(*:340)'
                        .')'
                        .'|classified\\-ad/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:383)'
                                .'|delete(*:397)'
                            .')'
                            .'|(*:406)'
                        .')'
                        .'|event/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:440)'
                                .'|delete(*:454)'
                            .')'
                            .'|(*:463)'
                        .')'
                        .'|membership(?'
                            .'|\\-application/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:518)'
                                    .'|delete(*:532)'
                                .')'
                                .'|(*:541)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:570)'
                                    .'|delete(*:584)'
                                .')'
                                .'|(*:593)'
                            .')'
                        .')'
                        .'|outing\\-request/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:638)'
                                .'|delete(*:652)'
                            .')'
                            .'|(*:661)'
                        .')'
                        .'|p(?'
                            .'|a(?'
                                .'|ge/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:700)'
                                        .'|delete(*:714)'
                                    .')'
                                    .'|(*:723)'
                                .')'
                                .'|rtner\\-link/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:763)'
                                        .'|delete(*:777)'
                                    .')'
                                    .'|(*:786)'
                                .')'
                            .')'
                            .'|hoto/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:820)'
                                    .'|delete(*:834)'
                                    .'|restore(*:849)'
                                .')'
                                .'|(*:858)'
                            .')'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:892)'
                                .'|delete(*:906)'
                            .')'
                            .'|(*:915)'
                        .')'
                    .')'
                    .'|ctus/([a-z0-9\\-]+)(*:943)'
                    .'|ttachment/(\\d+)/download(*:975)'
                    .'|nnonces/(\\d+)(*:996)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1036)'
                    .'|wdt/([^/]++)(*:1057)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:1100)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1138)'
                                .'|router(*:1153)'
                                .'|exception(?'
                                    .'|(*:1174)'
                                    .'|\\.css(*:1188)'
                                .')'
                            .')'
                            .'|(*:1199)'
                        .')'
                    .')'
                .')'
                .'|/m(?'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1268)'
                        .'|([A-z0-9_-]*)/(.+)(*:1295)'
                    .')'
                    .'|on\\-compte/(?'
                        .'|annonces/(?'
                            .'|(\\d+)/modifier(*:1345)'
                            .'|(\\d+)/archiver(*:1368)'
                            .'|(\\d+)/supprimer(*:1392)'
                        .')'
                        .'|mes\\-evenements/([^/]++)/modifier(*:1435)'
                    .')'
                .')'
                .'|/evenements/(?'
                    .'|([a-z0-9-]+)(*:1473)'
                    .'|([^/]++)/(?'
                        .'|register(*:1502)'
                        .'|unregister(*:1521)'
                    .')'
                .')'
                .'|/supprimer/([^/]++)(*:1551)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        48 => [[['_route' => 'admin_album_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        61 => [[['_route' => 'admin_album_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        69 => [[['_route' => 'admin_album_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\AlbumCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\AlbumCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        113 => [[['_route' => 'admin_archive_image_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        127 => [[['_route' => 'admin_archive_image_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        139 => [[['_route' => 'admin_archive_image_info', '_controller' => 'App\\Controller\\Admin\\ArchiveImageController::info'], ['id'], ['GET' => 0], null, false, false, null]],
        148 => [[['_route' => 'admin_archive_image_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArchiveImageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArchiveImageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        197 => [[['_route' => 'admin_article_attachment_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        211 => [[['_route' => 'admin_article_attachment_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        220 => [[['_route' => 'admin_article_attachment_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleAttachmentCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'admin_article_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        263 => [[['_route' => 'admin_article_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        272 => [[['_route' => 'admin_article_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ArticleCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ArticleCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'admin_board_member_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        331 => [[['_route' => 'admin_board_member_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        340 => [[['_route' => 'admin_board_member_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\BoardMemberCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\BoardMemberCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'admin_classified_ad_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        397 => [[['_route' => 'admin_classified_ad_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        406 => [[['_route' => 'admin_classified_ad_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ClassifiedAdCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ClassifiedAdCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        440 => [[['_route' => 'admin_event_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        454 => [[['_route' => 'admin_event_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        463 => [[['_route' => 'admin_event_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\EventCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\EventCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'admin_membership_application_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        532 => [[['_route' => 'admin_membership_application_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        541 => [[['_route' => 'admin_membership_application_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipApplicationCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipApplicationCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        570 => [[['_route' => 'admin_membership_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        584 => [[['_route' => 'admin_membership_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        593 => [[['_route' => 'admin_membership_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MembershipCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MembershipCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        638 => [[['_route' => 'admin_outing_request_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        652 => [[['_route' => 'admin_outing_request_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        661 => [[['_route' => 'admin_outing_request_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\OutingRequestCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\OutingRequestCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        700 => [[['_route' => 'admin_page_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        714 => [[['_route' => 'admin_page_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        723 => [[['_route' => 'admin_page_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        763 => [[['_route' => 'admin_partner_link_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        777 => [[['_route' => 'admin_partner_link_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        786 => [[['_route' => 'admin_partner_link_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PartnerLinkCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PartnerLinkCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'admin_photo_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        834 => [[['_route' => 'admin_photo_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        849 => [[['_route' => 'admin_photo_restore', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::restorePhotoById'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        858 => [[['_route' => 'admin_photo_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\PhotoCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\PhotoCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        892 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        906 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        915 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        943 => [[['_route' => 'actus_show', '_controller' => 'App\\Controller\\ActusController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        975 => [[['_route' => 'attachment_download', '_controller' => 'App\\Controller\\AttachmentController::download'], ['id'], ['GET' => 0], null, false, false, null]],
        996 => [[['_route' => 'app_classified_show', '_controller' => 'App\\Controller\\ClassifiedAdController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1036 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1057 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1100 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        1138 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1153 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1174 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1188 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1199 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1268 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1295 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        1345 => [[['_route' => 'account_ad_edit', '_controller' => 'App\\Controller\\Account\\AccountAdController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1368 => [[['_route' => 'account_ad_archive', '_controller' => 'App\\Controller\\Account\\AccountAdController::archive'], ['id'], ['POST' => 0], null, false, false, null]],
        1392 => [[['_route' => 'account_ad_delete', '_controller' => 'App\\Controller\\Account\\AccountAdController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1435 => [[['_route' => 'account_events_edit', '_controller' => 'App\\Controller\\Account\\MyEventController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1473 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        1502 => [[['_route' => 'app_event_register', '_controller' => 'App\\Controller\\EventRegistrationController::register'], ['id'], ['POST' => 0], null, false, false, null]],
        1521 => [[['_route' => 'app_event_unregister', '_controller' => 'App\\Controller\\EventRegistrationController::unregister'], ['id'], ['POST' => 0], null, false, false, null]],
        1551 => [
            [['_route' => 'app_photos_delete', '_controller' => 'App\\Controller\\PhotoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
