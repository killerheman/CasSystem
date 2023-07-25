<?php

namespace App\Exports;

use App\Models\NaacStatusReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
class NaacStatus implements FromCollection, WithMapping, WithHeadings,WithStyles,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NaacStatusReport::with('college')->where('is_complete',true)->get();
    }

    public function map($row): array
    {

        return [
            $row->college->name??'',
            $row->district??'',
            $row->college_type??'',
            $row->aished_id??'',
            $row->principal_name??'',
            $row->principal_phone??'',
            $row->iqac_coordinator_name??'',
            $row->iqac_coordinator_phone??'',
            $row->academic_level??'',
            $row->address??'',
            $row->cycle_of_accreditation??'',
            $row->accrediation_status??'',
            $row->last_accredetion??'',
            $row->accredetion_upto??'',
            $row->grade??'',
            $row->cgpa??'',
            $row->praposed_date_of_pending_aqar??'',
            $row->aqar_submition_upto??'',
            $row->praposed_date_of_pending_iiqa??'',
            $row->whether_aqar_pending??'',
            $row->aqar_pending_ch??'',
            $row->liqa_status??'',
            $row->iqa_status_prapose??'',
            $row->iqa_submition_date??'',
            $row->iqa_submition_date_prapose??'',
            $row->ssr_status??'',
            $row->ssr_submission_date??'',
            $row->remark??'',
            $row->accept??'',
            $row->naac_nodal_officer??'',
            $row->mobile_naac_nodal_officer??'',
            $row->location_type??''
        ];
    }
    public function headings(): array
    {
        return [
            'college',
            'District',
            'College Type',
            'Aished Id',
            'Principal Name',
            'Principal Mobile',
            'IQAC Co-ordinator',
            'IQAC Co-Ordinator Mobile',
            'Academic Level',
            'Address',
            'Cycle Of Accreditation',
            'Accreditation Status',
            'Last Accreditation',
            'Accreditation Upto',
            'Grade',
            'CGPA',
            'Praposed Date of Pending AQAR',
            'AQAR Submition Upto',
            'Prapose Date of Pending IIQA',
            'Wheter Aqar Pending',
            'AQAR Pending Ch',
            'Iqa Status',
            'IQA Status Prapose',
            'IQA Submition date prapose',
            'SSR Status',
            'SSR Submition Date',
            'Remark',
            'Accept',
            'Naac Nodal Officer',
            'Naac Nodal Officer Contact',
            'Location Type'
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
