@extends('layouts.app')

@section('content')
    @include('menu.app')
    <div class="container">
        <h2 class="margin-top-20">Exámenes</h2>
        @can('canExamStudent')
       
        @endcan
       
                @foreach ($examStudent as $exam)
                    <tr>
                        <th scope="row">{{$exam->id}}</th>
                        <td>{{$exam->subject_id}}</td>
                        <td>{{$exam->user_id}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->mark}}</td>
                        <td>{{$exam->time_start}}</td>
                        <td>{{$exam->time_end}}</td>
                        <td>{{$exam->days}}</td>
                       
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
