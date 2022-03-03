<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CastingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        foreach ($this->data['path'] as $file){
            $this->attach(storage_path() . '/app/' .$file['path']);
        }
    }

    /**
     * Build the message.
     *
     * @return $thishelloWorld.doc
     */
    public function build()
    {
        return $this->view('email')
            ->subject('Анткета на кастинг Жамбыл')
            ->from('system@jambylfilm.kz', $this->data['childName'])
            ->attach(storage_path().'/'.$this->data['childName'].'.docx' )
            ->with('data', $this->data);
    }
}
