<?php
   require_once '/home/ec2-user/environment/inheritance/myfunc/inheritance_rate.php';
   $aaa=i_rate(0,5);
   $bbb=count($aaa);  //配列の数
   
?>

{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ファミリー情報'を埋め込む --}}
@section('title', '資産情報入力')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>資産情報入力</h2>
                
                <table>
                    <thread>
                            <tr>
                               <th>資産額合計</th>
                               
                               <th>相続人1</th>
                               <th>{{ $aaa[1][1] }}</th>
                               
                            </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">
                            </td>
                        </tr>
 
                    </tbody>
                </table>
                
                <script>
                    var r_end = 5;  // 行数
                    var c_end = 4;  // 列数
                    
                    debugger;
                    'use strict';
                    window.onload = function () {
 
                    var tableJs = document.createElement('table');
                      tableJs.id = 'table_id2';
                    for (var r = 1; r <= r_end; r++) {
                       var r000 = padLeft('0000', r);
                       var trJs = document.createElement('tr');
                       for (var c = 1; c <= c_end; c++) {
                           var c000 = padLeft('0000', c);
                           var tdJs = document.createElement('td');
                           tdJs.innerHTML = 'r=' + r000 + ':c=' + c000;
                           trJs.appendChild(tdJs);
                       }
                      tableJs.appendChild(trJs);
                    }
 
                    var bodyJs = document.body;
                    bodyJs.appendChild(tableJs);
                    }
        
                    function padLeft(pad, str) {
                      if (typeof str === 'undefined')
                      return pad;
 
                      return (pad + str).slice(-pad.length);
                    }
                    function padRight(pad, str) {
                      if (typeof str === 'undefined')
                      return pad;
 
                      return (str + pad).substring(0, pad.length);
                    }
                </script>
                
            </div>
        </div>
    </div>
@endsection
