# AI Agent Guidelines for Coding Standard

This file provides context for AI coding agents (Claude Code, GitHub Copilot, Cursor, etc.) working in this repository.

## Repository Overview
- **Product family:** Infrastructure / Tooling
- **Primary language(s):** PHP
- **Build system:** Composer
- **Test framework:** None detected
- **CI system:** None detected

## Architecture & Key Paths
- `src/` - PHP source code (Config class for php-cs-fixer)
- `composer.json` - Composer package definition
- `CHANGELOG.md` - Release history

## Development Conventions
- **Branching:** master
- **Commit messages:** DCO sign-off required (`git commit -s`)
- **Code style:** Self-referential (this IS the coding standard)
- **PR process:** Open a PR against master. All CI checks must pass.

## Build & Test Commands
```bash
# Build
composer install

# Test
Not detected

# Lint
Not detected
```

## Important Constraints
- All code contributions must be compatible with the **AGPL-3.0** license
- Do not introduce new **copyleft-licensed dependencies** (GPL, AGPL, LGPL, MPL) without explicit discussion in an issue first. This is especially important for repos migrating to Apache 2.0.
- Do not introduce new dependencies without discussion in an issue first
- This library follows semantic versioning
- "Risky" additions to code checks must only be introduced in major versions
- Changes here affect code style enforcement across all ownCloud PHP repositories


## OSPO Policy Constraints

### GitHub Actions
- **Only** use actions owned by `owncloud`, created by GitHub (`actions/*`), verified on the GitHub Marketplace, or verified by the ownCloud Maintainers.
- Pin all actions to their full commit SHA (not tags): `uses: actions/checkout@<SHA> # vX.Y.Z`
- Never introduce actions from unverified third parties.

### Dependency Management
- Dependabot is configured for automated dependency updates.
- Review and merge Dependabot PRs as part of regular maintenance.
- Do not introduce new dependencies without discussion in an issue first.

### Git Workflow
- **Rebase policy**: Always rebase; never create merge commits. Use `git pull --rebase` and `git rebase` before pushing.
- **Signed commits**: All commits **must** be PGP/GPG signed (`git commit -S -s`).
- **DCO sign-off**: Every commit needs a `Signed-off-by` line (`git commit -s`).
- **Conventional Commits & Squash Merge**: Use the [Conventional Commits](https://www.conventionalcommits.org/) format where the repository enforces it. Many repos use squash merge, where the PR title becomes the commit message on the default branch — apply Conventional Commits format to PR titles as well. A reusable GitHub Actions workflow enforces this.

## Context for AI Agents
- Match existing code style
- Do not refactor unrelated code in the same PR
- Write tests for new functionality
- Keep PRs focused and atomic
- Be extremely careful with changes - this package is a dependency of many ownCloud repos
- Any new rule that could break existing code must go in a major version bump
