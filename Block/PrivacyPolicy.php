<?php

namespace Vmasciotta\PrivacyPolicy\Block;

class PrivacyPolicy extends \Magento\Framework\View\Element\Template
{
    protected $_scopeConfig;
    protected $_moduleManager;

    public function __construct(\Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->_scopeConfig = $context->getScopeConfig();
        $this->_moduleManager = $moduleManager;
        parent::__construct($context, $data);
    }

    public function isPrivacyPolicyEnabled()
    {
        return $this->_moduleManager->isOutputEnabled('Vmasciotta_PrivacyPolicy');
    }

    public function getDisplayMode()
    {
        return $this->_scopeConfig->getValue(
            'privacy_policy/module_settings/display_mode',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getCmsPage()
    {
        return $this->_scopeConfig->getValue(
            'privacy_policy/module_settings/cms_page',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getStaticBlockId()
    {
        return $this->_scopeConfig->getValue(
            'privacy_policy/module_settings/static_block_id',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function getPrivacyUrl()
    {
        $cmsPage = $this->_scopeConfig->getValue(
            'privacy_policy/module_settings/cms_page',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $this->_urlBuilder->getUrl($cmsPage);
    }

    public function getPrivacyText()
    {

    }
}