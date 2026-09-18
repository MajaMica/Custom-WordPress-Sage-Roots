<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class ContactMap extends Block
{
    public $name = 'Contact Map';
    public $slug = 'contact-map';
    public $description = 'Mapa lokacije sa informacijama.';
    public $category = 'formatting';
    public $icon = 'location-alt';
    public $keywords = ['map', 'mapa', 'lokacija', 'kontakt'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'map_embed'   => get_field('map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45427.958644915874!2d20.39560211189118!3d44.6328599749435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a0b5f8b48e04f%3A0xe2213a308127a58a!2z0JvQuNC_0L7QstC40YbQsCwg0JHQsNGA0LDRmNC10LLQvg!5e0!3m2!1ssr!2srs!4v1789654076681!5m2!1ssr!2srs',
            'adresa'      => get_field('adresa') ?: 'Lipovica, 13 km od Beograda, Srbija',
            'eyebrow'     => get_field('eyebrow') ?: 'Pronađite nas',
            'naslov'      => get_field('naslov') ?: 'Gde se nalazi Oaza',
            'opis'        => get_field('opis') ?: 'Smeštena u zelenilu Lipovice, samo 13 kilometara od centra Beograda — dovoljno blizu za beg, dovoljno daleko za pravi mir.',
            'detalji'     => get_field('detalji') ?: $this->defaultDetalji(),
            'dugme_tekst' => get_field('dugme_tekst') ?: 'Otvori u Google Maps',
            'dugme_url'   => get_field('dugme_url') ?: 'https://maps.google.com/?q=Lipovica,Beograd',
        ];
    }

    protected function defaultDetalji(): array
    {
        return [
            ['tekst' => '13 km od centra Beograda'],
            ['tekst' => '35 minuta vožnje od aerodroma'],
            ['tekst' => 'Lako dostupno automobilom'],
            ['tekst' => 'Besplatan parking u dvorištu'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('contact_map');

        $block
            ->addTextarea('map_embed', [
                'label' => 'Google Maps embed URL',
                'rows' => 3,
                'instructions' => 'maps.google.com → Share → Embed a map → kopiraj samo URL iz src="..."',
            ])
            ->addText('adresa', ['label' => 'Adresa ispod mape'])

            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('opis', ['label' => 'Opis', 'rows' => 3])
            ->addRepeater('detalji', [
                'label' => 'Detalji (lista sa ikonicama)',
                'button_label' => 'Dodaj detalj',
                'layout' => 'block',
                'max' => 6,
            ])
                ->addText('tekst', ['label' => 'Tekst detalja'])
            ->endRepeater()
            ->addText('dugme_tekst', ['label' => 'Tekst dugmeta'])
            ->addUrl('dugme_url', ['label' => 'URL dugmeta']);

        return $block->build();
    }
}