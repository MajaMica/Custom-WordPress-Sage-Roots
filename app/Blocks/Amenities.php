<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Amenities extends Block
{
    public $name = 'Amenities Sekcija';
    public $slug = 'amenities';
    public $description = 'Pogodnosti vile (jacuzzi, sauna, sobe, osobe).';
    public $category = 'formatting';
    public $icon = 'star-filled';
    public $keywords = ['amenities', 'pogodnosti', 'jacuzzi'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'pogodnosti' => get_field('pogodnosti') ?: $this->defaultPogodnosti(),
        ];
    }

    protected function defaultPogodnosti(): array
    {
        return [
            ['ikonica' => '💦', 'naslov' => 'Privatni jacuzzi', 'opis' => 'Topla voda, ceo dan'],
            ['ikonica' => '🔥', 'naslov' => 'Finska sauna', 'opis' => 'Za potpuno opuštanje'],
            ['ikonica' => '🛏️', 'naslov' => '2 spavaće sobe', 'opis' => 'Odvojeni prostori'],
            ['ikonica' => '👥', 'naslov' => 'Do 6 osoba', 'opis' => 'Idealno za grupe'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('amenities');

        $block
            ->addRepeater('pogodnosti', [
                'label' => 'Pogodnosti',
                'button_label' => 'Dodaj pogodnost',
                'layout' => 'block',
                'max' => 6,
            ])
                ->addText('ikonica', [
                    'label' => 'Ikonica (emoji)',
                    'instructions' => 'Npr: 💦 🔥 🛏️ 👥',
                    'maxlength' => 4,
                ])
                ->addText('naslov', ['label' => 'Naziv'])
                ->addText('opis', ['label' => 'Kratak opis'])
            ->endRepeater();

        return $block->build();
    }
}