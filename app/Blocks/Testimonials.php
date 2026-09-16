<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Testimonials extends Block
{
    public $name = 'Testimonials Sekcija';
    public $slug = 'testimonials';
    public $description = 'Recenzije gostiju — sticky stacking cards.';
    public $category = 'formatting';
    public $icon = 'format-quote';
    public $keywords = ['testimonials', 'recenzije', 'gosti'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'eyebrow'    => get_field('eyebrow') ?: 'Uspomene gostiju',
            'naslov'     => get_field('naslov') ?: 'Reči onih koji su boravili',
            'napomena'   => get_field('napomena') ?: 'Svaki gost je deo naše priče. Ovo su samo neka od iskustava ljudi koji su boravili u Lipovačkoj Oazi.',
            'potpis'     => get_field('potpis') ?: '— Tim Lipovačke Oaze',
            'recenzije'  => get_field('recenzije') ?: $this->defaultRecenzije(),
        ];
    }

    protected function defaultRecenzije(): array
    {
        return [
            [
                'tekst' => 'Privatnost je bila neverovatna — cela vila samo za nas. Jacuzzi uveče, sauna ujutru, i tišina koja se ne može opisati. Vratićemo se sigurno.',
                'slika' => null,
                'ime' => 'Marko P.',
                'lokacija' => 'Beograd',
                'zvezdice' => 5,
            ],
            [
                'tekst' => 'Došli smo sa decom, svi smo imali svoj prostor. Dvorište je prelepo, roštilj smo koristili svaki dan. Oaza je zaista pravi mali raj nadomak grada.',
                'slika' => null,
                'ime' => 'Jovana & Nemanja',
                'lokacija' => 'Novi Sad',
                'zvezdice' => 5,
            ],
            [
                'tekst' => 'Vikend sa prijateljima — savršeno mesto za opuštanje. Jacuzzi i sauna su vrhunski, a dvorište je idealno za večernja druženja. Sve pohvale!',
                'slika' => null,
                'ime' => 'Stefan M.',
                'lokacija' => 'Kragujevac',
                'zvezdice' => 5,
            ],
            [
                'tekst' => 'Rezervisali smo direktno i prošli odlično. Komunikacija brza, sve po dogovoru. Vikend u Oazi nam je bio pravi reset od svakodnevice.',
                'slika' => null,
                'ime' => 'Ana K.',
                'lokacija' => 'Niš',
                'zvezdice' => 5,
            ],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('testimonials');

        $block
            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('napomena', ['label' => 'Tekst sa leve strane', 'rows' => 3])
            ->addText('potpis', ['label' => 'Potpis ispod teksta'])
            ->addRepeater('recenzije', [
                'label' => 'Recenzije',
                'button_label' => 'Dodaj recenziju',
                'layout' => 'block',
                'max' => 6,
            ])
                ->addTextarea('tekst', ['label' => 'Tekst recenzije', 'rows' => 3])
                ->addImage('slika', [
                    'label' => 'Slika gosta (avatar)',
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                ])
                ->addText('ime', ['label' => 'Ime gosta'])
                ->addText('lokacija', ['label' => 'Grad / država'])
                ->addNumber('zvezdice', [
                    'label' => 'Broj zvezdica (1-5)',
                    'default_value' => 5,
                    'min' => 1,
                    'max' => 5,
                ])
            ->endRepeater();

        return $block->build();
    }
}