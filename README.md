# ownCloud Coding Standard

<!-- OSPO-managed README | Generated: 2026-04-16 | v2 -->

[![License](https://img.shields.io/badge/License-AGPL--3.0-blue.svg)](LICENSE) [![ownCloud OSPO](https://img.shields.io/badge/OSPO-ownCloud-blue)](https://kiteworks.com/opensource)

This repository provides the official ownCloud PHP coding standard as a reusable Composer package. It configures [friendsofphp/php-cs-fixer](http://github.com/FriendsOfPHP/PHP-CS-Fixer) with the rule set defined by the ownCloud team and is used across ownCloud PHP repositories to enforce consistent code style. The library follows semantic versioning, with "risky" additions to code checks introduced only in major versions.

## Part of Infrastructure / Tooling

This package is a shared development tool used across the ownCloud ecosystem. It is consumed by [ownCloud Server (Classic)](https://github.com/owncloud/core) and other PHP-based ownCloud repositories to enforce consistent code formatting.

## Getting Started

Follow the steps below to install and configure the coding standard in your project.

### Installation

```bash
composer require --dev owncloud/coding-standard
```

### Usage

Create a configuration file `.php-cs-fixer.dist.php` in the root of your project:

```php
<?php

$config = new OC\CodingStandard\Config();

$config
    ->setUsingCache(true)
    ->getFinder()
    ->in(__DIR__);

return $config;
```

## Documentation

- [php-cs-fixer documentation](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- [CHANGELOG.md](https://github.com/owncloud/coding-standard/blob/master/CHANGELOG.md) - Release history

## Community & Support

**[Star](https://github.com/owncloud/coding-standard)** this repo and **Watch** for release notifications!

- [ownCloud Website](https://owncloud.com)
- [Community Discussions](https://github.com/orgs/owncloud/discussions)
- [Matrix Chat](https://app.element.io/#/room/#owncloud:matrix.org)
- [Documentation](https://doc.owncloud.com)
- [Enterprise Support](https://owncloud.com/contact-us/)
- [OSPO Home](https://kiteworks.com/opensource)

## Contributing

We welcome contributions! Please read the [Contributing Guidelines](CONTRIBUTING.md)
and our [Code of Conduct](CODE_OF_CONDUCT.md) before getting started.

### Workflow

- **Rebase Early, Rebase Often!** We use a rebase workflow. Always rebase on the target branch before submitting a PR.
- **Dependabot**: Automated dependency updates are managed via Dependabot. Review and merge dependency PRs promptly.
- **Signed Commits**: All commits **must** be PGP/GPG signed. See [GitHub's signing guide](https://docs.github.com/en/authentication/managing-commit-signature-verification).
- **DCO Sign-off**: Every commit must carry a `Signed-off-by` line:
  ```
  git commit -s -S -m "your commit message"
  ```
- **GitHub Actions Policy**: Workflows may only use actions that are (a) owned by `owncloud`, (b) created by GitHub (`actions/*`), or (c) verified in the GitHub Marketplace.

## Security

**Do not open a public GitHub issue for security vulnerabilities.**

Report vulnerabilities at **<https://security.owncloud.com>** -- see [SECURITY.md](SECURITY.md).

Bug bounty: [YesWeHack ownCloud Program](https://yeswehack.com/programs/owncloud-bug-bounty-program)

## License

This project is licensed under the [AGPL-3.0](LICENSE).

## About the ownCloud OSPO

The [Kiteworks Open Source Program Office](https://kiteworks.com/opensource), operating under
the [ownCloud](https://owncloud.com) brand, launched on May 5, 2026, to steward the open source
ecosystem around ownCloud's products. The OSPO ensures transparent governance, license compliance,
community health, and sustainable collaboration between the open source community and
[Kiteworks](https://www.kiteworks.com), which acquired ownCloud in 2023.

- **OSPO Home**: <https://kiteworks.com/opensource>
- **GitHub**: <https://github.com/owncloud>
- **ownCloud**: <https://owncloud.com>

For questions about the OSPO or licensing, contact ospo@kiteworks.com.

### License Migration to Apache 2.0

The OSPO is driving a strategic relicensing of ownCloud repositories toward the
[Apache License 2.0](https://www.apache.org/licenses/LICENSE-2.0), following
the [Apache Software Foundation's third-party license policy](https://www.apache.org/legal/resolved.html).

Individual repositories will migrate as their audit is completed. The LICENSE file
in each repo reflects its **current** license status (not the target).

**Current license: AGPL-3.0** (Category X per Apache policy -- cannot be included in Apache-2.0 works).

Migration prerequisites for this repository:

- **CLA/DCO coverage**: All past contributors must have signed agreements permitting relicensing
- **Copyleft dependency audit**: All AGPL/GPL dependencies must be replaced or isolated
- **KDE heritage review**: Any code with KDE-era copyrights requires legal analysis
- **Complete relicensing**: AGPL-3.0 is a strong copyleft license; migration requires full relicensing of all files, not just a header change
