<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Hero extends Block
{
    /**
     * The block name.
     */
    public $name = 'Hero Sekcija';
      /**
     * The block slug.
     */
    public $slug = 'hero';   

    /**
     * The block description.
     */
    public $description = 'Glavna hero sekcija sa naslovom, slikom i dugmićima.';

    /**
     * The block category.
     */
    public $category = 'formatting';

    /**
     * The block icon.
     */
    public $icon = 'cover-image';

    /**
     * The block keywords.
     */
    public $keywords = ['hero', 'banner', 'naslovna'];

    /**
     * The block mode (preview, edit, auto).
     */
    public $mode = 'edit';

    /**
     * The block supports.
     */
    public $supports = [
        'align' => false,
        'mode' => false,
        'jsx' => true,
    ];

    /**
     * Data to be passed to the block before rendering.
     */
    public function with(): array
    {
        return [
            'naslov' => get_field('naslov'),
            'podnaslov' => get_field('podnaslov'),
            'pozadina' => get_field('pozadina'),
            'lokacija' => get_field('lokacija'),
            'dugme_tekst' => get_field('dugme_tekst'),
            'dugme_link' => get_field('dugme_link'),
            'datum_otvaranja' => get_field('datum_otvaranja'),
        ];
    }

    /**
     * The block field group.
     */
    public function fields(): array
    {
        $hero = Builder::make('hero');

        $hero
            ->addText('naslov', [
                'label' => 'Glavni naslov',
                'default_value' => 'Vaš privatni SPA beg iz grada.',
            ])
            ->addTextarea('podnaslov', [
                'label' => 'Podnaslov',
                'rows' => 3,
                'default_value' => 'Privatni jacuzzi, finska sauna i potpuni mir — samo za vas.',
            ])
            ->addImage('pozadina', [
                'label' => 'Pozadinska slika',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ])
            ->addText('lokacija', [
                'label' => 'Oznaka lokacije',
                'default_value' => '📍 13 km od Beograda',
            ])
            ->addText('dugme_tekst', [
                'label' => 'Tekst dugmeta',
                'default_value' => 'Rezerviši svoj termin',
            ])
            ->addLink('dugme_link', [
                'label' => 'Link dugmeta',
            ])
            ->addText('datum_otvaranja', [
                'label' => 'Datum otvaranja',
                'default_value' => '📅 Otvaranje: 01.12.2026.',
            ]);

        return $hero->build();
    }
}