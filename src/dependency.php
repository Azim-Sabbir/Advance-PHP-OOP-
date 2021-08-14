<?php
interface MailProvider
{
    public function process();
    public function format();
    public function sending();
    public function submit();
}
class GmailProvider implements MailProvider
{
    public function process()
    {
        echo "processing" . PHP_EOL;
    }
    public function format()
    {
        echo "formatting" . PHP_EOL;
    }
    public function sending()
    {
        echo "sending" . PHP_EOL;
    }
    public function submit()
    {
        echo "submitting" . PHP_EOL;
    }
}
class OutlookProvider implements MailProvider
{
    public function process()
    {
        echo "processing outlook" . PHP_EOL;
    }
    public function format()
    {
        echo "formatting outlook" . PHP_EOL;
    }
    public function sending()
    {
        echo "sending outlook" . PHP_EOL;
    }
    public function submit()
    {
        echo "submitting outlook" . PHP_EOL;
    }
}

class YandexProvider implements MailProvider
{
    public function process()
    {
        echo "processing Yandex" . PHP_EOL;
    }
    public function format()
    {
        echo "formatting Yandex" . PHP_EOL;
    }
    public function sending()
    {
        echo "sending Yandex" . PHP_EOL;
    }
    public function submit()
    {
        echo "submitting Yandex" . PHP_EOL;
    }
}

class SendMail
{
    public function send(MailProvider $mailProvider)
    {
        // $gmail = new OutlookProvider();
        $mailProvider->process();
        $mailProvider->format();
        $mailProvider->sending();
    }
}

$mail = new SendMail();
$mail->send(new OutlookProvider);
