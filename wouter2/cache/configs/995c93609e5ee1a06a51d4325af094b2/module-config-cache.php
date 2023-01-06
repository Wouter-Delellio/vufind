<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            'Laminas\\Cache\\Service\\StorageCacheAbstractServiceFactory',
            'Laminas\\Form\\FormAbstractServiceFactory'
        ],
        'factories' => [
            'Laminas\\Cache\\Storage\\AdapterPluginManager' => 'Laminas\\Cache\\Service\\StorageAdapterPluginManagerFactory',
            'Laminas\\Cache\\Storage\\PluginManager' => 'Laminas\\Cache\\Service\\StoragePluginManagerFactory',
            'Laminas\\Cache\\Service\\StoragePluginFactory' => 'Laminas\\Cache\\Service\\StoragePluginFactoryFactory',
            'Laminas\\Cache\\Service\\StoragePluginFactoryInterface' => 'Laminas\\Cache\\Service\\StoragePluginFactoryFactory',
            'Laminas\\Cache\\Service\\StorageAdapterFactory' => 'Laminas\\Cache\\Service\\StorageAdapterFactoryFactory',
            'Laminas\\Cache\\Service\\StorageAdapterFactoryInterface' => 'Laminas\\Cache\\Service\\StorageAdapterFactoryFactory',
            'Laminas\\Cache\\Command\\DeprecatedStorageFactoryConfigurationCheckCommand' => 'Laminas\\Cache\\Command\\DeprecatedStorageFactoryConfigurationCheckCommandFactory',
            'FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\BuilderAbstractFactory',
            'FormAttributeBuilder' => 'Laminas\\Form\\Annotation\\BuilderAbstractFactory',
            'FormElementManager' => 'Laminas\\Form\\FormElementManagerFactory',
            'Laminas\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\HttpRouterFactory',
            'Laminas\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManagerFactory',
            'Laminas\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouterFactory',
            'LmcRbacMvc\\Guards' => 'LmcRbacMvc\\Factory\\GuardsFactory',
            'Rbac\\Rbac' => 'LmcRbacMvc\\Factory\\RbacFactory',
            'LmcRbacMvc\\Assertion\\AssertionPluginManager' => 'LmcRbacMvc\\Factory\\AssertionPluginManagerFactory',
            'LmcRbacMvc\\Collector\\RbacCollector' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'LmcRbacMvc\\Guard\\GuardPluginManager' => 'LmcRbacMvc\\Factory\\GuardPluginManagerFactory',
            'LmcRbacMvc\\Identity\\AuthenticationIdentityProvider' => 'LmcRbacMvc\\Factory\\AuthenticationIdentityProviderFactory',
            'LmcRbacMvc\\Options\\ModuleOptions' => 'LmcRbacMvc\\Factory\\ModuleOptionsFactory',
            'LmcRbacMvc\\Role\\RoleProviderPluginManager' => 'LmcRbacMvc\\Factory\\RoleProviderPluginManagerFactory',
            'LmcRbacMvc\\Service\\AuthorizationService' => 'LmcRbacMvc\\Factory\\AuthorizationServiceFactory',
            'LmcRbacMvc\\Service\\RoleService' => 'LmcRbacMvc\\Factory\\RoleServiceFactory',
            'LmcRbacMvc\\View\\Strategy\\RedirectStrategy' => 'LmcRbacMvc\\Factory\\RedirectStrategyFactory',
            'LmcRbacMvc\\View\\Strategy\\UnauthorizedStrategy' => 'LmcRbacMvc\\Factory\\UnauthorizedStrategyFactory',
            'Laminas\\I18n\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorServiceFactory',
            'Laminas\\I18n\\Translator\\LoaderPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManagerFactory',
            'Laminas\\Mvc\\I18n\\Translator' => 'Laminas\\Mvc\\I18n\\TranslatorFactory',
            'SlmLocale\\Strategy\\StrategyPluginManager' => 'SlmLocale\\Strategy\\Factory\\StrategyPluginManagerFactory',
            'SlmLocale\\Locale\\Detector' => 'SlmLocale\\Service\\DetectorFactory',
            'League\\CommonMark\\ConverterInterface' => 'VuFind\\Service\\MarkdownFactory',
            'ProxyManager\\Configuration' => 'VuFind\\Service\\ProxyConfigFactory',
            'VuFind\\AjaxHandler\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Auth\\EmailAuthenticator' => 'VuFind\\Auth\\EmailAuthenticatorFactory',
            'VuFind\\Auth\\ILSAuthenticator' => 'VuFind\\Auth\\ILSAuthenticatorFactory',
            'VuFind\\Auth\\Manager' => 'VuFind\\Auth\\ManagerFactory',
            'VuFind\\Auth\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Autocomplete\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Autocomplete\\Suggester' => 'VuFind\\Autocomplete\\SuggesterFactory',
            'VuFind\\Cache\\Manager' => 'VuFind\\Cache\\ManagerFactory',
            'VuFind\\Captcha\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Cart' => 'VuFind\\CartFactory',
            'VuFind\\ChannelProvider\\ChannelLoader' => 'VuFind\\ChannelProvider\\ChannelLoaderFactory',
            'VuFind\\ChannelProvider\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Config\\AccountCapabilities' => 'VuFind\\Config\\AccountCapabilitiesFactory',
            'VuFind\\Config\\PathResolver' => 'VuFind\\Config\\PathResolverFactory',
            'VuFind\\Config\\PluginManager' => 'VuFind\\Config\\PluginManagerFactory',
            'VuFind\\Config\\SearchSpecsReader' => 'VuFind\\Config\\YamlReaderFactory',
            'VuFind\\Config\\YamlReader' => 'VuFind\\Config\\YamlReaderFactory',
            'VuFind\\Connection\\Relais' => 'VuFind\\Connection\\RelaisFactory',
            'VuFind\\Connection\\WorldCatUtils' => 'VuFind\\Connection\\WorldCatUtilsFactory',
            'VuFind\\Content\\PageLocator' => 'VuFind\\Content\\PageLocatorFactory',
            'VuFind\\Content\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Content\\AuthorNotes\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Content\\Covers\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Content\\Excerpts\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Content\\ObalkyKnihService' => 'VuFind\\Content\\ObalkyKnihServiceFactory',
            'VuFind\\Content\\Reviews\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Content\\Summaries\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Content\\TOC\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\ContentBlock\\BlockLoader' => 'VuFind\\ContentBlock\\BlockLoaderFactory',
            'VuFind\\ContentBlock\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Cookie\\CookieManager' => 'VuFind\\Cookie\\CookieManagerFactory',
            'VuFind\\Cover\\CachingProxy' => 'VuFind\\Cover\\CachingProxyFactory',
            'VuFind\\Cover\\Generator' => 'VuFind\\Cover\\GeneratorFactory',
            'VuFind\\Cover\\Layer\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Cover\\Loader' => 'VuFind\\Cover\\LoaderFactory',
            'VuFind\\Cover\\Router' => 'VuFind\\Cover\\RouterFactory',
            'VuFind\\Crypt\\HMAC' => 'VuFind\\Crypt\\HMACFactory',
            'VuFind\\Date\\Converter' => 'VuFind\\Service\\DateConverterFactory',
            'VuFind\\Db\\AdapterFactory' => 'VuFind\\Service\\ServiceWithConfigIniFactory',
            'VuFind\\Db\\Row\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Db\\Table\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\DigitalContent\\OverdriveConnector' => 'VuFind\\DigitalContent\\OverdriveConnectorFactory',
            'VuFind\\DoiLinker\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Export' => 'VuFind\\ExportFactory',
            'VuFind\\Favorites\\FavoritesService' => 'VuFind\\Favorites\\FavoritesServiceFactory',
            'VuFind\\Form\\Form' => 'VuFind\\Form\\FormFactory',
            'VuFind\\Form\\Handler\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\GeoFeatures\\BasemapConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
            'VuFind\\GeoFeatures\\MapTabConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
            'VuFind\\GeoFeatures\\MapSelectionConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
            'VuFind\\Hierarchy\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Hierarchy\\TreeDataFormatter\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Hierarchy\\TreeDataSource\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Hierarchy\\TreeRenderer\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Http\\PhpEnvironment\\Request' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\I18n\\Locale\\LocaleSettings' => 'VuFind\\Service\\ServiceWithConfigIniFactory',
            'VuFind\\I18n\\Sorter' => 'VuFind\\I18n\\SorterFactory',
            'VuFind\\ILS\\Connection' => 'VuFind\\ILS\\ConnectionFactory',
            'VuFind\\ILS\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\ILS\\Logic\\Holds' => 'VuFind\\ILS\\Logic\\LogicFactory',
            'VuFind\\ILS\\Logic\\TitleHolds' => 'VuFind\\ILS\\Logic\\LogicFactory',
            'VuFind\\ILS\\HoldSettings' => 'VuFind\\ILS\\HoldSettingsFactory',
            'VuFind\\Log\\Logger' => 'VuFind\\Log\\LoggerFactory',
            'VuFind\\Mailer\\Mailer' => 'VuFind\\Mailer\\Factory',
            'VuFind\\MetadataVocabulary\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Net\\IpAddressUtils' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\Net\\UserIpReader' => 'VuFind\\Net\\UserIpReaderFactory',
            'VuFind\\OAI\\Server' => 'VuFind\\OAI\\ServerFactory',
            'VuFind\\OAI\\Server\\Auth' => 'VuFind\\OAI\\ServerFactory',
            'VuFind\\OAuth2\\Repository\\AccessTokenRepository' => 'VuFind\\OAuth2\\Repository\\RepositoryWithAccessTokenTableFactory',
            'VuFind\\OAuth2\\Repository\\AuthCodeRepository' => 'VuFind\\OAuth2\\Repository\\RepositoryWithAccessTokenTableFactory',
            'VuFind\\OAuth2\\Repository\\ClientRepository' => 'VuFind\\OAuth2\\Repository\\RepositoryWithOAuth2ConfigFactory',
            'VuFind\\OAuth2\\Repository\\IdentityRepository' => 'VuFind\\OAuth2\\Repository\\IdentityRepositoryFactory',
            'VuFind\\OAuth2\\Repository\\RefreshTokenRepository' => 'VuFind\\OAuth2\\Repository\\RepositoryWithAccessTokenTableFactory',
            'VuFind\\OAuth2\\Repository\\ScopeRepository' => 'VuFind\\OAuth2\\Repository\\RepositoryWithOAuth2ConfigFactory',
            'VuFind\\QRCode\\Loader' => 'VuFind\\QRCode\\LoaderFactory',
            'VuFind\\Recommend\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Record\\Cache' => 'VuFind\\Record\\CacheFactory',
            'VuFind\\Record\\FallbackLoader\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Record\\Loader' => 'VuFind\\Record\\LoaderFactory',
            'VuFind\\Record\\Router' => 'VuFind\\Service\\ServiceWithConfigIniFactory',
            'VuFind\\RecordDriver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\RecordTab\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\RecordTab\\TabManager' => 'VuFind\\RecordTab\\TabManagerFactory',
            'VuFind\\Related\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Resolver\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Role\\PermissionManager' => 'VuFind\\Role\\PermissionManagerFactory',
            'VuFind\\Role\\PermissionDeniedManager' => 'VuFind\\Role\\PermissionDeniedManagerFactory',
            'VuFind\\Search\\BackendManager' => 'VuFind\\Search\\BackendManagerFactory',
            'VuFind\\Search\\FacetCache\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Search\\Factory\\UrlQueryHelperFactory' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\Search\\History' => 'VuFind\\Search\\HistoryFactory',
            'VuFind\\Search\\Memory' => 'VuFind\\Search\\MemoryFactory',
            'VuFind\\Search\\Options\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Search\\Params\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Search\\Results\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Search\\SearchNormalizer' => 'VuFind\\Search\\SearchNormalizerFactory',
            'VuFind\\Search\\SearchRunner' => 'VuFind\\Search\\SearchRunnerFactory',
            'VuFind\\Search\\SearchTabsHelper' => 'VuFind\\Search\\SearchTabsHelperFactory',
            'VuFind\\Search\\Solr\\HierarchicalFacetHelper' => 'VuFind\\Search\\Solr\\HierarchicalFacetHelperFactory',
            'VuFind\\Security\\CspHeaderGenerator' => 'VuFind\\Security\\CspHeaderGeneratorFactory',
            'VuFind\\Security\\NonceGenerator' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\Service\\CurrencyFormatter' => 'VuFind\\Service\\CurrencyFormatterFactory',
            'VuFind\\Service\\ReCaptcha' => 'VuFind\\Service\\ReCaptchaFactory',
            'VuFind\\Session\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\Session\\Settings' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\Sitemap\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\SMS\\SMSInterface' => 'VuFind\\SMS\\Factory',
            'VuFind\\Solr\\Writer' => 'VuFind\\Solr\\WriterFactory',
            'VuFind\\Tags' => 'VuFind\\TagsFactory',
            'VuFind\\UrlShortener\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
            'VuFind\\UrlShortener\\UrlShortenerInterface' => 'VuFind\\UrlShortener\\ServiceFactory',
            'VuFind\\Validator\\SessionCsrf' => 'VuFind\\Validator\\SessionCsrfFactory',
            'VuFindHttp\\HttpService' => 'VuFind\\Service\\HttpServiceFactory',
            'VuFindSearch\\Service' => 'VuFind\\Service\\SearchServiceFactory',
            'Laminas\\Db\\Adapter\\Adapter' => 'VuFind\\Db\\AdapterFactory',
            'Laminas\\Http\\PhpEnvironment\\RemoteAddress' => 'VuFind\\Http\\PhpEnvironment\\RemoteAddressFactory',
            'Laminas\\Session\\SessionManager' => 'VuFind\\Session\\ManagerFactory',
            'VuFindApi\\Formatter\\FacetFormatter' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFindApi\\Formatter\\RecordFormatter' => 'VuFindApi\\Formatter\\RecordFormatterFactory',
            'VuFindApi\\Formatter\\Search2RecordFormatter' => 'VuFindApi\\Formatter\\Search2RecordFormatterFactory',
            'VuFindApi\\Formatter\\WebRecordFormatter' => 'VuFindApi\\Formatter\\WebRecordFormatterFactory'
        ],
        'delegators' => [
            'Laminas\\Cache\\Storage\\AdapterPluginManager' => [
                'Laminas\\Cache\\Storage\\Adapter\\BlackHole\\AdapterPluginManagerDelegatorFactory',
                'Laminas\\Cache\\Storage\\Adapter\\Filesystem\\AdapterPluginManagerDelegatorFactory',
                'Laminas\\Cache\\Storage\\Adapter\\Memcached\\AdapterPluginManagerDelegatorFactory',
                'Laminas\\Cache\\Storage\\Adapter\\Memory\\AdapterPluginManagerDelegatorFactory'
            ],
            'HttpRouter' => [
                'Laminas\\Mvc\\I18n\\Router\\HttpRouterDelegatorFactory'
            ],
            'Laminas\\Router\\Http\\TreeRouteStack' => [
                'Laminas\\Mvc\\I18n\\Router\\HttpRouterDelegatorFactory'
            ],
            'Laminas\\I18n\\Translator\\TranslatorInterface' => [
                'VuFind\\I18n\\Translator\\TranslatorFactory'
            ],
            'SlmLocale\\Locale\\Detector' => [
                'VuFind\\I18n\\Locale\\LocaleDetectorFactory'
            ]
        ],
        'aliases' => [
            'Laminas\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
            'Laminas\\Form\\Annotation\\AttributeBuilder' => 'FormAttributeBuilder',
            'Laminas\\Form\\FormElementManager' => 'FormElementManager',
            'HttpRouter' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'router' => 'Laminas\\Router\\RouteStackInterface',
            'Router' => 'Laminas\\Router\\RouteStackInterface',
            'RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'Zend\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouteStackInterface',
            'TranslatorPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManager',
            'Zend\\I18n\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorInterface',
            'Zend\\I18n\\Translator\\LoaderPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManager',
            'MvcTranslator' => 'Laminas\\Mvc\\I18n\\Translator',
            'Zend\\Mvc\\I18n\\Translator' => 'Laminas\\Mvc\\I18n\\Translator',
            'League\\CommonMark\\MarkdownConverterInterface' => 'League\\CommonMark\\ConverterInterface',
            'Request' => 'VuFind\\Http\\PhpEnvironment\\Request',
            'VuFind\\AccountCapabilities' => 'VuFind\\Config\\AccountCapabilities',
            'VuFind\\AuthManager' => 'VuFind\\Auth\\Manager',
            'VuFind\\AuthPluginManager' => 'VuFind\\Auth\\PluginManager',
            'VuFind\\AutocompletePluginManager' => 'VuFind\\Autocomplete\\PluginManager',
            'VuFind\\CacheManager' => 'VuFind\\Cache\\Manager',
            'VuFind\\ChannelProviderPluginManager' => 'VuFind\\ChannelProvider\\PluginManager',
            'VuFind\\Config' => 'VuFind\\Config\\PluginManager',
            'VuFind\\ContentPluginManager' => 'VuFind\\Content\\PluginManager',
            'VuFind\\ContentAuthorNotesPluginManager' => 'VuFind\\Content\\AuthorNotes\\PluginManager',
            'VuFind\\ContentCoversPluginManager' => 'VuFind\\Content\\Covers\\PluginManager',
            'VuFind\\ContentExcerptsPluginManager' => 'VuFind\\Content\\Excerpts\\PluginManager',
            'VuFind\\ContentReviewsPluginManager' => 'VuFind\\Content\\Reviews\\PluginManager',
            'VuFind\\ContentSummariesPluginManager' => 'VuFind\\Content\\Summaries\\PluginManager',
            'VuFind\\ContentTOCPluginManager' => 'VuFind\\Content\\TOC\\PluginManager',
            'VuFind\\CookieManager' => 'VuFind\\Cookie\\CookieManager',
            'VuFind\\DateConverter' => 'VuFind\\Date\\Converter',
            'VuFind\\DbAdapter' => 'Laminas\\Db\\Adapter\\Adapter',
            'VuFind\\DbAdapterFactory' => 'VuFind\\Db\\AdapterFactory',
            'VuFind\\DbRowPluginManager' => 'VuFind\\Db\\Row\\PluginManager',
            'VuFind\\DbTablePluginManager' => 'VuFind\\Db\\Table\\PluginManager',
            'VuFind\\HierarchicalFacetHelper' => 'VuFind\\Search\\Solr\\HierarchicalFacetHelper',
            'VuFind\\HierarchyDriverPluginManager' => 'VuFind\\Hierarchy\\Driver\\PluginManager',
            'VuFind\\HierarchyTreeDataFormatterPluginManager' => 'VuFind\\Hierarchy\\TreeDataFormatter\\PluginManager',
            'VuFind\\HierarchyTreeDataSourcePluginManager' => 'VuFind\\Hierarchy\\TreeDataSource\\PluginManager',
            'VuFind\\HierarchyTreeRendererPluginManager' => 'VuFind\\Hierarchy\\TreeRenderer\\PluginManager',
            'VuFind\\HMAC' => 'VuFind\\Crypt\\HMAC',
            'VuFind\\Http' => 'VuFindHttp\\HttpService',
            'VuFind\\ILSAuthenticator' => 'VuFind\\Auth\\ILSAuthenticator',
            'VuFind\\ILSConnection' => 'VuFind\\ILS\\Connection',
            'VuFind\\ILSDriverPluginManager' => 'VuFind\\ILS\\Driver\\PluginManager',
            'VuFind\\ILSHoldLogic' => 'VuFind\\ILS\\Logic\\Holds',
            'VuFind\\ILSHoldSettings' => 'VuFind\\ILS\\HoldSettings',
            'VuFind\\ILSTitleHoldLogic' => 'VuFind\\ILS\\Logic\\TitleHolds',
            'VuFind\\IpAddressUtils' => 'VuFind\\Net\\IpAddressUtils',
            'VuFind\\Logger' => 'VuFind\\Log\\Logger',
            'VuFind\\Mailer' => 'VuFind\\Mailer\\Mailer',
            'VuFind\\ProxyConfig' => 'ProxyManager\\Configuration',
            'VuFind\\Recaptcha' => 'VuFind\\Service\\ReCaptcha',
            'VuFind\\RecommendPluginManager' => 'VuFind\\Recommend\\PluginManager',
            'VuFind\\RecordCache' => 'VuFind\\Record\\Cache',
            'VuFind\\RecordDriverPluginManager' => 'VuFind\\RecordDriver\\PluginManager',
            'VuFind\\RecordLoader' => 'VuFind\\Record\\Loader',
            'VuFind\\RecordRouter' => 'VuFind\\Record\\Router',
            'VuFind\\RecordTabPluginManager' => 'VuFind\\RecordTab\\PluginManager',
            'VuFind\\RelatedPluginManager' => 'VuFind\\Related\\PluginManager',
            'VuFind\\ResolverDriverPluginManager' => 'VuFind\\Resolver\\Driver\\PluginManager',
            'VuFind\\Search' => 'VuFindSearch\\Service',
            'VuFind\\SearchOptionsPluginManager' => 'VuFind\\Search\\Options\\PluginManager',
            'VuFind\\SearchParamsPluginManager' => 'VuFind\\Search\\Params\\PluginManager',
            'VuFind\\SearchResultsPluginManager' => 'VuFind\\Search\\Results\\PluginManager',
            'VuFind\\SearchRunner' => 'VuFind\\Search\\SearchRunner',
            'VuFind\\SearchSpecsReader' => 'VuFind\\Config\\SearchSpecsReader',
            'VuFind\\SearchTabsHelper' => 'VuFind\\Search\\SearchTabsHelper',
            'VuFind\\SessionManager' => 'Laminas\\Session\\SessionManager',
            'VuFind\\SessionPluginManager' => 'VuFind\\Session\\PluginManager',
            'VuFind\\SMS' => 'VuFind\\SMS\\SMSInterface',
            'VuFind\\Translator' => 'Laminas\\Mvc\\I18n\\Translator',
            'VuFind\\WorldCatUtils' => 'VuFind\\Connection\\WorldCatUtils',
            'VuFind\\YamlReader' => 'VuFind\\Config\\YamlReader',
            'Laminas\\Validator\\Csrf' => 'VuFind\\Validator\\SessionCsrf',
            'VuFind\\Validator\\Csrf' => 'VuFind\\Validator\\SessionCsrf',
            'VuFind\\Validator\\CsrfInterface' => 'VuFind\\Validator\\SessionCsrf'
        ],
        'allow_override' => true,
        'initializers' => [
            'VuFind\\ServiceManager\\ServiceInitializer'
        ],
        'shared' => [
            'VuFind\\Form\\Form' => false
        ]
    ],
    'laminas-cli' => [
        'commands' => [
            'laminas-cache:deprecation:check-storage-factory-config' => 'Laminas\\Cache\\Command\\DeprecatedStorageFactoryConfigurationCheckCommand'
        ]
    ],
    'view_helpers' => [
        'aliases' => [
            'form' => 'Laminas\\Form\\View\\Helper\\Form',
            'Form' => 'Laminas\\Form\\View\\Helper\\Form',
            'formbutton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'form_button' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'formButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'formcaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'form_captcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'formCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'captchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captcha/dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'CaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'formcaptchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'form_captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'formCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'FormCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captcha/figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'CaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'formcaptchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'form_captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'formCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'FormCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captcha/image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'CaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'formcaptchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'form_captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'formCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'FormCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'captcha/recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'captchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'CaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'formcaptcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'form_captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'formCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'FormCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'formcheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'form_checkbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'formCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'formcollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'form_collection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'formCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'formcolor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'form_color' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'formColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'formdate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'form_date' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'formDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'formdatetime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'form_date_time' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'formDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'formdatetimelocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'form_date_time_local' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'formDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'formdatetimeselect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'form_date_time_select' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'formDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'formdateselect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'form_date_select' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'formDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'form_element' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'formelement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'formElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'form_element_errors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'formelementerrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'formElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'form_email' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'formemail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'formEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'form_file' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'formfile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'formFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'formfileapcprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'form_file_apc_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'formFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'formfilesessionprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'form_file_session_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'formFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'formfileuploadprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'form_file_upload_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'formFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'formhidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'form_hidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'formHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'formimage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'form_image' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'formImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'forminput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'form_input' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'formInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'formlabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'form_label' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'formLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'formmonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'form_month' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'formMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'formmonthselect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'form_month_select' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'formMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'formmulticheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'form_multi_checkbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'formMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'formnumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'form_number' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'formNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'formpassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'form_password' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'formPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'formradio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'form_radio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'formRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'formrange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'form_range' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'formRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'formreset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'form_reset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'formReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'formrow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'form_row' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'formRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'formsearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'form_search' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'formSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'formselect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'form_select' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'formSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'formsubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'form_submit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'formSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'formtel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'form_tel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'formTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'formtext' => 'Laminas\\Form\\View\\Helper\\FormText',
            'form_text' => 'Laminas\\Form\\View\\Helper\\FormText',
            'formText' => 'Laminas\\Form\\View\\Helper\\FormText',
            'FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
            'formtextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'form_text_area' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'FormTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formtime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'form_time' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'formTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'formurl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'form_url' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'formUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'formweek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'form_week' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'formWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'isGranted' => 'LmcRbacMvc\\View\\Helper\\IsGranted',
            'hasRole' => 'LmcRbacMvc\\View\\Helper\\HasRole',
            'currencyformat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'currencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'CurrencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'dateformat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'dateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'DateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'numberformat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'numberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'NumberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
            'Plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
            'translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
            'Translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
            'translateplural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'translatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'TranslatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'Zend\\I18n\\View\\Helper\\CurrencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
            'Zend\\I18n\\View\\Helper\\DateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
            'Zend\\I18n\\View\\Helper\\NumberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
            'Zend\\I18n\\View\\Helper\\Plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
            'Zend\\I18n\\View\\Helper\\Translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
            'Zend\\I18n\\View\\Helper\\TranslatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
            'localeUrl' => 'SlmLocale\\View\\Helper\\LocaleUrl',
            'localeMenu' => 'SlmLocale\\View\\Helper\\LocaleMenu',
            'primaryLanguage' => 'SlmLocale\\View\\Helper\\PrimaryLanguage'
        ],
        'factories' => [
            'Laminas\\Form\\View\\Helper\\Form' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormButton' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCollection' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormColor' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormElement' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\Form\\View\\Helper\\Factory\\FormElementErrorsFactory',
            'Laminas\\Form\\View\\Helper\\FormEmail' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormFile' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormHidden' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormImage' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormInput' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormLabel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormMonth' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormPassword' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRadio' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRange' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormReset' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRow' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSearch' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormText' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormUrl' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormWeek' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'LmcRbacMvc\\View\\Helper\\IsGranted' => 'LmcRbacMvc\\Factory\\IsGrantedViewHelperFactory',
            'LmcRbacMvc\\View\\Helper\\HasRole' => 'LmcRbacMvc\\Factory\\HasRoleViewHelperFactory',
            'Laminas\\I18n\\View\\Helper\\CurrencyFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\DateFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\NumberFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\Plural' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\Translate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\View\\Helper\\TranslatePlural' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'SlmLocale\\View\\Helper\\LocaleUrl' => 'SlmLocale\\Service\\LocaleUrlViewHelperFactory',
            'SlmLocale\\View\\Helper\\LocaleMenu' => 'SlmLocale\\Service\\LocaleMenuViewHelperFactory',
            'SlmLocale\\View\\Helper\\PrimaryLanguage' => 'SlmLocale\\Service\\PrimaryLanguageHelperFactory'
        ],
        'initializers' => [
            'VuFind\\ServiceManager\\ServiceInitializer'
        ]
    ],
    'route_manager' => [],
    'router' => [
        'routes' => [
            'default' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/[:controller[/[:action]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'index',
                        'action' => 'Home'
                    ]
                ]
            ],
            'alma-webhook' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Alma/Webhook/[:almaWebhookAction]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Alma',
                        'action' => 'Webhook'
                    ]
                ]
            ],
            'content-page' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Content/:page',
                    'constraints' => [
                        'page' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Content',
                        'action' => 'Content'
                    ]
                ]
            ],
            'shortlink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/short/[:id]',
                    'constraints' => [
                        'id' => '[a-zA-Z0-9]+'
                    ],
                    'defaults' => [
                        'controller' => 'Shortlink',
                        'action' => 'redirect'
                    ]
                ]
            ],
            'legacy-alphabrowse-results' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/AlphaBrowse/Results',
                    'defaults' => [
                        'controller' => 'Alphabrowse',
                        'action' => 'Home'
                    ]
                ]
            ],
            'legacy-bookcover' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/bookcover.php',
                    'defaults' => [
                        'controller' => 'Cover',
                        'action' => 'Show'
                    ]
                ]
            ],
            'legacy-summonrecord' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Summon/Record',
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'legacy-worldcatrecord' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/WorldCat/Record',
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'soap-shibboleth-logout-notification-handler' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/soap/shiblogout',
                    'defaults' => [
                        'controller' => 'ShibbolethLogoutNotification',
                        'action' => 'index'
                    ]
                ],
                'child_routes' => [
                    'get' => [
                        'type' => 'method',
                        'options' => [
                            'verb' => 'get',
                            'defaults' => [
                                'action' => 'get'
                            ]
                        ]
                    ],
                    'post' => [
                        'type' => 'method',
                        'options' => [
                            'verb' => 'post',
                            'defaults' => [
                                'action' => 'post'
                            ]
                        ]
                    ]
                ]
            ],
            'record' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Home'
                    ]
                ]
            ],
            'record-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'record-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'record-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'record-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'record-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Save'
                    ]
                ]
            ],
            'record-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Email'
                    ]
                ]
            ],
            'record-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'record-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'record-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Export'
                    ]
                ]
            ],
            'record-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'record-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'record-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Home'
                    ]
                ]
            ],
            'record-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'record-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'record-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'record-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'record-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'record-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'record-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Record/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Record',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'collection' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Home'
                    ]
                ]
            ],
            'collection-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'collection-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'collection-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'collection-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'collection-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Save'
                    ]
                ]
            ],
            'collection-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Email'
                    ]
                ]
            ],
            'collection-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'collection-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'collection-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Export'
                    ]
                ]
            ],
            'collection-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'collection-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'collection-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Home'
                    ]
                ]
            ],
            'collection-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'collection-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'collection-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'collection-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'collection-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'collection-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'collection-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Collection/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Collection',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'edsrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'edsrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'edsrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'edsrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'edsrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'edsrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Save'
                    ]
                ]
            ],
            'edsrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Email'
                    ]
                ]
            ],
            'edsrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'edsrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'edsrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Export'
                    ]
                ]
            ],
            'edsrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'edsrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'edsrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'edsrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'edsrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'edsrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'edsrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'edsrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'edsrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'edsrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EdsRecord/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EdsRecord',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'eitrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'eitrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'eitrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'eitrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'eitrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'eitrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Save'
                    ]
                ]
            ],
            'eitrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Email'
                    ]
                ]
            ],
            'eitrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'eitrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'eitrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Export'
                    ]
                ]
            ],
            'eitrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'eitrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'eitrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'eitrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'eitrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'eitrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'eitrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'eitrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'eitrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'eitrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/EITRecord/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'EITRecord',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'missingrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'missingrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'missingrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'missingrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'missingrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'missingrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Save'
                    ]
                ]
            ],
            'missingrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Email'
                    ]
                ]
            ],
            'missingrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'missingrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'missingrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Export'
                    ]
                ]
            ],
            'missingrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'missingrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'missingrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'missingrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'missingrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'missingrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'missingrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'missingrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'missingrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'missingrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MissingRecord/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MissingRecord',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'primorecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'primorecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'primorecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'primorecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'primorecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'primorecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Save'
                    ]
                ]
            ],
            'primorecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Email'
                    ]
                ]
            ],
            'primorecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'primorecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'primorecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Export'
                    ]
                ]
            ],
            'primorecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'primorecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'primorecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'primorecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'primorecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'primorecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'primorecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'primorecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'primorecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'primorecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/PrimoRecord/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'PrimoRecord',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'solrauthrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Home'
                    ]
                ]
            ],
            'solrauthrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'solrauthrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'solrauthrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'solrauthrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'solrauthrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Save'
                    ]
                ]
            ],
            'solrauthrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Email'
                    ]
                ]
            ],
            'solrauthrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'solrauthrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'solrauthrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Export'
                    ]
                ]
            ],
            'solrauthrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'solrauthrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'solrauthrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Home'
                    ]
                ]
            ],
            'solrauthrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'solrauthrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'solrauthrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'solrauthrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'solrauthrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'solrauthrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'solrauthrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Authority/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'summonrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'summonrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'summonrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'summonrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'summonrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'summonrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Save'
                    ]
                ]
            ],
            'summonrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Email'
                    ]
                ]
            ],
            'summonrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'summonrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'summonrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Export'
                    ]
                ]
            ],
            'summonrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'summonrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'summonrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'summonrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'summonrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'summonrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'summonrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'summonrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'summonrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'summonrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/SummonRecord/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'SummonRecord',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'worldcatrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'worldcatrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'worldcatrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'worldcatrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'worldcatrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'worldcatrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Save'
                    ]
                ]
            ],
            'worldcatrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Email'
                    ]
                ]
            ],
            'worldcatrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'worldcatrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'worldcatrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Export'
                    ]
                ]
            ],
            'worldcatrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'worldcatrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'worldcatrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Home'
                    ]
                ]
            ],
            'worldcatrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'worldcatrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'worldcatrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'worldcatrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'worldcatrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'worldcatrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'worldcatrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/WorldcatRecord/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'WorldcatRecord',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'search2record' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2record-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'search2record-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'search2record-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'search2record-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'search2record-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Save'
                    ]
                ]
            ],
            'search2record-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Email'
                    ]
                ]
            ],
            'search2record-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'search2record-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'search2record-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Export'
                    ]
                ]
            ],
            'search2record-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'search2record-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'search2record-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2record-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'search2record-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'search2record-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'search2record-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'search2record-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'search2record-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'search2record-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'search2collection' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2collection-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'search2collection-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'search2collection-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'search2collection-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'search2collection-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Save'
                    ]
                ]
            ],
            'search2collection-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Email'
                    ]
                ]
            ],
            'search2collection-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'search2collection-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'search2collection-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Export'
                    ]
                ]
            ],
            'search2collection-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'search2collection-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'search2collection-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2collection-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'search2collection-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'search2collection-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'search2collection-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'search2collection-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'search2collection-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'search2collection-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Collection/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Collection',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'search2collectionrecord' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id[/[:tab]]]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'tab' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2collectionrecord-addcomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/AddComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'AddComment'
                    ]
                ]
            ],
            'search2collectionrecord-deletecomment' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/DeleteComment',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'DeleteComment'
                    ]
                ]
            ],
            'search2collectionrecord-addtag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/AddTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'AddTag'
                    ]
                ]
            ],
            'search2collectionrecord-deletetag' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/DeleteTag',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'DeleteTag'
                    ]
                ]
            ],
            'search2collectionrecord-save' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Save',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Save'
                    ]
                ]
            ],
            'search2collectionrecord-email' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Email',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Email'
                    ]
                ]
            ],
            'search2collectionrecord-sms' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/SMS',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'SMS'
                    ]
                ]
            ],
            'search2collectionrecord-cite' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Cite',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Cite'
                    ]
                ]
            ],
            'search2collectionrecord-export' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Export',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Export'
                    ]
                ]
            ],
            'search2collectionrecord-rdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/RDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'RDF'
                    ]
                ]
            ],
            'search2collectionrecord-hold' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Hold',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'search2collectionrecord-home' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Home',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2collectionrecord-storageretrievalrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/StorageRetrievalRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'StorageRetrievalRequest'
                    ]
                ]
            ],
            'search2collectionrecord-ajaxtab' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/AjaxTab',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'AjaxTab'
                    ]
                ]
            ],
            'search2collectionrecord-illrequest' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/ILLRequest',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'ILLRequest'
                    ]
                ]
            ],
            'search2collectionrecord-pdf' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/PDF',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'PDF'
                    ]
                ]
            ],
            'search2collectionrecord-epub' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Epub',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Epub'
                    ]
                ]
            ],
            'search2collectionrecord-linkedtext' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/LinkedText',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'LinkedText'
                    ]
                ]
            ],
            'search2collectionrecord-permalink' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Search2Record/[:id]/Permalink',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Search2Record',
                        'action' => 'Permalink'
                    ]
                ]
            ],
            'feedback-form' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/Feedback/Form/[:id]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'Feedback',
                        'action' => 'Form'
                    ]
                ]
            ],
            'userList' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MyResearch/MyList/[:id]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'MyList'
                    ]
                ]
            ],
            'editList' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/MyResearch/EditList/[:id]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'EditList'
                    ]
                ]
            ],
            'editLibraryCard' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'options' => [
                    'route' => '/LibraryCards/editCard/[:id]',
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                    ],
                    'defaults' => [
                        'controller' => 'LibraryCards',
                        'action' => 'editCard'
                    ]
                ]
            ],
            'alphabrowse-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Alphabrowse/Home',
                    'defaults' => [
                        'controller' => 'Alphabrowse',
                        'action' => 'Home'
                    ]
                ]
            ],
            'author-facetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Author/FacetList',
                    'defaults' => [
                        'controller' => 'Author',
                        'action' => 'FacetList'
                    ]
                ]
            ],
            'author-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Author/Home',
                    'defaults' => [
                        'controller' => 'Author',
                        'action' => 'Home'
                    ]
                ]
            ],
            'author-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Author/Search',
                    'defaults' => [
                        'controller' => 'Author',
                        'action' => 'Search'
                    ]
                ]
            ],
            'authority-facetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Authority/FacetList',
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'FacetList'
                    ]
                ]
            ],
            'authority-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Authority/Home',
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Home'
                    ]
                ]
            ],
            'authority-record' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Authority/Record',
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Record'
                    ]
                ]
            ],
            'authority-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Authority/Search',
                    'defaults' => [
                        'controller' => 'Authority',
                        'action' => 'Search'
                    ]
                ]
            ],
            'browse-author' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Author',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Author'
                    ]
                ]
            ],
            'browse-dewey' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Dewey',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Dewey'
                    ]
                ]
            ],
            'browse-era' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Era',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Era'
                    ]
                ]
            ],
            'browse-genre' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Genre',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Genre'
                    ]
                ]
            ],
            'browse-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Home',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Home'
                    ]
                ]
            ],
            'browse-lcc' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/LCC',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'LCC'
                    ]
                ]
            ],
            'browse-region' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Region',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Region'
                    ]
                ]
            ],
            'browse-tag' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Tag',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Tag'
                    ]
                ]
            ],
            'browse-topic' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Browse/Topic',
                    'defaults' => [
                        'controller' => 'Browse',
                        'action' => 'Topic'
                    ]
                ]
            ],
            'cart-doexport' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/doExport',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'doExport'
                    ]
                ]
            ],
            'browzine-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/BrowZine/Home',
                    'defaults' => [
                        'controller' => 'BrowZine',
                        'action' => 'Home'
                    ]
                ]
            ],
            'browzine-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/BrowZine/Search',
                    'defaults' => [
                        'controller' => 'BrowZine',
                        'action' => 'Search'
                    ]
                ]
            ],
            'cart-email' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/Email',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'Email'
                    ]
                ]
            ],
            'cart-export' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/Export',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'Export'
                    ]
                ]
            ],
            'cart-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/Home',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'Home'
                    ]
                ]
            ],
            'cart-myresearchbulk' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/MyResearchBulk',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'MyResearchBulk'
                    ]
                ]
            ],
            'cart-processor' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/Processor',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'Processor'
                    ]
                ]
            ],
            'cart-save' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/Save',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'Save'
                    ]
                ]
            ],
            'cart-searchresultsbulk' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cart/SearchResultsBulk',
                    'defaults' => [
                        'controller' => 'Cart',
                        'action' => 'SearchResultsBulk'
                    ]
                ]
            ],
            'channels-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Channels/Home',
                    'defaults' => [
                        'controller' => 'Channels',
                        'action' => 'Home'
                    ]
                ]
            ],
            'channels-record' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Channels/Record',
                    'defaults' => [
                        'controller' => 'Channels',
                        'action' => 'Record'
                    ]
                ]
            ],
            'channels-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Channels/Search',
                    'defaults' => [
                        'controller' => 'Channels',
                        'action' => 'Search'
                    ]
                ]
            ],
            'collections-bytitle' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Collections/ByTitle',
                    'defaults' => [
                        'controller' => 'Collections',
                        'action' => 'ByTitle'
                    ]
                ]
            ],
            'collections-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Collections/Home',
                    'defaults' => [
                        'controller' => 'Collections',
                        'action' => 'Home'
                    ]
                ]
            ],
            'combined-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Combined/Home',
                    'defaults' => [
                        'controller' => 'Combined',
                        'action' => 'Home'
                    ]
                ]
            ],
            'combined-results' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Combined/Results',
                    'defaults' => [
                        'controller' => 'Combined',
                        'action' => 'Results'
                    ]
                ]
            ],
            'combined-searchbox' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Combined/SearchBox',
                    'defaults' => [
                        'controller' => 'Combined',
                        'action' => 'SearchBox'
                    ]
                ]
            ],
            'confirm-confirm' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Confirm/Confirm',
                    'defaults' => [
                        'controller' => 'Confirm',
                        'action' => 'Confirm'
                    ]
                ]
            ],
            'cover-show' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cover/Show',
                    'defaults' => [
                        'controller' => 'Cover',
                        'action' => 'Show'
                    ]
                ]
            ],
            'cover-unavailable' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Cover/Unavailable',
                    'defaults' => [
                        'controller' => 'Cover',
                        'action' => 'Unavailable'
                    ]
                ]
            ],
            'eds-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/EDS/Advanced',
                    'defaults' => [
                        'controller' => 'EDS',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'eds-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/EDS/Home',
                    'defaults' => [
                        'controller' => 'EDS',
                        'action' => 'Home'
                    ]
                ]
            ],
            'eds-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/EDS/Search',
                    'defaults' => [
                        'controller' => 'EDS',
                        'action' => 'Search'
                    ]
                ]
            ],
            'eit-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/EIT/Advanced',
                    'defaults' => [
                        'controller' => 'EIT',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'eit-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/EIT/Home',
                    'defaults' => [
                        'controller' => 'EIT',
                        'action' => 'Home'
                    ]
                ]
            ],
            'eit-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/EIT/Search',
                    'defaults' => [
                        'controller' => 'EIT',
                        'action' => 'Search'
                    ]
                ]
            ],
            'error-permissiondenied' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Error/PermissionDenied',
                    'defaults' => [
                        'controller' => 'Error',
                        'action' => 'PermissionDenied'
                    ]
                ]
            ],
            'error-unavailable' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Error/Unavailable',
                    'defaults' => [
                        'controller' => 'Error',
                        'action' => 'Unavailable'
                    ]
                ]
            ],
            'feedback-email' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Feedback/Email',
                    'defaults' => [
                        'controller' => 'Feedback',
                        'action' => 'Email'
                    ]
                ]
            ],
            'feedback-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Feedback/Home',
                    'defaults' => [
                        'controller' => 'Feedback',
                        'action' => 'Home'
                    ]
                ]
            ],
            'help-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Help/Home',
                    'defaults' => [
                        'controller' => 'Help',
                        'action' => 'Home'
                    ]
                ]
            ],
            'holds-edit' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Holds/Edit',
                    'defaults' => [
                        'controller' => 'Holds',
                        'action' => 'Edit'
                    ]
                ]
            ],
            'holds-list' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Holds/List',
                    'defaults' => [
                        'controller' => 'Holds',
                        'action' => 'List'
                    ]
                ]
            ],
            'install-done' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/Done',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'Done'
                    ]
                ]
            ],
            'install-fixbasicconfig' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixBasicConfig',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixBasicConfig'
                    ]
                ]
            ],
            'install-fixcache' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixCache',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixCache'
                    ]
                ]
            ],
            'install-fixdatabase' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixDatabase',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixDatabase'
                    ]
                ]
            ],
            'install-fixdependencies' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixDependencies',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixDependencies'
                    ]
                ]
            ],
            'install-fixils' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixILS',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixILS'
                    ]
                ]
            ],
            'install-fixsecurity' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixSecurity',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixSecurity'
                    ]
                ]
            ],
            'install-fixsolr' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixSolr',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixSolr'
                    ]
                ]
            ],
            'install-fixsslcerts' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/FixSSLCerts',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'FixSSLCerts'
                    ]
                ]
            ],
            'install-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/Home',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'Home'
                    ]
                ]
            ],
            'install-performsecurityfix' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/PerformSecurityFix',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'PerformSecurityFix'
                    ]
                ]
            ],
            'install-showsql' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Install/ShowSQL',
                    'defaults' => [
                        'controller' => 'Install',
                        'action' => 'ShowSQL'
                    ]
                ]
            ],
            'libguides-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibGuides/Home',
                    'defaults' => [
                        'controller' => 'LibGuides',
                        'action' => 'Home'
                    ]
                ]
            ],
            'libguides-results' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibGuides/Results',
                    'defaults' => [
                        'controller' => 'LibGuides',
                        'action' => 'Results'
                    ]
                ]
            ],
            'librarycards-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibraryCards/Home',
                    'defaults' => [
                        'controller' => 'LibraryCards',
                        'action' => 'Home'
                    ]
                ]
            ],
            'librarycards-selectcard' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibraryCards/SelectCard',
                    'defaults' => [
                        'controller' => 'LibraryCards',
                        'action' => 'SelectCard'
                    ]
                ]
            ],
            'librarycards-connectcard' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibraryCards/ConnectCard',
                    'defaults' => [
                        'controller' => 'LibraryCards',
                        'action' => 'ConnectCard'
                    ]
                ]
            ],
            'librarycards-connectcardlogin' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibraryCards/ConnectCardLogin',
                    'defaults' => [
                        'controller' => 'LibraryCards',
                        'action' => 'ConnectCardLogin'
                    ]
                ]
            ],
            'librarycards-deletecard' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/LibraryCards/DeleteCard',
                    'defaults' => [
                        'controller' => 'LibraryCards',
                        'action' => 'DeleteCard'
                    ]
                ]
            ],
            'myresearch-account' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Account',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Account'
                    ]
                ]
            ],
            'myresearch-changeemail' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/ChangeEmail',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'ChangeEmail'
                    ]
                ]
            ],
            'myresearch-changepassword' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/ChangePassword',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'ChangePassword'
                    ]
                ]
            ],
            'myresearch-checkedout' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/CheckedOut',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'CheckedOut'
                    ]
                ]
            ],
            'myresearch-delete' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Delete',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Delete'
                    ]
                ]
            ],
            'myresearch-deleteaccount' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/DeleteAccount',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'DeleteAccount'
                    ]
                ]
            ],
            'myresearch-deletelist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/DeleteList',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'DeleteList'
                    ]
                ]
            ],
            'myresearch-edit' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Edit',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Edit'
                    ]
                ]
            ],
            'myresearch-email' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Email',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Email'
                    ]
                ]
            ],
            'myresearch-emailnotverified' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/EmailNotVerified',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'EmailNotVerified'
                    ]
                ]
            ],
            'myresearch-favorites' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Favorites',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Favorites'
                    ]
                ]
            ],
            'myresearch-fines' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Fines',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Fines'
                    ]
                ]
            ],
            'myresearch-historicloans' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/HistoricLoans',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'HistoricLoans'
                    ]
                ]
            ],
            'myresearch-holds' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Holds',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Holds'
                    ]
                ]
            ],
            'myresearch-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Home',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Home'
                    ]
                ]
            ],
            'myresearch-illrequests' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/ILLRequests',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'ILLRequests'
                    ]
                ]
            ],
            'myresearch-logout' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Logout',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Logout'
                    ]
                ]
            ],
            'myresearch-newpassword' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/NewPassword',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'NewPassword'
                    ]
                ]
            ],
            'myresearch-profile' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Profile',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Profile'
                    ]
                ]
            ],
            'myresearch-recover' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Recover',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Recover'
                    ]
                ]
            ],
            'myresearch-savesearch' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/SaveSearch',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'SaveSearch'
                    ]
                ]
            ],
            'myresearch-schedulesearch' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/ScheduleSearch',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'ScheduleSearch'
                    ]
                ]
            ],
            'myresearch-storageretrievalrequests' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/StorageRetrievalRequests',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'StorageRetrievalRequests'
                    ]
                ]
            ],
            'myresearch-unsubscribe' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Unsubscribe',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Unsubscribe'
                    ]
                ]
            ],
            'myresearch-userlogin' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/UserLogin',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'UserLogin'
                    ]
                ]
            ],
            'myresearch-verify' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/Verify',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'Verify'
                    ]
                ]
            ],
            'myresearch-verifyemail' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/MyResearch/VerifyEmail',
                    'defaults' => [
                        'controller' => 'MyResearch',
                        'action' => 'VerifyEmail'
                    ]
                ]
            ],
            'oai-server' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/OAI/Server',
                    'defaults' => [
                        'controller' => 'OAI',
                        'action' => 'Server'
                    ]
                ]
            ],
            'overdrive-mycontent' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Overdrive/MyContent',
                    'defaults' => [
                        'controller' => 'Overdrive',
                        'action' => 'MyContent'
                    ]
                ]
            ],
            'overdrive-hold' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Overdrive/Hold',
                    'defaults' => [
                        'controller' => 'Overdrive',
                        'action' => 'Hold'
                    ]
                ]
            ],
            'pazpar2-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Pazpar2/Home',
                    'defaults' => [
                        'controller' => 'Pazpar2',
                        'action' => 'Home'
                    ]
                ]
            ],
            'pazpar2-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Pazpar2/Search',
                    'defaults' => [
                        'controller' => 'Pazpar2',
                        'action' => 'Search'
                    ]
                ]
            ],
            'primo-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Primo/Advanced',
                    'defaults' => [
                        'controller' => 'Primo',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'primo-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Primo/Home',
                    'defaults' => [
                        'controller' => 'Primo',
                        'action' => 'Home'
                    ]
                ]
            ],
            'primo-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Primo/Search',
                    'defaults' => [
                        'controller' => 'Primo',
                        'action' => 'Search'
                    ]
                ]
            ],
            'qrcode-show' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/QRCode/Show',
                    'defaults' => [
                        'controller' => 'QRCode',
                        'action' => 'Show'
                    ]
                ]
            ],
            'qrcode-unavailable' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/QRCode/Unavailable',
                    'defaults' => [
                        'controller' => 'QRCode',
                        'action' => 'Unavailable'
                    ]
                ]
            ],
            'records-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Records/Home',
                    'defaults' => [
                        'controller' => 'Records',
                        'action' => 'Home'
                    ]
                ]
            ],
            'relais-login' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Relais/Login',
                    'defaults' => [
                        'controller' => 'Relais',
                        'action' => 'Login'
                    ]
                ]
            ],
            'relais-request' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Relais/Request',
                    'defaults' => [
                        'controller' => 'Relais',
                        'action' => 'Request'
                    ]
                ]
            ],
            'search-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Advanced',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'search-blended' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Blended',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Blended'
                    ]
                ]
            ],
            'search-collectionfacetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/CollectionFacetList',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'CollectionFacetList'
                    ]
                ]
            ],
            'search-editmemory' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/EditMemory',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'EditMemory'
                    ]
                ]
            ],
            'search-email' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Email',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Email'
                    ]
                ]
            ],
            'search-facetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/FacetList',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'FacetList'
                    ]
                ]
            ],
            'search-history' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/History',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'History'
                    ]
                ]
            ],
            'search-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Home',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search-newitem' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/NewItem',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'NewItem'
                    ]
                ]
            ],
            'search-opensearch' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/OpenSearch',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'OpenSearch'
                    ]
                ]
            ],
            'search-reserves' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Reserves',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Reserves'
                    ]
                ]
            ],
            'search-reservesfacetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/ReservesFacetList',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'ReservesFacetList'
                    ]
                ]
            ],
            'search-results' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Results',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Results'
                    ]
                ]
            ],
            'search-suggest' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Suggest',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Suggest'
                    ]
                ]
            ],
            'search-versions' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search/Versions',
                    'defaults' => [
                        'controller' => 'Search',
                        'action' => 'Versions'
                    ]
                ]
            ],
            'search2-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search2/Advanced',
                    'defaults' => [
                        'controller' => 'Search2',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'search2-facetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search2/FacetList',
                    'defaults' => [
                        'controller' => 'Search2',
                        'action' => 'FacetList'
                    ]
                ]
            ],
            'search2-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search2/Home',
                    'defaults' => [
                        'controller' => 'Search2',
                        'action' => 'Home'
                    ]
                ]
            ],
            'search2-results' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search2/Results',
                    'defaults' => [
                        'controller' => 'Search2',
                        'action' => 'Results'
                    ]
                ]
            ],
            'search2-versions' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Search2/Versions',
                    'defaults' => [
                        'controller' => 'Search2',
                        'action' => 'Versions'
                    ]
                ]
            ],
            'summon-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Summon/Advanced',
                    'defaults' => [
                        'controller' => 'Summon',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'summon-facetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Summon/FacetList',
                    'defaults' => [
                        'controller' => 'Summon',
                        'action' => 'FacetList'
                    ]
                ]
            ],
            'summon-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Summon/Home',
                    'defaults' => [
                        'controller' => 'Summon',
                        'action' => 'Home'
                    ]
                ]
            ],
            'summon-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Summon/Search',
                    'defaults' => [
                        'controller' => 'Summon',
                        'action' => 'Search'
                    ]
                ]
            ],
            'tag-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Tag/Home',
                    'defaults' => [
                        'controller' => 'Tag',
                        'action' => 'Home'
                    ]
                ]
            ],
            'upgrade-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/Home',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'Home'
                    ]
                ]
            ],
            'upgrade-fixanonymoustags' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/FixAnonymousTags',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'FixAnonymousTags'
                    ]
                ]
            ],
            'upgrade-fixduplicatetags' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/FixDuplicateTags',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'FixDuplicateTags'
                    ]
                ]
            ],
            'upgrade-fixconfig' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/FixConfig',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'FixConfig'
                    ]
                ]
            ],
            'upgrade-fixdatabase' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/FixDatabase',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'FixDatabase'
                    ]
                ]
            ],
            'upgrade-fixmetadata' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/FixMetadata',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'FixMetadata'
                    ]
                ]
            ],
            'upgrade-getdbcredentials' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/GetDBCredentials',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'GetDBCredentials'
                    ]
                ]
            ],
            'upgrade-getdbencodingpreference' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/GetDbEncodingPreference',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'GetDbEncodingPreference'
                    ]
                ]
            ],
            'upgrade-getsourcedir' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/GetSourceDir',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'GetSourceDir'
                    ]
                ]
            ],
            'upgrade-getsourceversion' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/GetSourceVersion',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'GetSourceVersion'
                    ]
                ]
            ],
            'upgrade-reset' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/Reset',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'Reset'
                    ]
                ]
            ],
            'upgrade-showsql' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Upgrade/ShowSQL',
                    'defaults' => [
                        'controller' => 'Upgrade',
                        'action' => 'ShowSQL'
                    ]
                ]
            ],
            'web-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Web/Home',
                    'defaults' => [
                        'controller' => 'Web',
                        'action' => 'Home'
                    ]
                ]
            ],
            'web-facetlist' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Web/FacetList',
                    'defaults' => [
                        'controller' => 'Web',
                        'action' => 'FacetList'
                    ]
                ]
            ],
            'web-results' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Web/Results',
                    'defaults' => [
                        'controller' => 'Web',
                        'action' => 'Results'
                    ]
                ]
            ],
            'worldcat-advanced' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Worldcat/Advanced',
                    'defaults' => [
                        'controller' => 'Worldcat',
                        'action' => 'Advanced'
                    ]
                ]
            ],
            'worldcat-home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Worldcat/Home',
                    'defaults' => [
                        'controller' => 'Worldcat',
                        'action' => 'Home'
                    ]
                ]
            ],
            'worldcat-search' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Worldcat/Search',
                    'defaults' => [
                        'controller' => 'Worldcat',
                        'action' => 'Search'
                    ]
                ]
            ],
            'home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'index',
                        'action' => 'Home'
                    ]
                ]
            ],
            'admin' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/Admin',
                    'defaults' => [
                        'controller' => 'Admin',
                        'action' => 'Home'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'disabled' => [
                        'type' => 'Laminas\\Router\\Http\\Literal',
                        'options' => [
                            'route' => '/Disabled',
                            'defaults' => [
                                'controller' => 'Admin',
                                'action' => 'Disabled'
                            ]
                        ]
                    ],
                    'config' => [
                        'type' => 'Laminas\\Router\\Http\\Segment',
                        'options' => [
                            'route' => '/Config[/:action]',
                            'defaults' => [
                                'controller' => 'AdminConfig',
                                'action' => 'Home'
                            ]
                        ]
                    ],
                    'feedback' => [
                        'type' => 'Laminas\\Router\\Http\\Segment',
                        'options' => [
                            'route' => '/Feedback[/:action]',
                            'defaults' => [
                                'controller' => 'AdminFeedback',
                                'action' => 'Home'
                            ]
                        ]
                    ],
                    'maintenance' => [
                        'type' => 'Laminas\\Router\\Http\\Segment',
                        'options' => [
                            'route' => '/Maintenance[/:action]',
                            'defaults' => [
                                'controller' => 'AdminMaintenance',
                                'action' => 'Home'
                            ]
                        ]
                    ],
                    'social' => [
                        'type' => 'Laminas\\Router\\Http\\Segment',
                        'options' => [
                            'route' => '/Social[/:action]',
                            'defaults' => [
                                'controller' => 'AdminSocial',
                                'action' => 'Home'
                            ]
                        ]
                    ],
                    'tags' => [
                        'type' => 'Laminas\\Router\\Http\\Segment',
                        'options' => [
                            'route' => '/Tags[/:action]',
                            'defaults' => [
                                'controller' => 'AdminTags',
                                'action' => 'Home'
                            ]
                        ]
                    ],
                    'overdrive' => [
                        'type' => 'Laminas\\Router\\Http\\Segment',
                        'options' => [
                            'route' => '/Overdrive',
                            'defaults' => [
                                'controller' => 'AdminOverdrive',
                                'action' => 'Home'
                            ]
                        ]
                    ]
                ]
            ],
            'adminClearCacheApiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'delete,options',
                'options' => [
                    'route' => '/api/v1/admin/cache',
                    'defaults' => [
                        'controller' => 'AdminApi',
                        'action' => 'clearCache'
                    ]
                ]
            ],
            'apiHome' => [
                'type' => 'Laminas\\Router\\Http\\Segment',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api[/v1][/]',
                    'defaults' => [
                        'controller' => 'Api',
                        'action' => 'Index'
                    ]
                ]
            ],
            'searchApiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api/v1/search',
                    'defaults' => [
                        'controller' => 'SearchApi',
                        'action' => 'search'
                    ]
                ]
            ],
            'recordApiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api/v1/record',
                    'defaults' => [
                        'controller' => 'SearchApi',
                        'action' => 'record'
                    ]
                ]
            ],
            'search2Apiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api/v1/index2/search',
                    'defaults' => [
                        'controller' => 'Search2Api',
                        'action' => 'search'
                    ]
                ]
            ],
            'record2Apiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api/v1/index2/record',
                    'defaults' => [
                        'controller' => 'Search2Api',
                        'action' => 'record'
                    ]
                ]
            ],
            'websearchApiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api/v1/web/search',
                    'defaults' => [
                        'controller' => 'WebApi',
                        'action' => 'search'
                    ]
                ]
            ],
            'webrecordApiv1' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'verb' => 'get,post,options',
                'options' => [
                    'route' => '/api/v1/web/record',
                    'defaults' => [
                        'controller' => 'WebApi',
                        'action' => 'record'
                    ]
                ]
            ]
        ]
    ],
    'controller_plugins' => [
        'factories' => [
            'LmcRbacMvc\\Mvc\\Controller\\Plugin\\IsGranted' => 'LmcRbacMvc\\Factory\\IsGrantedPluginFactory',
            'VuFind\\Controller\\Plugin\\Captcha' => 'VuFind\\Controller\\Plugin\\CaptchaFactory',
            'VuFind\\Controller\\Plugin\\DbUpgrade' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\Controller\\Plugin\\Favorites' => 'VuFind\\Controller\\Plugin\\FavoritesFactory',
            'VuFind\\Controller\\Plugin\\Followup' => 'VuFind\\Controller\\Plugin\\FollowupFactory',
            'VuFind\\Controller\\Plugin\\Holds' => 'VuFind\\Controller\\Plugin\\AbstractRequestBaseFactory',
            'VuFind\\Controller\\Plugin\\ILLRequests' => 'VuFind\\Controller\\Plugin\\AbstractRequestBaseFactory',
            'VuFind\\Controller\\Plugin\\IlsRecords' => 'VuFind\\Controller\\Plugin\\IlsRecordsFactory',
            'VuFind\\Controller\\Plugin\\NewItems' => 'VuFind\\Controller\\Plugin\\NewItemsFactory',
            'VuFind\\Controller\\Plugin\\Permission' => 'VuFind\\Controller\\Plugin\\PermissionFactory',
            'VuFind\\Controller\\Plugin\\Renewals' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'VuFind\\Controller\\Plugin\\Reserves' => 'VuFind\\Controller\\Plugin\\ReservesFactory',
            'VuFind\\Controller\\Plugin\\ResultScroller' => 'VuFind\\Controller\\Plugin\\ResultScrollerFactory',
            'VuFind\\Controller\\Plugin\\StorageRetrievalRequests' => 'VuFind\\Controller\\Plugin\\AbstractRequestBaseFactory',
            'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'VuFind\\Controller\\Plugin\\FlashMessengerFactory'
        ],
        'aliases' => [
            'isGranted' => 'LmcRbacMvc\\Mvc\\Controller\\Plugin\\IsGranted',
            'captcha' => 'VuFind\\Controller\\Plugin\\Captcha',
            'dbUpgrade' => 'VuFind\\Controller\\Plugin\\DbUpgrade',
            'favorites' => 'VuFind\\Controller\\Plugin\\Favorites',
            'flashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
            'followup' => 'VuFind\\Controller\\Plugin\\Followup',
            'holds' => 'VuFind\\Controller\\Plugin\\Holds',
            'ILLRequests' => 'VuFind\\Controller\\Plugin\\ILLRequests',
            'ilsRecords' => 'VuFind\\Controller\\Plugin\\IlsRecords',
            'newItems' => 'VuFind\\Controller\\Plugin\\NewItems',
            'permission' => 'VuFind\\Controller\\Plugin\\Permission',
            'renewals' => 'VuFind\\Controller\\Plugin\\Renewals',
            'reserves' => 'VuFind\\Controller\\Plugin\\Reserves',
            'resultScroller' => 'VuFind\\Controller\\Plugin\\ResultScroller',
            'storageRetrievalRequests' => 'VuFind\\Controller\\Plugin\\StorageRetrievalRequests'
        ],
        'initializers' => [
            'VuFind\\ServiceManager\\ServiceInitializer'
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'error/403' => '/usr/local/vufind/vendor/lm-commons/lmc-rbac-mvc/config/../view/error/403.phtml',
            'laminas-developer-tools/toolbar/lmc-rbac' => '/usr/local/vufind/vendor/lm-commons/lmc-rbac-mvc/config/../view/laminas-developer-tools/toolbar/lmc-rbac.phtml'
        ],
        'display_not_found_reason' => false,
        'display_exceptions' => false,
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_path_stack' => []
    ],
    'laminas-developer-tools' => [
        'profiler' => [
            'collectors' => [
                'lmc_rbac' => 'LmcRbacMvc\\Collector\\RbacCollector'
            ]
        ],
        'toolbar' => [
            'entries' => [
                'lmc_rbac' => 'laminas-developer-tools/toolbar/lmc-rbac'
            ]
        ]
    ],
    'lmc_rbac' => [
        'guard_manager' => [],
        'role_provider_manager' => [
            'factories' => [
                'VuFind\\Role\\DynamicRoleProvider' => 'VuFind\\Role\\DynamicRoleProviderFactory'
            ]
        ],
        'assertion_manager' => [],
        'identity_provider' => 'VuFind\\Auth\\Manager',
        'guest_role' => 'guest',
        'role_provider' => [
            'VuFind\\Role\\DynamicRoleProvider' => [
                'map_legacy_settings' => true
            ]
        ],
        'vufind_permission_provider_manager' => []
    ],
    'filters' => [
        'aliases' => [
            'alnum' => 'Laminas\\I18n\\Filter\\Alnum',
            'Alnum' => 'Laminas\\I18n\\Filter\\Alnum',
            'alpha' => 'Laminas\\I18n\\Filter\\Alpha',
            'Alpha' => 'Laminas\\I18n\\Filter\\Alpha',
            'numberformat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'numberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'NumberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'numberparse' => 'Laminas\\I18n\\Filter\\NumberParse',
            'numberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
            'NumberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
            'Zend\\I18n\\Filter\\Alnum' => 'Laminas\\I18n\\Filter\\Alnum',
            'Zend\\I18n\\Filter\\Alpha' => 'Laminas\\I18n\\Filter\\Alpha',
            'Zend\\I18n\\Filter\\NumberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
            'Zend\\I18n\\Filter\\NumberParse' => 'Laminas\\I18n\\Filter\\NumberParse'
        ],
        'factories' => [
            'Laminas\\I18n\\Filter\\Alnum' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Filter\\Alpha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Filter\\NumberFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Filter\\NumberParse' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ]
    ],
    'validators' => [
        'aliases' => [
            'alnum' => 'Laminas\\I18n\\Validator\\Alnum',
            'Alnum' => 'Laminas\\I18n\\Validator\\Alnum',
            'alpha' => 'Laminas\\I18n\\Validator\\Alpha',
            'Alpha' => 'Laminas\\I18n\\Validator\\Alpha',
            'datetime' => 'Laminas\\I18n\\Validator\\DateTime',
            'dateTime' => 'Laminas\\I18n\\Validator\\DateTime',
            'DateTime' => 'Laminas\\I18n\\Validator\\DateTime',
            'float' => 'Laminas\\I18n\\Validator\\IsFloat',
            'Float' => 'Laminas\\I18n\\Validator\\IsFloat',
            'int' => 'Laminas\\I18n\\Validator\\IsInt',
            'Int' => 'Laminas\\I18n\\Validator\\IsInt',
            'isfloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'isFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'IsFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'isint' => 'Laminas\\I18n\\Validator\\IsInt',
            'isInt' => 'Laminas\\I18n\\Validator\\IsInt',
            'IsInt' => 'Laminas\\I18n\\Validator\\IsInt',
            'phonenumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'phoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'PhoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'postcode' => 'Laminas\\I18n\\Validator\\PostCode',
            'postCode' => 'Laminas\\I18n\\Validator\\PostCode',
            'PostCode' => 'Laminas\\I18n\\Validator\\PostCode',
            'Zend\\I18n\\Validator\\Alnum' => 'Laminas\\I18n\\Validator\\Alnum',
            'Zend\\I18n\\Validator\\Alpha' => 'Laminas\\I18n\\Validator\\Alpha',
            'Zend\\I18n\\Validator\\DateTime' => 'Laminas\\I18n\\Validator\\DateTime',
            'Zend\\I18n\\Validator\\IsFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
            'Zend\\I18n\\Validator\\IsInt' => 'Laminas\\I18n\\Validator\\IsInt',
            'Zend\\I18n\\Validator\\PhoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
            'Zend\\I18n\\Validator\\PostCode' => 'Laminas\\I18n\\Validator\\PostCode'
        ],
        'factories' => [
            'Laminas\\I18n\\Validator\\Alnum' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\Alpha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\DateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\IsFloat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\IsInt' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\PhoneNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\I18n\\Validator\\PostCode' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ]
    ],
    'slm_locale' => [
        'strategies' => []
    ],
    'vufind' => [
        'excluded_theme_prefixes' => [
            'Laminas'
        ],
        'extra_theme_prefixes' => [],
        'config_reader' => [],
        'pgsql_seq_mapping' => [
            'auth_hash' => [
                'id',
                'auth_hash_id_seq'
            ],
            'comments' => [
                'id',
                'comments_id_seq'
            ],
            'external_session' => [
                'id',
                'external_session_id_seq'
            ],
            'feedback' => [
                'id',
                'feedback_id_seq'
            ],
            'oai_resumption' => [
                'id',
                'oai_resumption_id_seq'
            ],
            'record' => [
                'id',
                'record_id_seq'
            ],
            'resource' => [
                'id',
                'resource_id_seq'
            ],
            'resource_tags' => [
                'id',
                'resource_tags_id_seq'
            ],
            'search' => [
                'id',
                'search_id_seq'
            ],
            'session' => [
                'id',
                'session_id_seq'
            ],
            'shortlinks' => [
                'id',
                'shortlinks_id_seq'
            ],
            'tags' => [
                'id',
                'tags_id_seq'
            ],
            'user' => [
                'id',
                'user_id_seq'
            ],
            'user_card' => [
                'id',
                'user_card_id_seq'
            ],
            'user_list' => [
                'id',
                'user_list_id_seq'
            ],
            'user_resource' => [
                'id',
                'user_resource_id_seq'
            ]
        ],
        'plugin_managers' => [
            'ajaxhandler' => [],
            'auth' => [],
            'autocomplete' => [],
            'captcha' => [],
            'channelprovider' => [],
            'content' => [],
            'content_authornotes' => [],
            'content_covers' => [],
            'content_excerpts' => [],
            'content_reviews' => [],
            'content_summaries' => [],
            'content_toc' => [],
            'contentblock' => [],
            'cover_layer' => [],
            'db_row' => [],
            'db_table' => [],
            'doilinker' => [],
            'form_handler' => [],
            'hierarchy_driver' => [],
            'hierarchy_treedataformatter' => [],
            'hierarchy_treedatasource' => [],
            'hierarchy_treerenderer' => [],
            'ils_driver' => [],
            'metadatavocabulary' => [],
            'recommend' => [],
            'record_fallbackloader' => [],
            'recorddriver' => [],
            'recordtab' => [],
            'related' => [],
            'resolver_driver' => [],
            'search_backend' => [],
            'search_facetcache' => [],
            'search_options' => [],
            'search_params' => [],
            'search_results' => [],
            'session' => [],
            'sitemap' => [],
            'urlshortener' => []
        ]
    ],
    'controllers' => [
        'factories' => [
            'VuFind\\Controller\\AjaxController' => 'VuFind\\Controller\\AjaxControllerFactory',
            'VuFind\\Controller\\AlmaController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\AlphabrowseController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\AuthorController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\AuthorityController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\BrowseController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
            'VuFind\\Controller\\BrowZineController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\CartController' => 'VuFind\\Controller\\CartControllerFactory',
            'VuFind\\Controller\\ChannelsController' => 'VuFind\\Controller\\ChannelsControllerFactory',
            'VuFind\\Controller\\CollectionController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
            'VuFind\\Controller\\CollectionsController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
            'VuFind\\Controller\\CombinedController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\ConfirmController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\ContentController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\CoverController' => 'VuFind\\Controller\\CoverControllerFactory',
            'VuFind\\Controller\\EdsController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\EdsrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\EITController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\EITrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\ErrorController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\ExternalAuthController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\FeedbackController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\Search2Controller' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\Search2recordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\Search2collectionController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
            'VuFind\\Controller\\HelpController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\HierarchyController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\HoldsController' => 'VuFind\\Controller\\HoldsControllerFactory',
            'VuFind\\Controller\\IndexController' => 'VuFind\\Controller\\IndexControllerFactory',
            'VuFind\\Controller\\InstallController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\LibGuidesController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\LibraryCardsController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\MissingrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\MyResearchController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\OaiController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\OAuth2Controller' => 'VuFind\\Controller\\OAuth2ControllerFactory',
            'VuFind\\Controller\\OverdriveController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\Pazpar2Controller' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\PrimoController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\PrimorecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\QRCodeController' => 'VuFind\\Controller\\QRCodeControllerFactory',
            'VuFind\\Controller\\RecordController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
            'VuFind\\Controller\\RecordsController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\RelaisController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\SearchController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\ShibbolethLogoutNotificationController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\ShortlinkController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
            'VuFind\\Controller\\SummonController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\SummonrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\TagController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\UpgradeController' => 'VuFind\\Controller\\UpgradeControllerFactory',
            'VuFind\\Controller\\WebController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\WorldcatController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFind\\Controller\\WorldcatrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\AdminController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\ConfigController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\FeedbackController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\MaintenanceController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\SocialstatsController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\TagsController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindAdmin\\Controller\\OverdriveController' => 'VuFind\\Controller\\AbstractBaseFactory',
            'VuFindApi\\Controller\\AdminApiController' => 'VuFindApi\\Controller\\AdminApiControllerFactory',
            'VuFindApi\\Controller\\ApiController' => 'VuFindApi\\Controller\\ApiControllerFactory',
            'VuFindApi\\Controller\\SearchApiController' => 'VuFindApi\\Controller\\SearchApiControllerFactory',
            'VuFindApi\\Controller\\Search2ApiController' => 'VuFindApi\\Controller\\Search2ApiControllerFactory',
            'VuFindApi\\Controller\\WebApiController' => 'VuFindApi\\Controller\\WebApiControllerFactory'
        ],
        'initializers' => [
            'VuFind\\ServiceManager\\ServiceInitializer'
        ],
        'aliases' => [
            'AJAX' => 'VuFind\\Controller\\AjaxController',
            'ajax' => 'VuFind\\Controller\\AjaxController',
            'Alma' => 'VuFind\\Controller\\AlmaController',
            'alma' => 'VuFind\\Controller\\AlmaController',
            'Alphabrowse' => 'VuFind\\Controller\\AlphabrowseController',
            'alphabrowse' => 'VuFind\\Controller\\AlphabrowseController',
            'Author' => 'VuFind\\Controller\\AuthorController',
            'author' => 'VuFind\\Controller\\AuthorController',
            'Authority' => 'VuFind\\Controller\\AuthorityController',
            'authority' => 'VuFind\\Controller\\AuthorityController',
            'Browse' => 'VuFind\\Controller\\BrowseController',
            'browse' => 'VuFind\\Controller\\BrowseController',
            'BrowZine' => 'VuFind\\Controller\\BrowZineController',
            'browzine' => 'VuFind\\Controller\\BrowZineController',
            'Cart' => 'VuFind\\Controller\\CartController',
            'cart' => 'VuFind\\Controller\\CartController',
            'Channels' => 'VuFind\\Controller\\ChannelsController',
            'channels' => 'VuFind\\Controller\\ChannelsController',
            'Collection' => 'VuFind\\Controller\\CollectionController',
            'collection' => 'VuFind\\Controller\\CollectionController',
            'Collections' => 'VuFind\\Controller\\CollectionsController',
            'collections' => 'VuFind\\Controller\\CollectionsController',
            'Combined' => 'VuFind\\Controller\\CombinedController',
            'combined' => 'VuFind\\Controller\\CombinedController',
            'Confirm' => 'VuFind\\Controller\\ConfirmController',
            'confirm' => 'VuFind\\Controller\\ConfirmController',
            'Content' => 'VuFind\\Controller\\ContentController',
            'content' => 'VuFind\\Controller\\ContentController',
            'Cover' => 'VuFind\\Controller\\CoverController',
            'cover' => 'VuFind\\Controller\\CoverController',
            'EDS' => 'VuFind\\Controller\\EdsController',
            'eds' => 'VuFind\\Controller\\EdsController',
            'EdsRecord' => 'VuFind\\Controller\\EdsrecordController',
            'edsrecord' => 'VuFind\\Controller\\EdsrecordController',
            'EIT' => 'VuFind\\Controller\\EITController',
            'eit' => 'VuFind\\Controller\\EITController',
            'EITRecord' => 'VuFind\\Controller\\EITrecordController',
            'eitrecord' => 'VuFind\\Controller\\EITrecordController',
            'Error' => 'VuFind\\Controller\\ErrorController',
            'error' => 'VuFind\\Controller\\ErrorController',
            'ExternalAuth' => 'VuFind\\Controller\\ExternalAuthController',
            'externalauth' => 'VuFind\\Controller\\ExternalAuthController',
            'Feedback' => 'VuFind\\Controller\\FeedbackController',
            'feedback' => 'VuFind\\Controller\\FeedbackController',
            'Search2' => 'VuFind\\Controller\\Search2Controller',
            'search2' => 'VuFind\\Controller\\Search2Controller',
            'Search2Collection' => 'VuFind\\Controller\\Search2collectionController',
            'search2collection' => 'VuFind\\Controller\\Search2collectionController',
            'Search2Record' => 'VuFind\\Controller\\Search2recordController',
            'search2record' => 'VuFind\\Controller\\Search2recordController',
            'Help' => 'VuFind\\Controller\\HelpController',
            'help' => 'VuFind\\Controller\\HelpController',
            'Hierarchy' => 'VuFind\\Controller\\HierarchyController',
            'hierarchy' => 'VuFind\\Controller\\HierarchyController',
            'Holds' => 'VuFind\\Controller\\HoldsController',
            'holds' => 'VuFind\\Controller\\HoldsController',
            'Index' => 'VuFind\\Controller\\IndexController',
            'index' => 'VuFind\\Controller\\IndexController',
            'Install' => 'VuFind\\Controller\\InstallController',
            'install' => 'VuFind\\Controller\\InstallController',
            'LibGuides' => 'VuFind\\Controller\\LibGuidesController',
            'libguides' => 'VuFind\\Controller\\LibGuidesController',
            'LibraryCards' => 'VuFind\\Controller\\LibraryCardsController',
            'librarycards' => 'VuFind\\Controller\\LibraryCardsController',
            'MissingRecord' => 'VuFind\\Controller\\MissingrecordController',
            'missingrecord' => 'VuFind\\Controller\\MissingrecordController',
            'MyResearch' => 'VuFind\\Controller\\MyResearchController',
            'myresearch' => 'VuFind\\Controller\\MyResearchController',
            'OAI' => 'VuFind\\Controller\\OaiController',
            'oai' => 'VuFind\\Controller\\OaiController',
            'OAuth2' => 'VuFind\\Controller\\OAuth2Controller',
            'oauth2' => 'VuFind\\Controller\\OAuth2Controller',
            'Overdrive' => 'VuFind\\Controller\\OverdriveController',
            'overdrive' => 'VuFind\\Controller\\OverdriveController',
            'Pazpar2' => 'VuFind\\Controller\\Pazpar2Controller',
            'pazpar2' => 'VuFind\\Controller\\Pazpar2Controller',
            'Primo' => 'VuFind\\Controller\\PrimoController',
            'primo' => 'VuFind\\Controller\\PrimoController',
            'PrimoRecord' => 'VuFind\\Controller\\PrimorecordController',
            'primorecord' => 'VuFind\\Controller\\PrimorecordController',
            'QRCode' => 'VuFind\\Controller\\QRCodeController',
            'qrcode' => 'VuFind\\Controller\\QRCodeController',
            'Record' => 'VuFind\\Controller\\RecordController',
            'record' => 'VuFind\\Controller\\RecordController',
            'Records' => 'VuFind\\Controller\\RecordsController',
            'records' => 'VuFind\\Controller\\RecordsController',
            'Relais' => 'VuFind\\Controller\\RelaisController',
            'relais' => 'VuFind\\Controller\\RelaisController',
            'Search' => 'VuFind\\Controller\\SearchController',
            'search' => 'VuFind\\Controller\\SearchController',
            'ShibbolethLogoutNotification' => 'VuFind\\Controller\\ShibbolethLogoutNotificationController',
            'shibbolethlogoutnotification' => 'VuFind\\Controller\\ShibbolethLogoutNotificationController',
            'Shortlink' => 'VuFind\\Controller\\ShortlinkController',
            'shortlink' => 'VuFind\\Controller\\ShortlinkController',
            'Summon' => 'VuFind\\Controller\\SummonController',
            'summon' => 'VuFind\\Controller\\SummonController',
            'SummonRecord' => 'VuFind\\Controller\\SummonrecordController',
            'summonrecord' => 'VuFind\\Controller\\SummonrecordController',
            'Tag' => 'VuFind\\Controller\\TagController',
            'tag' => 'VuFind\\Controller\\TagController',
            'Upgrade' => 'VuFind\\Controller\\UpgradeController',
            'upgrade' => 'VuFind\\Controller\\UpgradeController',
            'Web' => 'VuFind\\Controller\\WebController',
            'web' => 'VuFind\\Controller\\WebController',
            'Worldcat' => 'VuFind\\Controller\\WorldcatController',
            'worldcat' => 'VuFind\\Controller\\WorldcatController',
            'WorldcatRecord' => 'VuFind\\Controller\\WorldcatrecordController',
            'worldcatrecord' => 'VuFind\\Controller\\WorldcatrecordController',
            'Admin' => 'VuFindAdmin\\Controller\\AdminController',
            'AdminConfig' => 'VuFindAdmin\\Controller\\ConfigController',
            'AdminFeedback' => 'VuFindAdmin\\Controller\\FeedbackController',
            'AdminMaintenance' => 'VuFindAdmin\\Controller\\MaintenanceController',
            'AdminSocial' => 'VuFindAdmin\\Controller\\SocialstatsController',
            'AdminTags' => 'VuFindAdmin\\Controller\\TagsController',
            'AdminOverdrive' => 'VuFindAdmin\\Controller\\OverdriveController',
            'AdminApi' => 'VuFindApi\\Controller\\AdminApiController',
            'Api' => 'VuFindApi\\Controller\\ApiController',
            'SearchApi' => 'VuFindApi\\Controller\\SearchApiController',
            'Search2Api' => 'VuFindApi\\Controller\\Search2ApiController',
            'WebApi' => 'VuFindApi\\Controller\\WebApiController'
        ]
    ],
    'translator' => [],
    'translator_plugins' => [
        'factories' => [
            'VuFind\\I18n\\Translator\\Loader\\ExtendedIni' => 'VuFind\\I18n\\Translator\\Loader\\ExtendedIniFactory'
        ],
        'aliases' => [
            'ExtendedIni' => 'VuFind\\I18n\\Translator\\Loader\\ExtendedIni'
        ]
    ],
    'whoops' => [
        'ignored_exceptions' => [
            'VuFind\\Exception\\RecordMissing'
        ]
    ],
    'vufind_api' => [
        'register_controllers' => [
            'VuFindApi\\Controller\\AdminApiController',
            'VuFindApi\\Controller\\SearchApiController',
            'VuFindApi\\Controller\\Search2ApiController',
            'VuFindApi\\Controller\\WebApiController'
        ]
    ]
];
