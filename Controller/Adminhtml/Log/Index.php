<?php
/**
 * Database logger
 * Copyright (C) 2017  Experius
 *
 * This file is part of Experius/Dblogger.
 *
 * Experius/Dblogger is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Experius\Dblogger\Controller\Adminhtml\Log;

/**
 * Class Index
 * @package Experius\Dblogger\Controller\Adminhtml\Log
 */
class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Experius_Dblogger::top_level';
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Experius::experius_dblogger');
        $resultPage->getConfig()->getTitle()->prepend(__("Log"));
        return $resultPage;
    }
}
