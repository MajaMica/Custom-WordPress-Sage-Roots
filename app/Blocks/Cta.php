<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Cta extends Block
{
    public $name = 'CTA Sekcija';
    public $slug = 'cta';
    public $description = 'Poziv na akciju sa pozadinskom slikom.';
    public $category = 'formatting';
    public $icon = 'align-center';
    public $keywords = ['cta', 'poziv', 'kontakt'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'eyebrow'        => get_field('eyebrow') ?: 'Contact Us',
            'naslov'         => get_field('naslov') ?: 'Vaš privatni beg čeka',
            'opis'           => get_field('opis') ?: 'Rezervišite svoj termin i prepustite nam da se pobrinemo za svaki detalj vašeg boravka.',
            'pozadina'       => get_field('pozadina') ?: null,
            'dugme_1_tekst'  => get_field('dugme_1_tekst') ?: 'Rezerviši termin',
            'dugme_1_link'   => get_field('dugme_1_link') ?: ['url' => '#booking', 'title' => 'Rezerviši termin'],
            'dugme_2_tekst'  => get_field('dugme_2_tekst') ?: 'Kontaktirajte nas',
            'dugme_2_link'   => get_field('dugme_2_link') ?: ['url' => '#contact', 'title' => 'Kontaktirajte nas'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('cta');

        $block
            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('opis', ['label' => 'Opis', 'rows' => 2])
            ->addImage('pozadina', [
                'label' => 'Pozadinska slika',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ])
            ->addText('dugme_1_tekst', ['label' => 'Dugme 1 — tekst'])
            ->addLink('dugme_1_link', ['label' => 'Dugme 1 — link'])
            ->addText('dugme_2_tekst', ['label' => 'Dugme 2 — tekst'])
            ->addLink('dugme_2_link', ['label' => 'Dugme 2 — link']);

        return $block->build();
    }
}