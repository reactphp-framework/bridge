* require  extension[pecl-tuntap](https://github.com/quarxConnect/pecl-tuntap)
    * if build fail try remove TSRMLS_CC in tuntap.c

## start server
```
php examples/server.php 8010

```

## start client1 (one linux computer)
```
// ip 10.10.10.2
php examples/tun/client.php 192.168.1.9:8010 c4b34f0d-44fa-4ef5-9d28-ccef218d74fb 

```
## start client2 (another linux computer)
```
// ip 10.10.10.3
php examples/tun/client.php 192.168.1.9:8010 41c5ee60-0628-4b11-9439-a10ba19cbcdd


```

## test
in 10.10.10.3

```
ping 10.10.10.2
```
