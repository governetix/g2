<?php

namespace Modules\GCore\Services;

class SeoService
{
    protected $title = '';
    protected $description = '';
    protected $keywords = '';
    protected $canonicalUrl = '';
    protected $og = [];

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getKeywords(): string
    {
        return $this->keywords;
    }

    public function setCanonicalUrl(string $url): self
    {
        $this->canonicalUrl = $url;
        return $this;
    }

    public function getCanonicalUrl(): string
    {
        return $this->canonicalUrl;
    }

    public function setOg(array $og): self
    {
        $this->og = array_merge($this->og, $og);
        return $this;
    }

    public function getOg(): array
    {
        return $this->og;
    }

    public function renderMetaTags(): string
    {
        $html = '';
        if ($this->title) {
            $html .= '<title>' . e($this->title) . '</title>\n';
        }
        if ($this->description) {
            $html .= '<meta name="description" content="' . e($this->description) . '">\n';
        }
        if ($this->keywords) {
            $html .= '<meta name="keywords" content="' . e($this->keywords) . '">\n';
        }
        if ($this->canonicalUrl) {
            $html .= '<link rel="canonical" href="' . e($this->canonicalUrl) . '">\n';
        }

        foreach ($this->og as $property => $content) {
            $html .= '<meta property="og:' . e($property) . '" content="' . e($content) . '">\n';
        }

        return $html;
    }
}
