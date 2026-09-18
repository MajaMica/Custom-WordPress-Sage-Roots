<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class GalleryGrid extends Block
{
    public $name = 'Gallery Grid';
    public $slug = 'gallery-grid';
    public $description = 'Galerija slika za Galerija stranicu.';
    public $category = 'formatting';
    public $icon = 'format-gallery';
    public $keywords = ['gallery', 'galerija', 'slike'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'naslov'    => get_field('naslov') ?: 'Galerija',
            'podnaslov' => get_field('podnaslov') ?: 'Hiljadu reči ne može da opiše. Zato vam poklanjamo hiljadu slika.',
            'slike'     => get_field('slike'),
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('gallery_grid');

        $block
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('podnaslov', ['label' => 'Podnaslov', 'rows' => 2])
            ->addRepeater('slike', [
                'label' => 'Slike',
                'button_label' => 'Dodaj sliku',
                'layout' => 'block',
            ])
                ->addImage('slika', [
                    'label' => 'Slika',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ])
                ->addText('alt', ['label' => 'Alt tekst (opciono)'])
            ->endRepeater();

        return $block->build();
    }
}