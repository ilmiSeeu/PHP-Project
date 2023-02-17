<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<x-layout>
  <form action="{{ route('export') }}" method="get">
    <select name="format">
        <option value="excel">Excel</option>
        <option value="pdf">PDF</option>
    </select>
    <button type="submit">Export</button>
</form>

  <form action="/finalApplicants" method="get">
    <label for="Faculty">Filter by Faculty:</label>
    <select name="Faculty" id="Faculty">
      <option value="">All</option>
      <option value="Faculty of Contemporary Social Sciences">Faculty of Contemporary Social Sciences</option>
      <option value="Faculty of Contemporary Sciences and Technologies">Faculty of Contemporary Sciences and Technologies</option>
      <option value="Faculty of Languages, Cultures and Communication">Faculty of Languages, Cultures and Communication</option>
      <option value="Faculty of Law">Faculty of Law</option>
      <option value="Faculty of Business and Economics">Faculty of Business and Economics</option>
    </select>
  
    <script>
      document.getElementById("Faculty").addEventListener("change", function() {
        //submits the form when we change the value :D
        this.form.submit();
      });
    </script>

  </form>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
<table class="min-w-full text-center">
  <thead class="border-b bg-gray-800">
    <tr>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">AppId</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Surename</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Prof1_name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Prof2_name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Prof3_name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">UGS_GPA</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">MAS_GPA</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Bachelor_I_Ekuivalentuar</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Inst_Status1</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Master_I_Ekuivalentuar</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Inst_Status2</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Suksesi_30%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Gjuha_20%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Punimet_20%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Intervista_30%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Gjithsejt</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">UGS_Institution_Name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">MA_Institution_Name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Faculty</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Status</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($finalApplicants as $student)
        <tr class="bg-white border-b">
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->AppId }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->surname }}</td>
        
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if($student->Prof1_Name) {{ $student->Prof1_Name }} @else  NULL @endif
          </td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if($student->Prof2_Name ) {{ $student->Prof2_Name }} @else  NULL @endif
          </td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if($student->Prof3_Name ) {{ $student->Prof3_Name }} @else  NULL @endif
          </td>

          
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->UGS_GPA }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->MAS_GPA }}</td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student->Bachelor_I_Ekuivalentuar) {{  $student->Bachelor_I_Ekuivalentuar }} @else  NULL @endif
          </td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student->Inst_Status1 ) {{  $student->Inst_Status1  }} @else  NULL @endif
          </td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student->Master_I_Ekuivalentuar  ) {{  $student->Master_I_Ekuivalentuar  }} @else  NULL @endif
          </td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student->Inst_Status2   ) {{  $student->Inst_Status2  }} @else  NULL @endif
          </td>
          
          
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student['Suksesi_30%'] > 0   ) {{$student['Suksesi_30%']}} @else  NULL @endif
          </td>

          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student['Gjuha_20%']   ) {{$student['Gjuha_20%']}} @else  NULL @endif
          </td>
          
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student['Punimet_20%']   ) {{$student['Punimet_20%']}}@else  NULL @endif
          </td>
          
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student['Intervista_30%'] > 0   ) {{$student['Intervista_30%']}} @else  NULL @endif
          </td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if( $student->Gjithsejt  > 0   ) {{$student->Gjithsejt }} @else  NULL @endif
          </td>

          
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->UGS_Institution_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->MA_Institution_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Faculty }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"> 
            @if($student->Status === 1)
    ACCEPTED
  @elseif($student->Status === 0)
    REJECTED
  @else
    NULL
  @endif
          </td>
        {{-- send data to button --}}
        <td>
                      
          {{ Form::open(['url' => '/form2-url']) }}
          {{ Form::hidden('AppId',$student->AppId) }}
          {{ Form::hidden('Name', $student->Name) }}
          {{ Form::hidden('Surname', $student->surname) }} 
          {{ Form::hidden('points',$student->Gjithsejt) }}   
          
          <button type="submit" class="btn btn-primary">
            <i class="material-icons">edit</i>
          </button>
          {{ Form::close() }}

        
      </td>
          </tr>
        @endforeach
    </tbody>
</table>
    


</x-layout>