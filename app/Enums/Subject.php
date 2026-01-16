// app/Enums/Subject.php
namespace App\Enums;

class Subject
{
    const TOAN = 'toan';
    const VAT_LI = 'vat_li';
    const HOA_HOC = 'hoa_hoc';
    const SINH_HOC = 'sinh_hoc';
    const NGU_VAN = 'ngu_van';
    const NGOAI_NGU = 'ngoai_ngu';
    const LICH_SU = 'lich_su';
    const DIA_LI = 'dia_li';
    const GDCD = 'gdcd';

    public static function all(): array
    {
        return [
            self::TOAN,
            self::VAT_LI,
            self::HOA_HOC,
            self::SINH_HOC,
            self::NGU_VAN,
            self::NGOAI_NGU,
            self::LICH_SU,
            self::DIA_LI,
            self::GDCD,
        ];
    }
}
