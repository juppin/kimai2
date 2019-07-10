<?php

namespace Container8P2VZCD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcApp_KernelProdContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
        ];
        $this->fileMap = [
            'App\\API\\ActivityController' => 'getActivityControllerService.php',
            'App\\API\\ConfigurationController' => 'getConfigurationControllerService.php',
            'App\\API\\CustomerController' => 'getCustomerControllerService.php',
            'App\\API\\ProjectController' => 'getProjectControllerService.php',
            'App\\API\\StatusController' => 'getStatusControllerService.php',
            'App\\API\\TagController' => 'getTagControllerService.php',
            'App\\API\\TimesheetController' => 'getTimesheetControllerService.php',
            'App\\API\\UserController' => 'getUserControllerService.php',
            'App\\Controller\\AboutController' => 'getAboutControllerService.php',
            'App\\Controller\\ActivityController' => 'getActivityController2Service.php',
            'App\\Controller\\CalendarController' => 'getCalendarControllerService.php',
            'App\\Controller\\CustomerController' => 'getCustomerController2Service.php',
            'App\\Controller\\DashboardController' => 'getDashboardControllerService.php',
            'App\\Controller\\ExportController' => 'getExportControllerService.php',
            'App\\Controller\\HomepageController' => 'getHomepageControllerService.php',
            'App\\Controller\\InvoiceController' => 'getInvoiceControllerService.php',
            'App\\Controller\\PluginController' => 'getPluginControllerService.php',
            'App\\Controller\\ProfileController' => 'getProfileControllerService.php',
            'App\\Controller\\ProjectController' => 'getProjectController2Service.php',
            'App\\Controller\\SystemConfigurationController' => 'getSystemConfigurationControllerService.php',
            'App\\Controller\\TagController' => 'getTagController2Service.php',
            'App\\Controller\\TimesheetController' => 'getTimesheetController2Service.php',
            'App\\Controller\\TimesheetTeamController' => 'getTimesheetTeamControllerService.php',
            'App\\Controller\\UserController' => 'getUserController2Service.php',
            'KevinPapst\\AdminLTEBundle\\Controller\\BreadcrumbController' => 'getBreadcrumbControllerService.php',
            'KevinPapst\\AdminLTEBundle\\Controller\\EmitterController' => 'getEmitterControllerService.php',
            'KevinPapst\\AdminLTEBundle\\Controller\\NavbarController' => 'getNavbarControllerService.php',
            'KevinPapst\\AdminLTEBundle\\Controller\\SidebarController' => 'getSidebarControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.App\\Command\\ConvertTimezoneCommand' => 'getConvertTimezoneCommandService.php',
            'console.command.public_alias.App\\Command\\CreateReleaseCommand' => 'getCreateReleaseCommandService.php',
            'console.command.public_alias.App\\Command\\CreateUserCommand' => 'getCreateUserCommandService.php',
            'console.command.public_alias.App\\Command\\KimaiImporterCommand' => 'getKimaiImporterCommandService.php',
            'console.command.public_alias.App\\Command\\ResetCommand' => 'getResetCommandService.php',
            'console.command.public_alias.App\\Command\\VersionCommand' => 'getVersionCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command.public_alias.doctrine_migrations.diff_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DiffCommandService.php',
            'console.command.public_alias.doctrine_migrations.dump_schema_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_DumpSchemaCommandService.php',
            'console.command.public_alias.doctrine_migrations.execute_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_ExecuteCommandService.php',
            'console.command.public_alias.doctrine_migrations.generate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_GenerateCommandService.php',
            'console.command.public_alias.doctrine_migrations.latest_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_LatestCommandService.php',
            'console.command.public_alias.doctrine_migrations.migrate_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_MigrateCommandService.php',
            'console.command.public_alias.doctrine_migrations.rollup_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_RollupCommandService.php',
            'console.command.public_alias.doctrine_migrations.status_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_StatusCommandService.php',
            'console.command.public_alias.doctrine_migrations.up_to_date_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_UpToDateCommandService.php',
            'console.command.public_alias.doctrine_migrations.version_command' => 'getConsole_Command_PublicAlias_DoctrineMigrations_VersionCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService.php',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService.php',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService.php',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService.php',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService.php',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService.php',
            'fos_user.user_manager' => 'getFosUser_UserManagerService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'nelmio_api_doc.controller.swagger' => 'getNelmioApiDoc_Controller_SwaggerService.php',
            'nelmio_api_doc.controller.swagger_ui' => 'getNelmioApiDoc_Controller_SwaggerUiService.php',
            'nelmio_api_doc.generator.default' => 'getNelmioApiDoc_Generator_DefaultService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'serializer' => 'getSerializerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'nelmio_api_doc.generator' => 'nelmio_api_doc.generator.default',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[3].'/src/Configuration/LanguageFormattings.php';
            include_once $this->targetDirs[3].'/src/Configuration/SystemBundleConfiguration.php';
            include_once $this->targetDirs[3].'/src/Configuration/StringAccessibleConfigTrait.php';
            include_once $this->targetDirs[3].'/src/Configuration/ThemeConfiguration.php';
            include_once $this->targetDirs[3].'/src/Configuration/TimesheetConfiguration.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[3].'/src/EventSubscriber/RedirectToLocaleSubscriber.php';
            include_once $this->targetDirs[3].'/src/EventSubscriber/ThemeOptionsSubscriber.php';
            include_once $this->targetDirs[3].'/src/EventSubscriber/TimezoneSubscriber.php';
            include_once $this->targetDirs[3].'/src/EventSubscriber/UserProfileSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
            include_once $this->targetDirs[3].'/src/Security/CurrentUser.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once $this->targetDirs[3].'/src/Twig/DateExtensions.php';
            include_once $this->targetDirs[3].'/src/Twig/Extensions.php';
            include_once $this->targetDirs[3].'/src/Utils/LocaleSettings.php';
            include_once $this->targetDirs[3].'/src/Widget/WidgetService.php';
            include_once $this->targetDirs[3].'/src/Repository/WidgetRepository.php';
            include_once $this->targetDirs[3].'/src/Widget/WidgetInterface.php';
            include_once $this->targetDirs[3].'/src/Widget/WidgetContainerInterface.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/AbstractContainer.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/CompoundChart.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/CompoundRow.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/AbstractWidgetType.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/SimpleWidget.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/Counter.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/DailyWorkingTimeChart.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/More.php';
            include_once $this->targetDirs[3].'/src/Widget/Type/YearChart.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Cache/CacheTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceLocatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Packages.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PackageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Package.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/PathPackage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Validation.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/LocaleAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/Mapping/Cache/Psr6Cache.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/ProxyTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/PhpArrayTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Validator/Initializer.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/TranslatorListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Logger.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/RegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once $this->targetDirs[3].'/src/Doctrine/TimesheetSubscriber.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Doctrine/UserListener.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Request/RequestBodyParamConverter.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
            include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Environment.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Translation/TranslatorTrait.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once $this->targetDirs[3].'/vendor/twig/extensions/lib/Twig/Extensions/Extension/Intl.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/Extension/StringLoaderExtension.php';
            include_once $this->targetDirs[3].'/src/Twig/DatatableExtensions.php';
            include_once $this->targetDirs[3].'/src/Twig/EventExtensions.php';
            include_once $this->targetDirs[3].'/src/Twig/IconExtension.php';
            include_once $this->targetDirs[3].'/src/Twig/MarkdownExtension.php';
            include_once $this->targetDirs[3].'/src/Utils/Markdown.php';
            include_once $this->targetDirs[3].'/src/Twig/TitleExtension.php';
            include_once $this->targetDirs[3].'/src/Twig/WidgetExtension.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Twig/PagerfantaExtension.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewFactory.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/ViewInterface.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/DefaultView.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TranslatedView.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/DefaultTranslatedView.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrapView.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrap3View.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/TwitterBootstrap4View.php';
            include_once $this->targetDirs[3].'/vendor/pagerfanta/pagerfanta/src/Pagerfanta/View/SemanticUiView.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrapTranslatedView.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap4TranslatedView.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/TwitterBootstrap3TranslatedView.php';
            include_once $this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/View/SemanticUiTranslatedView.php';
            include_once $this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Twig/AdminExtension.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Twig/SerializerRuntimeExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/webpack-encore-bundle/src/Twig/EntryFilesTwigExtension.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once $this->targetDirs[3].'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationCheckerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AuthorizationChecker.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Token/Storage/TokenStorage.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationProviderManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/AuthenticationTrustResolver.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/EncoderFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Encoder/EncoderFactory.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManagerInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authorization/AccessDecisionManager.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchyInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Role/RoleHierarchy.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/FirewallMapInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Logout/LogoutUrlGenerator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/security/Http/RememberMe/ResponseListener.php';
            include_once $this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Helper/ContextHelper.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Type/ParserInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Type/Parser.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/MetadataFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/DriverInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Driver/LazyLoadingDriver.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Cache/CacheInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/metadata/src/Cache/FileCache.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdaterInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/PasswordUpdater.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalFieldsUpdater.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/CanonicalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/Canonicalizer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Request/ParamFetcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Util/ResolverTrait.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Request/ParamFetcher.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Request/ParamReaderInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Request/ParamReader.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/Serializer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Serializer/JMSSerializerAdapter.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/EventListener/BodyListener.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Decoder/ContainerDecoderProvider.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Normalizer/ArrayNormalizerInterface.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Normalizer/CamelKeysNormalizer.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/EventListener/FormatListener.php';
            include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/Negotiation/FormatNegotiator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-foundation/RequestMatcher.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/EventListener/ParamFetcherListener.php';
            include_once $this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle/EventListener/ZoneMatcherListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/ChoiceMessageFormatterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once $this->targetDirs[3].'/vendor/symfony/translation/IdentityTranslator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/symfony/contracts/Service/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/SerializerInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/ArrayTransformerInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Serializer.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Expression/CompilableExpressionEvaluatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Expression/ExpressionEvaluatorInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Expression/ExpressionEvaluator.php';
            include_once $this->targetDirs[3].'/vendor/symfony/expression-language/ExpressionFunctionProviderInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/ExpressionLanguage/BasicSerializerFunctionsProvider.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/EventDispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/EventDispatcher/EventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/EventDispatcher/LazyEventDispatcher.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Handler/HandlerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/jms/serializer/src/Handler/LazyHandlerRegistry.php';
            include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Doctrine\\SqliteSessionInitSubscriber' => ['privates', 'App\\Doctrine\\SqliteSessionInitSubscriber', 'getSqliteSessionInitSubscriberService.php', true],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ]));
        $a->addEventSubscriber(new \App\Doctrine\TimesheetSubscriber(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Timesheet\\Calculator\\DurationCalculator'] ?? $this->load('getDurationCalculatorService.php'));
            yield 1 => ($this->privates['App\\Timesheet\\Calculator\\RateCalculator'] ?? ($this->privates['App\\Timesheet\\Calculator\\RateCalculator'] = new \App\Timesheet\Calculator\RateCalculator([])));
        }, 2)));
        $a->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(($this->privates['fos_user.util.password_updater'] ?? $this->getFosUser_Util_PasswordUpdaterService()), ($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService())));
        $a->addEventListener([0 => 'postConnect'], 'App\\Doctrine\\SqliteSessionInitSubscriber');
        $a->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], new \Doctrine\DBAL\Configuration(), $a, []);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService()));
        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => ($this->targetDirs[3].'/src/Entity')]), 'App\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator([($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'], '.orm.xml')), 'FOS\\UserBundle\\Model');

        $a->setEntityNamespaces(['Kimai' => 'App\\Entity']);
        $a->setMetadataCacheImpl($b);
        $a->setQueryCacheImpl($b);
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService())));
        $a->setMetadataDriverImpl($c);
        $a->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [])));
        $a->addCustomStringFunction('concat_ws', 'DoctrineExtensions\\Query\\Sqlite\\ConcatWs');
        $a->addCustomStringFunction('greatest', 'DoctrineExtensions\\Query\\Sqlite\\Greatest');
        $a->addCustomStringFunction('ifelse', 'DoctrineExtensions\\Query\\Sqlite\\IfElse');
        $a->addCustomStringFunction('ifnull', 'DoctrineExtensions\\Query\\Sqlite\\IfNull');
        $a->addCustomStringFunction('least', 'DoctrineExtensions\\Query\\Sqlite\\Least');
        $a->addCustomStringFunction('random', 'DoctrineExtensions\\Query\\Sqlite\\Random');
        $a->addCustomStringFunction('replace', 'DoctrineExtensions\\Query\\Sqlite\\Replace');
        $a->addCustomNumericFunction('round', 'DoctrineExtensions\\Query\\Sqlite\\Round');
        $a->addCustomDatetimeFunction('date', 'DoctrineExtensions\\Query\\Sqlite\\Date');
        $a->addCustomDatetimeFunction('date_format', 'DoctrineExtensions\\Query\\Sqlite\\DateFormat');
        $a->addCustomDatetimeFunction('day', 'DoctrineExtensions\\Query\\Sqlite\\Day');
        $a->addCustomDatetimeFunction('dayname', 'DoctrineExtensions\\Query\\Sqlite\\DayName');
        $a->addCustomDatetimeFunction('hour', 'DoctrineExtensions\\Query\\Sqlite\\Hour');
        $a->addCustomDatetimeFunction('julianday', 'DoctrineExtensions\\Query\\Sqlite\\JulianDay');
        $a->addCustomDatetimeFunction('minute', 'DoctrineExtensions\\Query\\Sqlite\\Minute');
        $a->addCustomDatetimeFunction('second', 'DoctrineExtensions\\Query\\Sqlite\\Second');
        $a->addCustomDatetimeFunction('month', 'DoctrineExtensions\\Query\\Sqlite\\Month');
        $a->addCustomDatetimeFunction('strftime', 'DoctrineExtensions\\Query\\Sqlite\\StrfTime');
        $a->addCustomDatetimeFunction('week', 'DoctrineExtensions\\Query\\Sqlite\\Week');
        $a->addCustomDatetimeFunction('weekday', 'DoctrineExtensions\\Query\\Sqlite\\WeekDay');
        $a->addCustomDatetimeFunction('year', 'DoctrineExtensions\\Query\\Sqlite\\Year');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\EventDispatcher();

        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.format_listener'] ?? $this->getFosRest_FormatListenerService());
        }, 1 => 'onKernelRequest'], 34);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['fos_rest.param_fetcher_listener'] ?? $this->getFosRest_ParamFetcherListenerService());
        }, 1 => 'onKernelController'], 5);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.zone_matcher_listener'] ?? $this->getFosRest_ZoneMatcherListenerService());
        }, 1 => 'onKernelRequest'], 248);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('app.dashboard', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\DashboardSubscriber'] ?? $this->load('getDashboardSubscriberService.php'));
        }, 1 => 'onDashboardEvent'], 100);
        $instance->addListener('theme.sidebar_setup_menu', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\MenuBuilderSubscriber'] ?? $this->load('getMenuBuilderSubscriberService.php'));
        }, 1 => 'onSetupNavbar'], 100);
        $instance->addListener('app.main_menu_configure', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\MenuSubscriber'] ?? $this->load('getMenuSubscriberService.php'));
        }, 1 => 'onMainMenuConfigure'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\RedirectToLocaleSubscriber'] ?? $this->getRedirectToLocaleSubscriberService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('fos_user.registration.success', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\RegistrationSubscriber'] ?? $this->load('getRegistrationSubscriberService.php'));
        }, 1 => 'onRegistrationSuccess'], 200);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\ThemeOptionsSubscriber'] ?? $this->getThemeOptionsSubscriberService());
        }, 1 => 'setThemeOptions'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\TimezoneSubscriber'] ?? $this->getTimezoneSubscriberService());
        }, 1 => 'setTimezone'], 100);
        $instance->addListener('app.prepare_user', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\UserPreferenceSubscriber'] ?? $this->load('getUserPreferenceSubscriberService.php'));
        }, 1 => 'loadUserPreferences'], 200);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\UserProfileSubscriber'] ?? $this->getUserProfileSubscriberService());
        }, 1 => 'prepareUserProfile'], 200);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['translator_listener'] ?? $this->getTranslatorListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'onKernelException'], -2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load('getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['security.firewall'] ?? $this->getSecurity_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->load('getSwiftmailer_EmailSender_ListenerService.php'));
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_max_per_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidMaxPerPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] ?? ($this->privates['pagerfanta.convert_not_valid_current_page_to_not_found_listener'] = new \WhiteOctober\PagerfantaBundle\EventListener\ConvertNotValidCurrentPageToNotFoundListener()));
        }, 1 => 'onException'], 512);
        $instance->addListener('fos_user.security.implicit_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onImplicitLogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ($this->privates['fos_user.security.interactive_login_listener'] ?? $this->load('getFosUser_Security_InteractiveLoginListenerService.php'));
        }, 1 => 'onSecurityInteractiveLogin'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.registration.confirmed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.authentication'] ?? $this->load('getFosUser_Listener_AuthenticationService.php'));
        }, 1 => 'authenticate'], 0);
        $instance->addListener('fos_user.change_password.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.create.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.delete.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.group.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.profile.edit.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.registration.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.completed', [0 => function () {
            return ($this->privates['fos_user.listener.flash'] ?? $this->load('getFosUser_Listener_FlashService.php'));
        }, 1 => 'addSuccessFlash'], 0);
        $instance->addListener('fos_user.resetting.reset.initialize', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetInitialize'], 0);
        $instance->addListener('fos_user.resetting.reset.success', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetSuccess'], 0);
        $instance->addListener('fos_user.resetting.reset.request', [0 => function () {
            return ($this->privates['fos_user.listener.resetting'] ?? $this->load('getFosUser_Listener_ResettingService.php'));
        }, 1 => 'onResettingResetRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['fos_rest.exception_listener'] ?? $this->load('getFosRest_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -100);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['fos_rest.view_response_listener'] ?? $this->load('getFosRest_ViewResponseListenerService.php'));
        }, 1 => 'onKernelView'], 30);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? ($this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()));
            yield 1 => ($this->privates['argument_resolver.request'] ?? ($this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()));
            yield 2 => ($this->privates['argument_resolver.session'] ?? ($this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()));
            yield 3 => ($this->privates['security.user_value_resolver'] ?? $this->load('getSecurity_UserValueResolverService.php'));
            yield 4 => ($this->privates['argument_resolver.service'] ?? $this->load('getArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['argument_resolver.default'] ?? ($this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()));
            yield 6 => ($this->privates['argument_resolver.variadic'] ?? ($this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()));
        }, 7)));
    }

    /*
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        $a = ($this->privates['jms_serializer.metadata_factory'] ?? $this->getJmsSerializer_MetadataFactoryService());
        $b = ($this->services['fos_rest.serializer.jms_handler_registry'] ?? $this->load('getFosRest_Serializer_JmsHandlerRegistryService.php'));
        $c = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $c->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        $d = new \JMS\Serializer\Expression\ExpressionEvaluator($c, ['container' => $this]);

        $e = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($d);
        $f = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService.php', true],
        ]));
        $f->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy']]]);
        $g = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $g->setOptions(1088);
        $h = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
        $h->setOptions(0);

        return $this->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, ($this->privates['jms_serializer.unserialize_object_constructor'] ?? ($this->privates['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor())), $e, $f, $d), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $e, $f, $d)], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()], ['json' => $h, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($this->services['jms_serializer.serialization_context_factory'] ?? ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->services['jms_serializer.deserialization_context_factory'] ?? ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }

    /*
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /*
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcApp_KernelProdContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcApp_KernelProdContainerUrlMatcher', 'strict_requirements' => NULL, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['security.access.decision_manager'] ?? $this->getSecurity_Access_DecisionManagerService()), false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService.php', true],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService.php', true],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService.php', true],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService.php', true],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService.php', true],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService.php', true],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService.php', true],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService.php', true],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService.php', true],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService.php', true],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService.php', true],
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'en', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => ['af' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')], 'ar' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ar.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.ar.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 7 => ($this->targetDirs[3].'/translations/about.ar.xliff'), 8 => ($this->targetDirs[3].'/translations/exceptions.ar.xliff'), 9 => ($this->targetDirs[3].'/translations/flashmessages.ar.xliff'), 10 => ($this->targetDirs[3].'/translations/invoice-calculator.ar.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.ar.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-renderer.ar.xliff'), 13 => ($this->targetDirs[3].'/translations/messages.ar.xliff'), 14 => ($this->targetDirs[3].'/translations/pagerfanta.ar.xliff'), 15 => ($this->targetDirs[3].'/translations/validators.ar.xliff')], 'az' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.az.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.az.xliff')], 'be' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.be.xlf')], 'bg' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml')], 'ca' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ca.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml')], 'cs' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.cs.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.cs.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml')], 'cy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.da.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')], 'de' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.de.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.de.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 7 => ($this->targetDirs[3].'/translations/about.de.xliff'), 8 => ($this->targetDirs[3].'/translations/actions.de.xliff'), 9 => ($this->targetDirs[3].'/translations/daterangepicker.de.xliff'), 10 => ($this->targetDirs[3].'/translations/exceptions.de.xliff'), 11 => ($this->targetDirs[3].'/translations/flashmessages.de.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-calculator.de.xliff'), 13 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.de.xliff'), 14 => ($this->targetDirs[3].'/translations/invoice-renderer.de.xliff'), 15 => ($this->targetDirs[3].'/translations/messages.de.xliff'), 16 => ($this->targetDirs[3].'/translations/pagerfanta.de.xliff'), 17 => ($this->targetDirs[3].'/translations/plugins.de.xliff'), 18 => ($this->targetDirs[3].'/translations/system-configuration.de.xliff'), 19 => ($this->targetDirs[3].'/translations/tags.de.xliff'), 20 => ($this->targetDirs[3].'/translations/validators.de.xliff')], 'el' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')], 'en' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.en.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.en.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 7 => ($this->targetDirs[3].'/translations/about.en.xliff'), 8 => ($this->targetDirs[3].'/translations/actions.en.xliff'), 9 => ($this->targetDirs[3].'/translations/daterangepicker.en.xliff'), 10 => ($this->targetDirs[3].'/translations/exceptions.en.xliff'), 11 => ($this->targetDirs[3].'/translations/flashmessages.en.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-calculator.en.xliff'), 13 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.en.xliff'), 14 => ($this->targetDirs[3].'/translations/invoice-renderer.en.xliff'), 15 => ($this->targetDirs[3].'/translations/messages.en.xliff'), 16 => ($this->targetDirs[3].'/translations/pagerfanta.en.xliff'), 17 => ($this->targetDirs[3].'/translations/plugins.en.xliff'), 18 => ($this->targetDirs[3].'/translations/system-configuration.en.xliff'), 19 => ($this->targetDirs[3].'/translations/tags.en.xliff'), 20 => ($this->targetDirs[3].'/translations/validators.en.xliff')], 'es' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.es.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.es.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 7 => ($this->targetDirs[3].'/translations/about.es.xliff'), 8 => ($this->targetDirs[3].'/translations/actions.es.xliff'), 9 => ($this->targetDirs[3].'/translations/daterangepicker.es.xliff'), 10 => ($this->targetDirs[3].'/translations/exceptions.es.xliff'), 11 => ($this->targetDirs[3].'/translations/flashmessages.es.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-calculator.es.xliff'), 13 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.es.xliff'), 14 => ($this->targetDirs[3].'/translations/invoice-renderer.es.xliff'), 15 => ($this->targetDirs[3].'/translations/messages.es.xliff'), 16 => ($this->targetDirs[3].'/translations/pagerfanta.es.xliff'), 17 => ($this->targetDirs[3].'/translations/plugins.es.xliff'), 18 => ($this->targetDirs[3].'/translations/system-configuration.es.xliff'), 19 => ($this->targetDirs[3].'/translations/tags.es.xliff'), 20 => ($this->targetDirs[3].'/translations/validators.es.xliff')], 'et' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')], 'eu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.eu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')], 'fa' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fa.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml')], 'fi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fi.xliff'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')], 'fr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.fr.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 6 => ($this->targetDirs[3].'/translations/about.fr.xliff'), 7 => ($this->targetDirs[3].'/translations/actions.fr.xliff'), 8 => ($this->targetDirs[3].'/translations/daterangepicker.fr.xliff'), 9 => ($this->targetDirs[3].'/translations/exceptions.fr.xliff'), 10 => ($this->targetDirs[3].'/translations/flashmessages.fr.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-calculator.fr.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.fr.xliff'), 13 => ($this->targetDirs[3].'/translations/invoice-renderer.fr.xliff'), 14 => ($this->targetDirs[3].'/translations/messages.fr.xliff'), 15 => ($this->targetDirs[3].'/translations/pagerfanta.fr.xliff'), 16 => ($this->targetDirs[3].'/translations/plugins.fr.xliff'), 17 => ($this->targetDirs[3].'/translations/system-configuration.fr.xliff'), 18 => ($this->targetDirs[3].'/translations/tags.fr.xliff'), 19 => ($this->targetDirs[3].'/translations/validators.fr.xliff')], 'gl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.gl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.gl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.gl.yml')], 'he' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')], 'hr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.hr.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')], 'hu' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml'), 5 => ($this->targetDirs[3].'/translations/about.hu.xliff'), 6 => ($this->targetDirs[3].'/translations/actions.hu.xliff'), 7 => ($this->targetDirs[3].'/translations/daterangepicker.hu.xliff'), 8 => ($this->targetDirs[3].'/translations/exceptions.hu.xliff'), 9 => ($this->targetDirs[3].'/translations/flashmessages.hu.xliff'), 10 => ($this->targetDirs[3].'/translations/invoice-calculator.hu.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.hu.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-renderer.hu.xliff'), 13 => ($this->targetDirs[3].'/translations/messages.hu.xliff'), 14 => ($this->targetDirs[3].'/translations/pagerfanta.hu.xliff'), 15 => ($this->targetDirs[3].'/translations/plugins.hu.xliff'), 16 => ($this->targetDirs[3].'/translations/system-configuration.hu.xliff'), 17 => ($this->targetDirs[3].'/translations/tags.hu.xliff'), 18 => ($this->targetDirs[3].'/translations/validators.hu.xliff')], 'hy' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')], 'it' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.it.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.it.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 7 => ($this->targetDirs[3].'/translations/about.it.xliff'), 8 => ($this->targetDirs[3].'/translations/exceptions.it.xliff'), 9 => ($this->targetDirs[3].'/translations/flashmessages.it.xliff'), 10 => ($this->targetDirs[3].'/translations/invoice-calculator.it.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.it.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-renderer.it.xliff'), 13 => ($this->targetDirs[3].'/translations/messages.it.xliff'), 14 => ($this->targetDirs[3].'/translations/pagerfanta.it.xliff'), 15 => ($this->targetDirs[3].'/translations/validators.it.xliff')], 'ja' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.ja.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 6 => ($this->targetDirs[3].'/translations/about.ja.xliff'), 7 => ($this->targetDirs[3].'/translations/daterangepicker.ja.xliff'), 8 => ($this->targetDirs[3].'/translations/exceptions.ja.xliff'), 9 => ($this->targetDirs[3].'/translations/flashmessages.ja.xliff'), 10 => ($this->targetDirs[3].'/translations/invoice-calculator.ja.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.ja.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-renderer.ja.xliff'), 13 => ($this->targetDirs[3].'/translations/messages.ja.xliff'), 14 => ($this->targetDirs[3].'/translations/pagerfanta.ja.xliff'), 15 => ($this->targetDirs[3].'/translations/plugins.ja.xliff'), 16 => ($this->targetDirs[3].'/translations/system-configuration.ja.xliff'), 17 => ($this->targetDirs[3].'/translations/tags.ja.xliff'), 18 => ($this->targetDirs[3].'/translations/validators.ja.xliff')], 'lb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')], 'lt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')], 'lv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')], 'mn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')], 'nl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.nl.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.nl.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml')], 'nn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.no.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.no.xliff')], 'pl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml')], 'pt' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.pt.xliff'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')], 'pt_BR' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.pt_BR.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml'), 6 => ($this->targetDirs[3].'/translations/about.pt_BR.xliff'), 7 => ($this->targetDirs[3].'/translations/exceptions.pt_BR.xliff'), 8 => ($this->targetDirs[3].'/translations/flashmessages.pt_BR.xliff'), 9 => ($this->targetDirs[3].'/translations/invoice-calculator.pt_BR.xliff'), 10 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.pt_BR.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-renderer.pt_BR.xliff'), 12 => ($this->targetDirs[3].'/translations/messages.pt_BR.xliff'), 13 => ($this->targetDirs[3].'/translations/pagerfanta.pt_BR.xliff'), 14 => ($this->targetDirs[3].'/translations/validators.pt_BR.xliff')], 'ro' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ro.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml')], 'ru' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.ru.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.ru.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml'), 7 => ($this->targetDirs[3].'/translations/about.ru.xliff'), 8 => ($this->targetDirs[3].'/translations/exceptions.ru.xliff'), 9 => ($this->targetDirs[3].'/translations/flashmessages.ru.xliff'), 10 => ($this->targetDirs[3].'/translations/invoice-calculator.ru.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.ru.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-renderer.ru.xliff'), 13 => ($this->targetDirs[3].'/translations/messages.ru.xliff'), 14 => ($this->targetDirs[3].'/translations/pagerfanta.ru.xliff'), 15 => ($this->targetDirs[3].'/translations/validators.ru.xliff')], 'sk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sk.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml')], 'sl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sl.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml')], 'sq' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Cyrl.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Cyrl.xliff')], 'sr_Latn' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sr_Latn.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')], 'sv' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sv.xliff'), 4 => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/translations/AdminLTEBundle.sv.xliff'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 6 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml'), 7 => ($this->targetDirs[3].'/translations/about.sv.xliff'), 8 => ($this->targetDirs[3].'/translations/daterangepicker.sv.xliff'), 9 => ($this->targetDirs[3].'/translations/exceptions.sv.xliff'), 10 => ($this->targetDirs[3].'/translations/flashmessages.sv.xliff'), 11 => ($this->targetDirs[3].'/translations/invoice-calculator.sv.xliff'), 12 => ($this->targetDirs[3].'/translations/invoice-numbergenerator.sv.xliff'), 13 => ($this->targetDirs[3].'/translations/invoice-renderer.sv.xliff'), 14 => ($this->targetDirs[3].'/translations/messages.sv.xliff'), 15 => ($this->targetDirs[3].'/translations/pagerfanta.sv.xliff'), 16 => ($this->targetDirs[3].'/translations/plugins.sv.xliff'), 17 => ($this->targetDirs[3].'/translations/system-configuration.sv.xliff'), 18 => ($this->targetDirs[3].'/translations/validators.sv.xliff')], 'th' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.th.xliff'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')], 'tl' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.tr.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.tr.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')], 'uk' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.uk.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.uk.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml')], 'vi' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.vi.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')], 'zh_CN' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.zh_CN.xliff'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 5 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml')], 'zh_TW' => [0 => ($this->targetDirs[3].'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[3].'/vendor/symfony/security/Core/Resources/translations/security.pt_PT.xlf')], 'oc' => [0 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.oc.xliff')], 'sw' => [0 => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle/Resources/translations/pagerfanta.sw.xliff')], 'bn' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn.yml')], 'bn_BD' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bn_BD.yml')], 'eo' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')], 'ky' => [0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')]]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
        $instance->setFallbackLocales([0 => 'en']);

        return $instance;
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader([], $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/views'), 'AdminLTE');
        $a->addPath(($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle/Resources/views'), '!AdminLTE');
        $a->addPath(($this->targetDirs[3].'/templates/bundles/FOSUserBundle'), 'FOSUser');
        $a->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $a->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '!FOSUser');
        $a->addPath(($this->targetDirs[3].'/templates/bundles/NelmioApiDocBundle'), 'NelmioApiDoc');
        $a->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Resources/views'), 'NelmioApiDoc');
        $a->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Resources/views'), '!NelmioApiDoc');
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'/vendor/symfony/twig-bridge/Resources/views/Form'));
        $a->addPath(($this->targetDirs[3].'/templates/invoice/renderer/'), 'invoice');

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['form_themes' => $this->parameters['twig.form.resources'], 'debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception::showAction', 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'paths' => [], 'date' => ['format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL], 'number_format' => ['decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',']]);

        $b = ($this->services['translator'] ?? $this->getTranslatorService());
        $c = ($this->services['router'] ?? $this->getRouterService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = new \Pagerfanta\View\ViewFactory();

        $f = new \Pagerfanta\View\DefaultView();
        $g = new \Pagerfanta\View\TwitterBootstrapView();
        $h = new \Pagerfanta\View\TwitterBootstrap3View();
        $i = new \Pagerfanta\View\TwitterBootstrap4View();
        $j = new \Pagerfanta\View\SemanticUiView();

        $e->add(['default' => $f, 'default_translated' => new \WhiteOctober\PagerfantaBundle\View\DefaultTranslatedView($f, $b), 'twitter_bootstrap' => $g, 'twitter_bootstrap3' => $h, 'twitter_bootstrap4' => $i, 'semantic_ui' => $j, 'twitter_bootstrap4_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap4TranslatedView($i, $b), 'twitter_bootstrap3_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrap3TranslatedView($h, $b), 'twitter_bootstrap_translated' => new \WhiteOctober\PagerfantaBundle\View\TwitterBootstrapTranslatedView($g, $b), 'semantic_ui_translated' => new \WhiteOctober\PagerfantaBundle\View\SemanticUiTranslatedView($j, $b)]);
        $k = ($this->privates['admin_lte_theme.context_helper'] ?? $this->getAdminLteTheme_ContextHelperService());
        $l = new \Symfony\Bridge\Twig\AppVariable();
        $l->setEnvironment('prod');
        $l->setDebug(false);
        if ($this->has('security.token_storage')) {
            $l->setTokenStorage(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
        }
        if ($this->has('request_stack')) {
            $l->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Twig\Extensions\IntlExtension());
        $instance->addExtension(new \Twig\Extension\StringLoaderExtension());
        $instance->addExtension(new \App\Twig\DatatableExtensions($d));
        $instance->addExtension(($this->privates['App\\Twig\\DateExtensions'] ?? $this->getDateExtensionsService()));
        $instance->addExtension(new \App\Twig\EventExtensions(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['App\\Security\\CurrentUser'] ?? $this->getCurrentUserService())));
        $instance->addExtension(($this->privates['App\\Twig\\Extensions'] ?? $this->getExtensionsService()));
        $instance->addExtension(new \App\Twig\IconExtension());
        $instance->addExtension(new \App\Twig\MarkdownExtension(new \App\Utils\Markdown(), ($this->privates['App\\Configuration\\TimesheetConfiguration'] ?? $this->getTimesheetConfigurationService())));
        $instance->addExtension(new \App\Twig\TitleExtension($b, ($this->privates['App\\Configuration\\ThemeConfiguration'] ?? $this->getThemeConfigurationService())));
        $instance->addExtension(new \App\Twig\WidgetExtension(($this->privates['App\\Widget\\WidgetService'] ?? $this->getWidgetServiceService())));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension('default', $e, $c, $d));
        $instance->addExtension(new \KevinPapst\AdminLTEBundle\Twig\AdminExtension($k, $this->parameters['admin_lte_theme.routes']));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerRuntimeExtension());
        $instance->addExtension(new \Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'webpack_encore.entrypoint_lookup_collection' => ['privates', 'webpack_encore.entrypoint_lookup_collection', 'getWebpackEncore_EntrypointLookupCollectionService.php', true],
            'webpack_encore.tag_renderer' => ['privates', 'webpack_encore.tag_renderer', 'getWebpackEncore_TagRendererService.php', true],
        ])));
        $instance->addGlobal('app', $l);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ])));
        $instance->addGlobal('admin_lte_context', $k);
        $instance->addGlobal('kimai_context', $this->parameters['kimai.theme']);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator();
    }

    /*
     * Gets the private 'App\Configuration\LanguageFormattings' shared autowired service.
     *
     * @return \App\Configuration\LanguageFormattings
     */
    protected function getLanguageFormattingsService()
    {
        return $this->privates['App\\Configuration\\LanguageFormattings'] = new \App\Configuration\LanguageFormattings($this->parameters['kimai.languages']);
    }

    /*
     * Gets the private 'App\Configuration\ThemeConfiguration' shared autowired service.
     *
     * @return \App\Configuration\ThemeConfiguration
     */
    protected function getThemeConfigurationService()
    {
        return $this->privates['App\\Configuration\\ThemeConfiguration'] = new \App\Configuration\ThemeConfiguration(($this->privates['App\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), $this->parameters['kimai.theme']);
    }

    /*
     * Gets the private 'App\Configuration\TimesheetConfiguration' shared autowired service.
     *
     * @return \App\Configuration\TimesheetConfiguration
     */
    protected function getTimesheetConfigurationService()
    {
        return $this->privates['App\\Configuration\\TimesheetConfiguration'] = new \App\Configuration\TimesheetConfiguration(($this->privates['App\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), $this->parameters['kimai.timesheet']);
    }

    /*
     * Gets the private 'App\EventSubscriber\RedirectToLocaleSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\RedirectToLocaleSubscriber
     */
    protected function getRedirectToLocaleSubscriberService()
    {
        return $this->privates['App\\EventSubscriber\\RedirectToLocaleSubscriber'] = new \App\EventSubscriber\RedirectToLocaleSubscriber(($this->services['router'] ?? $this->getRouterService()), 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja', 'en');
    }

    /*
     * Gets the private 'App\EventSubscriber\ThemeOptionsSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ThemeOptionsSubscriber
     */
    protected function getThemeOptionsSubscriberService()
    {
        return $this->privates['App\\EventSubscriber\\ThemeOptionsSubscriber'] = new \App\EventSubscriber\ThemeOptionsSubscriber(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['admin_lte_theme.context_helper'] ?? $this->getAdminLteTheme_ContextHelperService()));
    }

    /*
     * Gets the private 'App\EventSubscriber\TimezoneSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\TimezoneSubscriber
     */
    protected function getTimezoneSubscriberService()
    {
        return $this->privates['App\\EventSubscriber\\TimezoneSubscriber'] = new \App\EventSubscriber\TimezoneSubscriber(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /*
     * Gets the private 'App\EventSubscriber\UserProfileSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\UserProfileSubscriber
     */
    protected function getUserProfileSubscriberService()
    {
        return $this->privates['App\\EventSubscriber\\UserProfileSubscriber'] = new \App\EventSubscriber\UserProfileSubscriber(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));
    }

    /*
     * Gets the private 'App\Repository\ConfigurationRepository' shared autowired service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->privates['App\\Repository\\ConfigurationRepository'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('App\\Entity\\Configuration');
    }

    /*
     * Gets the private 'App\Repository\TimesheetRepository' shared autowired service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    protected function getTimesheetRepositoryService()
    {
        return $this->privates['App\\Repository\\TimesheetRepository'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('App\\Entity\\Timesheet');
    }

    /*
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \Doctrine\ORM\EntityRepository
     */
    protected function getUserRepositoryService()
    {
        return $this->privates['App\\Repository\\UserRepository'] = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())->getRepository('App\\Entity\\User');
    }

    /*
     * Gets the private 'App\Security\CurrentUser' shared autowired service.
     *
     * @return \App\Security\CurrentUser
     */
    protected function getCurrentUserService()
    {
        return $this->privates['App\\Security\\CurrentUser'] = new \App\Security\CurrentUser(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /*
     * Gets the private 'App\Twig\DateExtensions' shared autowired service.
     *
     * @return \App\Twig\DateExtensions
     */
    protected function getDateExtensionsService()
    {
        return $this->privates['App\\Twig\\DateExtensions'] = new \App\Twig\DateExtensions(($this->privates['App\\Utils\\LocaleSettings'] ?? $this->getLocaleSettingsService()));
    }

    /*
     * Gets the private 'App\Twig\Extensions' shared autowired service.
     *
     * @return \App\Twig\Extensions
     */
    protected function getExtensionsService()
    {
        return $this->privates['App\\Twig\\Extensions'] = new \App\Twig\Extensions(($this->privates['App\\Utils\\LocaleSettings'] ?? $this->getLocaleSettingsService()));
    }

    /*
     * Gets the private 'App\Utils\LocaleSettings' shared autowired service.
     *
     * @return \App\Utils\LocaleSettings
     */
    protected function getLocaleSettingsService()
    {
        return $this->privates['App\\Utils\\LocaleSettings'] = new \App\Utils\LocaleSettings(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['App\\Configuration\\LanguageFormattings'] ?? $this->getLanguageFormattingsService()));
    }

    /*
     * Gets the private 'App\Widget\WidgetService' shared autowired service.
     *
     * @return \App\Widget\WidgetService
     */
    protected function getWidgetServiceService()
    {
        $a = ($this->privates['App\\Repository\\TimesheetRepository'] ?? $this->getTimesheetRepositoryService());
        $b = ($this->privates['App\\Security\\CurrentUser'] ?? $this->getCurrentUserService());

        $c = new \App\Repository\WidgetRepository($a, $b, []);
        $c->registerWidget(new \App\Widget\Type\CompoundChart());
        $c->registerWidget(new \App\Widget\Type\CompoundRow());
        $c->registerWidget(new \App\Widget\Type\Counter());
        $c->registerWidget(new \App\Widget\Type\DailyWorkingTimeChart($a, $b));
        $c->registerWidget(new \App\Widget\Type\More());
        $c->registerWidget(new \App\Widget\Type\SimpleWidget());
        $c->registerWidget(new \App\Widget\Type\YearChart());

        return $this->privates['App\\Widget\\WidgetService'] = new \App\Widget\WidgetService($c, new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Widget\\Renderer\\CompoundChartRenderer'] ?? $this->load('getCompoundChartRendererService.php'));
            yield 1 => ($this->privates['App\\Widget\\Renderer\\CompoundRowRenderer'] ?? $this->load('getCompoundRowRendererService.php'));
            yield 2 => ($this->privates['App\\Widget\\Renderer\\SimpleWidgetRenderer'] ?? $this->load('getSimpleWidgetRendererService.php'));
        }, 3));
    }

    /*
     * Gets the private 'admin_lte_theme.context_helper' shared service.
     *
     * @return \KevinPapst\AdminLTEBundle\Helper\ContextHelper
     */
    protected function getAdminLteTheme_ContextHelperService()
    {
        return $this->privates['admin_lte_theme.context_helper'] = new \KevinPapst\AdminLTEBundle\Helper\ContextHelper($this->parameters['admin_lte_theme.options']);
    }

    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy(($this->targetDirs[3].'/public/build/manifest.json')), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /*
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Rl6u5JYIP4', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, 0, false, ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), false, 'UTF-8');
    }

    /*
     * Gets the private 'doctrine.result_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getDoctrine_ResultCachePoolService()
    {
        $this->privates['doctrine.result_cache_pool'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('jiZdpzPM3t', 0, ($this->targetDirs[0].'/pools'), ($this->privates['cache.default_marshaller'] ?? ($this->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL))));

        $instance->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $instance;
    }

    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getDoctrine_SystemCachePoolService()
    {
        return $this->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('21yDzhZ-QU', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));
    }

    /*
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'fos_rest.decoder.json' => ['privates', 'fos_rest.decoder.json', 'getFosRest_Decoder_JsonService.php', true],
            'fos_rest.decoder.xml' => ['privates', 'fos_rest.decoder.xml', 'getFosRest_Decoder_XmlService.php', true],
        ]), ['json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml']), false, new \FOS\RestBundle\Normalizer\CamelKeysNormalizer(), true);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /*
     * Gets the private 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        $a = new \FOS\RestBundle\Negotiation\FormatNegotiator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        $a->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api', NULL, NULL, NULL, []), ['prefer_extension' => '2.0', 'fallback_format' => 'json', 'priorities' => [0 => 'json', 1 => 'xml'], 'methods' => NULL, 'attributes' => [], 'stop' => false]);

        return $this->privates['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($a);
    }

    /*
     * Gets the private 'fos_rest.param_fetcher_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ParamFetcherListener
     */
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->privates['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener(($this->privates['fos_rest.request.param_fetcher'] ?? $this->getFosRest_Request_ParamFetcherService()), false);
    }

    /*
     * Gets the private 'fos_rest.request.param_fetcher' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->privates['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, ($this->privates['fos_rest.request.param_fetcher.reader'] ?? $this->getFosRest_Request_ParamFetcher_ReaderService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['validator'] ?? $this->getValidatorService()));
    }

    /*
     * Gets the private 'fos_rest.request.param_fetcher.reader' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamReader
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->privates['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'fos_rest.serializer.jms' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter
     */
    protected function getFosRest_Serializer_JmsService($lazyLoad = true)
    {
        return $this->privates['fos_rest.serializer.jms'] = new \FOS\RestBundle\Serializer\JMSSerializerAdapter(($this->services['jms_serializer'] ?? $this->getJmsSerializerService()), ($this->services['jms_serializer.serialization_context_factory'] ?? ($this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($this->services['jms_serializer.deserialization_context_factory'] ?? ($this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())));
    }

    /*
     * Gets the private 'fos_rest.serializer.jms_handler_registry.inner' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getFosRest_Serializer_JmsHandlerRegistry_InnerService()
    {
        return $this->privates['fos_rest.serializer.jms_handler_registry.inner'] = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'fos_rest.serializer.exception_normalizer.jms' => ['privates', 'fos_rest.serializer.exception_normalizer.jms', 'getFosRest_Serializer_ExceptionNormalizer_JmsService.php', true],
            'fos_rest.serializer.form_error_handler' => ['privates', 'fos_rest.serializer.form_error_handler', 'getFosRest_Serializer_FormErrorHandlerService.php', true],
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService.php', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService.php', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService.php', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService.php', true],
        ]), [1 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Exception' => ['json' => [0 => 'fos_rest.serializer.exception_normalizer.jms', 1 => 'serializeToJson'], 'xml' => [0 => 'fos_rest.serializer.exception_normalizer.jms', 1 => 'serializeToXml']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorTojson']]], 2 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']]]]);
    }

    /*
     * Gets the private 'fos_rest.zone_matcher_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ZoneMatcherListener
     */
    protected function getFosRest_ZoneMatcherListenerService()
    {
        $this->privates['fos_rest.zone_matcher_listener'] = $instance = new \FOS\RestBundle\EventListener\ZoneMatcherListener();

        $instance->addRequestMatcher(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/*'));

        return $instance;
    }

    /*
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = new \FOS\UserBundle\Util\Canonicalizer();

        return $this->privates['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /*
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->privates['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /*
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /*
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /*
     * Gets the private 'jms_serializer.metadata_factory' shared service.
     *
     * @return \Metadata\MetadataFactory
     */
    protected function getJmsSerializer_MetadataFactoryService()
    {
        $this->privates['jms_serializer.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);

        $instance->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_serializer')));

        return $instance;
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $a = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/prod.log'), 100, true, NULL, false);
        $a->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $this->privates['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($a, new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), [0 => '^/'], 400), 0, true, true, NULL);
    }

    /*
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

        return $instance;
    }

    /*
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->parameters['nelmio_cors.defaults'])]));
    }

    /*
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? ($this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->privates['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.access.authenticated_voter'] ?? $this->load('getSecurity_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['security.access.role_hierarchy_voter'] ?? $this->load('getSecurity_Access_RoleHierarchyVoterService.php'));
            yield 2 => ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php'));
            yield 3 => ($this->privates['App\\Voter\\ActivityVoter'] ?? $this->load('getActivityVoterService.php'));
            yield 4 => ($this->privates['App\\Voter\\CustomerVoter'] ?? $this->load('getCustomerVoterService.php'));
            yield 5 => ($this->privates['App\\Voter\\InvoiceTemplateVoter'] ?? $this->load('getInvoiceTemplateVoterService.php'));
            yield 6 => ($this->privates['App\\Voter\\ProjectVoter'] ?? $this->load('getProjectVoterService.php'));
            yield 7 => ($this->privates['App\\Voter\\RolePermissionVoter'] ?? $this->load('getRolePermissionVoterService.php'));
            yield 8 => ($this->privates['App\\Voter\\TimesheetVoter'] ?? $this->load('getTimesheetVoterService.php'));
            yield 9 => ($this->privates['App\\Voter\\UserVoter'] ?? $this->load('getUserVoterService.php'));
        }, 10), 'unanimous', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.secured_area'] ?? $this->load('getSecurity_Authentication_Provider_Guard_SecuredAreaService.php'));
            yield 1 => ($this->privates['security.authentication.provider.dao.secured_area'] ?? $this->load('getSecurity_Authentication_Provider_Dao_SecuredAreaService.php'));
            yield 2 => ($this->privates['security.authentication.provider.rememberme.secured_area'] ?? $this->load('getSecurity_Authentication_Provider_Rememberme_SecuredAreaService.php'));
            yield 3 => ($this->privates['security.authentication.provider.anonymous.secured_area'] ?? ($this->privates['security.authentication.provider.anonymous.secured_area'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 4), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /*
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => [0 => 13]]]);
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->privates['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.secured_area' => ['privates', 'security.firewall.map.context.secured_area', 'getSecurity_Firewall_Map_Context_SecuredAreaService.php', true],
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.secured_area' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 2)), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())));

        $instance->registerListener('secured_area', 'fos_user_security_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');
        $a->add(new \FOS\RestBundle\Request\RequestBodyParamConverter(($this->privates['fos_rest.serializer.jms'] ?? $this->getFosRest_Serializer_JmsService()), [], '', NULL, 'validationErrors'), -50, 'fos_rest.request_body');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'session' => ['services', 'session', 'getSessionService.php', true],
        ]));
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->privates['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /*
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'App\\Validator\\Constraints\\DurationValidator' => ['privates', 'App\\Validator\\Constraints\\DurationValidator', 'getDurationValidatorService.php', true],
            'App\\Validator\\Constraints\\RoleValidator' => ['privates', 'App\\Validator\\Constraints\\RoleValidator', 'getRoleValidatorService.php', true],
            'App\\Validator\\Constraints\\TimesheetValidator' => ['privates', 'App\\Validator\\Constraints\\TimesheetValidator', 'getTimesheetValidatorService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ])));
        $instance->setTranslator(new \Symfony\Component\Validator\Util\LegacyTranslatorProxy(($this->services['translator'] ?? $this->getTranslatorService())));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => ($this->targetDirs[3].'/vendor/symfony/form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')]);
        $instance->addYamlMappings([0 => ($this->targetDirs[3].'/config/validator/validation.yaml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/validation.php'), ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()))));
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService())), 1 => new \FOS\UserBundle\Validator\Initializer(($this->privates['fos_user.util.canonical_fields_updater'] ?? $this->getFosUser_Util_CanonicalFieldsUpdaterService()))]);
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'fos_user.registration.confirmation.from_email' => false,
        'fos_user.resetting.email.from_email' => false,
        'kimai.data_dir' => false,
        'kimai.plugin_dir' => false,
        'kimai.config' => false,
    ];
    private $dynamicParameters = [];

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/log'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'DoctrineCacheBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'MonologBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'TwigBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'SecurityBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'WhiteOctoberPagerfantaBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/white-october/pagerfanta-bundle'),
                    'namespace' => 'WhiteOctober\\PagerfantaBundle',
                ],
                'AdminLTEBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/kevinpapst/adminlte-bundle'),
                    'namespace' => 'KevinPapst\\AdminLTEBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'FOSUserBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ],
                'FOSRestBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ],
                'NelmioApiDocBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'WebpackEncoreBundle' => [
                    'path' => ($this->targetDirs[3].'/vendor/symfony/webpack-encore-bundle/src'),
                    'namespace' => 'Symfony\\WebpackEncoreBundle',
                ],
            ]; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/prod'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'fos_user.registration.confirmation.from_email': $value = [
                $this->getEnv('MAILER_FROM') => 'Kimai 2',
            ]; break;
            case 'fos_user.resetting.email.from_email': $value = [
                $this->getEnv('MAILER_FROM') => 'Kimai 2',
            ]; break;
            case 'kimai.data_dir': $value = ($this->targetDirs[2].'/data'); break;
            case 'kimai.plugin_dir': $value = ($this->targetDirs[2].'/plugins'); break;
            case 'kimai.config': $value = [
                'timesheet' => [
                    'markdown_content' => false,
                    'rounding' => [
                        'default' => [
                            'days' => [
                                0 => 'monday',
                                1 => 'tuesday',
                                2 => 'wednesday',
                                3 => 'thursday',
                                4 => 'friday',
                                5 => 'saturday',
                                6 => 'sunday',
                            ],
                            'begin' => 1,
                            'end' => 1,
                            'duration' => 0,
                            'mode' => 'default',
                        ],
                    ],
                    'default_begin' => 'now',
                    'mode' => 'default',
                    'rates' => [

                    ],
                    'active_entries' => [
                        'soft_limit' => 1,
                        'hard_limit' => 1,
                    ],
                    'rules' => [
                        'allow_future_times' => true,
                    ],
                ],
                'permissions' => [
                    'sets' => [
                        'ACTIVITIES' => [
                            0 => 'view_activity',
                            1 => 'create_activity',
                            2 => 'edit_activity',
                            3 => 'budget_activity',
                            4 => 'delete_activity',
                        ],
                        'PROJECTS' => [
                            0 => 'view_project',
                            1 => 'create_project',
                            2 => 'edit_project',
                            3 => 'budget_project',
                            4 => 'delete_project',
                        ],
                        'CUSTOMERS' => [
                            0 => 'view_customer',
                            1 => 'create_customer',
                            2 => 'edit_customer',
                            3 => 'budget_customer',
                            4 => 'delete_customer',
                        ],
                        'INVOICE' => [
                            0 => 'view_invoice',
                            1 => 'create_invoice',
                        ],
                        'INVOICE_TEMPLATE' => [
                            0 => 'view_invoice_template',
                            1 => 'create_invoice_template',
                            2 => 'edit_invoice_template',
                            3 => 'delete_invoice_template',
                        ],
                        'TIMESHEET' => [
                            0 => 'view_own_timesheet',
                            1 => 'start_own_timesheet',
                            2 => 'stop_own_timesheet',
                            3 => 'create_own_timesheet',
                            4 => 'edit_own_timesheet',
                            5 => 'export_own_timesheet',
                            6 => 'delete_own_timesheet',
                        ],
                        'TIMESHEET_OTHER' => [
                            0 => 'view_other_timesheet',
                            1 => 'start_other_timesheet',
                            2 => 'stop_other_timesheet',
                            3 => 'create_other_timesheet',
                            4 => 'edit_other_timesheet',
                            5 => 'export_other_timesheet',
                            6 => 'delete_other_timesheet',
                        ],
                        'PROFILE' => [
                            0 => 'view_own_profile',
                            1 => 'edit_own_profile',
                            2 => 'password_own_profile',
                            3 => 'preferences_own_profile',
                            4 => 'api-token_own_profile',
                        ],
                        'PROFILE_OTHER' => [
                            0 => 'view_other_profile',
                            1 => 'edit_other_profile',
                            2 => 'delete_other_profile',
                            3 => 'password_other_profile',
                            4 => 'roles_other_profile',
                            5 => 'preferences_other_profile',
                            6 => 'api-token_other_profile',
                        ],
                        'TAGS' => [
                            0 => 'view_tag',
                            1 => 'delete_tag',
                        ],
                        'USER' => [
                            0 => 'view_user',
                            1 => 'create_user',
                            2 => 'delete_user',
                            3 => 'role_permissions',
                        ],
                        'RATE' => [
                            0 => 'view_rate_own_timesheet',
                            1 => 'edit_rate_own_timesheet',
                        ],
                        'RATE_OTHER' => [
                            0 => 'view_rate_other_timesheet',
                            1 => 'edit_rate_other_timesheet',
                        ],
                        'EXPORT' => [
                            0 => 'view_export',
                            1 => 'create_export',
                            2 => 'edit_export_own_timesheet',
                            3 => 'edit_export_other_timesheet',
                        ],
                        'ROLE_USER' => [
                            0 => '@TIMESHEET',
                            1 => '@PROFILE',
                        ],
                        'ROLE_TEAMLEAD' => [
                            0 => '@INVOICE',
                            1 => '@TIMESHEET',
                            2 => '@TIMESHEET_OTHER',
                            3 => '@PROFILE',
                            4 => '@EXPORT',
                            5 => '@TAGS',
                            6 => '@INVOICE_TEMPLATE',
                            7 => '!delete_invoice_template',
                            8 => 'view_rate_own_timesheet',
                            9 => 'view_rate_other_timesheet',
                            10 => 'hourly-rate_own_profile',
                        ],
                        'ROLE_ADMIN' => [
                            0 => '@ACTIVITIES',
                            1 => '@PROJECTS',
                            2 => '@CUSTOMERS',
                            3 => '@INVOICE',
                            4 => '@INVOICE_TEMPLATE',
                            5 => '@TIMESHEET',
                            6 => '@TIMESHEET_OTHER',
                            7 => '@PROFILE',
                            8 => '@RATE',
                            9 => '@RATE_OTHER',
                            10 => '@EXPORT',
                            11 => '@TAGS',
                            12 => 'hourly-rate_own_profile',
                            13 => 'edit_exported_timesheet',
                        ],
                        'ROLE_SUPER_ADMIN' => [
                            0 => '@ACTIVITIES',
                            1 => '@PROJECTS',
                            2 => '@CUSTOMERS',
                            3 => '@INVOICE',
                            4 => '@INVOICE_TEMPLATE',
                            5 => '@TIMESHEET',
                            6 => '@TIMESHEET_OTHER',
                            7 => '@PROFILE',
                            8 => '@PROFILE_OTHER',
                            9 => '@USER',
                            10 => '@RATE',
                            11 => '@RATE_OTHER',
                            12 => '@EXPORT',
                            13 => '@TAGS',
                            14 => 'hourly-rate_own_profile',
                            15 => 'hourly-rate_other_profile',
                            16 => 'delete_own_profile',
                            17 => 'roles_own_profile',
                            18 => 'system_information',
                            19 => 'system_configuration',
                            20 => 'plugins',
                            21 => 'edit_exported_timesheet',
                        ],
                    ],
                    'maps' => [
                        'ROLE_USER' => [
                            0 => 'ROLE_USER',
                        ],
                        'ROLE_TEAMLEAD' => [
                            0 => 'ROLE_TEAMLEAD',
                        ],
                        'ROLE_ADMIN' => [
                            0 => 'ROLE_ADMIN',
                        ],
                        'ROLE_SUPER_ADMIN' => [
                            0 => 'ROLE_SUPER_ADMIN',
                        ],
                    ],
                    'roles' => [
                        'ROLE_USER' => [

                        ],
                        'ROLE_TEAMLEAD' => [

                        ],
                        'ROLE_ADMIN' => [

                        ],
                        'ROLE_SUPER_ADMIN' => [

                        ],
                    ],
                ],
                'dashboard' => [
                    'user_duration' => [
                        'title' => 'dashboard.you',
                        'order' => 10,
                        'permission' => 'ROLE_USER',
                        'type' => 'compoundChart',
                        'widgets' => [
                            0 => 'DailyWorkingTimeChart',
                            1 => 'userDurationToday',
                            2 => 'userDurationWeek',
                            3 => 'userDurationMonth',
                            4 => 'userDurationYear',
                        ],
                    ],
                    'user_rates' => [
                        'title' => NULL,
                        'order' => 20,
                        'permission' => 'view_rate_own_timesheet',
                        'widgets' => [
                            0 => 'userAmountToday',
                            1 => 'userAmountWeek',
                            2 => 'userAmountMonth',
                            3 => 'userAmountYear',
                        ],
                        'type' => 'simple',
                    ],
                    'duration' => [
                        'title' => 'dashboard.all',
                        'order' => 30,
                        'permission' => 'ROLE_TEAMLEAD',
                        'widgets' => [
                            0 => 'durationToday',
                            1 => 'durationWeek',
                            2 => 'durationMonth',
                            3 => 'durationYear',
                        ],
                        'type' => 'simple',
                    ],
                    'active_users' => [
                        'title' => NULL,
                        'order' => 40,
                        'permission' => 'ROLE_TEAMLEAD',
                        'widgets' => [
                            0 => 'activeUsersToday',
                            1 => 'activeUsersWeek',
                            2 => 'activeUsersMonth',
                            3 => 'activeUsersYear',
                        ],
                        'type' => 'simple',
                    ],
                    'rates' => [
                        'title' => NULL,
                        'order' => 50,
                        'permission' => 'view_rate_other_timesheet',
                        'widgets' => [
                            0 => 'amountToday',
                            1 => 'amountWeek',
                            2 => 'amountMonth',
                            3 => 'amountYear',
                        ],
                        'type' => 'simple',
                    ],
                ],
                'languages' => [
                    'de' => [
                        'date_time_type' => 'dd.MM.yyyy HH:mm',
                        'date_type' => 'dd.MM.yyyy',
                        'date' => 'd.m.Y',
                        'date_time' => 'd.m. H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'en' => [
                        'date_time_type' => 'yyyy-MM-dd HH:mm',
                        'date_type' => 'yyyy-MM-dd',
                        'date' => 'Y-m-d',
                        'date_time' => 'm-d H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'pt_BR' => [
                        'date_time_type' => 'dd-MM-yyyy HH:mm',
                        'date_type' => 'dd-MM-yyyy',
                        'date' => 'd-m-Y',
                        'date_time' => 'd-m H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'it' => [
                        'date_time_type' => 'dd.MM.yyyy HH:mm',
                        'date_type' => 'dd.MM.yyyy',
                        'date' => 'd.m.Y',
                        'date_time' => 'd.m. H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'fr' => [
                        'date_time_type' => 'dd/MM/yyyy HH:mm',
                        'date_type' => 'dd/MM/yyyy',
                        'date' => 'd/m/Y',
                        'date_time' => 'd/m H:i',
                        'duration' => '%h h %m',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'es' => [
                        'date_time_type' => 'dd.MM.yyyy HH:mm',
                        'date_type' => 'dd.MM.yyyy',
                        'date' => 'd.m.Y',
                        'date_time' => 'd.m. H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'ru' => [
                        'date_time_type' => 'dd.MM.yyyy HH:mm',
                        'date_type' => 'dd.MM.yyyy',
                        'date' => 'd.m.Y',
                        'date_time' => 'd.m. H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'ar' => [
                        'date_time_type' => 'yyyy-MM-dd HH:mm',
                        'date_type' => 'yyyy-MM-dd',
                        'date' => 'Y-m-d',
                        'date_time' => 'm-d H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'hu' => [
                        'date_time_type' => 'yyyy.MM.dd. HH:mm',
                        'date_type' => 'yyyy.MM.dd.',
                        'date' => 'Y.m.d.',
                        'date_time' => 'm.d. H:i',
                        'duration' => '%h:%m h',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'sv' => [
                        'date_time_type' => 'yyyy-MM-dd HH:mm',
                        'date_type' => 'yyyy-MM-dd',
                        'date' => 'Y-m-d',
                        'date_time' => 'm-d H:i',
                        'duration' => '%h:%m tim',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                    'ja' => [
                        'date_time_type' => 'yyyy-MM-dd HH:mm',
                        'date_type' => 'yyyy-MM-dd',
                        'date' => 'Y-m-d',
                        'date_time' => 'm-d H:i',
                        'duration' => '%h:%m tim',
                        'time' => 'H:i',
                        '24_hours' => true,
                    ],
                ],
                'data_dir' => ($this->targetDirs[2].'/data'),
                'plugin_dir' => ($this->targetDirs[2].'/plugins'),
                'user' => [
                    'registration' => true,
                    'password_reset' => true,
                ],
                'invoice' => [
                    'documents' => [
                        0 => 'var/invoices/',
                        1 => 'templates/invoice/renderer/',
                    ],
                ],
                'calendar' => [
                    'week_numbers' => true,
                    'day_limit' => 4,
                    'businessHours' => [
                        'days' => [
                            0 => 1,
                            1 => 2,
                            2 => 3,
                            3 => 4,
                            4 => 5,
                        ],
                        'begin' => '08:00',
                        'end' => '20:00',
                    ],
                    'visibleHours' => [
                        'begin' => '00:00',
                        'end' => '23:59',
                    ],
                    'google' => [
                        'api_key' => NULL,
                        'sources' => [

                        ],
                    ],
                    'weekends' => true,
                ],
                'theme' => [
                    'active_warning' => 3,
                    'box_color' => 'green',
                    'select_type' => NULL,
                    'show_about' => true,
                    'chart' => [
                        'background_color' => 'rgba(0,115,183,0.7)',
                        'border_color' => '#3b8bba',
                        'grid_color' => 'rgba(0,0,0,.05)',
                        'height' => '200',
                    ],
                    'branding' => [
                        'logo' => NULL,
                        'mini' => NULL,
                        'company' => NULL,
                        'title' => NULL,
                    ],
                ],
                'widgets' => [

                ],
                'defaults' => [
                    'customer' => [
                        'timezone' => NULL,
                        'country' => 'DE',
                        'currency' => 'EUR',
                    ],
                    'user' => [
                        'timezone' => NULL,
                        'language' => 'en',
                        'theme' => NULL,
                    ],
                ],
                'ldap' => [
                    'connection' => [
                        'host' => NULL,
                        'port' => 389,
                        'useStartTls' => false,
                        'useSsl' => false,
                        'bindRequiresDn' => true,
                        'accountFilterFormat' => NULL,
                    ],
                    'user' => [
                        'baseDn' => NULL,
                        'filter' => '',
                        'attributesFilter' => '(objectClass=*)',
                        'usernameAttribute' => 'uid',
                        'attributes' => [

                        ],
                    ],
                    'role' => [
                        'baseDn' => NULL,
                        'usernameAttribute' => 'dn',
                        'nameAttribute' => 'cn',
                        'userDnAttribute' => 'member',
                        'groups' => [

                        ],
                    ],
                ],
            ]; break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'WhiteOctoberPagerfantaBundle' => 'WhiteOctober\\PagerfantaBundle\\WhiteOctoberPagerfantaBundle',
                'AdminLTEBundle' => 'KevinPapst\\AdminLTEBundle\\AdminLTEBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'WebpackEncoreBundle' => 'Symfony\\WebpackEncoreBundle\\WebpackEncoreBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelProdContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'env(CORS_ALLOW_ORIGIN)' => 'localhost',
            'locale' => 'en',
            'app_locales' => 'en|de|it|fr|es|ru|ar|hu|pt_BR|sv|ja',
            'admin_lte_theme.options' => [
                'default_avatar' => 'build/images/default_avatar.png',
                'skin' => 'skin-green',
                'fixed_layout' => true,
                'boxed_layout' => false,
                'collapsed_sidebar' => false,
                'mini_sidebar' => true,
                'max_navbar_notifications' => 10,
                'max_navbar_tasks' => 10,
                'max_navbar_messages' => 10,
                'control_sidebar' => [

                ],
                'knp_menu' => [
                    'enable' => false,
                    'main_menu' => 'adminlte_main',
                    'breadcrumb_menu' => false,
                ],
                'widget' => [
                    'use_footer' => false,
                    'type' => 'secondary',
                    'solid' => false,
                    'collapsible_title' => 'Collapse',
                    'removable_title' => 'Remove',
                    'bordered' => true,
                    'collapsible' => false,
                    'removable' => false,
                ],
                'button' => [
                    'type' => 'primary',
                    'size' => false,
                ],
            ],
            'admin_lte_theme.routes' => [
                'adminlte_profile' => 'user_profile',
                'adminlte_welcome' => 'homepage',
                'adminlte_login' => 'fos_user_security_login',
                'adminlte_login_check' => 'fos_user_security_check',
                'adminlte_registration' => 'fos_user_registration_register',
                'adminlte_password_reset' => 'fos_user_resetting_request',
                'adminlte_message' => 'message',
                'adminlte_messages' => 'messages',
                'adminlte_notification' => 'notification',
                'adminlte_notifications' => 'notifications',
                'adminlte_task' => 'task',
                'adminlte_tasks' => 'tasks',
            ],
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelProdContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'datetime' => [
                    'class' => 'App\\Doctrine\\UTCDateTimeType',
                    'commented' => NULL,
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                    ],
                ],
                'monolog.handler.main' => NULL,
            ],
            'twig.exception_listener.controller' => 'twig.controller.exception::showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => '@AdminLTE/layout/form-theme.html.twig',
                2 => 'form/kimai-theme.html.twig',
            ],
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_TEAMLEAD' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_ADMIN' => [
                    0 => 'ROLE_TEAMLEAD',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'white_october_pagerfanta.default_view' => 'default',
            'white_october_pagerfanta.view_factory.class' => 'Pagerfanta\\View\\ViewFactory',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'secured_area',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'App\\Entity\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => [
                0 => 'Profile',
                1 => 'Default',
            ],
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => [
                0 => 'Registration',
                1 => 'Default',
            ],
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => [
                0 => 'ChangePassword',
                1 => 'Default',
            ],
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => [
                0 => 'ResetPassword',
                1 => 'Default',
            ],
            'fos_rest.format_listener.rules' => NULL,
            'nelmio_api_doc.areas' => [
                0 => 'default',
            ],
            'nelmio_cors.map' => [
                '^/api/' => [
                    'allow_origin' => true,
                    'allow_headers' => [
                        0 => 'x-auth-user',
                        1 => 'x-auth-token',
                        2 => 'content-type',
                    ],
                    'allow_methods' => [
                        0 => 'GET',
                        1 => 'OPTIONS',
                        2 => 'POST',
                        3 => 'PUT',
                        4 => 'PATCH',
                        5 => 'DELETE',
                    ],
                    'max_age' => 3600,
                ],
            ],
            'nelmio_cors.defaults' => [
                'allow_origin' => [

                ],
                'allow_credentials' => false,
                'allow_headers' => [

                ],
                'expose_headers' => [

                ],
                'allow_methods' => [

                ],
                'max_age' => 0,
                'hosts' => [

                ],
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'kimai.languages' => [
                'de' => [
                    'date_time_type' => 'dd.MM.yyyy HH:mm',
                    'date_type' => 'dd.MM.yyyy',
                    'date' => 'd.m.Y',
                    'date_time' => 'd.m. H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'en' => [
                    'date_time_type' => 'yyyy-MM-dd HH:mm',
                    'date_type' => 'yyyy-MM-dd',
                    'date' => 'Y-m-d',
                    'date_time' => 'm-d H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'pt_BR' => [
                    'date_time_type' => 'dd-MM-yyyy HH:mm',
                    'date_type' => 'dd-MM-yyyy',
                    'date' => 'd-m-Y',
                    'date_time' => 'd-m H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'it' => [
                    'date_time_type' => 'dd.MM.yyyy HH:mm',
                    'date_type' => 'dd.MM.yyyy',
                    'date' => 'd.m.Y',
                    'date_time' => 'd.m. H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'fr' => [
                    'date_time_type' => 'dd/MM/yyyy HH:mm',
                    'date_type' => 'dd/MM/yyyy',
                    'date' => 'd/m/Y',
                    'date_time' => 'd/m H:i',
                    'duration' => '%h h %m',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'es' => [
                    'date_time_type' => 'dd.MM.yyyy HH:mm',
                    'date_type' => 'dd.MM.yyyy',
                    'date' => 'd.m.Y',
                    'date_time' => 'd.m. H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'ru' => [
                    'date_time_type' => 'dd.MM.yyyy HH:mm',
                    'date_type' => 'dd.MM.yyyy',
                    'date' => 'd.m.Y',
                    'date_time' => 'd.m. H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'ar' => [
                    'date_time_type' => 'yyyy-MM-dd HH:mm',
                    'date_type' => 'yyyy-MM-dd',
                    'date' => 'Y-m-d',
                    'date_time' => 'm-d H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'hu' => [
                    'date_time_type' => 'yyyy.MM.dd. HH:mm',
                    'date_type' => 'yyyy.MM.dd.',
                    'date' => 'Y.m.d.',
                    'date_time' => 'm.d. H:i',
                    'duration' => '%h:%m h',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'sv' => [
                    'date_time_type' => 'yyyy-MM-dd HH:mm',
                    'date_type' => 'yyyy-MM-dd',
                    'date' => 'Y-m-d',
                    'date_time' => 'm-d H:i',
                    'duration' => '%h:%m tim',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
                'ja' => [
                    'date_time_type' => 'yyyy-MM-dd HH:mm',
                    'date_type' => 'yyyy-MM-dd',
                    'date' => 'Y-m-d',
                    'date_time' => 'm-d H:i',
                    'duration' => '%h:%m tim',
                    'time' => 'H:i',
                    '24_hours' => true,
                ],
            ],
            'kimai.calendar' => [
                'week_numbers' => true,
                'day_limit' => 4,
                'businessHours' => [
                    'days' => [
                        0 => 1,
                        1 => 2,
                        2 => 3,
                        3 => 4,
                        4 => 5,
                    ],
                    'begin' => '08:00',
                    'end' => '20:00',
                ],
                'visibleHours' => [
                    'begin' => '00:00',
                    'end' => '23:59',
                ],
                'google' => [
                    'api_key' => NULL,
                    'sources' => [

                    ],
                ],
                'weekends' => true,
            ],
            'kimai.dashboard' => [
                'user_duration' => [
                    'title' => 'dashboard.you',
                    'order' => 10,
                    'permission' => 'ROLE_USER',
                    'type' => 'compoundChart',
                    'widgets' => [
                        0 => 'DailyWorkingTimeChart',
                        1 => 'userDurationToday',
                        2 => 'userDurationWeek',
                        3 => 'userDurationMonth',
                        4 => 'userDurationYear',
                    ],
                ],
                'user_rates' => [
                    'title' => NULL,
                    'order' => 20,
                    'permission' => 'view_rate_own_timesheet',
                    'widgets' => [
                        0 => 'userAmountToday',
                        1 => 'userAmountWeek',
                        2 => 'userAmountMonth',
                        3 => 'userAmountYear',
                    ],
                    'type' => 'simple',
                ],
                'duration' => [
                    'title' => 'dashboard.all',
                    'order' => 30,
                    'permission' => 'ROLE_TEAMLEAD',
                    'widgets' => [
                        0 => 'durationToday',
                        1 => 'durationWeek',
                        2 => 'durationMonth',
                        3 => 'durationYear',
                    ],
                    'type' => 'simple',
                ],
                'active_users' => [
                    'title' => NULL,
                    'order' => 40,
                    'permission' => 'ROLE_TEAMLEAD',
                    'widgets' => [
                        0 => 'activeUsersToday',
                        1 => 'activeUsersWeek',
                        2 => 'activeUsersMonth',
                        3 => 'activeUsersYear',
                    ],
                    'type' => 'simple',
                ],
                'rates' => [
                    'title' => NULL,
                    'order' => 50,
                    'permission' => 'view_rate_other_timesheet',
                    'widgets' => [
                        0 => 'amountToday',
                        1 => 'amountWeek',
                        2 => 'amountMonth',
                        3 => 'amountYear',
                    ],
                    'type' => 'simple',
                ],
            ],
            'kimai.widgets' => [

            ],
            'kimai.invoice.documents' => [
                0 => 'var/invoices/',
                1 => 'templates/invoice/renderer/',
            ],
            'kimai.defaults' => [
                'customer' => [
                    'timezone' => NULL,
                    'country' => 'DE',
                    'currency' => 'EUR',
                ],
                'user' => [
                    'timezone' => NULL,
                    'language' => 'en',
                    'theme' => NULL,
                ],
            ],
            'kimai.permissions' => [
                'ROLE_USER' => [
                    0 => 'view_own_timesheet',
                    1 => 'start_own_timesheet',
                    2 => 'stop_own_timesheet',
                    3 => 'create_own_timesheet',
                    4 => 'edit_own_timesheet',
                    5 => 'export_own_timesheet',
                    6 => 'delete_own_timesheet',
                    7 => 'view_own_profile',
                    8 => 'edit_own_profile',
                    9 => 'password_own_profile',
                    10 => 'preferences_own_profile',
                    11 => 'api-token_own_profile',
                ],
                'ROLE_TEAMLEAD' => [
                    0 => 'view_invoice',
                    1 => 'create_invoice',
                    2 => 'view_own_timesheet',
                    3 => 'start_own_timesheet',
                    4 => 'stop_own_timesheet',
                    5 => 'create_own_timesheet',
                    6 => 'edit_own_timesheet',
                    7 => 'export_own_timesheet',
                    8 => 'delete_own_timesheet',
                    9 => 'view_other_timesheet',
                    10 => 'start_other_timesheet',
                    11 => 'stop_other_timesheet',
                    12 => 'create_other_timesheet',
                    13 => 'edit_other_timesheet',
                    14 => 'export_other_timesheet',
                    15 => 'delete_other_timesheet',
                    16 => 'view_own_profile',
                    17 => 'edit_own_profile',
                    18 => 'password_own_profile',
                    19 => 'preferences_own_profile',
                    20 => 'api-token_own_profile',
                    21 => 'view_export',
                    22 => 'create_export',
                    23 => 'edit_export_own_timesheet',
                    24 => 'edit_export_other_timesheet',
                    25 => 'view_tag',
                    26 => 'delete_tag',
                    27 => 'view_invoice_template',
                    28 => 'create_invoice_template',
                    29 => 'edit_invoice_template',
                    30 => 'view_rate_own_timesheet',
                    31 => 'view_rate_other_timesheet',
                    32 => 'hourly-rate_own_profile',
                ],
                'ROLE_ADMIN' => [
                    0 => 'view_activity',
                    1 => 'create_activity',
                    2 => 'edit_activity',
                    3 => 'budget_activity',
                    4 => 'delete_activity',
                    5 => 'view_project',
                    6 => 'create_project',
                    7 => 'edit_project',
                    8 => 'budget_project',
                    9 => 'delete_project',
                    10 => 'view_customer',
                    11 => 'create_customer',
                    12 => 'edit_customer',
                    13 => 'budget_customer',
                    14 => 'delete_customer',
                    15 => 'view_invoice',
                    16 => 'create_invoice',
                    17 => 'view_invoice_template',
                    18 => 'create_invoice_template',
                    19 => 'edit_invoice_template',
                    20 => 'delete_invoice_template',
                    21 => 'view_own_timesheet',
                    22 => 'start_own_timesheet',
                    23 => 'stop_own_timesheet',
                    24 => 'create_own_timesheet',
                    25 => 'edit_own_timesheet',
                    26 => 'export_own_timesheet',
                    27 => 'delete_own_timesheet',
                    28 => 'view_other_timesheet',
                    29 => 'start_other_timesheet',
                    30 => 'stop_other_timesheet',
                    31 => 'create_other_timesheet',
                    32 => 'edit_other_timesheet',
                    33 => 'export_other_timesheet',
                    34 => 'delete_other_timesheet',
                    35 => 'view_own_profile',
                    36 => 'edit_own_profile',
                    37 => 'password_own_profile',
                    38 => 'preferences_own_profile',
                    39 => 'api-token_own_profile',
                    40 => 'view_rate_own_timesheet',
                    41 => 'edit_rate_own_timesheet',
                    42 => 'view_rate_other_timesheet',
                    43 => 'edit_rate_other_timesheet',
                    44 => 'view_export',
                    45 => 'create_export',
                    46 => 'edit_export_own_timesheet',
                    47 => 'edit_export_other_timesheet',
                    48 => 'view_tag',
                    49 => 'delete_tag',
                    50 => 'hourly-rate_own_profile',
                    51 => 'edit_exported_timesheet',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'view_activity',
                    1 => 'create_activity',
                    2 => 'edit_activity',
                    3 => 'budget_activity',
                    4 => 'delete_activity',
                    5 => 'view_project',
                    6 => 'create_project',
                    7 => 'edit_project',
                    8 => 'budget_project',
                    9 => 'delete_project',
                    10 => 'view_customer',
                    11 => 'create_customer',
                    12 => 'edit_customer',
                    13 => 'budget_customer',
                    14 => 'delete_customer',
                    15 => 'view_invoice',
                    16 => 'create_invoice',
                    17 => 'view_invoice_template',
                    18 => 'create_invoice_template',
                    19 => 'edit_invoice_template',
                    20 => 'delete_invoice_template',
                    21 => 'view_own_timesheet',
                    22 => 'start_own_timesheet',
                    23 => 'stop_own_timesheet',
                    24 => 'create_own_timesheet',
                    25 => 'edit_own_timesheet',
                    26 => 'export_own_timesheet',
                    27 => 'delete_own_timesheet',
                    28 => 'view_other_timesheet',
                    29 => 'start_other_timesheet',
                    30 => 'stop_other_timesheet',
                    31 => 'create_other_timesheet',
                    32 => 'edit_other_timesheet',
                    33 => 'export_other_timesheet',
                    34 => 'delete_other_timesheet',
                    35 => 'view_own_profile',
                    36 => 'edit_own_profile',
                    37 => 'password_own_profile',
                    38 => 'preferences_own_profile',
                    39 => 'api-token_own_profile',
                    40 => 'view_other_profile',
                    41 => 'edit_other_profile',
                    42 => 'delete_other_profile',
                    43 => 'password_other_profile',
                    44 => 'roles_other_profile',
                    45 => 'preferences_other_profile',
                    46 => 'api-token_other_profile',
                    47 => 'view_user',
                    48 => 'create_user',
                    49 => 'delete_user',
                    50 => 'role_permissions',
                    51 => 'view_rate_own_timesheet',
                    52 => 'edit_rate_own_timesheet',
                    53 => 'view_rate_other_timesheet',
                    54 => 'edit_rate_other_timesheet',
                    55 => 'view_export',
                    56 => 'create_export',
                    57 => 'edit_export_own_timesheet',
                    58 => 'edit_export_other_timesheet',
                    59 => 'view_tag',
                    60 => 'delete_tag',
                    61 => 'hourly-rate_own_profile',
                    62 => 'hourly-rate_other_profile',
                    63 => 'delete_own_profile',
                    64 => 'roles_own_profile',
                    65 => 'system_information',
                    66 => 'system_configuration',
                    67 => 'plugins',
                    68 => 'edit_exported_timesheet',
                ],
            ],
            'kimai.theme' => [
                'active_warning' => 3,
                'box_color' => 'green',
                'select_type' => NULL,
                'show_about' => true,
                'chart' => [
                    'background_color' => 'rgba(0,115,183,0.7)',
                    'border_color' => '#3b8bba',
                    'grid_color' => 'rgba(0,0,0,.05)',
                    'height' => '200',
                ],
                'branding' => [
                    'logo' => NULL,
                    'mini' => NULL,
                    'company' => NULL,
                    'title' => NULL,
                ],
            ],
            'kimai.theme.select_type' => NULL,
            'kimai.theme.show_about' => true,
            'kimai.fosuser' => [
                'registration' => true,
                'password_reset' => true,
            ],
            'kimai.timesheet' => [
                'markdown_content' => false,
                'rounding' => [
                    'default' => [
                        'days' => [
                            0 => 'monday',
                            1 => 'tuesday',
                            2 => 'wednesday',
                            3 => 'thursday',
                            4 => 'friday',
                            5 => 'saturday',
                            6 => 'sunday',
                        ],
                        'begin' => 1,
                        'end' => 1,
                        'duration' => 0,
                        'mode' => 'default',
                    ],
                ],
                'default_begin' => 'now',
                'mode' => 'default',
                'rates' => [

                ],
                'active_entries' => [
                    'soft_limit' => 1,
                    'hard_limit' => 1,
                ],
                'rules' => [
                    'allow_future_times' => true,
                ],
            ],
            'kimai.timesheet.rates' => [

            ],
            'kimai.timesheet.rounding' => [
                'default' => [
                    'days' => [
                        0 => 'monday',
                        1 => 'tuesday',
                        2 => 'wednesday',
                        3 => 'thursday',
                        4 => 'friday',
                        5 => 'saturday',
                        6 => 'sunday',
                    ],
                    'begin' => 1,
                    'end' => 1,
                    'duration' => 0,
                    'mode' => 'default',
                ],
            ],
            'kimai.ldap' => [
                'connection' => [
                    'host' => NULL,
                    'port' => 389,
                    'useStartTls' => false,
                    'useSsl' => false,
                    'bindRequiresDn' => true,
                    'accountFilterFormat' => '(&(uid=%s))',
                    'baseDn' => NULL,
                ],
                'user' => [
                    'baseDn' => NULL,
                    'filter' => '',
                    'attributesFilter' => '(objectClass=*)',
                    'usernameAttribute' => 'uid',
                    'attributes' => [

                    ],
                ],
                'role' => [
                    'baseDn' => NULL,
                    'usernameAttribute' => 'dn',
                    'nameAttribute' => 'cn',
                    'userDnAttribute' => 'member',
                    'groups' => [

                    ],
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.App\\Command\\ConvertTimezoneCommand',
                1 => 'console.command.public_alias.App\\Command\\CreateReleaseCommand',
                2 => 'console.command.public_alias.App\\Command\\CreateUserCommand',
                3 => 'console.command.public_alias.App\\Command\\KimaiImporterCommand',
                4 => 'console.command.public_alias.App\\Command\\ResetCommand',
                5 => 'console.command.public_alias.App\\Command\\VersionCommand',
                6 => 'console.command.public_alias.doctrine_cache.contains_command',
                7 => 'console.command.public_alias.doctrine_cache.delete_command',
                8 => 'console.command.public_alias.doctrine_cache.flush_command',
                9 => 'console.command.public_alias.doctrine_cache.stats_command',
                10 => 'console.command.public_alias.doctrine_migrations.diff_command',
                11 => 'console.command.public_alias.doctrine_migrations.dump_schema_command',
                12 => 'console.command.public_alias.doctrine_migrations.execute_command',
                13 => 'console.command.public_alias.doctrine_migrations.generate_command',
                14 => 'console.command.public_alias.doctrine_migrations.latest_command',
                15 => 'console.command.public_alias.doctrine_migrations.migrate_command',
                16 => 'console.command.public_alias.doctrine_migrations.rollup_command',
                17 => 'console.command.public_alias.doctrine_migrations.status_command',
                18 => 'console.command.public_alias.doctrine_migrations.up_to_date_command',
                19 => 'console.command.public_alias.doctrine_migrations.version_command',
            ],
        ];
    }
}
