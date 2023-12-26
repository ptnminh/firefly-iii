<?php
/*
 * DestroyedTransactionLink.php
 * Copyright (c) 2020 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace FireflyIII\Events;

use FireflyIII\Models\TransactionJournalLink;
use Illuminate\Queue\SerializesModels;

/**
 * Class DestroyedTransactionLink
 */
class DestroyedTransactionLink extends Event
{
    use SerializesModels;

    private TransactionJournalLink $link; // @phpstan-ignore-line

    /**
     * DestroyedTransactionLink constructor.
     */
    public function __construct(TransactionJournalLink $link)
    {
        $this->link = $link;
    }
}