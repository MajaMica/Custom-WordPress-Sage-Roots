<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Gallery extends Block
{
    public $name = 'Gallery Sekcija';
    public $slug = 'gallery';
    public $description = 'Galerija — 1 velika i 2 male slike.';
    public $category = 'formatting';
    public $icon = 'format-gallery';
    public $keywords = ['gallery', 'galerija', 'slike'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'eyebrow'          => get_field('eyebrow') ?: 'Pogledaj izbliza',
            'naslov'           => get_field('naslov') ?: 'Svaki kutak Oaze, vaš za istraživanje',
            'cta_tekst'        => get_field('cta_tekst') ?: 'Pogledaj cijelu vilu',
            'cta_link'         => get_field('cta_link') ?: ['url' => '#tour', 'title' => 'Pogledaj cijelu vilu'],

            'velika_slika'     => get_field('velika_slika') ?: null,
            'velika_badge'     => get_field('velika_badge') ?: 'Pogled na bazen',
            'velika_naslov'    => get_field('velika_naslov') ?: 'Dvorište i bazen',
            'velika_opis'      => get_field('velika_opis') ?: 'Privatni bazen sa osvetljenjem, natkrivena terasa i prostor za opuštanje.',
            'velika_features'  => get_field('velika_features') ?: '80 m², Roštilj, Ležaljke',

            'mala_1_slika'     => get_field('mala_1_slika') ?: null,
            'mala_1_badge'     => get_field('mala_1_badge') ?: 'Kupatilo',
            'mala_1_naslov'    => get_field('mala_1_naslov') ?: 'Moderno kupatilo',
            'mala_1_opis'      => get_field('mala_1_opis') ?: 'Elegantno kupatilo sa tušem i pažljivo biranim detaljima.',
            'mala_1_features'  => get_field('mala_1_features') ?: '10 m², Tuš kabina',

            'mala_2_slika'     => get_field('mala_2_slika') ?: null,
            'mala_2_badge'     => get_field('mala_2_badge') ?: 'Spavaća soba',
            'mala_2_naslov'    => get_field('mala_2_naslov') ?: 'Glavna spavaća soba',
            'mala_2_opis'      => get_field('mala_2_opis') ?: 'Prostrana soba sa bračnim krevetom i pogledom na dvorište.',
            'mala_2_features'  => get_field('mala_2_features') ?: '25 m², Bračni krevet',
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('gallery');

        $block
            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addText('cta_tekst', ['label' => 'Tekst dugmeta'])
            ->addLink('cta_link', ['label' => 'Link dugmeta'])

            ->addMessage('Velika slika', 'Prva, velika kartica (puna širina).')
            ->addImage('velika_slika', ['label' => 'Slika', 'return_format' => 'array', 'preview_size' => 'medium'])
            ->addText('velika_badge', ['label' => 'Badge (gore levo)'])
            ->addText('velika_naslov', ['label' => 'Naslov'])
            ->addTextarea('velika_opis', ['label' => 'Opis', 'rows' => 2])
            ->addText('velika_features', [
                'label' => 'Kratke oznake (odvojene zarezom)',
                'instructions' => 'Npr: 80 m², Roštilj, Ležaljke',
            ])

            ->addMessage('Mala slika 1', 'Druga kartica (levo u gridu).')
            ->addImage('mala_1_slika', ['label' => 'Slika', 'return_format' => 'array', 'preview_size' => 'medium'])
            ->addText('mala_1_badge', ['label' => 'Badge (gore levo)'])
            ->addText('mala_1_naslov', ['label' => 'Naslov'])
            ->addTextarea('mala_1_opis', ['label' => 'Opis', 'rows' => 2])
            ->addText('mala_1_features', [
                'label' => 'Kratke oznake',
                'instructions' => 'Npr: 10 m², Tuš kabina',
            ])

            ->addMessage('Mala slika 2', 'Treća kartica (desno u gridu).')
            ->addImage('mala_2_slika', ['label' => 'Slika', 'return_format' => 'array', 'preview_size' => 'medium'])
            ->addText('mala_2_badge', ['label' => 'Badge (gore levo)'])
            ->addText('mala_2_naslov', ['label' => 'Naslov'])
            ->addTextarea('mala_2_opis', ['label' => 'Opis', 'rows' => 2])
            ->addText('mala_2_features', [
                'label' => 'Kratke oznake',
                'instructions' => 'Npr: 25 m², Bračni krevet',
            ]);

        return $block->build();
    }
}