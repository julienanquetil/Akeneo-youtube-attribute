<?php

namespace JulienAnquetil\YoutubeAttributeBundle\Enrich\Provider\Field;

use Pim\Component\Catalog\Model\AttributeInterface;
use Pim\Bundle\EnrichBundle\Provider\Field\FieldProviderInterface;


class YoutubeFieldProvider implements FieldProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getField($attribute)
    {
        return 'julienanquetil-youtube-field';
    }
    /**
     * {@inheritdoc}
     */
    public function supports($element)
    {
        return $element instanceof AttributeInterface &&
            $element->getAttributeType() === 'pim_catalog_text';
    }
}