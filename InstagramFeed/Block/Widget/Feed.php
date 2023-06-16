<?php

namespace Dev\InstagramFeed\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Asset\Repository;

class Feed extends Template implements BlockInterface
{
    protected $_template = "Dev_InstagramFeed::widget/feed.phtml";
    protected $assetRepository;

    const API_URL = 'https://graph.instagram.com/me/media';

    public function __construct(
        Context $context,
        Repository $assetRepository,
        array $data = []
    )
    {
        $this->assetRepository = $assetRepository;
        parent::__construct($context, $data);
    }

    public function isEnable()
    {
        return $this->getData('status');
    }

    public function getFeedUrl()
    {
        $token = $this->getAccessToken();

        return self::API_URL . '?' . http_build_query([
            'access_token' => $token,
            'fields'       => 'id, caption, media_type, media_url, permalink'
        ]);
    }

    public function getAccessToken()
    {
        return $this->getData('access_token');
    }

    public function getTitle()
    {
        return $this->getData('title');
    }

    public function getLayout()
    {
        return $this->getData('layout');
    }

    public function getAssetUrl($asset)
    {
        return $this->assetRepository->createAsset($asset)->getUrl();
    }
}