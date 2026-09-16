<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Hero extends Block
{
    public $name = 'Hero Sekcija';
    public $slug = 'hero';
    public $description = 'Glavna hero sekcija sa naslovom, slikom i dugmićima.';
    public $category = 'formatting';
    public $icon = 'cover-image';
    public $keywords = ['hero', 'banner', 'naslovna'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'naslov'           => get_field('naslov') ?: 'Vaš privatni SPA beg iz grada.',
            'podnaslov'        => get_field('podnaslov') ?: 'Privatni jacuzzi, finska sauna i potpuni mir — samo za vas. Bez gužve, bez deljenja prostora, bez žurbe.',
            'pozadina'         => get_field('pozadina') ?: null,
            'lokacija'         => get_field('lokacija') ?: '📍 13 km od Beograda',
            'dugme_tekst'      => get_field('dugme_tekst') ?: 'Rezerviši svoj termin',
            'dugme_link'       => get_field('dugme_link') ?: ['url' => '#booking', 'title' => 'Rezerviši'],
            'sekundarno_tekst' => get_field('sekundarno_tekst') ?: 'Istraži vilu',
            'sekundarno_link'  => get_field('sekundarno_link') ?: ['url' => '#villa', 'title' => 'Istraži vilu'],
            'datum_otvaranja'  => get_field('datum_otvaranja') ?: '📅 Otvaranje: 01.12.2026.',
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('hero');

        $block
            ->addText('naslov', ['label' => 'Glavni naslov'])
            ->addTextarea('podnaslov', ['label' => 'Podnaslov', 'rows' => 3])
            ->addImage('pozadina', [
                'label' => 'Pozadinska slika',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ])
            ->addText('lokacija', ['label' => 'Oznaka lokacije'])
            ->addText('dugme_tekst', ['label' => 'Primarno dugme — tekst'])
            ->addLink('dugme_link', ['label' => 'Primarno dugme — link'])
            ->addText('sekundarno_tekst', ['label' => 'Sekundarno dugme — tekst'])
            ->addLink('sekundarno_link', ['label' => 'Sekundarno dugme — link'])
            ->addText('datum_otvaranja', ['label' => 'Datum otvaranja']);

        return $block->build();
    }
}