<?hh

/* openssl_csr_export_to_file() takes the Certificate Signing Request
 * represented by csr and saves it as ascii-armoured text into the file named
 * by outfilename.
 * @param mixed $csr
 * @param string $outfilename - Path to the output file.
 * @param bool $notext - The optional parameter notext affects the verbosity
 * of the output; if it is FALSE, then additional human-readable information
 * is included in the output. The default value of notext is TRUE.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_csr_export_to_file(mixed $csr,
                                    string $outfilename,
                                    bool $notext = true): bool;

/* openssl_csr_export() takes the Certificate Signing Request represented by
 * csr and stores it as ascii-armoured text into out, which is passed by
 * reference.
 * @param mixed $csr
 * @param mixed $out
 * @param bool $notext - The optional parameter notext affects the verbosity
 * of the output; if it is FALSE, then additional human-readable information
 * is included in the output. The default value of notext is TRUE.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_csr_export(mixed $csr,
                            mixed &$out,
                            bool $notext = true): bool;

/* @param mixed $csr
 * @return mixed
 */
<<__Native>>
function openssl_csr_get_public_key(mixed $csr): mixed;

/* @param mixed $csr
 * @param bool $use_shortnames
 * @return mixed
 */
<<__Native>>
function openssl_csr_get_subject(mixed $csr,
                                 bool $use_shortnames = true): mixed;

/* openssl_csr_new() generates a new CSR (Certificate Signing Request) based
 * on the information provided by dn, which represents the Distinguished Name
 * to be used in the certificate. You need to have a valid openssl.cnf
 * installed for this function to operate correctly. See the notes under the
 * installation section for more information.
 * @param array $dn - The Distinguished Name to be used in the certificate.
 * @param mixed $privkey - privkey should be set to a private key that was
 * previously generated by openssl_pkey_new() (or otherwise obtained from the
 * other openssl_pkey family of functions). The corresponding public portion
 * of the key will be used to sign the CSR.
 * @param mixed $configargs - By default, the information in your system
 * openssl.conf is used to initialize the request; you can specify a
 * configuration file section by setting the config_section_section key of
 * configargs. You can also specify an alternative openssl configuration file
 * by setting the value of the config key to the path of the file you want to
 * use. The following keys, if present in configargs behave as their
 * equivalents in the openssl.conf, as listed in the table below.
 * Configuration overrides configargs key type openssl.conf equivalent
 * description digest_alg string default_md Selects which digest method to use
 * x509_extensions string x509_extensions Selects which extensions should be
 * used when creating an x509 certificate req_extensions string req_extensions
 * Selects which extensions should be used when creating a CSR
 * private_key_bits integer default_bits Specifies how many bits should be
 * used to generate a private key private_key_type integer none Specifies the
 * type of private key to create. This can be one of OPENSSL_KEYTYPE_DSA,
 * OPENSSL_KEYTYPE_DH or OPENSSL_KEYTYPE_RSA. The default value is
 * OPENSSL_KEYTYPE_RSA which is currently the only supported key type.
 * encrypt_key boolean encrypt_key Should an exported key (with passphrase) be
 * encrypted?
 * @param mixed $extraattribs - extraattribs is used to specify additional
 * configuration options for the CSR. Both dn and extraattribs are associative
 * arrays whose keys are converted to OIDs and applied to the relevant part of
 * the request.
 * @return mixed - Returns the CSR.
 */
<<__Native>>
function openssl_csr_new(?array $dn,
                         mixed &$privkey,
                         mixed $configargs = null,
                         mixed $extraattribs = null): mixed;

/* openssl_csr_sign() generates an x509 certificate resource from the given
 * CSR. You need to have a valid openssl.cnf installed for this function to
 * operate correctly. See the notes under the installation section for more
 * information.
 * @param mixed $csr - A CSR previously generated by openssl_csr_new(). It can
 * also be the path to a PEM encoded CSR when specified as file://path/to/csr
 * or an exported string generated by openssl_csr_export().
 * @param mixed $cacert - The generated certificate will be signed by cacert.
 * If cacert is NULL, the generated certificate will be a self-signed
 * certificate.
 * @param mixed $priv_key - priv_key is the private key that corresponds to
 * cacert.
 * @param int $days - days specifies the length of time for which the
 * generated certificate will be valid, in days.
 * @param mixed $configargs - You can finetune the CSR signing by configargs.
 * See openssl_csr_new() for more information about configargs.
 * @param int $serial - An optional the serial number of issued certificate.
 * If not specified it will default to 0.
 * @return mixed - Returns an x509 certificate resource on success, FALSE on
 * failure.
 */
