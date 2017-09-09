<?php

namespace LVR\IP\Tests;

use LVR\IP\PrivateAddress;
use LVR\IP\PublicAddress;
use Validator;

class IPAddressTest extends TestCase
{
    /**
     * @param       $ip
     *
     * @return \Illuminate\Validation\Validator
     */
    protected function pub($ip)
    {
        return Validator::make(['ip' => $ip], ['ip' => ['required', new PublicAddress]]);
    }

    /**
     * @param       $ip
     *
     * @return \Illuminate\Validation\Validator
     */
    protected function pri($ip)
    {
        return Validator::make(['ip' => $ip], ['ip' => ['required', new PrivateAddress]]);
    }

    /** @test */
    public function check_public_ipv4()
    {
        $this->assertTrue($this->pub('8.8.8.8')->passes());
        $this->assertTrue($this->pub('10.10.10.10')->fails());
    }

    /** @test */
    public function check_private_ipv4()
    {
        $this->assertTrue($this->pri('8.8.8.8')->fails());
        $this->assertTrue($this->pri('10.10.10.10')->passes());
    }

    /** @test */
    public function check_public_ipv6()
    {
        $this->assertTrue($this->pub('2001:4860:4860::8888')->passes());
        $this->assertTrue($this->pub('fd12:3456:789a:1::1')->fails());
    }

    /** @test */
    public function check_private_ipv6()
    {
        $this->assertTrue($this->pri('2001:4860:4860::8888')->fails());
        $this->assertTrue($this->pri('fd12:3456:789a:1::1')->passes());
    }
}
