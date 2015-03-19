<?php
    
    // Create the private and public key
    /* $res = openssl_pkey_new(array('private_key_bits' => 2048));

    // Extract the private key from $res to $privateKey
    openssl_pkey_export($res, $privateKey);

    // Extract the public key from $res to $publicKey 
    $details = openssl_pkey_get_details($res);
    $publicKey = $details['key']; */

    $publicKey = "-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnAwMyJP1aW05dALQWvT8\n/1uIAC5GVxaJaKVLukpteW9FJGXLbaSKrzxDCzojfrEUfhjjgMKqmR6KU1YcCbum\n/hy6+PgUVgaotkWkhLSCWKV0uR+TSEXeuJnsOv+akJS0viDBHD+DVBuugt0zxICb\n4529gzDUPM3/RgcvZff3fpY+O4nQoTh2oPp3JF+SFZcdQhZ/WTOfq0DZ5XB+m0Jr\nEhUYppmyB1L7etsZjZPfwqDoDUaED6QrEUl6Ny2hS7Qn23QsGDxDjMuP7iItzvRW\nUnS9o1fZFdEJMVf1S0Vm8iaYqxFaulYe4ogC7ksS8iNMBS9yI9dC6LaZTwOJiP0O\nfQIDAQAB\n-----END PUBLIC KEY-----";
    $privateKey = "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCcDAzIk/VpbTl0\nAtBa9Pz/W4gALkZXFolopUu6Sm15b0UkZcttpIqvPEMLOiN+sRR+GOOAwqqZHopT\nVhwJu6b+HLr4+BRWBqi2RaSEtIJYpXS5H5NIRd64mew6/5qQlLS+IMEcP4NUG66C\n3TPEgJvjnb2DMNQ8zf9GBy9l9/d+lj47idChOHag+nckX5IVlx1CFn9ZM5+rQNnl\ncH6bQmsSFRimmbIHUvt62xmNk9/CoOgNRoQPpCsRSXo3LaFLtCfbdCwYPEOMy4/u\nIi3O9FZSdL2jV9kV0QkxV/VLRWbyJpirEVq6Vh7iiALuSxLyI0wFL3Ij10LotplP\nA4mI/Q59AgMBAAECggEAAjvB6xUDDDE+A0UPCl47SMRcm/QNma1+5fqHrPDnxDct\nfCng0X7rZTqtkvmQDH4oVu2wQ+WFX4+qVysCV7lR2I08t9eFIv4RaBpzElsrCm3D\nz+p9xykI2QeK9AU4hx05wQbi/K6ECK4kv0a/OO7GTGmzjq8iOoSQRMZRjVoRNsSW\nAibCB/zKUOrskzJPmcCwuOd0nFQAJWg5gOKSaiaphgdENXebCqFhaOD7UsG6kZCK\nGpPBxZE5bnxKXjUR/r3ElvamnB6zZ9I2lXV2UzUA9DvNdOgRZFTIuMIuUgJYFCHK\nMzUQsXYfw7XvX3yKBVU2nTJPK4LdqaipJn3lIHBVGQKBgQDNvYq2DD3wgIEjmkYM\n0D0spr9Qw5xSxhI18IGgodhBJXTYOLZrbzL9At8iYySgbIun6rLKk6wqMX+FCrWb\n2XB7ZXmakNgat+jsUu5ZPolDIZUuRPl5P32FKRRScNRGBCkl/xQ2KeCus7MdTClg\n8coxSvVcGnEfxcDHKJlml6K09wKBgQDCKtG/xMnccxp8/ZOSWo9NgrqoXb+QMgt1\nQeBSCpZ3PtUiNSu74spJLaSTWRcBTZfMHJxc4CHCujOeP7oDUHyftPU5+9gB7zCV\ngP1OGrMVCV277yWGe6sb5riyoX40czYf+j6ryhhPej1nJ+MO1FgG9xv2+QOQtShd\nBnhuuUdfKwKBgQCXmmewJe0uX0LJnVCo+HlbgbPQK5PxWorovESIvTnBJ3ymJ4Qk\nPlhwH8GUcUH4BIQUQ9ljdNWUcczpmC6inONJykiFIN5dMc+s9J81m+NBWGm5IpJC\nSgqQKOkUppeE0GQR35hhIRKzKS9/EzQaf5DiKb4LFGDvbKTVHJGNC4eVmQKBgGXL\nuzG2Azq/Ydi7vP2S2uSBMEkK9V6szhMImYmJoX8dAvKvO6GCchlRg6H4qDX3ryjE\nqzmKDEkiA+PodyY7sUqtvY9LuOCyvR70hFjJaLATu//Gjj7mYTv8h0KnphnreSnk\nsayxBHPOm5iUcdcZfpkQPqoJvVPFlkbHGKa8Hm4HAoGBAMtcuRFjC9FkgFlTlYyN\nMFBRniJvSW0tScEMk76vSbuorze7dgE7TY6ILQAsIKfC7JG23YGW00Vprnpm6ieo\nfzmeSYS7ND7foYqSs66rogZAqhhvlPJPW1fK1goC2AQ61n33cwWlRyI3O+PysUoC\nqDyOywce40ntsb33GWLzHUN+\n-----END PRIVATE KEY-----";
    
    echo $publicKey;
    /* echo "<br />";
    echo "<br />";
    echo $privateKey;
    echo "<br />";
    echo "<br />"; */

    $message = "I am here";

    // Encrypt the data to $encrypted using the public key
    openssl_public_encrypt($message, $encrypted, $publicKey);

    // echo base64_encode($encrypted);

    // Decrypt the data using the private key and store the results in $decrypted
    openssl_private_decrypt($encrypted, $decrypted, $privateKey);

    // echo $decrypted;
?>