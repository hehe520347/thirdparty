<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/core.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.LoginUserProfile</code>
 */
class LoginUserProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     */
    private $userId = '';
    /**
     * Generated from protobuf field <code>string loginName = 2;</code>
     */
    private $loginName = '';
    /**
     * for register
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     */
    private $nickName = '';
    /**
     * Generated from protobuf field <code>string phoneCountryCode = 4;</code>
     */
    private $phoneCountryCode = '';
    /**
     * Generated from protobuf field <code>string phoneNumber = 5;</code>
     */
    private $phoneNumber = '';
    /**
     * Generated from protobuf field <code>string invitationCode = 6;</code>
     */
    private $invitationCode = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $userId
     *     @type string $loginName
     *     @type string $nickName
     *           for register
     *     @type string $phoneCountryCode
     *     @type string $phoneNumber
     *     @type string $invitationCode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Core::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>string userId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string loginName = 2;</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Generated from protobuf field <code>string loginName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->loginName = $var;

        return $this;
    }

    /**
     * for register
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * for register
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNickName($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phoneCountryCode = 4;</code>
     * @return string
     */
    public function getPhoneCountryCode()
    {
        return $this->phoneCountryCode;
    }

    /**
     * Generated from protobuf field <code>string phoneCountryCode = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->phoneCountryCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phoneNumber = 5;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Generated from protobuf field <code>string phoneNumber = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phoneNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string invitationCode = 6;</code>
     * @return string
     */
    public function getInvitationCode()
    {
        return $this->invitationCode;
    }

    /**
     * Generated from protobuf field <code>string invitationCode = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInvitationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->invitationCode = $var;

        return $this;
    }

}
