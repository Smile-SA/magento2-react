<?php

namespace Smile\React\Block;

use Magento\Framework\View\Element\Template;

/**
 * React bundle loading block.
 * Argument disabled allows to disable the block output, hence the loading of the bundle
 * through (layout) argument injection.
 *
 * @category Smile
 * @package  Smile\React
 */
class Script extends Template
{
    /** @var bool */
    protected $disabled = false;

    /**
     * Constructor.
     *
     * @param Template\Context $context Template context.
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->disabled = (bool) ($data['disabled'] ?? false);
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->disabled) {
            return '';
        }

        return parent::_toHtml();
    }
}