<<__Native>>
function openssl_csr_sign(mixed $csr,
                          mixed $cacert,
                          mixed $priv_key,
                          int $days,
                          mixed $configargs = null,
                          int $serial = 0): mixed;

/* openssl_error_string() returns the last error from the openSSL library.
 * Error messages are stacked, so this function should be called multiple
 * times to collect all of the information.
 * @return mixed - Returns an error message string, or FALSE if there are no
 * more error messages to return.
 */
<<__Native>>
function openssl_error_string(): mixed;

/* openssl_open() opens (decrypts) sealed_data using the private key
 * associated with the key identifier priv_key_id and the envelope key
 * env_key, and fills open_data with the decrypted data. The envelope key is
 * generated when the data are sealed and can only be used by one specific
 * private key. See openssl_seal() for more information.
 * @param string $sealed_data
 * @param mixed $open_data - If the call is successful the opened data is
 * returned in this parameter.
 * @param string $env_key
 * @param mixed $priv_key_id
 * @param string $method
 * @param string $iv Initialization Vector, only required if the encryption
 * requires one
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_open(string $sealed_data,
                      mixed &$open_data,
                      string $env_key,
                      mixed $priv_key_id,
                      string $method = "",
                      string $iv = ""): bool;

/* openssl_pkcs12_export_to_file() stores x509 into a file named by filename
 * in a PKCS#12 file format.
 * @param mixed $x509 - See Key/Certificate parameters for a list of valid
 * values.
 * @param string $filename - Path to the output file.
 * @param mixed $priv_key - Private key component of PKCS#12 file.
 * @param string $pass - Encryption password for unlocking the PKCS#12 file.
 * @param mixed $args
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkcs12_export_to_file(mixed $x509,
                                       string $filename,
                                       mixed $priv_key,
                                       string $pass,
                                       mixed $args = null): bool;

/* openssl_pkcs12_export() stores x509 into a string named by out in a PKCS#12
 * file format.
 * @param mixed $x509 - See Key/Certificate parameters for a list of valid
 * values.
 * @param mixed $out - On success, this will hold the PKCS#12.
 * @param mixed $priv_key - Private key component of PKCS#12 file.
 * @param string $pass - Encryption password for unlocking the PKCS#12 file.
 * @param mixed $args
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkcs12_export(mixed $x509,
                               mixed &$out,
                               mixed $priv_key,
                               string $pass,
                               mixed $args = null): bool;

/* openssl_pkcs12_read() parses the PKCS#12 certificate store supplied by
 * pkcs12 into a array named certs.
 * @param string $pkcs12
 * @param mixed $certs - On success, this will hold the Certificate Store
 * Data.
 * @param string $pass - Encryption password for unlocking the PKCS#12 file.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkcs12_read(string $pkcs12,
                             mixed &$certs,
                             string $pass): bool;

/* Decrypts the S/MIME encrypted message contained in the file specified by
 * infilename using the certificate and its associated private key specified
 * by recipcert and recipkey.
 * @param string $infilename
 * @param string $outfilename - The decrypted message is written to the file
 * specified by outfilename.
 * @param mixed $recipcert
 * @param mixed $recipkey
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkcs7_decrypt(string $infilename,
                               string $outfilename,
                               mixed $recipcert,
                               mixed $recipkey = null): bool;

/* openssl_pkcs7_encrypt() takes the contents of the file named infile and
 * encrypts them using an RC2 40-bit cipher so that they can only be read by
 * the intended recipients specified by recipcerts.
 * @param string $infilename
 * @param string $outfilename
 * @param mixed $recipcerts - Either a lone X.509 certificate, or an array of
 * X.509 certificates.
 * @param array $headers - headers is an array of headers that will be
 * prepended to the data after it has been encrypted.  headers can be either
 * an associative array keyed by header name, or an indexed array, where each
 * element contains a single header line.
 * @param int $flags - flags can be used to specify options that affect the
 * encoding process - see PKCS7 constants.
 * @param int $cipherid - Cipher can be selected with cipherid.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkcs7_encrypt(string $infilename,
                               string $outfilename,
                               mixed $recipcerts,
                               array $headers,
                               int $flags = 0,
                               int $cipherid = OPENSSL_CIPHER_RC2_40): bool;

/* openssl_pkcs7_sign() takes the contents of the file named infilename and
 * signs them using the certificate and its matching private key specified by
 * signcert and privkey parameters.
 * @param string $infilename
 * @param string $outfilename
 * @param mixed $signcert
 * @param mixed $privkey
 * @param mixed $headers - headers is an array of headers that will be
 * prepended to the data after it has been signed (see openssl_pkcs7_encrypt()
 * for more information about the format of this parameter).
 * @param int $flags - flags can be used to alter the output - see PKCS7
 * constants.
 * @param string $extracerts - extracerts specifies the name of a file
 * containing a bunch of extra certificates to include in the signature which
 * can for example be used to help the recipient to verify the certificate
 * that you used.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkcs7_sign(string $infilename,
                            string $outfilename,
                            mixed $signcert,
                            mixed $privkey,
                            mixed $headers,
                            int $flags = PKCS7_DETACHED,
                            string $extracerts = ""): bool;

/* openssl_pkcs7_verify() reads the S/MIME message contained in the given file
 * and examines the digital signature.
 * @param string $filename - Path to the message.
 * @param int $flags - flags can be used to affect how the signature is
 * verified - see PKCS7 constants for more information.
 * @param string $outfilename - If the outfilename is specified, it should be
 * a string holding the name of a file into which the certificates of the
 * persons that signed the messages will be stored in PEM format.
 * @param array $cainfo - If the cainfo is specified, it should hold
 * information about the trusted CA certificates to use in the verification
 * process - see certificate verification for more information about this
 * parameter.
 * @param string $extracerts - If the extracerts is specified, it is the
 * filename of a file containing a bunch of certificates to use as untrusted
 * CAs.
 * @param string $content - You can specify a filename with content that will
 * be filled with the verified data, but with the signature information
 * stripped.
 * @return mixed - Returns TRUE if the signature is verified, FALSE if it is
 * not correct (the message has been tampered with, or the signing certificate
 * is invalid), or -1 on error.
 */
