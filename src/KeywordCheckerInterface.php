<?php


namespace KeywordList;


interface KeywordCheckerInterface
{
    /**
     * @param string $content
     * @return bool
     */
    public function isValid($content);

    /**
     * @param string|array $keywords
     * @return mixed
     */
    public function addToBlackList($keywords);

    /**
     * @param string|array $keywords
     * @return mixed
     */
    public function deleteFromBlackList($keywords);

    /**
     * @param string|array $keywords
     * @return mixed
     */
    public function addToWhiteList($keywords);

    /**
     * @param string|array $keywords
     * @return mixed
     */
    public function deleteFromWhiteList($keywords);

    /**
     * @return string
     */
    public function getInvalidKeyword();
}