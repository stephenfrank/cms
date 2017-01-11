<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\models;

use craft\base\Model;

/**
 * Folders parameters.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class FolderCriteria extends Model
{
    // Properties
    // =========================================================================

    /**
     * @var int|null ID
     */
    public $id;

    /**
     * @var int|string|bool Parent ID
     */
    public $parentId = false;

    /**
     * @var int|null Source ID
     */
    public $volumeId;

    /**
     * @var string|null Name
     */
    public $name;

    /**
     * @var string|null Path
     */
    public $path;

    /**
     * @var string Order
     */
    public $order = 'name asc';

    /**
     * @var int|null Offset
     */
    public $offset;

    /**
     * @var int|null Limit
     */
    public $limit;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parentId', 'sourceId', 'offset', 'limit'], 'number', 'integerOnly' => true],
        ];
    }
}
