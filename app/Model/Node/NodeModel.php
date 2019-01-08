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
    protected function getPrimary(): string
    {
        // TODO: Implement getPrimary() method.
        return 'node_id';
    }

    protected function getTable(): string
    {
        // TODO: Implement getTable() method.
        return 'node';
    }

    protected function getBean(): string
    {
        // TODO: Implement getBean() method.
        return NodeBean::class;
    }

    /**
     * 创建一个节点并返回
     * @param $uri
     * @param $name
     * @return mixed
     */
    public function createNode($uri, $name)
    {
        $node = $this
            ->getConnect()
            ->where('uri', $uri)
            ->getOne($this->table);
        if (!$node) {
            $createdPrimary = $this->insert([
                'uri' => $uri,
                'name' => $name
            ]);
            if ($createdPrimary)
                $node = $this->find($createdPrimary);
        }
        return $node;
    }

}