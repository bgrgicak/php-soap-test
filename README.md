# Test PHP SOAP

This repository contains a simple PHP SOAP client and server.

TODO:
- [ ] Find out why the client is not working in the browser
- [ ] Find out why the client is extremely slow when run from the terminal

## Start the server

```bash
php -S localhost:12312 -t .
```

## Run the client

### Browser

Open the following URL in the browser:
```
http://localhost:12312/soap-client.php
```

### Terminal

```bash
php soap-client.php
```