# Changelog
All notable changes to **WordPress DecaLog SDK** are documented in this *changelog*.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and **WordPress DecaLog SDK** adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [5.0.0] - 2024-05-28

### Breaking Change
- DecaLog SDK now uses PSR3 1.x and 3.x. You have to specify it. Fallback to PSR3 1.x if nothing is specified. See details [here](https://decalog.io/sdk/psr-3-versions/).

## [4.2.0] - 2024-05-07

### Changed
- The SDK now adapts its requirements to the PSR-3 loaded version.

## [4.1.1] - 2024-05-05

### Fixed
- The failsafe may produce PHP errors in some cases.

## [4.1.0] - 2024-05-04

### Added
- There's now a failsafe in case of use with oldest DecaLog versions.

## [4.0.0] - 2024-05-02

### Breaking Change
- DecaLog SDK now uses PSR3 3.x

## [3.0.0] - 2022-04-18

### Added
- New `\DecaLog\Engine::initLibrary()` method to specifically initialize DecaLog engine for libraries (thanks to [Loïc Antignac](https://github.com/webaxones) for the suggestion).

## [2.0.2] - 2021-12-09

### Fixed
- The SDK may produce errors at initialization sequence (thanks to [Jhonny Oliveira](https://github.com/jhonny-oliveira)).

## [2.0.1] - 2021-12-09

### Changed
- Improved UUID generator.
- Automatic trace ID initialization if not already present.

## [2.0.0] - 2021-06-21

### Changed
- [BC] Tracer methods signatures.

## [1.2.0] - 2021-06-20

### Added
- New `DECALOG_TRACE_*` constants to allow hierarchical users' spans.

## [1.1.0] - 2021-06-09

### Added
- New `DECALOG_MAX_SHUTDOWN_PRIORITY` constant allowing to set the maximum priority for a shutdown hook.

## [1.0.0] - 2021-06-04

Initial release, in anticipation of the DecaLog 3 release.
