<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\System;

PaletteManipulator::create()
    ->addLegend('articleSpacingLegend', 'template_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('articleTopSpacing', 'articleSpacingLegend', PaletteManipulator::POSITION_APPEND)
    ->addField('articleBottomSpacing', 'articleSpacingLegend', PaletteManipulator::POSITION_APPEND)
    
    ->applyToPalette('default', 'tl_article');

$GLOBALS['TL_DCA']['tl_article']['fields']['articleTopSpacing'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['articleTopSpacing'],
    'inputType' => 'select',
    'options'   => [
                    'padding-top-small',        
                    'padding-top-std',
                    'padding-top-large'
                    ],
    'reference' => &$GLOBALS['TL_LANG']['MSC']['optTopSpacing'],
    'eval'      => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql'       => "varchar(255) NOT NULL default ''"
];
$GLOBALS['TL_DCA']['tl_article']['fields']['articleBottomSpacing'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['articleBottomSpacing'],
    'inputType' => 'select',
    'options'   => [
                    'padding-bottom-small',        
                    'padding-bottom-std',
                    'padding-bottom-large'
                    ],
    'reference' => &$GLOBALS['TL_LANG']['MSC']['optBottomSpacing'],                    
    'eval'      => ['tl_class' => 'w50', 'includeBlankOption' => true, 'chosen' => true],
    'sql'       => "varchar(255) NOT NULL default ''"
];