<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'sbd',
        'toan',
        'ngu_van',
        'ngoai_ngu',
        'vat_li',
        'hoa_hoc',
        'sinh_hoc',
        'lich_su',
        'dia_li',
        'gdcd',
        'ma_ngoai_ngu',
    ];

    /* Các khối thi và môn tương ứng */
    public const BLOCKS = [
        'A00' => ['toan', 'vat_li', 'hoa_hoc'],
        'A01' => ['toan', 'vat_li', 'ngoai_ngu'],
        'B00' => ['toan', 'hoa_hoc', 'sinh_hoc'],
        'D01' => ['toan', 'ngu_van', 'ngoai_ngu'],
    ];

    public const SUBJECTS = [
        'toan' => 'Toán',
        'ngu_van' => 'Ngữ văn',
        'ngoai_ngu' => 'Ngoại ngữ',
        'vat_li' => 'Vật lí',
        'hoa_hoc' => 'Hóa học',
        'sinh_hoc' => 'Sinh học',
        'lich_su' => 'Lịch sử',
        'dia_li' => 'Địa lí',
        'gdcd' => 'GDCD',
    ];

    public const SCORE_LEVELS = [
        '>=8' => [8, 10],
        '6-8' => [6, 8],
        '4-6' => [4, 6],
        '<4'  => [0, 4],
    ];

    public static function getSubjectsByBlock(string $block): array
    {
        return self::BLOCKS[$block] ?? self::BLOCKS['A00'];
    }

    public function totalScore(string $block): float
    {
        $subjects = self::getSubjectsByBlock($block);

        return collect($subjects)
            ->map(fn ($subject) => $this->{$subject} ?? 0)
            ->sum();
    }

    public function scopeTopByBlock($query, string $block, int $limit = 10)
    {
        $subjects = self::getSubjectsByBlock($block);

        return $query
            ->whereNotNull($subjects[0])
            ->whereNotNull($subjects[1])
            ->whereNotNull($subjects[2])
            ->select([
                'id',
                'sbd',
                $subjects[0],
                $subjects[1],
                $subjects[2],
            ])
            ->selectRaw(
                "{$subjects[0]} + {$subjects[1]} + {$subjects[2]} as total_score"
            )
            ->orderByDesc('total_score')
            ->orderByDesc($subjects[0])
            ->limit($limit);
    }
}
