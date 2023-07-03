<?php

namespace App\Exports;

use App\Models\PromotionApplicationUser;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
class PromotionApplication implements FromCollection, WithMapping, WithHeadings,WithStyles,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PromotionApplicationUser::with('step2')->where('is_final_submit',true)->get();
    }

    public function map($row): array
    {
        $promotionlvl='';
        switch($row->step2->promotion_level){
            case '1': $promotionlvl='Assistant Professor(Academic Level 10)
            to Assistant Professor (Senior
            Scale/Academic Level 11)';
            break;
            case '2': $promotionlvl= 'Assistant Professor (Senior
            Scale/Academic Level 11) to Assistant Professor
            (Selection
            Grade/Academic Level 12)';
            break;
            case '3': $promotionlvl= 'Assistant Professor (Selection
            Grade/Academic Level 12) to Associate
            Professor (Academic Level
            13A)';
            break;
            case '4': $promotionlvl='Associate Professor (Academic Level
            13A) to Professor (Academic Level 14)';
            break;
            default: $promotionlvl= 'N/A';
        }
       return [
            $row->email,
            $row->step2->name,
            $row->step2->address_for_correspondence.' Pin-'.$row->step2->address_for_correspondence_pincode,
            strtoupper($row->step2->current_designation ?? ' '.'/'.strtoupper($row->step2->current_pay_scale ?? ' ')),
            strtoupper($row->step2->current_pay_scale ?? ' '),
            strtoupper($row->step2->applied_for_position ?? ' ').' / '.strtoupper($row->step2->applied_for_stage ?? ' ').' / '.strtoupper($row->step2->applied_for_grade_pay ?? ' '),
            $promotionlvl,
            ''
       ];
    }
    public function headings(): array
    {
        return [
            'Email',
            'Name Of the Applicant ',
            'Address',
            'Present Designatioin/Pay Level',
            'Present Pay Scale',
            'For Applied',
            'Promotion of the post/Level',
            'Remark',
            // Add more headings as needed
        ];
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style for the heading row
            1 => ['font' => ['bold' => true, 'size' => 14]],
        ];
    }

    public function registerEvents(): array
    {
        
        return [
            
            AfterSheet::class => function (AfterSheet $event) {
                $highestRow = $event->sheet->getHighestRow();
                $event->sheet->getStyle('A1:Z1')->applyFromArray([
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['rgb' => '5c61f2'], // Change the color code as desired
                    ],
                    'font' => [
                        'color' => ['rgb' => 'FFFFFF'], // Set the text color to white
                    ],
                ]);
            },
        ];
    }
}