<<__Native>>
function openssl_pkcs7_verify(string $filename,
                              int $flags,
                              ?string $outfilename = null,
                              ?array $cainfo = null,
                              ?string $extracerts = null,
                              ?string $content = null): mixed;

/* openssl_pkey_export_to_file() saves an ascii-armoured (PEM encoded)
 * rendition of key into the file named by outfilename. You need to have a
 * valid openssl.cnf installed for this function to operate correctly. See the
 * notes under the installation section for more information.
 * @param mixed $key
 * @param string $outfilename - Path to the output file.
 * @param string $passphrase - The key can be optionally protected by a
 * passphrase.
 * @param mixed $configargs - configargs can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See openssl_csr_new() for more information about
 * configargs.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkey_export_to_file(mixed $key,
                                     string $outfilename,
                                     string $passphrase = "",
                                     mixed $configargs = null): bool;

/* openssl_pkey_export() exports key as a PEM encoded string and stores it
 * into out (which is passed by reference). You need to have a valid
 * openssl.cnf installed for this function to operate correctly. See the notes
 * under the installation section for more information.
 * @param mixed $key
 * @param mixed $out
 * @param string $passphrase - The key is optionally protected by passphrase.
 * @param mixed $configargs - configargs can be used to fine-tune the export
 * process by specifying and/or overriding options for the openssl
 * configuration file. See openssl_csr_new() for more information about
 * configargs.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_pkey_export(mixed $key,
                             mixed &$out,
                             string $passphrase = "",
                             mixed $configargs = null): bool;

/* This function frees a private key created by openssl_pkey_new().
 * @param resource $key - Resource holding the key.
 */
function openssl_pkey_free(resource $key): void {
  // do nothing
}

