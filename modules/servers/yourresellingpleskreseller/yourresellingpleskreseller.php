<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\PleskReseller\Integration\WhmcsModule;

/** Plesk Reseller: MetaData. */
function yourresellingpleskreseller_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · Plesk Reseller', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** Plesk Reseller: ConfigOptions. */
function yourresellingpleskreseller_ConfigOptions(): array
{
    return WhmcsModule::configOptions('plesk_reseller');
}

/** Plesk Reseller: CreateAccount. */
function yourresellingpleskreseller_CreateAccount(array $params): string
{
    return WhmcsModule::run('plesk_reseller', 'create', $params);
}

/** Plesk Reseller: TestConnection. */
function yourresellingpleskreseller_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** Plesk Reseller: ClientArea. */
function yourresellingpleskreseller_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('plesk_reseller', $params);
}

/** Plesk Reseller: AdminCustomButtonArray. */
function yourresellingpleskreseller_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('plesk_reseller');
}

/** Plesk Reseller: RefreshStatus. */
function yourresellingpleskreseller_RefreshStatus(array $params): string
{
    return WhmcsModule::run('plesk_reseller', 'refresh', $params);
}

/** Plesk Reseller: TerminateAccount. */
function yourresellingpleskreseller_TerminateAccount(array $params): string
{
    return WhmcsModule::run('plesk_reseller', 'termination', $params);
}

/** Plesk Reseller: SuspendAccount. */
function yourresellingpleskreseller_SuspendAccount(array $params): string
{
    return WhmcsModule::run('plesk_reseller', 'suspend', $params);
}

/** Plesk Reseller: UnsuspendAccount. */
function yourresellingpleskreseller_UnsuspendAccount(array $params): string
{
    return WhmcsModule::run('plesk_reseller', 'unsuspend', $params);
}
