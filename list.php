<!--
1st step----
C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = YourGmailId@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


Then 2nd Step---

C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values

smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=YourGmailId@gmail.com
auth_password=Your-Gmail-Password
force_sender=YourGmailId@gmail.com(optional) 
-->