/* openssl_free_key() frees the key associated with the specified
 * key_identifier from memory.
 * @param resource $key
 */
function openssl_free_key(resource $key): void {
 openssl_pkey_free($key);
}

/* This function returns the key details (bits, key, type).
 * @param resource $key - Resource holding the key.
 * @return array - Returns an array with the key details in success or FALSE
 * in failure. Returned array has indexes bits (number of bits), key (string
 * representation of the public key) and type (type of the key which is one of
 * OPENSSL_KEYTYPE_RSA, OPENSSL_KEYTYPE_DSA, OPENSSL_KEYTYPE_DH,
 * OPENSSL_KEYTYPE_EC or -1 meaning unknown).
 */
<<__Native>>
function openssl_pkey_get_details(resource $key): array<string, mixed>;

/* openssl_get_privatekey() parses key and prepares it for use by other
 * functions.
 * @param mixed $key - key can be one of the following: a string having the
 * format file://path/to/file.pem. The named file must contain a PEM encoded
 * certificate/private key (it may contain both). A PEM formatted private key.
 * @param string $passphrase - The optional parameter passphrase must be used
 * if the specified key is encrypted (protected by a passphrase).
 * @return mixed - Returns a positive key resource identifier on success, or
 * FALSE on error.
 */
<<__Native>>
function openssl_pkey_get_private(mixed $key,
                                  string $passphrase = ""): mixed;

/* @param mixed $key
 * @param string $passphrase
 * @return mixed
 */
function openssl_get_privatekey(mixed $key,
                                mixed $passphrase = ""): mixed {
  return openssl_pkey_get_private($key, $passphrase);
}

/* openssl_get_publickey() extracts the public key from certificate and
 * prepares it for use by other functions.
 * @param mixed $certificate - certificate can be one of the following: an
 * X.509 certificate resource a string having the format
 * file://path/to/file.pem. The named file must contain a PEM encoded
 * certificate/private key (it may contain both). A PEM formatted private key.
 * @return mixed - Returns a positive key resource identifier on success, or
 * FALSE on error.
 */
<<__Native>>
function openssl_pkey_get_public(mixed $certificate): mixed;

/* @param mixed $certificate
 * @return mixed
 */
function openssl_get_publickey(mixed $certificate): mixed {
  return openssl_pkey_get_public($certificate);
}

/* openssl_pkey_new() generates a new private and public key pair. The public
 * component of the key can be obtained using openssl_pkey_get_public(). You
 * need to have a valid openssl.cnf installed for this function to operate
 * correctly. See the notes under the installation section for more
 * information.
 * @param mixed $configargs - You can finetune the key generation (such as
 * specifying the number of bits) using configargs. See openssl_csr_new() for
 * more information about configargs.
 * @return resource - Returns a resource identifier for the pkey on success,
 * or FALSE on error.
 */
<<__Native>>
function openssl_pkey_new(mixed $configargs = null): resource;

