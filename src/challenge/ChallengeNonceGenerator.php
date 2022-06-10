<?php

/*
 * Copyright (c) 2020-2021 Estonian Information System Authority
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace web_eid\web_eid_authtoken_validation_php\challenge;

/**
 * Generates challenge nonces, cryptographically strong random bytestrings that must be used only once.
 */
interface ChallengeNonceGenerator
{
	/** 
	 * @var int Integer indicating the length of bytes for challenge nonce
	 */
    public const NONCE_LENGTH = 32;

    /**
     * Generates a cryptographic nonce, a large random number that can be used only once,
     * and stores it in a ChallengeNonceStore.
     *
     * @return ChallengeNonceStore that contains the Base64-encoded nonce and its expiry time
     */
    public function generateAndStoreNonce(): ChallengeNonce;
}