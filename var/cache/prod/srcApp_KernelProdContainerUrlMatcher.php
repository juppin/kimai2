<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
            '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'homepage', 'permanent' => true], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/([^/]++)/re(?'
                        .'|gister(?'
                            .'|(*:31)'
                            .'|/c(?'
                                .'|heck\\-email(*:54)'
                                .'|onfirm(?'
                                    .'|/([^/]++)(*:79)'
                                    .'|ed(*:88)'
                                .')'
                            .')'
                        .')'
                        .'|setting/(?'
                            .'|re(?'
                                .'|quest(*:119)'
                                .'|set/([^/]++)(*:139)'
                            .')'
                            .'|send\\-email(*:159)'
                            .'|check\\-email(*:179)'
                        .')'
                    .')'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/about/debug(*:239)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/about(*:291)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity(*:352)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity/page/([1-9]\\d*)(*:429)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity/create(*:497)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity/create(?:/([^/]++))?(*:579)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity/([^/]++)/budget(*:656)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity/([^/]++)/edit(*:731)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/activity/([^/]++)/delete(*:808)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/calendar(*:863)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/customer(*:924)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/customer/page/([1-9]\\d*)(*:1001)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/customer/create(*:1070)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/customer/([^/]++)/budget(*:1148)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/customer/([^/]++)/edit(*:1224)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/customer/([^/]++)/delete(*:1302)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/dashboard(*:1359)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/export(*:1413)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/export/data(*:1472)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/homepage(*:1528)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice(*:1583)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/print(*:1644)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/template(*:1708)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/template/page/([1-9]\\d*)(*:1788)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/template/([^/]++)/edit(*:1866)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/template/create(*:1937)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/template/create/([^/]++)(*:2017)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/invoice/template/([^/]++)/delete(*:2097)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/plugins(*:2158)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile(?'
                        .'|(*:2216)'
                    .')'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile/([^/]++)(*:2281)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile/([^/]++)/edit(*:2350)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile/([^/]++)/password(*:2423)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile/([^/]++)/api\\-token(*:2498)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile/([^/]++)/roles(*:2568)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/profile/([^/]++)/prefs(*:2638)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project(*:2699)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project/page/([1-9]\\d*)(*:2776)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project/create(*:2844)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project/create(?:/([^/]++))?(*:2926)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project/([^/]++)/budget(*:3003)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project/([^/]++)/edit(*:3078)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/project/([^/]++)/delete(*:3155)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/system\\-config(*:3223)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/system\\-config/update/([^/]++)(*:3307)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/tags(*:3365)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/tags/page/([1-9]\\d*)(*:3439)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/timesheet(*:3496)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/timesheet/page/([1-9]\\d*)(*:3569)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/timesheet/export(*:3633)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/timesheet/([^/]++)/edit(*:3704)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/timesheet/create(*:3768)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/team/timesheet(*:3830)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/team/timesheet/page/([1-9]\\d*)(*:3908)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/team/timesheet/export(*:3977)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/team/timesheet/([^/]++)/edit(*:4053)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/team/timesheet/create(*:4122)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/user(*:4180)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/user/page/([1-9]\\d*)(*:4254)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/user/create(*:4319)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/user/([^/]++)/delete(*:4393)'
                    .'|/(en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja)/admin/user/permissions(*:4463)'
                    .'|/api/(?'
                        .'|activities(?'
                            .'|(?:\\.(json|xml|html))?(*:4515)'
                            .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:4557)'
                            .'|(?:\\.(json|xml|html))?(*:4588)'
                            .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:4630)'
                        .')'
                        .'|c(?'
                            .'|onfig/i18n(?:\\.(json|xml|html))?(*:4676)'
                            .'|ustomers(?'
                                .'|(?:\\.(json|xml|html))?(*:4718)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:4760)'
                                .'|(?:\\.(json|xml|html))?(*:4791)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:4833)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|rojects(?'
                                .'|(?:\\.(json|xml|html))?(*:4880)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:4922)'
                                .'|(?:\\.(json|xml|html))?(*:4953)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:4995)'
                            .')'
                            .'|ing(?:\\.(json|xml|html))?(*:5030)'
                        .')'
                        .'|version(?:\\.(json|xml|html))?(*:5069)'
                        .'|t(?'
                            .'|ags(?'
                                .'|(?:\\.(json|xml|html))?(*:5110)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:5152)'
                            .')'
                            .'|imesheets(?'
                                .'|/(?'
                                    .'|recent(?:\\.(json|xml|html))?(*:5206)'
                                    .'|active(?:\\.(json|xml|html))?(*:5243)'
                                    .'|([^/]++)/(?'
                                        .'|stop(?:\\.(json|xml|html))?(*:5290)'
                                        .'|restart(?:\\.(json|xml|html))?(*:5328)'
                                        .'|export(?:\\.(json|xml|html))?(*:5365)'
                                    .')'
                                .')'
                                .'|(?:\\.(json|xml|html))?(*:5398)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:5440)'
                                .'|(?:\\.(json|xml|html))?(*:5471)'
                                .'|/([^/\\.]++)(?:\\.(json|xml|html))?(?'
                                    .'|(*:5516)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.(json|xml|html))?(*:5558)'
                            .'|/([^/\\.]++)(?:\\.(json|xml|html))?(*:5600)'
                        .')'
                    .')'
                    .'|/([^/]++)(?'
                        .'|/log(?'
                            .'|in(?'
                                .'|(*:5635)'
                                .'|_check(*:5650)'
                            .')'
                            .'|out(*:5663)'
                        .')'
                        .'|(*:5673)'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            31 => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
            54 => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
            79 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['_locale', 'token'], ['GET' => 0], null, false, true, null]],
            88 => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
            119 => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
            139 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['_locale', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            159 => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
            179 => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], ['_locale'], ['GET' => 0], null, false, false, null]],
            239 => [[['_route' => 'about_debug', '_controller' => 'App\\Controller\\AboutController::debugAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
            291 => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::license', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
            352 => [[['_route' => 'admin_activity', 'page' => 1, '_controller' => 'App\\Controller\\ActivityController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            429 => [[['_route' => 'admin_activity_paginated', '_controller' => 'App\\Controller\\ActivityController::indexAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            497 => [[['_route' => 'admin_activity_create', '_controller' => 'App\\Controller\\ActivityController::createAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            579 => [[['_route' => 'admin_activity_create_with_project', 'project' => null, '_controller' => 'App\\Controller\\ActivityController::createAction', '_locale' => 'en'], ['_locale', 'project'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            656 => [[['_route' => 'admin_activity_budget', '_controller' => 'App\\Controller\\ActivityController::budgetAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
            731 => [[['_route' => 'admin_activity_edit', '_controller' => 'App\\Controller\\ActivityController::editAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            808 => [[['_route' => 'admin_activity_delete', '_controller' => 'App\\Controller\\ActivityController::deleteAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            863 => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\CalendarController::userCalendar', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            924 => [[['_route' => 'admin_customer', 'page' => 1, '_controller' => 'App\\Controller\\CustomerController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            1001 => [[['_route' => 'admin_customer_paginated', '_controller' => 'App\\Controller\\CustomerController::indexAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            1070 => [[['_route' => 'admin_customer_create', '_controller' => 'App\\Controller\\CustomerController::createAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1148 => [[['_route' => 'admin_customer_budget', '_controller' => 'App\\Controller\\CustomerController::budgetAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
            1224 => [[['_route' => 'admin_customer_edit', '_controller' => 'App\\Controller\\CustomerController::editAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1302 => [[['_route' => 'admin_customer_delete', '_controller' => 'App\\Controller\\CustomerController::deleteAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1359 => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            1413 => [[['_route' => 'export', '_controller' => 'App\\Controller\\ExportController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
            1472 => [[['_route' => 'export_data', '_controller' => 'App\\Controller\\ExportController::export', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1528 => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
            1583 => [[['_route' => 'invoice', '_controller' => 'App\\Controller\\InvoiceController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
            1644 => [[['_route' => 'invoice_print', '_controller' => 'App\\Controller\\InvoiceController::printAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1708 => [[['_route' => 'admin_invoice_template', 'page' => 1, '_controller' => 'App\\Controller\\InvoiceController::listTemplateAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1788 => [[['_route' => 'admin_invoice_template_paginated', '_controller' => 'App\\Controller\\InvoiceController::listTemplateAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            1866 => [[['_route' => 'admin_invoice_template_edit', '_controller' => 'App\\Controller\\InvoiceController::editTemplateAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            1937 => [[['_route' => 'admin_invoice_template_create', '_controller' => 'App\\Controller\\InvoiceController::createTemplateAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2017 => [[['_route' => 'admin_invoice_template_copy', '_controller' => 'App\\Controller\\InvoiceController::createTemplateAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            2097 => [[['_route' => 'admin_invoice_template_delete', '_controller' => 'App\\Controller\\InvoiceController::deleteTemplate', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2158 => [[['_route' => 'plugins', '_controller' => 'App\\Controller\\PluginController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            2216 => [
                [['_route' => 'fos_user_profile_show', '_controller' => 'App\\Controller\\ProfileController::profileAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
                [['_route' => 'my_profile', '_controller' => 'App\\Controller\\ProfileController::profileAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null],
            ],
            2281 => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\ProfileController::indexAction', '_locale' => 'en'], ['_locale', 'username'], ['GET' => 0], null, false, true, null]],
            2350 => [[['_route' => 'user_profile_edit', '_controller' => 'App\\Controller\\ProfileController::editAction', '_locale' => 'en'], ['_locale', 'username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2423 => [[['_route' => 'user_profile_password', '_controller' => 'App\\Controller\\ProfileController::passwordAction', '_locale' => 'en'], ['_locale', 'username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2498 => [[['_route' => 'user_profile_api_token', '_controller' => 'App\\Controller\\ProfileController::apiTokenAction', '_locale' => 'en'], ['_locale', 'username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2568 => [[['_route' => 'user_profile_roles', '_controller' => 'App\\Controller\\ProfileController::rolesAction', '_locale' => 'en'], ['_locale', 'username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2638 => [[['_route' => 'user_profile_preferences', '_controller' => 'App\\Controller\\ProfileController::preferencesAction', '_locale' => 'en'], ['_locale', 'username'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2699 => [[['_route' => 'admin_project', 'page' => 1, '_controller' => 'App\\Controller\\ProjectController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            2776 => [[['_route' => 'admin_project_paginated', '_controller' => 'App\\Controller\\ProjectController::indexAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            2844 => [[['_route' => 'admin_project_create', '_controller' => 'App\\Controller\\ProjectController::createAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            2926 => [[['_route' => 'admin_project_create_with_customer', 'customer' => null, '_controller' => 'App\\Controller\\ProjectController::createAction', '_locale' => 'en'], ['_locale', 'customer'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            3003 => [[['_route' => 'admin_project_budget', '_controller' => 'App\\Controller\\ProjectController::budgetAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, false, null]],
            3078 => [[['_route' => 'admin_project_edit', '_controller' => 'App\\Controller\\ProjectController::editAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            3155 => [[['_route' => 'admin_project_delete', '_controller' => 'App\\Controller\\ProjectController::deleteAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            3223 => [[['_route' => 'system_configuration', '_controller' => 'App\\Controller\\SystemConfigurationController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            3307 => [[['_route' => 'system_configuration_update', '_controller' => 'App\\Controller\\SystemConfigurationController::configUpdate', '_locale' => 'en'], ['_locale', 'section'], ['POST' => 0], null, false, true, null]],
            3365 => [[['_route' => 'tags', 'page' => 1, '_controller' => 'App\\Controller\\TagController::listTags', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            3439 => [[['_route' => 'tags_paginated', '_controller' => 'App\\Controller\\TagController::listTags', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            3496 => [[['_route' => 'timesheet', 'page' => 1, '_controller' => 'App\\Controller\\TimesheetController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            3569 => [[['_route' => 'timesheet_paginated', '_controller' => 'App\\Controller\\TimesheetController::indexAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            3633 => [[['_route' => 'timesheet_export', '_controller' => 'App\\Controller\\TimesheetController::exportAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
            3704 => [[['_route' => 'timesheet_edit', '_controller' => 'App\\Controller\\TimesheetController::editAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            3768 => [[['_route' => 'timesheet_create', '_controller' => 'App\\Controller\\TimesheetController::createAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            3830 => [[['_route' => 'admin_timesheet', 'page' => 1, '_controller' => 'App\\Controller\\TimesheetTeamController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            3908 => [[['_route' => 'admin_timesheet_paginated', '_controller' => 'App\\Controller\\TimesheetTeamController::indexAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            3977 => [[['_route' => 'admin_timesheet_export', '_controller' => 'App\\Controller\\TimesheetTeamController::exportAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
            4053 => [[['_route' => 'admin_timesheet_edit', '_controller' => 'App\\Controller\\TimesheetTeamController::editAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4122 => [[['_route' => 'admin_timesheet_create', '_controller' => 'App\\Controller\\TimesheetTeamController::createAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4180 => [[['_route' => 'admin_user', 'page' => 1, '_controller' => 'App\\Controller\\UserController::indexAction', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
            4254 => [[['_route' => 'admin_user_paginated', '_controller' => 'App\\Controller\\UserController::indexAction', '_locale' => 'en'], ['_locale', 'page'], ['GET' => 0], null, false, true, null]],
            4319 => [[['_route' => 'admin_user_create', '_controller' => 'App\\Controller\\UserController::createAction', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4393 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\UserController::deleteAction', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4463 => [[['_route' => 'admin_user_permissions', '_controller' => 'App\\Controller\\UserController::permissions', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            4515 => [[['_route' => 'get_activities', '_controller' => 'App\\API\\ActivityController::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            4557 => [[['_route' => 'get_activity', '_controller' => 'App\\API\\ActivityController::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            4588 => [[['_route' => 'post_activity', '_controller' => 'App\\API\\ActivityController::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
            4630 => [[['_route' => 'patch_activity', '_controller' => 'App\\API\\ActivityController::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
            4676 => [[['_route' => 'i18n', '_controller' => 'App\\API\\ConfigurationController::i18nAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            4718 => [[['_route' => 'get_customers', '_controller' => 'App\\API\\CustomerController::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            4760 => [[['_route' => 'get_customer', '_controller' => 'App\\API\\CustomerController::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            4791 => [[['_route' => 'post_customer', '_controller' => 'App\\API\\CustomerController::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
            4833 => [[['_route' => 'patch_customer', '_controller' => 'App\\API\\CustomerController::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
            4880 => [[['_route' => 'get_projects', '_controller' => 'App\\API\\ProjectController::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            4922 => [[['_route' => 'get_project', '_controller' => 'App\\API\\ProjectController::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            4953 => [[['_route' => 'post_project', '_controller' => 'App\\API\\ProjectController::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
            4995 => [[['_route' => 'patch_project', '_controller' => 'App\\API\\ProjectController::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
            5030 => [[['_route' => 'ping', '_controller' => 'App\\API\\StatusController::pingAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5069 => [[['_route' => 'version', '_controller' => 'App\\API\\StatusController::versionAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5110 => [[['_route' => 'get_tags', '_controller' => 'App\\API\\TagController::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5152 => [[['_route' => 'delete_tag', '_controller' => 'App\\API\\TagController::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null]],
            5206 => [[['_route' => 'recent_timesheet', '_controller' => 'App\\API\\TimesheetController::recentAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5243 => [[['_route' => 'active_timesheet', '_controller' => 'App\\API\\TimesheetController::activeAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5290 => [[['_route' => 'stop_timesheet', '_controller' => 'App\\API\\TimesheetController::stopAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
            5328 => [[['_route' => 'restart_timesheet', '_controller' => 'App\\API\\TimesheetController::restartAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
            5365 => [[['_route' => 'export_timesheet', '_controller' => 'App\\API\\TimesheetController::exportAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
            5398 => [[['_route' => 'get_timesheets', '_controller' => 'App\\API\\TimesheetController::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5440 => [[['_route' => 'get_timesheet', '_controller' => 'App\\API\\TimesheetController::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            5471 => [[['_route' => 'post_timesheet', '_controller' => 'App\\API\\TimesheetController::postAction', '_format' => 'json'], ['_format'], ['POST' => 0], null, false, true, null]],
            5516 => [
                [['_route' => 'patch_timesheet', '_controller' => 'App\\API\\TimesheetController::patchAction', '_format' => 'json'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
                [['_route' => 'delete_timesheet', '_controller' => 'App\\API\\TimesheetController::deleteAction', '_format' => 'json'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            5558 => [[['_route' => 'get_users', '_controller' => 'App\\API\\UserController::cgetAction', '_format' => 'json'], ['_format'], ['GET' => 0], null, false, true, null]],
            5600 => [[['_route' => 'get_user', '_controller' => 'App\\API\\UserController::getAction', '_format' => 'json'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            5635 => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            5650 => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], ['_locale'], ['POST' => 0], null, false, false, null]],
            5663 => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            5673 => [[['_route' => 'homeLocale', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'homepage', 'permanent' => true], ['_locale'], null, null, false, true, null]],
        ];
    }
}
