<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class VideoTour extends Block
{
    public $name = 'Video Tour';
    public $slug = 'video-tour';
    public $description = 'Video sekcija sa tour-om vile.';
    public $category = 'formatting';
    public $icon = 'video-alt3';
    public $keywords = ['video', 'tour', 'obilazak'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'eyebrow'   => get_field('eyebrow') ?: 'Vidite u pokretu',
            'naslov'    => get_field('naslov') ?: 'Pogledajte obilazak vile',
            'podnaslov' => get_field('podnaslov') ?: 'Trominutni obilazak svakog prostora — od dvorišta do bazena u sumrak.',
            'video'     => get_field('video') ?: null,
            'poster'    => get_field('poster') ?: null,
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('video_tour');

        $block
            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('podnaslov', ['label' => 'Podnaslov', 'rows' => 2])
            ->addFile('video', [
                'label' => 'Video fajl',
                'return_format' => 'url',
                'mime_types' => 'mp4,webm',
            ])
            ->addImage('poster', [
                'label' => 'Poster slika',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ]);

        return $block->build();
    }
}