<?php
class User
{
    public $name;
    public $surname;
    public $date_birth;
    protected $mail;
    protected $account_create = false;
    protected $password;
    protected $creditcard;
    private $discount = 0;
    public function __construct($name, $surname, $date)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date_birth = $date;
        $this->setAccount();
        $this->setCC($_POST['ccdate']);
    }

    function setAccount()
    {
        if (isset($_POST['email']) && $_POST['email'] != ''  && isset($_POST['psw']) && $_POST['psw'] != '') {
            $this->mail = $_POST['email'];
            $this->password = $_POST['psw'];
            $this->account_create = true;
            $this->discount();
        } elseif ($_POST['email'] = '' && $_POST['psw'] = '') {
            $this->account_create = false;
            $this->mail = null;
            $this->password = null;
        }
    }

    private function discount()
    {
        if ($this->account_create && $this->creditcard != null) {
            $this->discount = '20%';
        }
    }

    function setCC($date)
    {
        if (isset($_POST["ccdate"])) {
            $anno = date('Y', strtotime($date));
            if ($anno > date('Y') || $anno == date('Y') && date('m', strtotime($date)) > date('m')) {
                $this->creditcard = new CreditCard($date);
            } else {
                echo 'La CC inserita non e\' in corso di validita\'';
            };
        };
    }
}


class CreditCard
{
    private $expdate;
    function __construct($date)
    {
        $this->expdate = $date;
    }
}

$account = new User('Mario', 'Rossi', '13-3-1967');
var_dump($account);
