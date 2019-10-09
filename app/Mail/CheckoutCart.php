<?php

namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutCart extends Mailable
{
    use Queueable, SerializesModels;
    private $products, $name, $email, $comments;

    /**
     * CheckoutCart constructor.
     * @param Product [$products]
     * @param $name
     * @param $email
     * @param $comments
     */
    public function __construct($products, $name, $email, $comments)
    {
        $this->products = $products;
        $this->name = $name;
        $this->email = $email;
        $this->comments = $comments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.shipped')->with('content', [
            'products' => $this->products,
            'name' => $this->name,
            'email' => $this->email,
            'comments' => $this->comments
        ]);
    }
}
