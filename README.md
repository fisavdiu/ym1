### Running Tasks 1.2 & 1.3 in your Terminal

If you are using WSL2 with Ubuntu distribution like me check if you have enabled the php extension for readline in your php.ini configuration

``extension=readline``

If it is not listed in your php.ini file please run the command below

```console
apt-get update
apt-get install php-readline
```
