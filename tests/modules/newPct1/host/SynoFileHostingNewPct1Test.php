<?php

/*
    This file is part of SynDsEsTorrent.

    SynDsEsTorrent is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    SynDsEsTorrent is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with SynDsEsTorrent.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace tests\modules\newPct1\host;

use modules\newPct1\host\SynoFileHostingNewPct1;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-06-08 at 02:27:12.
 */
class SynoFileHostingNewPct1Test extends \utils\BaseHostTest
{
    protected function setUp()
    {
        parent::setObject(
            new SynoFileHostingNewPct1(
                "http://www.newpct1.com/serie/juego-de-tronos/capitulo-507/"
            )
        );
    }
    
    /**
     * @covers modules\newPct1\host\SynoFileHostingNewPct1::__construct
     */
    public function testLoadInfo()
    {        
        parent::loadInfoTest();
    }

    /**
     * @covers modules\newPct1\host\SynoFileHostingNewPct1::GetDownloadInfo
     */
    public function testGetDownloadInfo()
    {        
        parent::getDownloadInfo();
    }
}