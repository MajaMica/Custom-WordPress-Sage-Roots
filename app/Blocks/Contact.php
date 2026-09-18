<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Contact extends Block
{
    public $name = 'Contact Sekcija';
    public $slug = 'contact';
    public $description = 'Kontakt forma i info kartica.';
    public $category = 'formatting';
    public $icon = 'email-alt';
    public $keywords = ['contact', 'kontakt', 'forma'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'forma_naslov'    => get_field('forma_naslov') ?: 'Pošaljite upit',
            'forma_podnaslov' => get_field('forma_podnaslov') ?: 'Vaš lični asistent će vam odgovoriti u roku od 24 sata — lično, ne automatski.',
            'forma_dugme'     => get_field('forma_dugme') ?: 'Pošaljite upit',
            'benefiti'        => get_field('benefiti') ?: $this->defaultBenefiti(),

            'slika'           => get_field('slika') ?: null,
            'info_naslov'     => get_field('info_naslov') ?: 'Stupite u kontakt',
            'kontakt_items'   => get_field('kontakt_items') ?: $this->defaultKontakt(),

            'whatsapp_tekst'  => get_field('whatsapp_tekst') ?: 'Pišite nam na WhatsApp',
            'whatsapp_broj'   => get_field('whatsapp_broj') ?: '381612222986',
        ];
    }

    protected function defaultBenefiti(): array
    {
        return [
            ['tekst' => 'Bez plaćanja danas'],
            ['tekst' => 'Besplatan upit'],
            ['tekst' => 'Odgovor u 24h'],
        ];
    }

    protected function defaultKontakt(): array
    {
        return [
            ['tip' => 'email',   'naslov' => 'Email',         'vrednost' => 'lipovackaoaza@gmail.com'],
            ['tip' => 'phone',   'naslov' => 'Telefon',       'vrednost' => '061 2222 986'],
            ['tip' => 'address', 'naslov' => 'Adresa',        'vrednost' => 'Lipovica, 13 km od Beograda'],
            ['tip' => 'hours',   'naslov' => 'Radno vreme',   'vrednost' => 'Svaki dan 08:00 – 22:00'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('contact');

        $block
            ->addTab('Leva — Forma')
            ->addText('forma_naslov', ['label' => 'Naslov forme'])
            ->addTextarea('forma_podnaslov', ['label' => 'Opis ispod naslova', 'rows' => 2])
            ->addText('forma_dugme', ['label' => 'Tekst dugmeta forme'])
            ->addRepeater('benefiti', [
                'label' => 'Benefiti (ispod forme)',
                'button_label' => 'Dodaj benefit',
                'layout' => 'table',
                'max' => 3,
            ])
                ->addText('tekst', ['label' => 'Tekst benefita'])
            ->endRepeater();

        $block
            ->addTab('Desna — Info')
            ->addImage('slika', [
                'label' => 'Slika (gore)',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ])
            ->addText('info_naslov', ['label' => 'Naslov info kartice'])
            ->addRepeater('kontakt_items', [
                'label' => 'Kontakt stavke',
                'button_label' => 'Dodaj stavku',
                'layout' => 'block',
                'max' => 5,
            ])
                ->addSelect('tip', [
                    'label' => 'Tip ikone',
                    'choices' => [
                        'email' => 'Email',
                        'phone' => 'Telefon',
                        'address' => 'Adresa',
                        'hours' => 'Radno vreme',
                    ],
                    'default_value' => 'email',
                ])
                ->addText('naslov', ['label' => 'Naslov'])
                ->addText('vrednost', ['label' => 'Vrednost'])
            ->endRepeater()
            ->addText('whatsapp_tekst', ['label' => 'WhatsApp dugme — tekst'])
            ->addText('whatsapp_broj', [
                'label' => 'WhatsApp broj',
                'instructions' => 'Samo brojevi, bez + i razmaka',
            ]);

        return $block->build();
    }
}