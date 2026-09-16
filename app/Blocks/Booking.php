<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class Booking extends Block
{
    public $name = 'Booking Sekcija';
    public $slug = 'booking';
    public $description = 'Upit za rezervaciju — tekst + forma.';
    public $category = 'formatting';
    public $icon = 'email-alt';
    public $keywords = ['booking', 'rezervacija', 'upit'];
    public $mode = 'edit';

    public function with(): array
    {
        return [
            'eyebrow'          => get_field('eyebrow') ?: 'Rezervišite boravak',
            'naslov'           => get_field('naslov') ?: 'Spremni da Oaza bude vaša?',
            'opis'             => get_field('opis') ?: 'Recite nam kada želite da dođete i koliko gostiju dolazi. Odgovorićemo vam lično u roku od 24 sata.',
            'benefiti'         => get_field('benefiti') ?: $this->defaultBenefiti(),
            'whatsapp_tekst'   => get_field('whatsapp_tekst') ?: 'Pišite nam na WhatsApp',
            'whatsapp_broj'    => get_field('whatsapp_broj') ?: '381612222986',
            'forma_naslov'     => get_field('forma_naslov') ?: 'Pošaljite upit',
            'forma_podnaslov'  => get_field('forma_podnaslov') ?: 'Proverićemo dostupnost i prilagoditi vaš boravak.',
            'forma_dugme'      => get_field('forma_dugme') ?: 'Pošaljite upit',
            'trust_badges'     => get_field('trust_badges') ?: $this->defaultBadges(),
        ];
    }

    protected function defaultBenefiti(): array
    {
        return [
            ['tekst' => 'Upit je potpuno besplatan — bez plaćanja unapred'],
            ['tekst' => 'Lični odgovor u roku od 24 sata'],
            ['tekst' => 'Bez obaveze dok ne potvrdite termin'],
        ];
    }

    protected function defaultBadges(): array
    {
        return [
            ['tekst' => 'Bez plaćanja danas'],
            ['tekst' => 'Besplatan upit'],
            ['tekst' => 'Odgovor u 24h'],
        ];
    }

    public function fields(): array
    {
        $block = Builder::make('booking');

        $block
            ->addTab('Leva kolona')
            ->addText('eyebrow', ['label' => 'Mali tekst iznad naslova'])
            ->addText('naslov', ['label' => 'Naslov'])
            ->addTextarea('opis', ['label' => 'Opis', 'rows' => 3])
            ->addRepeater('benefiti', [
                'label' => 'Benefiti (lista sa kvačicama)',
                'button_label' => 'Dodaj benefit',
                'layout' => 'block',
                'max' => 6,
            ])
                ->addText('tekst', ['label' => 'Tekst benefita'])
            ->endRepeater()
            ->addText('whatsapp_tekst', ['label' => 'WhatsApp dugme — tekst'])
            ->addText('whatsapp_broj', [
                'label' => 'WhatsApp broj',
                'instructions' => 'Samo brojevi, bez + i razmaka. Npr: 381612222986',
            ]);

        $block
            ->addTab('Forma')
            ->addText('forma_naslov', ['label' => 'Naslov iznad forme'])
            ->addText('forma_podnaslov', ['label' => 'Podnaslov iznad forme'])
            ->addText('forma_dugme', ['label' => 'Tekst dugmeta forme'])
            ->addRepeater('trust_badges', [
                'label' => 'Trust badges (ispod forme)',
                'button_label' => 'Dodaj badge',
                'layout' => 'table',
                'max' => 4,
            ])
                ->addText('tekst', ['label' => 'Tekst badge-a'])
            ->endRepeater();

        return $block->build();
    }
}