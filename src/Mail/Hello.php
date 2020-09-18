<?php

namespace VendorName\MyPackageName\Mail;

use VendorName\MyPackageName\Models\Example;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Hello extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $info;

    public function __construct(Example $example)
    {
        $this->info = $example;
    }

    public function build()
    {
        return view('example::emails.hello')->with(['user' => $this->info]);
    }
}
