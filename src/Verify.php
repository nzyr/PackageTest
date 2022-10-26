<?php

/**
 * Each engineer has a duty to keep the code elegant
 * Created by wuyuchuan at 2022/10/26 2:28 PM
 */

namespace PackageTest;

class Verify
{
    function isIPAddress($ip)
    {
        $ipv4Regex = '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/';

        $ipv6Regex = '/^(((?=.*(::))(?!.*\3.+\3))\3?|([\dA-F]{1,4}(\3|:\b|$)|\2))(?4){5}((?4){2}|(((2[0-4]|1\d|[1-9])?\d|25[0-5])\.?\b){4})$/i';

        if (preg_match($ipv4Regex, $ip)) {
            return 4;
        }

        if (false !== strpos($ip, ':') && preg_match($ipv6Regex, trim($ip, ' []'))) {
            return 6;
        }

        return false;
    }

}