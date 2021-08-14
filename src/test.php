<!-- liscov substitution -->
interface Quadrilateral
{
public function setWidth(int $w);
public function setHeight(int $w);
public function getArea(int $w);
}

class Circle implements Quadrilateral
{
private $width,$height;
public function setWidth(int $w)
{
$this->width = $w;
}

public function setHeight(int $h)
{
$this->height = $h;
}

public function getArea()
{
return $this->width * $this->height;
}
}


class Rectange implements Quadrilateral
{
private $width,$height;
public function setWidth(int $w)
{
$this->width = $w;
}

public function setHeight(int $h)
{
$this->height = $h;
}

public function getArea()
{
return $this->width * $this->height;
}
}

class Square implements Quadrilateral
{
private $width,$height;
public function setWidth(int $w)
{
$this->width = $w;
}

public function setHeight(int $h)
{
$this->height = $h;
}

public function getArea()
{
return $this->width * $this->height;
}
}


<!-- interface segrigation -->
interface Employee
{
public function takeBreak();
public function getSalary();
public function metting();
}

interface Programmer
{
public function code();
}

interface Mangement
{
public function communicateWithClient();
}


class Developer implements Employee , Programmer
{
public function takeBreak()
{
echo "I'm taking break";
}
public function code()
{
echo "I can code";
}
public function getSalary()
{
echo "salary";
}
public function metting()
{
echo "meeting";
}
}

class Manager implements Employee , Mangement
{
public function takeBreak()
{
echo "I'm taking break";
}
public function communicateWithClient()
{
echo "I can't communicate";
}
public function getSalary()
{
echo "salary";
}
public function metting()
{
echo "meeting";
}
}


// Dependency Inversion

interface Mailer
{
public function mail();
}

class Gmail implements Mailer
{
public function mail()
{
echo "mailing--Gmail";
}
}

class Outlook implements Mailer
{
public function mail()
{
echo "mailing--Outlook";
}
}

class Yahoo implements Mailer
{
public function mail()
{
echo "depricated";
}
}

class Sms implements Mailer
{
public function mail()
{
echo "send";
}
}

class Order
{
public function sent(Mailer $mailType)
{
$mail = $mailType;
$mail->mail();
}
}

class PasswordReset
{
public function sent(Mailer $mailType)
{
$mail = $mailType;
$mail->mail();
}
}

class Greetings
{
public function sent(Mailer $mailType)
{
$mail = $mailType;
$mail->mail();
}
}

// Inversion Of Control

$obj = new Order();
$obj->sent(new Gmail);
echo PHP_EOL;
$p = new PasswordReset();
$p->sent(new Outlook);
echo PHP_EOL;
$p = new Greetings();
$p->sent(new Sms);