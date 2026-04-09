# Changelog

## Apr 9th, 2026—v1.1.0

- Added optional `context` parameter to `ResumeMatchScoreClient::matchResumeToJob()` for steering the scoring engine via the new directive contract (`EMPHASIZE:`, `DEEMPHASIZE:`, `CREDIT:`). Max 5000 characters per request.
- Updated README with a "Context directives" section and usage example.

## Dec 17th, 2025—v1.0.0

- Initial release of the pure PHP Resume/CV & Job Description Compatibility Scoring client.
- Added ResumeMatchScoreClient with resume-to-job matching and polling helpers via php-core.
- Added README with usage example, MIT license, and package metadata.