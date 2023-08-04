<?php

namespace App\Helpers;

class Quartal
{
  public static function now()
  {
    $year = date('Y');
    $quarter = ceil(date('n') / 3);

    $start_month = ($quarter - 1) * 3 + 1;
    $end_month = $start_month + 2;

    $start_date = date('t F', strtotime(implode('-', [
      $year,
      $start_month
    ])));

    $end_date = date('t F', strtotime(implode('-', [
      $year,
      $end_month
    ])));

    return collect([
      'year' => $year,
      'q' => $quarter,
      'end' => $end_date,
      'start' => $start_date,
      'limit' => date('Y-m-25', strtotime($end_date)),
      'code' => implode('-', ['q' . $quarter, $year])
    ]);
  }

  public static function prevCode($periode)
  {
    list($q, $year) = explode('-', $periode);

    $qnum = intval(str_replace('q', '', $q));

    if ($qnum == 1) {
      $periode = 'q4-' . ((int) $year - 1);
    } else {
      $periode = 'q' . ($qnum - 1) . '-' . $year;
    }

    return $periode;
  }
}