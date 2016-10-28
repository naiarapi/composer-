/*
  

                   # Include the Autoloader (see "Libraries" for install instructions)
                    require("vendor/autoload.php");
                     require ("vendor/phpmailer/phpmailer/PHPMailerAutoload.php");
                     require ("vendor/phpmailer/phpmailer/class.phpmailer.php");
                    require 'vendor/autoload.php';
                    
                    
                    # Instantiate the client.
                    $mgClient = new Mailgun('key-63a02f6f62e9c789642cb9a7a3c8fbff');
                    $domain = "sandbox98131e2e996f4c1cb847b514b3c86493.mailgun.org";
                    
                    # Make the call to the client.
                    $result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox98131e2e996f4c1cb847b514b3c86493.mailgun.org>',
                        'to'      => 'naiara <npadulesir15dw@ikzubirimanteo.com>',
                        'subject' => 'Hello naiara',
                        'text'    => 'Congratulations naiara, you just sent an email with Mailgun!  You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain so you can send 10,000 emails/month for free.'));
    



*/