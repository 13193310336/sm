<?php
/**
 * Created by PhpStorm.
 * User: original
 * Date: 19-1-8
 * Time: 下午8:42
 */

namespace App\Model\Node;


use App\Model\Model;

class NodeModel extends Model
{
    const TYPE_PATH = 1;
    const TYPE_BUTTON = 2;
    const TYPE_COLLECTION = [
        self::TYPE_PATH => '链接类型',
        self::TYPE_BUTTON => '按钮类型'
    ];

    protected function setPrimary()
    {
        // TODO: Implement getPrimary() method.
        $this->primaryKey = 'node_id';
    }

    protected function setTable()
    {
        // TODO: Implement getTable() method.
        $this->table = 'node';
    }

    protected function setBean()
    {
        // TODO: Implement getBean() method.
        $this->bean = NodeBean::class;
    }

    /**
     * 获取列表
     * @param $name
     * @param $path
     * @param $type
     * @return array
     */
    public function getNodeList($name, $path, $type)
    {
        $query = $this->getConnect();

        if ($name)
            $query->where('name', '%' . $name . '%', 'like');

        if ($path)
            $query->where('path', '%' . $path . '%', 'like');

        if ($type)
            $query->where('type', $type);

        return $this->page($query);

    }

    /**
     * 创建一个节点并返回
     * @param $uri
     * @param $name
     * @param int $type
     * @return \EasySwoole\Mysqli\Mysqli|mixed|null
     */
    public function createNode($uri, $name, $type = self::TYPE_PATH)
    {
        $node = $this
            ->getConnect()
            ->where('uri', $uri)
            ->getOne($this->getTable());
        if (!$node) {
            $createdPrimary = $this->insert([
                'uri' => $uri,
                'name' => $name,
                'type' => $type
            ]);
            if ($createdPrimary)
                $node = $this->find($createdPrimary);
        }
        return $node;
    }

}