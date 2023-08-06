<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

/* These classes are skipped completely during comparison. */
return [
    'navigationMenu' => [
        Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ExtractDataFromCategoryTree::class => null,
        Magento\Customer\Model\Session::class => null,
        Magento\Framework\GraphQl\Query\Fields::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Framework\Module\ModuleList::class => null,
        Magento\Framework\Module\Manager::class => null,
    ],
    'productDetailByName' => [
        Magento\Customer\Model\Session::class => null,
        Magento\Framework\GraphQl\Query\Fields::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Store\Model\GroupRepository::class => null,
    ],
    'category' => [
        Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ExtractDataFromCategoryTree::class => null,
        Magento\Framework\GraphQl\Query\Fields::class => null,
    ],
    'productDetail' => [
        Magento\Framework\GraphQl\Query\Fields::class => null,
    ],
    'resolveUrl' => [
        Magento\Framework\GraphQl\Query\Fields::class => null,
    ],
    'createCustomer' => [
        Magento\Framework\Logger\LoggerProxy::class => null,
        Magento\Framework\View\Asset\PreProcessor\Helper\Sort::class => null,
        Magento\Framework\Filter\FilterManager::class => null,
        Magento\Store\Model\Address\Renderer::class => null,
        Magento\Customer\Model\CustomerRegistry::class => null,
        Magento\Eav\Model\ResourceModel\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\VersionControl\Metadata::class => null,
        Magento\Customer\Model\ResourceModel\Address\Relation::class => null,
        Magento\Framework\Validator\Factory::class => null,
        Magento\Customer\Model\ResourceModel\Address::class => null,
        Magento\Framework\Translate\Inline\ConfigInterface\Proxy::class => null,
        Magento\Framework\Translate\Inline::class => null,
        Magento\Framework\Json\Helper\Data::class => null,
        Magento\Directory\Helper\Data::class => null,
        Magento\TestFramework\Api\Config\Reader\FileResolver::class => null,
        Magento\Framework\Api\ExtensionAttribute\JoinProcessor::class => null,
        Magento\Customer\Model\ResourceModel\AddressRepository::class => null,
        Magento\Framework\Reflection\MethodsMap::class => null,
        Magento\Framework\Reflection\ExtensionAttributesProcessor\Proxy::class => null,
        Magento\Framework\Reflection\DataObjectProcessor::class => null,
        Magento\Framework\Api\DataObjectHelper::class => null,
        Magento\Customer\Model\AttributeMetadataConverter::class => null,
        Magento\Customer\Model\Metadata\CustomerMetadata::class => null,
        Magento\Customer\Model\Metadata\AttributeMetadataCache::class => null,
        Magento\Customer\Model\Metadata\CustomerCachedMetadata::class => null,
        Magento\Customer\Model\Config\Share::class => null,
        Magento\Customer\Model\ResourceModel\Customer::class => null,
        Magento\Framework\Api\ImageProcessor::class => null,
        Magento\Customer\Model\Session\Proxy::class => null,
        Magento\Customer\Model\Delegation\Storage::class => null,
        Magento\Customer\Model\GroupRegistry::class => null,
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Metadata::class => null,
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot::class => null,
        Magento\Tax\Model\TaxClass\Repository::class => null,
        Magento\Customer\Model\ResourceModel\GroupRepository::class => null,
        Magento\Customer\Model\ResourceModel\CustomerRepository::class => null,
        Magento\TestFramework\Mail\Template\TransportBuilderMock::class => null,
        Magento\Customer\Helper\View::class => null,
        Magento\Framework\Indexer\IndexerRegistry::class => null,
        Magento\Customer\Model\Customer::class => null,
        Magento\Framework\Session\SessionMaxSizeConfig::class => null,
        Magento\Framework\Session\SaveHandler::class => null,
        Magento\Paypal\Plugin\TransparentSessionChecker::class => null,
        Laminas\Uri\Uri::class => null,
        Magento\Backend\App\Area\FrontNameResolver::class => null,
        Magento\Backend\Helper\Data::class => null,
        Magento\GraphQl\Plugin\DisableSession::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Customer\Model\Session\SessionCleaner::class => null,
        Magento\Customer\Model\Authorization\CustomerSessionUserContext::class => null,
        Magento\JwtUserToken\Model\ResourceModel\FastStorageRevokedWrapper::class => null,
        Magento\Webapi\Model\Authorization\TokenUserContext::class => null,
        Magento\Authorization\Model\CompositeUserContext::class => null,
        Magento\Webapi\Model\WebapiRoleLocator::class => null,
        Magento\Customer\Model\Authentication::class => null,
        Magento\Company\Model\Company::class => null,
        'CustomerAddressSnapshot' => null,
        'EavVersionControlSnapshot' => null,
        Magento\Catalog\Helper\Product\Flat\Indexer::class => null,
        Magento\Catalog\Helper\Product::class => null,
        Magento\Framework\Url\Helper\Data::class => null,
        Magento\Customer\Model\Session::class => null,
        Magento\Framework\Validator\EmailAddress::class => null,
        Magento\CustomerGraphQl\Model\Customer\ValidateCustomerData\ValidateEmail::class => null,
        Magento\CustomerGraphQl\Model\Customer\ValidateCustomerData::class => null,
        Magento\Newsletter\Model\CustomerSubscriberCache::class => null,
        Magento\Newsletter\Model\SubscriptionManager::class => null,
        Magento\LoginAsCustomerAssistance\Model\IsAssistanceEnabled::class => null,
        Magento\Framework\MessageQueue\Code\Generator\Config\RemoteServiceReader\Communication::class => null,
        Magento\Framework\Webapi\ServiceInputProcessor::class => null,
        Magento\Framework\MessageQueue\Publisher\Config\RemoteService\Reader::class => null,
        Magento\Company\Model\Email\Transporter::class => null,
        Magento\Company\Model\Customer\CompanyAttributes::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Save::class => null,
        Magento\Framework\Pricing\Helper\Data::class => null,
        Magento\Catalog\Helper\Category::class => null,
        Magento\Catalog\Helper\Data::class => null,
        Magento\Tax\Helper\Data::class => null,
        Magento\CustomerBalance\Helper\Data::class => null,
        Magento\GiftCardAccount\Helper\Data::class => null,
        Magento\Weee\Helper\Data::class => null,
        Magento\GiftWrapping\Helper\Data::class => null,
        Magento\Reward\Helper\Data::class => null,
        Magento\Quote\Model\Quote\Address\Total\Collector::class => null,
        Magento\NegotiableQuote\Helper\Quote::class => null,
        Magento\Catalog\Helper\Product\Configuration::class => null,
        Magento\Bundle\Helper\Catalog\Product\Configuration::class => null,
        Magento\NegotiableQuote\Model\Email\LinkBuilder::class => null,
        Magento\NegotiableQuote\Model\Email\Sender::class => null,
        Magento\Eav\Model\AttributeDataFactory::class => null,
        Magento\PageCache\Model\Cache\Server::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Query::class => null,
        Magento\Logging\Helper\Data::class => null,
        Magento\Catalog\Helper\Product\Edit\Action\Attribute::class => null,
        Magento\Logging\Model\Handler\Controllers::class => null,
        Magento\Newsletter\Model\Plugin\CustomerPlugin::class => null,
        Magento\Newsletter\Helper\Data::class => null,
        Magento\CustomerSegment\Model\Customer::class => null,
        Magento\CustomerSegment\Observer\ProcessCustomerEventObserver::class => null,
        Magento\Developer\Helper\Data::class => null,
        Magento\Wishlist\Plugin\SaveWishlistDataAndAddReferenceKeyToBackUrl::class => null,
        Magento\Framework\View\Page\Config\Generator\Head::class => null,
        Magento\Store\Model\Argument\Interpreter\ServiceUrl::class => null,
        Magento\Framework\View\Layout\Argument\Interpreter\Url::class => null,
        Magento\Framework\Css\PreProcessor\Adapter\CssInliner::class => null,
        Magento\Framework\Module\ModuleList::class => null,
        Magento\Framework\Module\Manager::class => null,

        Magento\Authorization\Model\UserContextInterface\Proxy::class => null,
        Magento\Company\Model\CompanyAdminPermission::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Delete::class => null,
        Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper::class => null,
        Magento\Catalog\Model\Product\Attribute\Repository::class => null,
        Magento\Catalog\Model\ProductRepository::class => null,
        Magento\Framework\DataObject\Copy::class => null,
        Magento\Quote\Model\Quote\Item\Processor::class => null,
        Magento\Sales\Model\Config::class => null,
        Magento\Customer\Model\Session\Validators\CutoffValidator::class => null,
        Magento\Customer\Model\Session\Storage::class => null,
        Magento\Tax\Model\Calculation::class => null,
        Magento\OfflineShipping\Model\SalesRule\Calculator::class => null,
        Magento\SalesRule\Model\Validator::class => null,
        Magento\Sales\Model\ResourceModel\Order\Payment::class => null,
        Magento\Sales\Model\ResourceModel\Order\Status\History::class => null,
        Magento\Sales\Model\ResourceModel\Order::class => null,
        Magento\Quote\Model\ResourceModel\Quote::class => null,
        Magento\Quote\Model\Quote::class => null,
        Magento\NegotiableQuote\Model\NegotiableQuoteItemManagement::class => null,
        Magento\NegotiableQuote\Model\Quote\ViewAccess::class => null,
        Magento\CompanyCredit\Model\Email\Sender::class => null,
        Magento\NegotiableQuote\Model\NegotiableQuoteConverter::class => null,
        Magento\NegotiableQuote\Model\Discount\StateChanges\Applier::class => null,
        Magento\NegotiableQuote\Model\Discount\StateChanges\Provider::class => null,
        Magento\Backend\Model\Session::class => null,
        Magento\Checkout\Model\Session::class => null,
        Magento\Quote\Model\ResourceModel\Quote\Item::class => null,
        Magento\Backend\Model\Menu\Config::class => null,
        Magento\Backend\Model\Url::class => null,
        Magento\NegotiableQuote\Model\ResourceModel\QuoteGrid::class => null,
        Magento\Customer\Model\Indexer\AttributeProvider::class => null,
        Magento\Framework\App\Cache\FlushCacheByTags::class => null,
        Magento\CustomerGraphQl\Model\Context\AddUserInfoToContext::class => null,
        Magento\Eav\Helper\Data::class => null,
    ],
    'updateCustomer' => [
        Magento\Framework\Url\QueryParamsResolver::class => null,
        Magento\Framework\Registry::class => null,
        Magento\Customer\Model\AddressRegistry::class => null,
        Magento\Customer\Model\CustomerRegistry::class => null,
        Magento\Eav\Model\ResourceModel\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\VersionControl\Metadata::class => null,
        'CustomerAddressSnapshot' => null,
        Magento\Customer\Model\ResourceModel\Address\Relation::class => null,
        Magento\Framework\Validator\Factory::class => null,
        Magento\Customer\Api\CustomerRepositoryInterface\Proxy::class => null,
        Magento\Customer\Model\ResourceModel\Address::class => null,
        Magento\Framework\Translate\Inline\ConfigInterface\Proxy::class => null,
        Magento\Framework\Translate\Inline::class => null,
        Magento\Framework\Json\Helper\Data::class => null,
        Magento\Directory\Helper\Data::class => null,
        Magento\TestFramework\Api\Config\Reader\FileResolver::class => null,
        Magento\Framework\Api\ExtensionAttribute\JoinProcessor::class => null,
        Magento\Customer\Model\ResourceModel\AddressRepository::class => null,
        Magento\Framework\Reflection\MethodsMap::class => null,
        Magento\Framework\Reflection\ExtensionAttributesProcessor\Proxy::class => null,
        Magento\Framework\Reflection\DataObjectProcessor::class => null,
        Magento\Framework\Api\DataObjectHelper::class => null,
        Magento\Customer\Model\AttributeMetadataConverter::class => null,
        Magento\Customer\Model\AttributeMetadataDataProvider::class => null,
        Magento\Customer\Model\Metadata\CustomerMetadata::class => null,
        Magento\Customer\Model\Metadata\AttributeMetadataCache::class => null,
        Magento\Customer\Model\Metadata\CustomerCachedMetadata::class => null,
        Magento\Customer\Model\Config\Share::class => null,
        'EavVersionControlSnapshot' => null,
        Magento\Customer\Model\AccountConfirmation::class => null,
        Magento\Customer\Model\ResourceModel\Customer::class => null,
        Magento\Framework\Api\ImageProcessor::class => null,
        Magento\Customer\Model\Session\Proxy::class => null,
        Magento\Customer\Model\Delegation\Storage::class => null,
        Magento\Customer\Model\GroupRegistry::class => null,
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Metadata::class => null,
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot::class => null,
        Magento\Tax\Model\TaxClass\Repository::class => null,
        Magento\Customer\Model\ResourceModel\GroupRepository::class => null,
        Magento\Customer\Model\ResourceModel\CustomerRepository::class => null,
        Magento\Customer\Helper\View::class => null,
        Magento\Framework\Indexer\IndexerRegistry::class => null,
        Magento\Customer\Model\Customer::class => null,
        Magento\Framework\Session\SessionMaxSizeConfig::class => null,
        Magento\Framework\Session\SaveHandler::class => null,
        Magento\Framework\Session\Storage::class => null,
        Magento\Paypal\Plugin\TransparentSessionChecker::class => null,
        Laminas\Uri\Uri::class => null,
        Magento\Backend\App\Area\FrontNameResolver::class => null,
        Magento\Backend\Helper\Data::class => null,
        Magento\GraphQl\Plugin\DisableSession::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Customer\Model\Session\SessionCleaner::class => null,
        Magento\Customer\Model\Authorization\CustomerSessionUserContext::class => null,
        Magento\JwtUserToken\Model\ConfigurableJwtSettingsProvider::class => null,
        Magento\JwtUserToken\Model\Reader::class => null,
        Magento\JwtUserToken\Model\ResourceModel\FastStorageRevokedWrapper::class => null,
        Magento\Webapi\Model\Authorization\TokenUserContext::class => null,
        Magento\Authorization\Model\CompositeUserContext::class => null,
        Magento\Webapi\Model\WebapiRoleLocator::class => null,
        Magento\Customer\Model\Authentication::class => null,
        Magento\Customer\Model\AccountManagement::class => null,
        Magento\Company\Model\Company::class => null,
        Magento\Framework\MessageQueue\Code\Generator\Config\RemoteServiceReader\Communication::class => null,
        Magento\Framework\Webapi\ServiceInputProcessor::class => null,
        Magento\Framework\MessageQueue\Publisher\Config\RemoteService\Reader::class => null,
        Magento\Company\Model\Customer\CompanyAttributes::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Query::class => null,
        Magento\Customer\Model\Session::class => null,
        Magento\Customer\Model\Plugin\CustomerFlushFormKey::class => null,
        Magento\CustomerSegment\Model\Customer::class => null,
        Magento\CustomerSegment\Observer\ProcessEventGenericObserver::class => null,
        Magento\CustomerGraphQl\Model\Context\AddUserInfoToContext::class => null,
        Magento\Tax\Model\Calculation::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Save::class => null,
        Magento\Catalog\Helper\Data::class => null,
        Magento\Checkout\Model\Session::class => null,
        Magento\Bundle\Pricing\Price\TaxPrice::class => null,
        Magento\Eav\Model\AttributeDataFactory::class => null,
        Magento\Customer\Observer\AfterAddressSaveObserver::class => null,
        Magento\LoginAsCustomer\Model\GetLoggedAsCustomerAdminId::class => null,
        Magento\LoginAsCustomerLogging\Observer\LogSaveCustomerAddressObserver::class => null,
        Magento\GiftRegistry\Helper\Data::class => null,
        Magento\GiftRegistry\Observer\AddressDataAfterLoad::class => null,
        Magento\LoginAsCustomerLogging\Observer\LogSaveCustomerObserver::class => null,
        Magento\LoginAsCustomerAssistance\Model\SetAssistance::class => null,
        Magento\LoginAsCustomerAssistance\Plugin\CustomerPlugin::class => null,
        Magento\CustomerGraphQl\Plugin\ClearCustomerSessionAfterRequest::class => null,
        Magento\Framework\Module\ModuleList::class => null,
        Magento\Framework\Module\Manager::class => null,
        Magento\Framework\Translate\Inline\Proxy::class => null,
    ],
    'updateCustomerAddress' => [
        Magento\Framework\Url\QueryParamsResolver::class => null,
        Magento\Framework\Registry::class => null,
        Magento\Customer\Model\AddressRegistry::class => null,
        Magento\Customer\Model\CustomerRegistry::class => null,
        Magento\Eav\Model\ResourceModel\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\VersionControl\Metadata::class => null,
        'CustomerAddressSnapshot' => null,
        Magento\Customer\Model\ResourceModel\Address\Relation::class => null,
        Magento\Framework\Validator\Factory::class => null,
        Magento\Customer\Api\CustomerRepositoryInterface\Proxy::class => null,
        Magento\Customer\Model\ResourceModel\Address::class => null,
        Magento\Framework\Translate\Inline\ConfigInterface\Proxy::class => null,
        Magento\Framework\Translate\Inline::class => null,
        Magento\Framework\Json\Helper\Data::class => null,
        Magento\Directory\Helper\Data::class => null,
        Magento\TestFramework\Api\Config\Reader\FileResolver::class => null,
        Magento\Framework\Api\ExtensionAttribute\JoinProcessor::class => null,
        Magento\Customer\Model\ResourceModel\AddressRepository::class => null,
        Magento\Framework\Reflection\MethodsMap::class => null,
        Magento\Framework\Reflection\ExtensionAttributesProcessor\Proxy::class => null,
        Magento\Framework\Reflection\DataObjectProcessor::class => null,
        Magento\Framework\Api\DataObjectHelper::class => null,
        Magento\Customer\Model\AttributeMetadataConverter::class => null,
        Magento\Customer\Model\AttributeMetadataDataProvider::class => null,
        Magento\Customer\Model\Metadata\CustomerMetadata::class => null,
        Magento\Customer\Model\Metadata\AttributeMetadataCache::class => null,
        Magento\Customer\Model\Metadata\CustomerCachedMetadata::class => null,
        Magento\Customer\Model\Config\Share::class => null,
        'EavVersionControlSnapshot' => null,
        Magento\Customer\Model\AccountConfirmation::class => null,
        Magento\Customer\Model\ResourceModel\Customer::class => null,
        Magento\Framework\Api\ImageProcessor::class => null,
        Magento\Customer\Model\Session\Proxy::class => null,
        Magento\Customer\Model\Delegation\Storage::class => null,
        Magento\Tax\Model\TaxClass\Repository::class => null,
        Magento\Customer\Model\ResourceModel\CustomerRepository::class => null,
        Magento\Customer\Helper\View::class => null,
        Magento\Framework\Indexer\IndexerRegistry::class => null,
        Magento\Customer\Model\Customer::class => null,
        Magento\Framework\Session\SessionMaxSizeConfig::class => null,
        Magento\Framework\Session\SaveHandler::class => null,
        Magento\Framework\Session\Storage::class => null,
        Magento\Paypal\Plugin\TransparentSessionChecker::class => null,
        Laminas\Uri\Uri::class => null,
        Magento\Backend\App\Area\FrontNameResolver::class => null,
        Magento\Backend\Helper\Data::class => null,
        Magento\GraphQl\Plugin\DisableSession::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Customer\Model\Session\SessionCleaner::class => null,
        Magento\Customer\Model\Authorization\CustomerSessionUserContext::class => null,
        Magento\JwtUserToken\Model\ConfigurableJwtSettingsProvider::class => null,
        Magento\JwtUserToken\Model\Reader::class => null,
        Magento\JwtUserToken\Model\ResourceModel\FastStorageRevokedWrapper::class => null,
        Magento\Webapi\Model\Authorization\TokenUserContext::class => null,
        Magento\Authorization\Model\CompositeUserContext::class => null,
        Magento\Customer\Model\Authentication::class => null,
        Magento\Customer\Model\AccountManagement::class => null,
        Magento\Company\Model\Company::class => null,
        Magento\Framework\MessageQueue\Code\Generator\Config\RemoteServiceReader\Communication::class => null,
        Magento\Framework\Webapi\ServiceInputProcessor::class => null,
        Magento\Framework\MessageQueue\Publisher\Config\RemoteService\Reader::class => null,
        Magento\Customer\Model\Session::class => null,
        Magento\Customer\Model\Plugin\CustomerFlushFormKey::class => null,
        Magento\CustomerSegment\Model\Customer::class => null,
        Magento\CustomerSegment\Observer\ProcessEventGenericObserver::class => null,
        Magento\CustomerGraphQl\Model\Context\AddUserInfoToContext::class => null,
        Magento\Tax\Model\Calculation::class => null,
        Magento\GiftRegistry\Helper\Data::class => null,
        Magento\GiftRegistry\Observer\AddressDataAfterLoad::class => null,
        Magento\Eav\Model\AttributeDataFactory::class => null,
        Magento\Customer\Observer\AfterAddressSaveObserver::class => null,
        Magento\Logging\Model\Handler\Controllers::class => null,
        Magento\LoginAsCustomer\Model\GetLoggedAsCustomerAdminId::class => null,
        Magento\LoginAsCustomerLogging\Observer\LogSaveCustomerAddressObserver::class => null,
        Magento\Framework\App\View::class => null,
        Magento\Framework\App\Action\Context::class => null,
        Magento\Catalog\Helper\Data::class => null,
        Magento\Checkout\Model\Session::class => null,
        Magento\Bundle\Pricing\Price\TaxPrice::class => null,
        Magento\CustomerGraphQl\Plugin\ClearCustomerSessionAfterRequest::class => null,
        Magento\Framework\Module\ModuleList::class => null,
        Magento\Framework\Module\Manager::class => null,
        Magento\Framework\Translate\Inline\Proxy::class => null,
    ],
    'updateCustomerEmail' => [
        Magento\Framework\Url\QueryParamsResolver::class => null,
        Magento\Framework\Registry::class => null,
        Magento\Customer\Model\AddressRegistry::class => null,
        Magento\Customer\Model\CustomerRegistry::class => null,
        Magento\Eav\Model\ResourceModel\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\VersionControl\Metadata::class => null,
        'CustomerAddressSnapshot' => null,
        Magento\Customer\Model\ResourceModel\Address\Relation::class => null,
        Magento\Framework\Validator\Factory::class => null,
        Magento\Customer\Api\CustomerRepositoryInterface\Proxy::class => null,
        Magento\Customer\Model\ResourceModel\Address::class => null,
        Magento\Framework\Translate\Inline\ConfigInterface\Proxy::class => null,
        Magento\Framework\Translate\Inline::class => null,
        Magento\Framework\Json\Helper\Data::class => null,
        Magento\Directory\Helper\Data::class => null,
        Magento\TestFramework\Api\Config\Reader\FileResolver::class => null,
        Magento\Framework\Api\ExtensionAttribute\JoinProcessor::class => null,
        Magento\Customer\Model\ResourceModel\AddressRepository::class => null,
        Magento\Framework\Reflection\MethodsMap::class => null,
        Magento\Framework\Reflection\ExtensionAttributesProcessor\Proxy::class => null,
        Magento\Framework\Reflection\DataObjectProcessor::class => null,
        Magento\Framework\Api\DataObjectHelper::class => null,
        Magento\Customer\Model\AttributeMetadataConverter::class => null,
        Magento\Customer\Model\AttributeMetadataDataProvider::class => null,
        Magento\Customer\Model\Metadata\CustomerMetadata::class => null,
        Magento\Customer\Model\Metadata\AttributeMetadataCache::class => null,
        Magento\Customer\Model\Metadata\CustomerCachedMetadata::class => null,
        Magento\Customer\Model\Config\Share::class => null,
        'EavVersionControlSnapshot' => null,
        Magento\Customer\Model\AccountConfirmation::class => null,
        Magento\Customer\Model\ResourceModel\Customer::class => null,
        Magento\Framework\Api\ImageProcessor::class => null,
        Magento\Customer\Model\Session\Proxy::class => null,
        Magento\Customer\Model\Delegation\Storage::class => null,
        Magento\Customer\Model\GroupRegistry::class => null,
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Metadata::class => null,
        Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot::class => null,
        Magento\Tax\Model\TaxClass\Repository::class => null,
        Magento\Customer\Model\ResourceModel\GroupRepository::class => null,
        Magento\Customer\Model\ResourceModel\CustomerRepository::class => null,
        Magento\Customer\Helper\View::class => null,
        Magento\Framework\Indexer\IndexerRegistry::class => null,
        Magento\Customer\Model\Customer::class => null,
        Magento\Framework\Session\SessionMaxSizeConfig::class => null,
        Magento\Framework\Session\SaveHandler::class => null,
        Magento\Framework\Session\Storage::class => null,
        Magento\Paypal\Plugin\TransparentSessionChecker::class => null,
        Laminas\Uri\Uri::class => null,
        Magento\Backend\App\Area\FrontNameResolver::class => null,
        Magento\Backend\Helper\Data::class => null,
        Magento\GraphQl\Plugin\DisableSession::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Customer\Model\Session\SessionCleaner::class => null,
        Magento\Customer\Model\Authorization\CustomerSessionUserContext::class => null,
        Magento\JwtUserToken\Model\ConfigurableJwtSettingsProvider::class => null,
        Magento\JwtUserToken\Model\Reader::class => null,
        Magento\JwtUserToken\Model\ResourceModel\FastStorageRevokedWrapper::class => null,
        Magento\Webapi\Model\Authorization\TokenUserContext::class => null,
        Magento\Authorization\Model\CompositeUserContext::class => null,
        Magento\Webapi\Model\WebapiRoleLocator::class => null,
        Magento\Customer\Model\Authentication::class => null,
        Magento\Customer\Model\AccountManagement::class => null,
        Magento\Company\Model\Company::class => null,
        Magento\Framework\MessageQueue\Code\Generator\Config\RemoteServiceReader\Communication::class => null,
        Magento\Framework\Webapi\ServiceInputProcessor::class => null,
        Magento\Framework\MessageQueue\Publisher\Config\RemoteService\Reader::class => null,
        Magento\Company\Model\Customer\CompanyAttributes::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Query::class => null,
        Magento\Customer\Model\Session::class => null,
        Magento\Customer\Model\Plugin\CustomerFlushFormKey::class => null,
        Magento\CustomerSegment\Model\Customer::class => null,
        Magento\CustomerSegment\Observer\ProcessEventGenericObserver::class => null,
        Magento\CustomerGraphQl\Model\Context\AddUserInfoToContext::class => null,
        Magento\Tax\Model\Calculation::class => null,
        Magento\Company\Plugin\Customer\Api\CustomerRepository\Save::class => null,
        Magento\Catalog\Helper\Data::class => null,
        Magento\Checkout\Model\Session::class => null,
        Magento\Bundle\Pricing\Price\TaxPrice::class => null,
        Magento\Eav\Model\AttributeDataFactory::class => null,
        Magento\Customer\Observer\AfterAddressSaveObserver::class => null,
        Magento\LoginAsCustomer\Model\GetLoggedAsCustomerAdminId::class => null,
        Magento\LoginAsCustomerLogging\Observer\LogSaveCustomerAddressObserver::class => null,
        Magento\GiftRegistry\Helper\Data::class => null,
        Magento\GiftRegistry\Observer\AddressDataAfterLoad::class => null,
        Magento\LoginAsCustomerLogging\Observer\LogSaveCustomerObserver::class => null,
        Magento\CustomerGraphQl\Plugin\ClearCustomerSessionAfterRequest::class => null,
        Magento\Framework\Module\ModuleList::class => null,
        Magento\Framework\Module\Manager::class => null,
        Magento\GraphQlCache\Model\Plugin\Auth\TokenIssuer::class => null,
        Magento\Framework\Validator\EmailAddress::class => null,
        Magento\CustomerGraphQl\Model\Customer\ValidateCustomerData\ValidateEmail::class => null,
        Magento\CustomerGraphQl\Model\Customer\ValidateCustomerData::class => null,
        Magento\Logging\Model\Handler\Controllers::class => null,
        Magento\Framework\App\View::class => null,
        Magento\Framework\App\Action\Context::class => null,
        Magento\Quote\Model\Quote\Address\Total\Collector::class => null,
    ],
    'generateCustomerToken' => [
        Magento\Customer\Model\CustomerRegistry::class => null,
        Magento\Eav\Model\ResourceModel\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\Attribute\Set::class => null,
        Magento\Eav\Model\Entity\VersionControl\Metadata::class => null,
        'CustomerAddressSnapshot' => null,
        Magento\Customer\Model\ResourceModel\Address\Relation::class => null,
        Magento\Customer\Api\CustomerRepositoryInterface\Proxy::class => null,
        Magento\Customer\Model\ResourceModel\Address::class => null,
        Magento\Framework\Translate\Inline\ConfigInterface\Proxy::class => null,
        Magento\Framework\Translate\Inline::class => null,
        Magento\Framework\Json\Helper\Data::class => null,
        Magento\Directory\Helper\Data::class => null,
        Magento\TestFramework\Api\Config\Reader\FileResolver::class => null,
        Magento\Framework\Api\ExtensionAttribute\JoinProcessor::class => null,
        Magento\Customer\Model\ResourceModel\AddressRepository::class => null,
        Magento\Framework\Reflection\MethodsMap::class => null,
        Magento\Framework\Reflection\ExtensionAttributesProcessor\Proxy::class => null,
        Magento\Framework\Reflection\DataObjectProcessor::class => null,
        Magento\Framework\Api\DataObjectHelper::class => null,
        Magento\Customer\Model\AttributeMetadataConverter::class => null,
        Magento\Customer\Model\AttributeMetadataDataProvider::class => null,
        Magento\Customer\Model\Metadata\CustomerMetadata::class => null,
        Magento\Customer\Model\Metadata\AttributeMetadataCache::class => null,
        Magento\Customer\Model\Metadata\CustomerCachedMetadata::class => null,
        Magento\Customer\Model\Config\Share::class => null,
        'EavVersionControlSnapshot' => null,
        Magento\Customer\Model\ResourceModel\Customer::class => null,
        Magento\Framework\Api\ImageProcessor::class => null,
        Magento\Customer\Model\Session\Proxy::class => null,
        Magento\Customer\Model\Delegation\Storage::class => null,
        Magento\Tax\Model\TaxClass\Repository::class => null,
        Magento\Customer\Model\ResourceModel\CustomerRepository::class => null,
        Magento\Customer\Helper\View::class => null,
        Magento\Customer\Model\Customer::class => null,
        Magento\Framework\Session\SessionMaxSizeConfig::class => null,
        Magento\Framework\Session\SaveHandler::class => null,
        Magento\Framework\Session\Storage::class => null,
        Magento\Paypal\Plugin\TransparentSessionChecker::class => null,
        Laminas\Uri\Uri::class => null,
        Magento\Backend\App\Area\FrontNameResolver::class => null,
        Magento\Backend\Helper\Data::class => null,
        Magento\GraphQl\Plugin\DisableSession::class => null,
        Magento\Framework\Session\Generic::class => null,
        Magento\Customer\Model\Session\SessionCleaner::class => null,
        Magento\Customer\Model\Authorization\CustomerSessionUserContext::class => null,
        Magento\JwtUserToken\Model\ConfigurableJwtSettingsProvider::class => null,
        Magento\JwtUserToken\Model\Reader::class => null,
        Magento\JwtUserToken\Model\ResourceModel\FastStorageRevokedWrapper::class => null,
        Magento\Webapi\Model\Authorization\TokenUserContext::class => null,
        Magento\Authorization\Model\CompositeUserContext::class => null,
        Magento\Customer\Model\Authentication::class => null,
        Magento\Company\Model\Company::class => null,
        Magento\Customer\Model\Session::class => null,
        Magento\Framework\MessageQueue\Code\Generator\Config\RemoteServiceReader\Communication::class => null,
        Magento\Framework\Webapi\ServiceInputProcessor::class => null,
        Magento\Framework\MessageQueue\Publisher\Config\RemoteService\Reader::class => null,
    ],
    '*' => [
        Magento\TestFramework\Interception\PluginList::class => null,
        // memory leak, wrong sql, potential issues
        Magento\Framework\Event\Config\Data::class => null,
        Magento\Framework\App\AreaList::class => null,
        'customRemoteFilesystem' => null,
        Magento\Store\App\Config\Type\Scopes::class => null,
        Magento\Framework\Module\Dir\Reader::class => null,
        Magento\Framework\Module\PackageInfo::class => null,
        Magento\Framework\App\Language\Dictionary::class => null,
        Magento\Framework\ObjectManager\ConfigInterface::class => null,
        Magento\Framework\App\Cache\Type\Config::class => null,
        Magento\Framework\Interception\PluginListGenerator::class => null,
        Magento\TestFramework\App\Config::class => null,
        Magento\TestFramework\Request::class => null,
        Magento\Framework\View\FileSystem::class => null,
        Magento\Framework\App\Config\FileResolver::class => null,
        Magento\TestFramework\ErrorLog\Logger::class => null,
        'translationConfigSourceAggregated' => null,
        Magento\Framework\App\Request\Http\Proxy::class => null,
        Magento\Framework\Event\Config\Reader\Proxy::class => null,
        Magento\Theme\Model\View\Design\Proxy::class => null,
        Magento\Translation\Model\Source\InitialTranslationSource\Proxy::class => null,
        Magento\Translation\App\Config\Type\Translation::class => null,
        Magento\Backend\App\Request\PathInfoProcessor\Proxy::class => null,
        Magento\Framework\View\Asset\Source::class => null,
        Magento\Framework\Translate\ResourceInterface\Proxy::class => null,
        Magento\Framework\Locale\Resolver\Proxy::class => null,
        Magento\MediaStorage\Helper\File\Storage\Database::class => null,
        Magento\Framework\App\Cache\Proxy::class => null,
        Magento\Framework\Translate::class => null,
        Magento\Store\Model\StoreManager::class => null,
        Magento\Framework\App\Http\Context::class => null,
        Magento\TestFramework\Response::class => null,
        Magento\Store\Model\WebsiteRepository::class => null,
        Magento\Framework\Locale\Resolver::class => null,
        Magento\Store\Model\GroupRepository::class => null,
        Magento\Store\Model\StoreRepository::class => null,
        Magento\Framework\View\Design\Fallback\RulePool::class => null,
        Magento\Framework\View\Asset\Repository::class => null,
        Magento\Framework\HTTP\Header::class => null,
        Magento\Framework\App\Route\Config::class => null,
        Magento\Store\Model\System\Store::class => null,
        Magento\AwsS3\Driver\CredentialsCache::class => null,
        Magento\Eav\Model\Config::class => null,
        'AssetPreProcessorPool' => null,
        Magento\GraphQl\Model\Query\ContextFactory::class => null,
        'viewFileMinifiedFallbackResolver' => null,
        Magento\Framework\View\Asset\Minification::class => null,
        Magento\Catalog\Model\ResourceModel\Product\Attribute\Collection::class => null,
        Magento\Framework\Url::class => null,
        Magento\Framework\HTTP\PhpEnvironment\RemoteAddress::class => null,
    ],
    '' => [
    ],
];
