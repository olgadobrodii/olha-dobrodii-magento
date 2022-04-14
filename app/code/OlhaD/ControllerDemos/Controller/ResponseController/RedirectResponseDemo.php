<?php
declare(strict_types=1);


namespace OlhaD\ControllerDemos\Controller\ResponseController;

use Magento\Framework\Controller\Result\Redirect;


class RedirectResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\RedirectFactory
     */
    private \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory;

    /**
     * RedirectDemo constructor.
     * @param \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
    ) {
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * Result  /
     * @return Redirect
     */
    public function execute(): Redirect
    {
        $result = $this->redirectFactory->create();

        return $result->setUrl('https://github.com/olgadobrodii/olha-dobrodii-magento');
    }
}
