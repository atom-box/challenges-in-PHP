<?php

namespace ExercismBundle\Tests;

require_once '/home/evan/projects/challenges-in-PHP/src/ExercismBundle/Service/Hamming.php';

use ExercismBundle\Service\Hamming;
use PHPUnit\Framework\TestCase;

final class hamming_test extends TestCase
{

    public function testNoDifferenceBetweenIdenticalStrands(): void
    {
        $rosalind = new Hamming('A', 'A');
        $this->assertEquals(0, $rosalind->distance());
    }

    public function testCompleteHammingDistanceOfForSingleNucleotideStrand(): void
    {
        $rosalind = new Hamming('A', 'G');

        $this->assertEquals(1, $rosalind->distance());
    }

    public function testCompleteHammingDistanceForSmallStrand(): void
    {
        $rosalind = new Hamming('AG', 'CT');
        $this->assertEquals(2, $rosalind->distance());
    }

    public function testSmallHammingDistance(): void
    {
        $rosalind = new Hamming('AT', 'CT');
        $this->assertEquals(1, $rosalind->distance());
    }

    public function testSmallHammingDistanceInLongerStrand(): void
    {
        $rosalind = new Hamming('GGACG', 'GGTCG');
        $this->assertEquals(1, $rosalind->distance());
    }

    public function testLargeHammingDistance(): void
    {
        $rosalind = new Hamming('GATACA', 'GCATAA');
        $this->assertEquals(4, $rosalind->distance());
    }

    public function testHammingDistanceInVeryLongStrand(): void
    {
        $rosalind = new Hamming('GGACGGATTCTG', 'AGGACGGATTCT');
        $this->assertEquals(9, $rosalind->distance());
    }

    public function testExceptionThrownWhenStrandsAreDifferentLength(): void
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('DNA strands must be of equal length.');
        distance('GGACG', 'AGGACGTGG');
    }

    public function todo()
    {
        // Once the tests pass, come back, comment out line 5 and figure out timeboxed if the config.xml will help see the other required class file.
    }
}
