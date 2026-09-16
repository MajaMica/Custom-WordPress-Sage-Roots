<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class About extends Block
{
    public $name = 'About Sekcija';
    public $slug = 'about';
    public $description = 'O vili — tekst, slika i statistike.';
    public $category = 'formatting';
    public $icon = 'info-outline';
    public $keywords = ['about', 'o nama', 'vila'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'naslov'     => get_field('naslov') ?: 'Nije samo vila. Ceo jedan svet.',
            'tekst_1'    => get_field('tekst_1') ?: 'Smeštena u zelenilu Lipovice, Lipovačka Oaza je utočište prostora, tišine i sofisticiranosti. Samo 13 kilometara od Beograda — dovoljno blizu za beg, dovoljno daleko da zaboravite na gradsku vrevu.',
            'tekst_2'    => get_field('tekst_2') ?: 'Sa dve prostrane spavaće sobe, privatnim jacuzzijem i finskom saunom, Oaza nije samo smeštaj. To je najlepša verzija vašeg odmora — rezervisana samo za vas.',
            'slika'      => get_field('slika') ?: null,
            'statistike' => get_field('statistike') ?: $this->defaultStatistike(),
            'cta_tekst'  => get_field('cta_tekst') ?: 'Saznaj više',
            'cta_link'   => get_field('cta_link') ?: ['url' => '#villa', 'title' => 'Saznaj više'],
        ];
    }

    protected function defaultStatistike(): array
    {
        return [
            ['broj' => '130', 'label' => 'm² prostora'],
            ['broj' => '6',   'label' => 'osoba'],
            ['broj' => '13km', 'label' => 'od Beograda'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('about');

        $block
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('tekst_1', ['label' => 'Prvi paragraf', 'rows' => 3])
            ->addTextarea('tekst_2', ['label' => 'Drugi paragraf', 'rows' => 3])
            ->addImage('slika', [
                'label' => 'Slika',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ])
            ->addRepeater('statistike', [
                'label' => 'Statistike (na slici)',
                'button_label' => 'Dodaj statistiku',
                'layout' => 'block',
                'max' => 4,
            ])
                ->addText('broj', ['label' => 'Broj/vrednost'])
                ->addText('label', ['label' => 'Oznaka'])
            ->endRepeater()
            ->addText('cta_tekst', ['label' => 'Tekst linka'])
            ->addLink('cta_link', ['label' => 'Link']);

        return $block->build();
    }
}