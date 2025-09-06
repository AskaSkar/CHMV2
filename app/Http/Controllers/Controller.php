<?php

namespace App\Http\Controllers;
use App\Traits\RespondsWithHttpStatus;
use OpenApi\Attributes as OAT;
#[OAT\Info(
    version: '1.0',
    title: 'Doculinker API documentation'
)]
#[OAT\Schema(
    schema: 'ValidationErrorResponse',
    properties: [
        new OAT\Property(property: 'message', type: 'string'),
        new OAT\Property(property: 'errors', type: 'array', items: new OAT\Items(type: 'string')),
    ]
)]
#[OAT\Schema(
    schema: 'PaginatedCollectionMeta',
    properties: [
        new OAT\Property(property: 'current_page', type: 'integer'),
        new OAT\Property(property: 'first_page_url', type: 'string', format: 'uri'),
        new OAT\Property(property: 'from', type: 'integer'),
        new OAT\Property(property: 'last_page', type: 'integer'),
        new OAT\Property(property: 'last_page_url', type: 'string', format: 'uri'),
        new OAT\Property(
            property: 'links',
            type: 'array',
            items: new OAT\Items(
                properties: [
                    new OAT\Property(property: 'url', type: 'string', format: 'uri', nullable: true),
                    new OAT\Property(property: 'label', type: 'string'),
                    new OAT\Property(property: 'active', type: 'boolean'),
                ],
                type: 'object'
            )
        ),
        new OAT\Property(property: 'next_page_url', type: 'string', format: 'uri', nullable: true),
        new OAT\Property(property: 'path', type: 'string', format: 'uri'),
        new OAT\Property(property: 'per_page', type: 'integer'),
        new OAT\Property(property: 'prev_page_url', type: 'string', format: 'uri', nullable: true),
        new OAT\Property(property: 'to', type: 'integer'),
        new OAT\Property(property: 'total', type: 'integer'),
    ]
)]
abstract class Controller
{
    use RespondsWithHttpStatus;
}
