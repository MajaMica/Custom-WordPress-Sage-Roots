<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class BookingBanner extends Block
{
    public $name = 'Booking Banner';
    public $slug = 'booking-banner';
    public $description = 'Velika slika sa pozivom za rezervaciju i dva dugmeta.';
    public $category = 'formatting';
    public $icon = 'format-image';
    public $keywords = ['booking', 'banner', 'rezervacija', 'cta', 'vila'];
    public $mode = 'edit';

    public function with(): array
    {
        return [];
    }

    public function fields(): array
    {
        $block = Builder::make('booking-banner');

    

        // $block
        //     ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
        //     ->addText('naslov', ['label' => 'Naslov'])
        //     ->addTextarea('opis', ['label' => 'Opis', 'rows' => 3])
        //     ->addImage('slika', [
        //         'label' => 'Pozadinska slika',
        //         'return_format' => 'array',
        //         'preview_size' => 'medium',
        //     ])
        //     ->addText('primary_tekst', ['label' => 'Primarno dugme — tekst'])
        //     ->addLink('primary_link', ['label' => 'Primarno dugme — link'])
        //     ->addText('secondary_tekst', ['label' => 'Sekundarno dugme — tekst'])
        //     ->addLink('secondary_link', ['label' => 'Sekundarno dugme — link']);

        return $block->build();
    }
}