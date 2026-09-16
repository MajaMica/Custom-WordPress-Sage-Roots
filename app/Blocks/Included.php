<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Included extends Block
{
    public $name = 'Included Sekcija';
    public $slug = 'included';
    public $description = 'Dodatne pogodnosti — grid sa ikonicama.';
    public $category = 'formatting';
    public $icon = 'yes-alt';
    public $keywords = ['included', 'uključeno', 'pogodnosti'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'eyebrow'   => get_field('eyebrow') ?: 'Sve je uključeno',
            'naslov'    => get_field('naslov') ?: 'Svaki komfor, već tu.',
            'podnaslov' => get_field('podnaslov') ?: 'Sve pogodnosti uključene u vaš boravak. Određene usluge dostupne na zahtev.',
            'features'  => get_field('features') ?: $this->defaultFeatures(),
        ];
    }

    protected function defaultFeatures(): array
    {
        return [
            ['ikonica' => '❄️', 'tekst' => 'Klima uređaj'],
            ['ikonica' => '🏊', 'tekst' => 'Privatni bazen'],
            ['ikonica' => '📺', 'tekst' => 'Smart TV i streaming'],
            ['ikonica' => '✨', 'tekst' => 'Čišćenje i održavanje'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('included');

        $block
            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('podnaslov', ['label' => 'Podnaslov', 'rows' => 2])
            ->addRepeater('features', [
                'label' => 'Pogodnosti',
                'button_label' => 'Dodaj pogodnost',
                'layout' => 'block',
                'max' => 8,
            ])
                ->addText('ikonica', [
                    'label' => 'Ikonica (emoji)',
                    'instructions' => 'Npr: ❄️ 🏊 📺 ✨',
                    'maxlength' => 4,
                ])
                ->addText('tekst', ['label' => 'Naziv pogodnosti'])
            ->endRepeater();

        return $block->build();
    }
}