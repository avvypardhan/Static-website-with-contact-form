# Static-website-with-contact-form

This is simple static website with contact form

1.) If you want to use a smtp server then enter some details into the index.php file.
2.) and if don't want to use smtp then you have second option create own server send email with the help of server. this is used your
    domain name to send email to another person. just goto mail folder and do some changes in it
for both  options
    You need a phpmailer to send email to another person so may be during commit one file has untracked and they may be not uploaded
    so installed phpmail in your system and set the path of phpmail
    1.) do some changes in index.php add path into require('')
    2.) Do some changes in handler.php(inside mail folder) and add path inot require('')
