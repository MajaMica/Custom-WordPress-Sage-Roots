<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class InstagramFeed extends Block
{
    public $name = 'Instagram Feed';
    public $slug = 'instagram-feed';
    public $description = 'Instagram sekcija sa profilom i slikama.';
    public $category = 'formatting';
    public $icon = 'instagram';
    public $keywords = ['instagram', 'feed', 'social'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'handle' => get_field('handle') ?: '@lipovackaoaza',
            'url'    => get_field('url') ?: 'https://www.instagram.com/lipovackaoaza/',
            'follow' => get_field('follow') ?: 'Zaprati nas',
            'slike'  => get_field('slike'),
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('instagram_feed');

        $block
            ->addText('handle', ['label' => 'Instagram handle'])
            ->addUrl('url', ['label' => 'Instagram URL'])
            ->addText('follow', ['label' => 'Tekst dugmeta'])
            ->addRepeater('slike', [
                'label' => 'Slike (do 6)',
                'button_label' => 'Dodaj sliku',
                'max' => 6,
            ])
                ->addImage('slika', [
                    'label' => 'Slika',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ])
            ->endRepeater();

        return $block->build();
    }
}