/* openssl_private_decrypt() decrypts data that was previous encrypted via
 * openssl_public_encrypt() and stores the result into decrypted.  You can use
 * this function e.g. to decrypt data which were supposed only to you.
 * @param string $data
 * @param mixed $decrypted
 * @param mixed $key - key must be the private key corresponding that was used
 * to encrypt the data.
 * @param int $padding - padding can be one of OPENSSL_PKCS1_PADDING,
 * OPENSSL_SSLV23_PADDING, OPENSSL_PKCS1_OAEP_PADDING, OPENSSL_NO_PADDING.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_private_decrypt(string $data,
                                 mixed &$decrypted,
                                 mixed $key,
                                 int $padding = OPENSSL_PKCS1_PADDING): bool;

/* openssl_private_encrypt() encrypts data with private key and stores the
 * result into crypted. Encrypted data can be decrypted via
 * openssl_public_decrypt().  This function can be used e.g. to sign data (or
 * its hash) to prove that it is not written by someone else.
 * @param string $data
 * @param mixed $crypted
 * @param mixed $key
 * @param int $padding - padding can be one of OPENSSL_PKCS1_PADDING,
 * OPENSSL_NO_PADDING.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_private_encrypt(string $data,
                                 mixed &$crypted,
                                 mixed $key,
                                 int $padding = OPENSSL_PKCS1_PADDING): bool;

/* openssl_public_decrypt() decrypts data that was previous encrypted via
 * openssl_private_encrypt() and stores the result into decrypted.  You can
 * use this function e.g. to check if the message was written by the owner of
 * the private key.
 * @param string $data
 * @param mixed $decrypted
 * @param mixed $key - key must be the public key corresponding that was used
 * to encrypt the data.
 * @param int $padding - padding can be one of OPENSSL_PKCS1_PADDING,
 * OPENSSL_NO_PADDING.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_public_decrypt(string $data,
                                mixed &$decrypted,
                                mixed $key,
                                int $padding = OPENSSL_PKCS1_PADDING): bool;

/* openssl_public_encrypt() encrypts data with public key and stores the
 * result into crypted. Encrypted data can be decrypted via
 * openssl_private_decrypt().  This function can be used e.g. to encrypt
 * message which can be then read only by owner of the private key. It can be
 * also used to store secure data in database.
 * @param string $data
 * @param mixed $crypted - This will hold the result of the encryption.
 * @param mixed $key - The public key.
 * @param int $padding - padding can be one of OPENSSL_PKCS1_PADDING,
 * OPENSSL_SSLV23_PADDING, OPENSSL_PKCS1_OAEP_PADDING, OPENSSL_NO_PADDING.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_public_encrypt(string $data,
                                mixed &$crypted,
                                mixed $key,
                                int $padding = OPENSSL_PKCS1_PADDING): bool;

/* openssl_seal() seals (encrypts) data by using RC4 with a randomly generated
 * secret key. The key is encrypted with each of the public keys associated
 * with the identifiers in pub_key_ids and each encrypted key is returned in
 * env_keys. This means that one can send sealed data to multiple recipients
 * (provided one has obtained their public keys). Each recipient must receive
 * both the sealed data and the envelope key that was encrypted with the
 * recipient's public key.
 * @param string $data
 * @param mixed $sealed_data
 * @param mixed $env_keys
 * @param array $pub_key_ids
 * @param string $method
 * @param string $iv
 * @return mixed - Returns the length of the sealed data on success, or FALSE
 * on error. If successful the sealed data is returned in sealed_data, and the
 * envelope keys in env_keys. If an IV was used during encryption, it is
 * returned via iv.
 */
<<__Native>>
function openssl_seal(string $data,
                      mixed &$sealed_data,
                      mixed &$env_keys,
                      array $pub_key_ids,
                      string $method = "",
                      mixed &$iv = null): mixed;

/* openssl_sign() computes a signature for the specified data by using SHA1
 * for hashing followed by encryption using the private key associated with
 * priv_key_id. Note that the data itself is not encrypted.
 * @param string $data
 * @param mixed $signature - If the call was successful the signature is
 * returned in signature.
 * @param mixed $priv_key_id
 * @param mixed $signature_alg - For more information see the list of
 * Signature Algorithms.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_sign(string $data,
                      mixed &$signature,
                      mixed $priv_key_id,
                      mixed $signature_alg = OPENSSL_ALGO_SHA1): bool;

/* openssl_verify() verifies that the signature is correct for the specified
 * data using the public key associated with pub_key_id. This must be the
 * public key corresponding to the private key used for signing.
 * @param string $data
 * @param string $signature
 * @param mixed $pub_key_id
 * @param mixed $signature_alg - For more information see the list of
 * Signature Algorithms.
 * @return mixed - Returns 1 if the signature is correct, 0 if it is
 * incorrect, and -1 on error.
 */
<<__Native>>
function openssl_verify(string $data,
                        string $signature,
                        mixed $pub_key_id,
                        mixed $signature_alg = OPENSSL_ALGO_SHA1): mixed;

/* Checks whether the given key is the private key that corresponds to cert.
 * @param mixed $cert - The certificate.
 * @param mixed $key - The private key.
 * @return bool - Returns TRUE if key is the private key that corresponds to
 * cert, or FALSE otherwise.
 */
<<__Native>>
function openssl_x509_check_private_key(mixed $cert,
                                        mixed $key): bool;

