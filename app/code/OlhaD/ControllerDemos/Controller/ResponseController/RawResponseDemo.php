<?php
declare(strict_types=1);


namespace OlhaD\ControllerDemos\Controller\ResponseController;

use Magento\Framework\Controller\Result\Raw;


class RawResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    private \Magento\Framework\Controller\Result\RawFactory $rawFactory;

    /**
     * RawResponseDemo constructor.
     * @param \Magento\Framework\Controller\Result\RawFactory $rawFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    ) {
        $this->rawFactory = $rawFactory;
    }

    /**
     * Controller Demos
     * @return Raw
     */
    public function execute(): Raw
    {
        $result = $this->rawFactory->create();

        return $result->setHeader('Content-Type', 'text/html')
            ->setContents(
                <<<HTML
                    <html>
                        <body>
                            <h1>RawResponseDemo page</h1>
                            <ul>
                                <li>
                                    <a href="/olha-d-controller-demos/responsecontroller/redirectresponsedemo" target="_blank">RedirectResponseDemo page</a>
                                </li>
                                <li>
                                    <a href="/olha-d-controller-demos/responsecontroller/jsonresponsedemo">JsonResponseDemo page</a>
                                </li>
                                <li>
                                    <a href="/olha-d-controller-demos/responsecontroller/forwardresponsedemo">ForwardResponseDemo page</a>
                                </li>
                            </ul>
                            <form action="/olha-d-controller-demos/responsecontroller/jsonresponsedemo" method="get">
                                <input id="vendor-name" name="vendor_name" value="OlhaD">
                                <input id="module-name" name="module_name" value="ControllerDemos">
                                <button type="submit">Submit</button>
                            </form>
                        </body>
                    </html>

                HTML
);
    }
}
