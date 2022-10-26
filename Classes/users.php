<?php
class User
{
    public $name;
    public $surname;
    public $date_birth;
    public $byproducts = [];
    protected $mail;
    protected $account_create = false;
    protected $password;
    protected $creditcard;
    protected $discount = 0;
    public function __construct($name, $surname, $date)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date_birth = $date;
        $this->setAccount();
        $this->setCC($_POST['ccdate']);
        $this->discount();
    }

    function setAccount()
    {
        if (isset($_POST['email']) && $_POST['email'] != ''  && isset($_POST['psw']) && $_POST['psw'] != '') {
            $this->mail = $_POST['email'];
            $this->password = $_POST['psw'];
            $this->account_create = true;
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

    function shopBag($product)
    {
        $this->byproducts[] = $product;
        var_dump($this->byproducts[0]->price);
        if ($this->discount == '20%') {
            foreach ($this->byproducts as $prod) {
                $prod->price = $prod->price - ($prod->price * 20 / 100);
            }
        }
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
include __DIR__ . '\products.php';
$account = new User('Mario', 'Rossi', '13-3-1967');
$account->shopBag($fuffy);

var_dump($account);
