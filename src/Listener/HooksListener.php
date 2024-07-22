<?php

declare(strict_types=1);

namespace Berecont\ContaoSpacingBundle\Listener;

use Contao\FrontendTemplate;
use Contao\Template;
use Contao\Module;

class HooksListener
{
    
    public function __invoke(Template $objTemplate): void
    {
        if ($objTemplate->type == 'article') {

            $arrClasses = [(string) $objTemplate->class];

            if ($objTemplate->articleTopSpacing) {
                $arrClasses[] = $objTemplate->articleTopSpacing;
            }
    
            if ($objTemplate->articleBottomSpacing) {
                $arrClasses[] = $objTemplate->articleBottomSpacing;
            }
            
            $arrClasses = array_unique(array_filter($arrClasses));
            $objTemplate->class = implode(' ', $arrClasses);

        }
    }

}