/* openssl_x509_checkpurpose() examines a certificate to see if it can be used
 * for the specified purpose.
 * @param mixed $x509cert - The examined certificate.
 * @param int $purpose - openssl_x509_checkpurpose() purposes Constant
 * Description X509_PURPOSE_SSL_CLIENT Can the certificate be used for the
 * client side of an SSL connection? X509_PURPOSE_SSL_SERVER Can the
 * certificate be used for the server side of an SSL connection?
 * X509_PURPOSE_NS_SSL_SERVER Can the cert be used for Netscape SSL server?
 * X509_PURPOSE_SMIME_SIGN Can the cert be used to sign S/MIME email?
 * X509_PURPOSE_SMIME_ENCRYPT Can the cert be used to encrypt S/MIME email?
 * X509_PURPOSE_CRL_SIGN Can the cert be used to sign a certificate revocation
 * list (CRL)? X509_PURPOSE_ANY Can the cert be used for Any/All purposes?
 * These options are not bitfields - you may specify one only!
 * @param array $cainfo - cainfo should be an array of trusted CA files/dirs
 * as described in Certificate Verification.
 * @param string $untrustedfile - If specified, this should be the name of a
 * PEM encoded file holding certificates that can be used to help verify the
 * certificate, although no trust is placed in the certificates that come from
 * that file.
 * @return mixed - Returns TRUE if the certificate can be used for the intended
 * purpose, FALSE if it cannot, or -1 on error.
 */
<<__Native>>
function openssl_x509_checkpurpose(mixed $x509cert,
                                   int $purpose,
                                   array $cainfo = [],
                                   string $untrustedfile = ""): mixed;

/* openssl_x509_export_to_file() stores x509 into a file named by outfilename
 * in a PEM encoded format.
 * @param mixed $x509 - See Key/Certificate parameters for a list of valid
 * values.
 * @param string $outfilename - Path to the output file.
 * @param bool $notext - The optional parameter notext affects the verbosity
 * of the output; if it is FALSE, then additional human-readable information
 * is included in the output. The default value of notext is TRUE.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_x509_export_to_file(mixed $x509,
                                     string $outfilename,
                                     bool $notext = true): bool;

/* openssl_x509_export() stores x509 into a string named by output in a PEM
 * encoded format.
 * @param mixed $x509 - See Key/Certificate parameters for a list of valid
 * values.
 * @param mixed $output - On success, this will hold the PEM.
 * @param bool $notext - The optional parameter notext affects the verbosity
 * of the output; if it is FALSE, then additional human-readable information
 * is included in the output. The default value of notext is TRUE.
 * @return bool - Returns TRUE on success or FALSE on failure.
 */
<<__Native>>
function openssl_x509_export(mixed $x509,
                             mixed &$output,
                             bool $notext = true): bool;

/* openssl_x509_free() frees the certificate associated with the specified
 * x509cert resource from memory.
 * @param resource $x509cert
 */
function openssl_x509_free(resource $x509cert): void {
  // do nothing
}

/* openssl_x509_parse() returns information about the supplied x509cert,
 * including fields such as subject name, issuer name, purposes, valid from
 * and valid to dates etc.
 * @param mixed $x509cert
 * @param bool $shortnames - shortnames controls how the data is indexed in
 * the array - if shortnames is TRUE (the default) then fields will be indexed
 * with the short name form, otherwise, the long name form will be used -
 * e.g.: CN is the shortname form of commonName.
 * @return mixed - The structure of the returned data is (deliberately) not
 * yet documented, as it is still subject to change.
 */
<<__Native>>
function openssl_x509_parse(mixed $x509cert,
                            bool $shortnames = true): mixed;

/* openssl_x509_read() parses the certificate supplied by x509certdata and
 * returns a resource identifier for it.
 * @param mixed $x509certdata
 * @return mixed - Returns a resource identifier on success or FALSE on
 * failure.
 */
<<__Native>>
function openssl_x509_read(mixed $x509certdata): mixed;

