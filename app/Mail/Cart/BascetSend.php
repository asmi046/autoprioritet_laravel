<?php

namespace App\Mail\Cart;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BascetSend extends Mailable
{
    use Queueable, SerializesModels;

    protected $formData;
    protected $order_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData, $order_id)
    {
        $this->formData = $formData;
        $this->order_id = $order_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('cart.send_from'), config('cart.send_from_text'))
            ->subject(config('cart.subject'))
            ->replyTo(config('cart.reply_to'), config('cart.reply_to_text'))
            ->view('mail.bascet.bascetmail')
            ->with([
            "formData" => $this->formData,
            "order_id" => $this->order_id
        ]);
    }
}
