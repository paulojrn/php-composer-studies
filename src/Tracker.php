<?php

namespace Alura\Tracker;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class Tracker
 */
class Tracker
{
    /**
     * @var ClientInterface
     */
    private ClientInterface $httpClient;

    /**
     * @var Crawler
     */
    private Crawler $crawler;

    /**
     * Contructor
     */
    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    /**
     * Search
     * @param string $url
     * @return array
     */
    public function search(string $url): array
    {
        $response = $this->httpClient->request("GET", $url);

        $html = $response->getBody();
        $this->crawler->addHtmlContent($html);

        $elements = $this->crawler->filter("span.card-curso__nome");
        $courses = [];

        foreach ($elements as $element) {
            $courses[] = $element->textContent;
        }

        return $courses;
    }
}