/* Generates a string of pseudo-random bytes, with the number of bytes
 * determined by the length parameter.  It also indicates if a
 * cryptographically strong algorithm was used to produce the pseudo-random
 * bytes, and does this via the optional crypto_strong parameter. It's rare
 * for this to be FALSE, but some systems may be broken or old.
 * @param int $length - The length of the desired string of bytes. Must be a
 * positive integer. PHP will try to cast this parameter to a non-null integer
 * to use it.
 * @param mixed $crypto_strong - If passed into the function, this will hold a
 * boolean value that determines if the algorithm used was "cryptographically
 * strong", e.g., safe for usage with GPG, passwords, etc. TRUE if it did,
 * otherwise FALSE
 * @return mixed - Returns the generated string of bytes on success, or FALSE
 * on failure.
 */
<<__Native>>
function openssl_random_pseudo_bytes(int $length,
                                     mixed &$crypto_strong = false): mixed;

/* Returns the required initialisation vector length for the cipher determined
 * by the mode parameter.
 * @param string $method - The cipher method.
 * @return mixed - Returns the iv length of a cipher, or FALSE on failure.
 */
<<__Native>>
function openssl_cipher_iv_length(string $method): mixed;

/* Encrypts given data with given method and key, returns a raw or base64
 * encoded string.
 * @param string $data - The data.
 * @param string $method - The cipher method.
 * @param string $password - The password.
 * @param int $options - Setting to TRUE will return as raw output data,
 * otherwise the return value is base64 encoded.
 * @param string $iv - The initialisation vector.
 * @param string $tag_out - The authentication tag will be saved to the variable
 * passed as a reference on successful encryption. If the encryption fails, then
 * the variable is unchanged. The resulted tag length is the same as the length
 * supplied in the $tag_length parameter which default to 16. For authenticated
 * encryption modes only.
 * @param string $aad - Additional authentication data. For authenticated
 * encryption modes only.
 * @param int $tag_length - The tag length can be set before the encryption and
 * can be between 4 and 16 for GCM mode where it is the same like trimming the
 * tag. On the other side the CCM has no such limits and also the resulted tag
 * is different for each length. For authenticated encryption modes only.
 * @return mixed - Returns the encrypted string on success or FALSE on
 * failure.
 */
<<__Native>>
function openssl_encrypt(string $data,
                         string $method,
                         string $password,
                         int $options = 0,
                         string $iv = "",
                         mixed &$tag_out = null,
                         string $aad = "",
                         int $tag_length = 16): mixed;

/* Takes a raw or base64 encoded string and decrypts it using a given method
 * and key.
 * @param string $data - The data.
 * @param string $method - The cipher method.
 * @param string $password - The password.
 * @param int $options - Setting to TRUE will take a raw encoded string,
 * otherwise a base64 string is assumed for the data parameter.
 * @param string $iv - The initialisation vector.
 * @param string $tag - The authentication tag that will be authenticated. If
 * it's incorrect, then the authentication fails and the function returns FALSE.
 * For authenticated encryption modes only.
 * @param string $aad - Additional authentication data. For authenticated
 * encryption modes only.
 * @return mixed - The decrypted string on success or FALSE on failure.
 */
<<__Native>>
function openssl_decrypt(string $data,
                         string $method,
                         string $password,
                         int $options = 0,
                         string $iv = "",
                         string $tag = "",
                         string $aad = ""): mixed;

/* Computes digest hash value for given data using given method, returns raw
 * or binhex encoded string.
 * @param string $data - The data.
 * @param string $method - The digest method.
 * @param bool $raw_output - Setting to TRUE will return as raw output data,
 * otherwise the return value is binhex encoded.
 * @return mixed - Returns the digested hash value on success or FALSE on
 * failure.
 */
<<__Native>>
function openssl_digest(string $data,
                        string $method,
                        bool $raw_output = false): mixed;

/* Gets a list of available cipher methods.
 * @param bool $aliases - Set to TRUE if cipher aliases should be included
 * within the returned array.
 * @return array - An array of available cipher methods.
 */
<<__Native>>
function openssl_get_cipher_methods(bool $aliases = false): array<string>;

/**
 * Return array of available elliptic curves or FALSE on failure.
 */
<<__Native>>
function openssl_get_curve_names(): mixed;

/* Gets a list of available digest methods.
 * @param bool $aliases - Set to TRUE if digest aliases should be included
 * within the returned array.
 * @return array - An array of available digest methods.
 */
<<__Native>>
function openssl_get_md_methods(bool $aliases = false): array<string>;
