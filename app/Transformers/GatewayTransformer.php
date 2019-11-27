<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2019. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Transformers;

use App\Models\Gateway;
use App\Utils\Traits\MakesHash;

/**
 * class ClientTransformer
 */
class GatewayTransformer extends EntityTransformer
{
    use MakesHash;

    protected $defaultIncludes = [
    ];

    /**
     * @var array
     */
    protected $availableIncludes = [
    ];


    /**
     * @param Client $client
     *
     * @return array
     */
    public function transform(Gateway $gateway)
    {
        return [
            'id' => $this->encodePrimaryKey($gateway->id),
            'name' => (string)$gateway->name ?: '',
            'key' => (string)$gateway->key ?: '',
            'provider' => (string)$gateway->provider ?: '',
            'visible' => (bool)$gateway->visible,
            'sort_order' => (int)$gateway->sort_order,
            'default_gateway_type_id' => (bool)$gateway->default_gateway_type_id,
            'site_url' => (string)$gateway->site_url ?: '',
            'is_offsite' => (bool)$gateway->is_offsite,
            'is_secure' => (bool)$gateway->is_secure,
            'fields' => (string)$gateway->fields ?: '',
            'updated_at' => (int)$gateway->updated_at,
        ];
    }
}