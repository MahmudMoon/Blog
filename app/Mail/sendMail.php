<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class sendMail extends Mailable
{ use Queueable, SerializesModels;

    /**

     * The user instance.

     *

     * @var Order

     */

    public $user;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct(User $user)

    {

        $this->user = $user;

    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {
        $address = 'saquib.rizwan@cloudways.com';
 
      $name = 'Saquib Rizwan';
 
      $subject = 'Laravel Email';
 
      return $this->view('emails.sendmails')
 
      ->from($address, $name)
 
      ->subject($subject);
    }
}
