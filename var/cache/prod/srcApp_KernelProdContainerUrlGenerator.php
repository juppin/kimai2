<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'fos_user_registration_register' => [['_locale'], ['_controller' => 'fos_user.registration.controller:registerAction'], [], [['text', '/register/'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_registration_check_email' => [['_locale'], ['_controller' => 'fos_user.registration.controller:checkEmailAction'], [], [['text', '/register/check-email'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_registration_confirm' => [['_locale', 'token'], ['_controller' => 'fos_user.registration.controller:confirmAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/register/confirm'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_registration_confirmed' => [['_locale'], ['_controller' => 'fos_user.registration.controller:confirmedAction'], [], [['text', '/register/confirmed'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_resetting_request' => [['_locale'], ['_controller' => 'fos_user.resetting.controller:requestAction'], [], [['text', '/resetting/request'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_resetting_send_email' => [['_locale'], ['_controller' => 'fos_user.resetting.controller:sendEmailAction'], [], [['text', '/resetting/send-email'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_resetting_check_email' => [['_locale'], ['_controller' => 'fos_user.resetting.controller:checkEmailAction'], [], [['text', '/resetting/check-email'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_resetting_reset' => [['_locale', 'token'], ['_controller' => 'fos_user.resetting.controller:resetAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/resetting/reset'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'about_debug' => [['_locale'], ['_controller' => 'App\\Controller\\AboutController::debugAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/about/debug'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'about' => [['_locale'], ['_controller' => 'App\\Controller\\AboutController::license', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/about'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\ActivityController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/activity/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\ActivityController::indexAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/admin/activity/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity_create' => [['_locale'], ['_controller' => 'App\\Controller\\ActivityController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/activity/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity_create_with_project' => [['_locale', 'project'], ['project' => null, '_controller' => 'App\\Controller\\ActivityController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[^/]++', 'project'], ['text', '/admin/activity/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity_budget' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ActivityController::budgetAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/budget'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/activity'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ActivityController::editAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/activity'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_activity_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ActivityController::deleteAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/activity'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'calendar' => [['_locale'], ['_controller' => 'App\\Controller\\CalendarController::userCalendar', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/calendar/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_customer' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\CustomerController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/customer/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_customer_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\CustomerController::indexAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/admin/customer/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_customer_create' => [['_locale'], ['_controller' => 'App\\Controller\\CustomerController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/customer/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_customer_budget' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\CustomerController::budgetAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/budget'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/customer'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_customer_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\CustomerController::editAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/customer'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_customer_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\CustomerController::deleteAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/customer'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'dashboard' => [['_locale'], ['_controller' => 'App\\Controller\\DashboardController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/dashboard/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'export' => [['_locale'], ['_controller' => 'App\\Controller\\ExportController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/export/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'export_data' => [['_locale'], ['_controller' => 'App\\Controller\\ExportController::export', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/export/data'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'homepage' => [['_locale'], ['_controller' => 'App\\Controller\\HomepageController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/homepage'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'invoice' => [['_locale'], ['_controller' => 'App\\Controller\\InvoiceController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/invoice/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'invoice_print' => [['_locale'], ['_controller' => 'App\\Controller\\InvoiceController::printAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/invoice/print'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_invoice_template' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\InvoiceController::listTemplateAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/invoice/template'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_invoice_template_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\InvoiceController::listTemplateAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/invoice/template/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_invoice_template_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\InvoiceController::editTemplateAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/invoice/template'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_invoice_template_create' => [['_locale'], ['_controller' => 'App\\Controller\\InvoiceController::createTemplateAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/invoice/template/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_invoice_template_copy' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\InvoiceController::createTemplateAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[^/]++', 'id'], ['text', '/invoice/template/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_invoice_template_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\InvoiceController::deleteTemplate', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/invoice/template'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'plugins' => [['_locale'], ['_controller' => 'App\\Controller\\PluginController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/plugins/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'fos_user_profile_show' => [['_locale'], ['_controller' => 'App\\Controller\\ProfileController::profileAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/profile/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'my_profile' => [['_locale'], ['_controller' => 'App\\Controller\\ProfileController::profileAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/profile/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'user_profile' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\ProfileController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[^/]++', 'username'], ['text', '/profile'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'user_profile_edit' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\ProfileController::editAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'username'], ['text', '/profile'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'user_profile_password' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\ProfileController::passwordAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/password'], ['variable', '/', '[^/]++', 'username'], ['text', '/profile'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'user_profile_api_token' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\ProfileController::apiTokenAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/api-token'], ['variable', '/', '[^/]++', 'username'], ['text', '/profile'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'user_profile_roles' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\ProfileController::rolesAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/roles'], ['variable', '/', '[^/]++', 'username'], ['text', '/profile'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'user_profile_preferences' => [['_locale', 'username'], ['_controller' => 'App\\Controller\\ProfileController::preferencesAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/prefs'], ['variable', '/', '[^/]++', 'username'], ['text', '/profile'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\ProjectController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/project/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\ProjectController::indexAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/admin/project/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project_create' => [['_locale'], ['_controller' => 'App\\Controller\\ProjectController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/project/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project_create_with_customer' => [['_locale', 'customer'], ['customer' => null, '_controller' => 'App\\Controller\\ProjectController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[^/]++', 'customer'], ['text', '/admin/project/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project_budget' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ProjectController::budgetAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/budget'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/project'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ProjectController::editAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/project'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_project_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\ProjectController::deleteAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/project'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'system_configuration' => [['_locale'], ['_controller' => 'App\\Controller\\SystemConfigurationController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/system-config/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'system_configuration_update' => [['_locale', 'section'], ['_controller' => 'App\\Controller\\SystemConfigurationController::configUpdate', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[^/]++', 'section'], ['text', '/admin/system-config/update'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'tags' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\TagController::listTags', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/tags/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'tags_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\TagController::listTags', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/admin/tags/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'timesheet' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\TimesheetController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/timesheet/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'timesheet_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\TimesheetController::indexAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/timesheet/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'timesheet_export' => [['_locale'], ['_controller' => 'App\\Controller\\TimesheetController::exportAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/timesheet/export'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'timesheet_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\TimesheetController::editAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/timesheet'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'timesheet_create' => [['_locale'], ['_controller' => 'App\\Controller\\TimesheetController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/timesheet/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_timesheet' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\TimesheetTeamController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/team/timesheet/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_timesheet_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\TimesheetTeamController::indexAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/team/timesheet/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_timesheet_export' => [['_locale'], ['_controller' => 'App\\Controller\\TimesheetTeamController::exportAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/team/timesheet/export'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_timesheet_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\TimesheetTeamController::editAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/team/timesheet'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_timesheet_create' => [['_locale'], ['_controller' => 'App\\Controller\\TimesheetTeamController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/team/timesheet/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_user' => [['_locale'], ['page' => 1, '_controller' => 'App\\Controller\\UserController::indexAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/user/'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_user_paginated' => [['_locale', 'page'], ['_controller' => 'App\\Controller\\UserController::indexAction', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['variable', '/', '[1-9]\\d*', 'page'], ['text', '/admin/user/page'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_user_create' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::createAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/user/create'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_user_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\UserController::deleteAction', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/user'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'admin_user_permissions' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::permissions', '_locale' => 'en'], ['_locale' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja'], [['text', '/admin/user/permissions'], ['variable', '/', 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', '_locale']], [], []],
        'get_activities' => [['_format'], ['_controller' => 'App\\API\\ActivityController::cgetAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/activities']], [], []],
        'get_activity' => [['id', '_format'], ['_controller' => 'App\\API\\ActivityController::getAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/activities']], [], []],
        'post_activity' => [['_format'], ['_controller' => 'App\\API\\ActivityController::postAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/activities']], [], []],
        'patch_activity' => [['id', '_format'], ['_controller' => 'App\\API\\ActivityController::patchAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/activities']], [], []],
        'i18n' => [['_format'], ['_controller' => 'App\\API\\ConfigurationController::i18nAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/config/i18n']], [], []],
        'get_customers' => [['_format'], ['_controller' => 'App\\API\\CustomerController::cgetAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/customers']], [], []],
        'get_customer' => [['id', '_format'], ['_controller' => 'App\\API\\CustomerController::getAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/customers']], [], []],
        'post_customer' => [['_format'], ['_controller' => 'App\\API\\CustomerController::postAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/customers']], [], []],
        'patch_customer' => [['id', '_format'], ['_controller' => 'App\\API\\CustomerController::patchAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/customers']], [], []],
        'get_projects' => [['_format'], ['_controller' => 'App\\API\\ProjectController::cgetAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/projects']], [], []],
        'get_project' => [['id', '_format'], ['_controller' => 'App\\API\\ProjectController::getAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/projects']], [], []],
        'post_project' => [['_format'], ['_controller' => 'App\\API\\ProjectController::postAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/projects']], [], []],
        'patch_project' => [['id', '_format'], ['_controller' => 'App\\API\\ProjectController::patchAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/projects']], [], []],
        'ping' => [['_format'], ['_controller' => 'App\\API\\StatusController::pingAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/ping']], [], []],
        'version' => [['_format'], ['_controller' => 'App\\API\\StatusController::versionAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/version']], [], []],
        'get_tags' => [['_format'], ['_controller' => 'App\\API\\TagController::cgetAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/tags']], [], []],
        'delete_tag' => [['id', '_format'], ['_controller' => 'App\\API\\TagController::deleteAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tags']], [], []],
        'recent_timesheet' => [['_format'], ['_controller' => 'App\\API\\TimesheetController::recentAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/timesheets/recent']], [], []],
        'active_timesheet' => [['_format'], ['_controller' => 'App\\API\\TimesheetController::activeAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/timesheets/active']], [], []],
        'stop_timesheet' => [['id', '_format'], ['_controller' => 'App\\API\\TimesheetController::stopAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/stop'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/timesheets']], [], []],
        'restart_timesheet' => [['id', '_format'], ['_controller' => 'App\\API\\TimesheetController::restartAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/restart'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/timesheets']], [], []],
        'export_timesheet' => [['id', '_format'], ['_controller' => 'App\\API\\TimesheetController::exportAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/export'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/timesheets']], [], []],
        'get_timesheets' => [['_format'], ['_controller' => 'App\\API\\TimesheetController::cgetAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/timesheets']], [], []],
        'get_timesheet' => [['id', '_format'], ['_controller' => 'App\\API\\TimesheetController::getAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/timesheets']], [], []],
        'post_timesheet' => [['_format'], ['_controller' => 'App\\API\\TimesheetController::postAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/timesheets']], [], []],
        'patch_timesheet' => [['id', '_format'], ['_controller' => 'App\\API\\TimesheetController::patchAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/timesheets']], [], []],
        'delete_timesheet' => [['id', '_format'], ['_controller' => 'App\\API\\TimesheetController::deleteAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/timesheets']], [], []],
        'get_users' => [['_format'], ['_controller' => 'App\\API\\UserController::cgetAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['text', '/api/users']], [], []],
        'get_user' => [['id', '_format'], ['_controller' => 'App\\API\\UserController::getAction', '_format' => 'json'], ['_format' => 'json|xml|html'], [['variable', '.', 'json|xml|html', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/users']], [], []],
        'fos_user_security_login' => [['_locale'], ['_controller' => 'fos_user.security.controller:loginAction'], [], [['text', '/login'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_security_check' => [['_locale'], ['_controller' => 'fos_user.security.controller:checkAction'], [], [['text', '/login_check'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'fos_user_security_logout' => [['_locale'], ['_controller' => 'fos_user.security.controller:logoutAction'], [], [['text', '/logout'], ['variable', '/', '[^/]++', '_locale']], [], []],
        'app.swagger_ui' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger_ui'], [], [['text', '/api/doc']], [], []],
        'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], []],
        'home' => [[], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'homepage', 'permanent' => true], [], [['text', '/']], [], []],
        'homeLocale' => [['_locale'], ['_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'homepage', 'permanent' => true], [], [['variable', '/', '[^/]++', '_locale']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
