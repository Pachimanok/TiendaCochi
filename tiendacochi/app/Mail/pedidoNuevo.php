<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class pedidoNuevo extends Mailable
{
    use Queueable, SerializesModels;
    public $newPedido;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newPedido)
    {
        $this->newPedido = $newPedido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $newPedido = $this->newPedido;
        return $this->view('emails.pedidoNuevo')
        ->subject('Nuevo Pedido ID: ' . $newPedido->id);
    }
}
