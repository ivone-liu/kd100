<?php
/**
 * Desc:
 * User: Ivone <i@ivone.me>
 * Date: 2021/7/23
 * Time: 15:31
 */

namespace Ivone\Tests;

use Ivone\Query;
use PHPUnit\Framework\TestCase;

class QueryTest extends TestCase {

    public function testQuery() {
        $result = Query::realTime('mSSzDSay7037', 'A5C56DDB6466C54333CFC9E034E25F07', 'zhongtong', '75489219958400');
        var_dump($result);
    }

}
