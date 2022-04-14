<?php
declare(strict_types=1);


namespace OlhaD\ControllerDemos\Controller\ResponseController;

use Magento\Framework\Controller\Result\Forward;


class ForwardResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\ForwardFactory
     */
    private \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory;

    /**
     * ForwardResponseDemo constructor.
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
    ) {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * Result  /
     * @return Forward
     */
    public function execute(): Forward
    {
        $result = $this->forwardFactory->create();

        return $result->forward('jsonResponseDemo');
    }
}
