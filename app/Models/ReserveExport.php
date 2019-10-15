<?php
  
namespace App\Models;
  
use App\Models\Reserve;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
  
class ReserveExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = DB::table('reserves')->select('full_name', DB::raw('(CASE WHEN agreement = 1 THEN "Da" ELSE "Net" END) AS user_agrement'), 'count_people')->get();
        return $users;
    }
    public function headings(): array
    {
        return [
            'ФИО',
            'Приду?',
            'Cколько человек?',
        ];
    }
}