<?php

namespace HmwPj\UrlShortener;

class UrlAnywayConverter extends UrlConverter
{
    /**
     * @param string $url
     * @return string
     */
    public function encode(string $url): string
    {
        $this->validateUrl($url);
        return $this->generateAndSaveCode($url);
    }
}