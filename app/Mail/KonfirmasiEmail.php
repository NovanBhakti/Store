<?php

namespace App\Mail;

use App\Models\Peserta;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KonfirmasiEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $peserta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Peserta $peserta)
    {
        $this->peserta = $peserta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email.konfirmasi')
                    ->subject('Konfirmasi Pendaftaran')
                    ->from('novanbhakti0111@gamail.com', 'Novan Nur Bhakti');
        
    }
}
