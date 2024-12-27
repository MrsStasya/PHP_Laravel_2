<?php

namespace App\Mail;

use Illuminate\Support\Facades\Storage;
use stdClass;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackMailer extends Mailable
{
    use Queueable, SerializesModels;

    // Публичная переменная в которую запишем переданные данные формы из контроллера FeedbackController
    public $data;

    // Плучаем данные формы из контроллера FeedbackController
    public function __construct($store) {
        $this->data = $store;
    }
    // Создаем сообщение
    public function build() {
        //Вызываем представление и передаем объект data с данными
        return $this-> view('email.feedback', ['data' => $this->data]);
//        return $this->from('noreply@aurora.com', 'ООО ТД АВРОРА')
//            // Тема письма
//            ->subject('Форма обратной связи')
//            // Вызываем представление и передаем объект data с данными
//            ->view('email.feedback', ['data' => $this->data]);
    }
}
