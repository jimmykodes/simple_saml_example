<?php
$metadata['http://sp.com:8000/simplesamlphp/module.php/saml/sp/metadata.php/default-sp'] = array (
    'SingleLogoutService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'http://sp.com:8000/simplesamlphp/module.php/saml/sp/saml2-logout.php/default-sp',
                ),
        ),
    'AssertionConsumerService' =>
        array (
            0 =>
                array (
                    'index' => 0,
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'http://sp.com:8000/simplesamlphp/module.php/saml/sp/saml2-acs.php/default-sp',
                ),
            1 =>
                array (
                    'index' => 1,
                    'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
                    'Location' => 'http://sp.com:8000/simplesamlphp/module.php/saml/sp/saml1-acs.php/default-sp',
                ),
            2 =>
                array (
                    'index' => 2,
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
                    'Location' => 'http://sp.com:8000/simplesamlphp/module.php/saml/sp/saml2-acs.php/default-sp',
                ),
            3 =>
                array (
                    'index' => 3,
                    'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
                    'Location' => 'http://sp.com:8000/simplesamlphp/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
                ),
        ),
    'contacts' =>
        array (
            0 =>
                array (
                    'emailAddress' => 'jkeith@kochava.com',
                    'contactType' => 'technical',
                    'givenName' => 'Administrator',
                ),
        ),
);