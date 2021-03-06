<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdDocumentDownload', 'doctrine');

/**
 * BaseAdDocumentDownload
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property clob $body
 * @property string $link
 * @property string $image
 * @property integer $priority
 * @property boolean $is_active
 * @property integer $category_id
 * @property AdDocumentCategory $AdDocCategory
 * 
 * @method string             getName()          Returns the current record's "name" value
 * @method string             getDescription()   Returns the current record's "description" value
 * @method clob               getBody()          Returns the current record's "body" value
 * @method string             getLink()          Returns the current record's "link" value
 * @method string             getImage()         Returns the current record's "image" value
 * @method integer            getPriority()      Returns the current record's "priority" value
 * @method boolean            getIsActive()      Returns the current record's "is_active" value
 * @method integer            getCategoryId()    Returns the current record's "category_id" value
 * @method AdDocumentCategory getAdDocCategory() Returns the current record's "AdDocCategory" value
 * @method AdDocumentDownload setName()          Sets the current record's "name" value
 * @method AdDocumentDownload setDescription()   Sets the current record's "description" value
 * @method AdDocumentDownload setBody()          Sets the current record's "body" value
 * @method AdDocumentDownload setLink()          Sets the current record's "link" value
 * @method AdDocumentDownload setImage()         Sets the current record's "image" value
 * @method AdDocumentDownload setPriority()      Sets the current record's "priority" value
 * @method AdDocumentDownload setIsActive()      Sets the current record's "is_active" value
 * @method AdDocumentDownload setCategoryId()    Sets the current record's "category_id" value
 * @method AdDocumentDownload setAdDocCategory() Sets the current record's "AdDocCategory" value
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdDocumentDownload extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ad_document_download');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'Tên video',
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'mô tả',
             'length' => 1000,
             ));
        $this->hasColumn('body', 'clob', null, array(
             'type' => 'clob',
             'comment' => 'Nội dung bài viết trên web',
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'link google driver',
             'length' => 255,
             ));
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'comment' => 'ảnh đại diện',
             'length' => 255,
             ));
        $this->hasColumn('priority', 'integer', 5, array(
             'type' => 'integer',
             'notnull' => true,
             'comment' => 'Độ ưu tiên hiển thị',
             'length' => 5,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => false,
             'default' => false,
             'comment' => 'Trạng thái',
             ));
        $this->hasColumn('category_id', 'integer', 8, array(
             'type' => 'integer',
             'notnull' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdDocumentCategory as AdDocCategory', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}