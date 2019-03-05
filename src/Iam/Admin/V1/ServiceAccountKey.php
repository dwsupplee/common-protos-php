<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Represents a service account key.
 * A service account has two sets of key-pairs: user-managed, and
 * system-managed.
 * User-managed key-pairs can be created and deleted by users.  Users are
 * responsible for rotating these keys periodically to ensure security of
 * their service accounts.  Users retain the private key of these key-pairs,
 * and Google retains ONLY the public key.
 * System-managed key-pairs are managed automatically by Google, and rotated
 * daily without user intervention.  The private key never leaves Google's
 * servers to maximize security.
 * Public keys for all service accounts are also published at the OAuth2
 * Service Account API.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.ServiceAccountKey</code>
 */
class ServiceAccountKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the service account key in the following format
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}/keys/{key}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The output format for the private key.
     * Only provided in `CreateServiceAccountKey` responses, not
     * in `GetServiceAccountKey` or `ListServiceAccountKey` responses.
     * Google never exposes system-managed private keys, and never retains
     * user-managed private keys.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     */
    private $private_key_type = 0;
    /**
     * Specifies the algorithm (and possibly key size) for the key.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 8;</code>
     */
    private $key_algorithm = 0;
    /**
     * The private key data. Only provided in `CreateServiceAccountKey`
     * responses. Make sure to keep the private key data secure because it
     * allows for the assertion of the service account identity.
     * When decoded, the private key data can be used to authenticate with
     * Google API client libraries and with
     * <a href="/sdk/gcloud/reference/auth/activate-service-account">gcloud
     * auth activate-service-account</a>.
     *
     * Generated from protobuf field <code>bytes private_key_data = 3;</code>
     */
    private $private_key_data = '';
    /**
     * The public key data. Only provided in `GetServiceAccountKey` responses.
     *
     * Generated from protobuf field <code>bytes public_key_data = 7;</code>
     */
    private $public_key_data = '';
    /**
     * The key can be used after this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_after_time = 4;</code>
     */
    private $valid_after_time = null;
    /**
     * The key can be used before this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_before_time = 5;</code>
     */
    private $valid_before_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the service account key in the following format
     *           `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}/keys/{key}`.
     *     @type int $private_key_type
     *           The output format for the private key.
     *           Only provided in `CreateServiceAccountKey` responses, not
     *           in `GetServiceAccountKey` or `ListServiceAccountKey` responses.
     *           Google never exposes system-managed private keys, and never retains
     *           user-managed private keys.
     *     @type int $key_algorithm
     *           Specifies the algorithm (and possibly key size) for the key.
     *     @type string $private_key_data
     *           The private key data. Only provided in `CreateServiceAccountKey`
     *           responses. Make sure to keep the private key data secure because it
     *           allows for the assertion of the service account identity.
     *           When decoded, the private key data can be used to authenticate with
     *           Google API client libraries and with
     *           <a href="/sdk/gcloud/reference/auth/activate-service-account">gcloud
     *           auth activate-service-account</a>.
     *     @type string $public_key_data
     *           The public key data. Only provided in `GetServiceAccountKey` responses.
     *     @type \Google\Protobuf\Timestamp $valid_after_time
     *           The key can be used after this timestamp.
     *     @type \Google\Protobuf\Timestamp $valid_before_time
     *           The key can be used before this timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the service account key in the following format
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}/keys/{key}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the service account key in the following format
     * `projects/{PROJECT_ID}/serviceAccounts/{SERVICE_ACCOUNT_EMAIL}/keys/{key}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The output format for the private key.
     * Only provided in `CreateServiceAccountKey` responses, not
     * in `GetServiceAccountKey` or `ListServiceAccountKey` responses.
     * Google never exposes system-managed private keys, and never retains
     * user-managed private keys.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     * @return int
     */
    public function getPrivateKeyType()
    {
        return $this->private_key_type;
    }

    /**
     * The output format for the private key.
     * Only provided in `CreateServiceAccountKey` responses, not
     * in `GetServiceAccountKey` or `ListServiceAccountKey` responses.
     * Google never exposes system-managed private keys, and never retains
     * user-managed private keys.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountPrivateKeyType private_key_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPrivateKeyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountPrivateKeyType::class);
        $this->private_key_type = $var;

        return $this;
    }

    /**
     * Specifies the algorithm (and possibly key size) for the key.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 8;</code>
     * @return int
     */
    public function getKeyAlgorithm()
    {
        return $this->key_algorithm;
    }

    /**
     * Specifies the algorithm (and possibly key size) for the key.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccountKeyAlgorithm key_algorithm = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\ServiceAccountKeyAlgorithm::class);
        $this->key_algorithm = $var;

        return $this;
    }

    /**
     * The private key data. Only provided in `CreateServiceAccountKey`
     * responses. Make sure to keep the private key data secure because it
     * allows for the assertion of the service account identity.
     * When decoded, the private key data can be used to authenticate with
     * Google API client libraries and with
     * <a href="/sdk/gcloud/reference/auth/activate-service-account">gcloud
     * auth activate-service-account</a>.
     *
     * Generated from protobuf field <code>bytes private_key_data = 3;</code>
     * @return string
     */
    public function getPrivateKeyData()
    {
        return $this->private_key_data;
    }

    /**
     * The private key data. Only provided in `CreateServiceAccountKey`
     * responses. Make sure to keep the private key data secure because it
     * allows for the assertion of the service account identity.
     * When decoded, the private key data can be used to authenticate with
     * Google API client libraries and with
     * <a href="/sdk/gcloud/reference/auth/activate-service-account">gcloud
     * auth activate-service-account</a>.
     *
     * Generated from protobuf field <code>bytes private_key_data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKeyData($var)
    {
        GPBUtil::checkString($var, False);
        $this->private_key_data = $var;

        return $this;
    }

    /**
     * The public key data. Only provided in `GetServiceAccountKey` responses.
     *
     * Generated from protobuf field <code>bytes public_key_data = 7;</code>
     * @return string
     */
    public function getPublicKeyData()
    {
        return $this->public_key_data;
    }

    /**
     * The public key data. Only provided in `GetServiceAccountKey` responses.
     *
     * Generated from protobuf field <code>bytes public_key_data = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKeyData($var)
    {
        GPBUtil::checkString($var, False);
        $this->public_key_data = $var;

        return $this;
    }

    /**
     * The key can be used after this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_after_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getValidAfterTime()
    {
        return $this->valid_after_time;
    }

    /**
     * The key can be used after this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_after_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidAfterTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->valid_after_time = $var;

        return $this;
    }

    /**
     * The key can be used before this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_before_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getValidBeforeTime()
    {
        return $this->valid_before_time;
    }

    /**
     * The key can be used before this timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp valid_before_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setValidBeforeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->valid_before_time = $var;

        return $this;
    }

}

