<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ContactHero extends Block
{
    /**
     * Block name shown in editor.
     */
    public $name = 'Kontakt Hero';

    /**
     * Slug (must match blade filename).
     */
    public $slug = 'contact-hero';

    /**
     * Block description.
     */
    public $description = 'Hero sekcija za Kontakt stranicu — slika + naslov + podnaslov.';

    /**
     * Block category.
     */
    public $category = 'formatting';

    /**
     * Block icon.
     */
    public $icon = 'cover-image';

    /**
     * Block keywords.
     */
    public $keywords = ['kontakt', 'hero', 'rezervacija'];

    /**
     * NEVER use 'preview'.
     */
    public $mode = 'edit';

    /**
     * Supports.
     */
    public $supports = [
        'align' => false,
        'mode' => false,
        'jsx' => false,
    ];

    /**
     * ACF fields.
     */
    public function fields(): array
    {
        $contactHero = new FieldsBuilder('contact_hero');

        $contactHero
            ->addImage('image', [
                'label' => 'Pozadinska slika',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'instructions' => 'Preporuka: široka slika (min. 1920x600).',
            ])
            ->addText('naslov', [
                'label' => 'Naslov',
                'default_value' => 'Rezervišite svoj boravak',
            ])
            ->addTextarea('podnaslov', [
                'label' => 'Podnaslov',
                'rows' => 2,
                'new_lines' => 'br',
                'default_value' => 'Recite nam kakav odmor priželjkujete — mi ćemo se pobrinuti za ostalo.',
            ]);

        return $contactHero->build();
    }

    /**
     * Data passed to the Blade view (with fallbacks).
     */
    public function with(): array
    {
        return [
            'image'     => get_field('image') ?: null,
            'naslov'    => get_field('naslov') ?: 'Rezervišite svoj boravak',
            'podnaslov' => get_field('podnaslov') ?: 'Recite nam kakav odmor priželjkujete — mi ćemo se pobrinuti za ostalo.',
        ];
    }
}