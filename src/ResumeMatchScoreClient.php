<?php

declare(strict_types=1);

namespace SharpAPI\ResumeMatchScore;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

class ResumeMatchScoreClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPMatchScore/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * @api
     * @throws GuzzleException
     */
    public function matchResumeToJob(
        string $cvFilePath,
        string $jobDescription,
        string $language = 'English'
    ): string {
        $response = $this->makeRequest(
            'POST',
            '/hr/resume_job_match_score',
            [
                'language' => $language,
                'content' => $jobDescription
            ],
            $cvFilePath
        );

        return $this->parseStatusUrl($response);
    }
}
