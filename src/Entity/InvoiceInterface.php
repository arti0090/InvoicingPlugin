<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\InvoicingPlugin\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface InvoiceInterface extends ResourceInterface
{
    public function id(): string;

    public function number(): string;

    public function order(): OrderInterface;

    /** @deprecated this method is deprecated an will be remove in v1.0 - use InvoiceInterface::order() instead */
    public function orderNumber(): string;

    public function issuedAt(): \DateTimeInterface;

    public function billingData(): BillingDataInterface;

    public function currencyCode(): string;

    public function localeCode(): string;

    public function total(): int;

    public function lineItems(): Collection;

    public function taxItems(): Collection;

    public function subtotal(): int;

    public function taxesTotal(): int;

    public function channel(): ChannelInterface;

    public function shopBillingData(): InvoiceShopBillingDataInterface;
}
