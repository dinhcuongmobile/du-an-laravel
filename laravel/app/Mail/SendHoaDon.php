<?php
// app/Mail/SendHoaDon.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendHoaDon extends Mailable
{
    use Queueable, SerializesModels;

    protected $don_hang;
    protected $chi_tiet_don_hangs;

    public function __construct($don_hang, $chi_tiet_don_hangs)
    {
        $this->don_hang = $don_hang;
        $this->chi_tiet_don_hangs = $chi_tiet_don_hangs;
    }

    public function build()
    {
        return $this->view('emails.sendHoaDon') // Sử dụng view HTML
                    ->with([
                        'don_hang' => $this->don_hang,
                        'chi_tiet_don_hangs' => $this->chi_tiet_don_hangs,
                    ])
                    ->subject('Hóa đơn đặt hàng');
    }
}
