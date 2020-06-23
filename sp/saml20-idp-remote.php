<?php
$metadata['http://idp.com:8080/simplesamlphp/saml2/idp/metadata.php'] = array(
    'metadata-set' => 'saml20-idp-remote',
    'entityid' => 'http://idp.com:8080/simplesamlphp/saml2/idp/metadata.php',
    'SingleSignOnService' =>
        array(
            0 =>
                array(
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'http://idp.com:8080/simplesamlphp/saml2/idp/SSOService.php',
                ),
        ),
    'SingleLogoutService' =>
        array(
            0 =>
                array(
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'http://idp.com:8080/simplesamlphp/saml2/idp/SingleLogoutService.php',
                ),
        ),
    'certData' => 'MIIEzTCCAzWgAwIBAgIUD1AiMIxUvJcmFJhA/W2SZIhUI3QwDQYJKoZIhvcNAQELBQAwdjELMAkGA1UEBhMCVVMxDjAMBgNVBAgMBUlkYWhvMRIwEAYDVQQHDAlTYW5kcG9pbnQxEDAOBgNVBAoMB0tvY2hhdmExDjAMBgNVBAMMBUppbW15MSEwHwYJKoZIhvcNAQkBFhJqa2VpdGhAa29jaGF2YS5jb20wHhcNMjAwNjIzMTc0MDQyWhcNMzAwNjIzMTc0MDQyWjB2MQswCQYDVQQGEwJVUzEOMAwGA1UECAwFSWRhaG8xEjAQBgNVBAcMCVNhbmRwb2ludDEQMA4GA1UECgwHS29jaGF2YTEOMAwGA1UEAwwFSmltbXkxITAfBgkqhkiG9w0BCQEWEmprZWl0aEBrb2NoYXZhLmNvbTCCAaIwDQYJKoZIhvcNAQEBBQADggGPADCCAYoCggGBANsTG6bRYg5yxFooJpdGMAxNgFxGQbEn4zV9QXm7sPvQmUhUpA4vbVCG0sTIsRMMcTjw1hzUc8q+ZLFLnY9MzzYdzWY3X2MGxScWzOCJEp/TOon95LSsfvKTLXyj7sW12csSnwNzEg23Qls7PeB7seEieesoUn5LjRj9jMkxC4Su/9AlB/t9aBtI+XGO+KApp5kI85xt4/tHRfaXtiQOx9rqxuiJWlwBg3/W8ivX5kCdM0nK/cRJi5exkJNz81JM+TBmXFBN3sTzBsNwxBR2/hG12v28rtlHKnYaYkZPfL3WBscNq+7jM+7Swf+rYM+eWbpW9OasghatB2QZ42su5Qualxf2YF+4f7rc/xX63/jxSS5LzAj5qxv1oUKjv5NI3e3TLjarIgvSKvhZZh33eNxAPm/ZYKBU6ifU3MMKQrMDu6P823vwblX8q7I9IhSsZ2EA228M2fSC1hds+wjVMmOGaEtBljNAkFD7AvvYbNvnKYPWHLtiTBmaCTImvYH+PQIDAQABo1MwUTAdBgNVHQ4EFgQUhMdsRQzeG9trr8lajvs9AKr2P7gwHwYDVR0jBBgwFoAUhMdsRQzeG9trr8lajvs9AKr2P7gwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAYEAmoum6A83f+gqK6KyeNGFRX9pzbwnTd2TPlKMTgLEUrBQdM3VXoRAd0QEt2GBqtTmTpAo6d5Y/huuKSi04+b8IRMtJrDpLGC8qTEMMjiNZjw2k5tZPsSR+KJivlqWI0szsRW1HUbn3lO5oRrmdRSQBfec+kI1xU/9y5TPhIIgRks5JYvOzS3nskZpDNEzJafM/HusVzH4OIgECNC5Imvff5uizPfcotlZCb48+tefNqcRQkDLFLQlRyD2MfauU+Xtcdox/2ZuJIkD2Tpnu12rMzUXVJuDuu+x/f1FPSF0gi2Vhbwhp8foNV60hwjt5cntxgZ86LV1d31xj9oY7gTeAg/g9Y8cgL5MT2IXiCAekIpfmOcTfsOsvLHzaZiFq1xt4CEPNC9TIHZJljHyUz2x99RKTl1OBmjEC8OIwjb6n78aeJ5H+eg9NX7Mq1N3R6Fl1whYNke3K1wuRN3lP1c2yyPJWSD0KkAX0FVuIVYEuRKAyiz/AX4Q9q0Ot2xVY+Lj',
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'contacts' =>
        array(
            0 =>
                array(
                    'emailAddress' => 'jkeith@kochava.com',
                    'contactType' => 'technical',
                    'givenName' => 'Administrator',
                ),
        ),
);