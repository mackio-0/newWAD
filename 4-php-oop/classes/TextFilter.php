<?php

class TextFilter
{

    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function trim(): self
    {
        $this->text = trim($this->text);
        return $this;
    }

    public function removeEmoji(): self
    {
        $this->text = preg_replace('/([\p{Emoji}])/', '', $this->text);
        return $this;
    }

    public function toUpper(): self
    {
        $this->text = strtoupper($this->text);
        return $this;
    }

    public function toLower(): self
    {
        $this->text = strtolower($this->text);
        return $this;
    }

    public function stripTags(string $allowedTags = null): self
    {
        $this->text = strip_tags($this->text, $allowedTags);
        return $this;
    }

    public function replace(string $search, string $replace): self
    {
        $this->text = str_replace($search, $replace, $this->text);
        return $this;
    }

    public function get(): string
    {
        return $this->text;
    }
}
