<?php 

    $data = $_POST['data'];
    $data = str_replace("\n", "", $data);
    // $ciphertext = "OWncaEuCFHp2Ptu1sSwhkX7ye4cFzj9t06GDH79I+vlWUFI8nKbBEO5IaWApWCM3DnlP1SFqIXchOMNPHTy3cIQaaV+yh9DGbmiCgkHJ1cShFEs46ifkRyO2hr7NJ7J11imoHPonwdtUh3SyirrQVqiQUB6BPw6V84i7MPp1pRjWKPX7oh9W+JD9Xc16Nqyoj/ohDQf/3KjLqsLULV3hTi6tBy9YstXisI8Wce0UceQfRQAkeR0RrkmswxP7jW6yHfEw2Rypk1PHggxhyEU1aBZxZbQMIdvRGyiaGCg/tT6OU+qhS8lGl1ZNpR9noqkJLyyfjCIQ4/gj0MfpA/W+/w==";
    
    // $privateKey = "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCcDAzIk/VpbTl0\nAtBa9Pz/W4gALkZXFolopUu6Sm15b0UkZcttpIqvPEMLOiN+sRR+GOOAwqqZHopT\nVhwJu6b+HLr4+BRWBqi2RaSEtIJYpXS5H5NIRd64mew6/5qQlLS+IMEcP4NUG66C\n3TPEgJvjnb2DMNQ8zf9GBy9l9/d+lj47idChOHag+nckX5IVlx1CFn9ZM5+rQNnl\ncH6bQmsSFRimmbIHUvt62xmNk9/CoOgNRoQPpCsRSXo3LaFLtCfbdCwYPEOMy4/u\nIi3O9FZSdL2jV9kV0QkxV/VLRWbyJpirEVq6Vh7iiALuSxLyI0wFL3Ij10LotplP\nA4mI/Q59AgMBAAECggEAAjvB6xUDDDE+A0UPCl47SMRcm/QNma1+5fqHrPDnxDct\nfCng0X7rZTqtkvmQDH4oVu2wQ+WFX4+qVysCV7lR2I08t9eFIv4RaBpzElsrCm3D\nz+p9xykI2QeK9AU4hx05wQbi/K6ECK4kv0a/OO7GTGmzjq8iOoSQRMZRjVoRNsSW\nAibCB/zKUOrskzJPmcCwuOd0nFQAJWg5gOKSaiaphgdENXebCqFhaOD7UsG6kZCK\nGpPBxZE5bnxKXjUR/r3ElvamnB6zZ9I2lXV2UzUA9DvNdOgRZFTIuMIuUgJYFCHK\nMzUQsXYfw7XvX3yKBVU2nTJPK4LdqaipJn3lIHBVGQKBgQDNvYq2DD3wgIEjmkYM\n0D0spr9Qw5xSxhI18IGgodhBJXTYOLZrbzL9At8iYySgbIun6rLKk6wqMX+FCrWb\n2XB7ZXmakNgat+jsUu5ZPolDIZUuRPl5P32FKRRScNRGBCkl/xQ2KeCus7MdTClg\n8coxSvVcGnEfxcDHKJlml6K09wKBgQDCKtG/xMnccxp8/ZOSWo9NgrqoXb+QMgt1\nQeBSCpZ3PtUiNSu74spJLaSTWRcBTZfMHJxc4CHCujOeP7oDUHyftPU5+9gB7zCV\ngP1OGrMVCV277yWGe6sb5riyoX40czYf+j6ryhhPej1nJ+MO1FgG9xv2+QOQtShd\nBnhuuUdfKwKBgQCXmmewJe0uX0LJnVCo+HlbgbPQK5PxWorovESIvTnBJ3ymJ4Qk\nPlhwH8GUcUH4BIQUQ9ljdNWUcczpmC6inONJykiFIN5dMc+s9J81m+NBWGm5IpJC\nSgqQKOkUppeE0GQR35hhIRKzKS9/EzQaf5DiKb4LFGDvbKTVHJGNC4eVmQKBgGXL\nuzG2Azq/Ydi7vP2S2uSBMEkK9V6szhMImYmJoX8dAvKvO6GCchlRg6H4qDX3ryjE\nqzmKDEkiA+PodyY7sUqtvY9LuOCyvR70hFjJaLATu//Gjj7mYTv8h0KnphnreSnk\nsayxBHPOm5iUcdcZfpkQPqoJvVPFlkbHGKa8Hm4HAoGBAMtcuRFjC9FkgFlTlYyN\nMFBRniJvSW0tScEMk76vSbuorze7dgE7TY6ILQAsIKfC7JG23YGW00Vprnpm6ieo\nfzmeSYS7ND7foYqSs66rogZAqhhvlPJPW1fK1goC2AQ61n33cwWlRyI3O+PysUoC\nqDyOywce40ntsb33GWLzHUN+\n-----END PRIVATE KEY-----";    
    // echo urldecode(base64_decode($ciphertext));   
    
    // Decrypt the data using the private key and store the results in $decrypted
    // openssl_private_decrypt(base64_decode($ciphertext), $decrypted, $privateKey);
    
    $decrypted = shell_exec('python mt_hash_datas.py ' . $data);

    echo $decrypted;
    
?>
