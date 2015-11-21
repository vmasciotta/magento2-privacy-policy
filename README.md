# Magento2 Privacy Policy
Questo modulo aggiunge le checkbox di accettazione della Privacy dove necessario:

  * form newsletter
  * form registrazione utente
  
##Installazione tramite composer:
 aggiungere la riga seguente al composer del proprio progetto:
 
```
...
"require":{
    ...
    "vmasciotta/magento2-privacy-policy":"1.0.0"
 },
 ...
 "repositories":[
     {"type": "vcs", "url":"git@github.com:vmasciotta/magento2-privacy-policy.git"}
 ]
```
 
 esegure quindi dalla root di magento i seguenti comandi:

```
$ composer update
$ ./bin/magento cache:disable
$ ./bin/magento module:enable Vmasciotta_PrivacyPolicy
$ ./bin/magento setup:upgrade
$ ./bin/magento cache:enable
```
