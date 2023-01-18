<x-layout>
  <form action="/applicants" method="get">
    <label for="Faculty">Filter by Faculty:</label>
    <select name="Faculty" id="Faculty">
        <option value="">All</option>
        <option value="Faculty of Contemporary Social Sciences">Faculty of Contemporary Social Sciences</option>
        <option value="Faculty of Contemporary Sciences and Technologies">Faculty of Contemporary Sciences and Technologies</option>
        <option value="Faculty of Languages, Cultures and Communication">Faculty of Languages, Cultures and Communication</option>
        <option value="Faculty of Law">Faculty of Law</option>
        <option value="Faculty of Business and Economics">Faculty of Business and Economics</option>
    </select>
    <button type="submit">Filter</button>

    
</form>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
              <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      AppId
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Surname
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Date_of_birth
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      City
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Country
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Faculty
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Study_program
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Email
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Phone1
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Phone2
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Study_language
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      TOEFL
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      TOEFL_Date
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      TOEFL_Score
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Model_of_UGS
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_outside_RM
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_Nostrification
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_Nostrification_Date
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_Institution_Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_Study_Program
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_Title
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_GPA
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Model_of_MA_Studies
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_in_English
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Outside_RM
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Nostrification
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Nostrification_date
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Study_Program
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Country
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Title
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MAS_GPA
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_in_English
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MA_Institution_Name
                    </th>


                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      SP_Code
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Application_Date
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      Accepted
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      App_Year
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      ID_Number
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      AppTerm
                    </th>

                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS_Country
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UND_ECTS
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      MAS_ECTS
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      UGS+MA_ECTS
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      ENTRY_LEVEL
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      SPNAME_SPCODE
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      DATE/MONTH/YEAR
                    </th>

                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                      ADD information
                    </th>


                    
                  </tr>
                </thead class="border-b">
                <tbody>
                  
                @foreach($applicants as $applicant)
                  <tr class="bg-white border-b">
                    
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['AppId']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['Name']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['surname']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Date_of_birth']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['City']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Country']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Faculty']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Study_program']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Email']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Phone1']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Phone2']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Study_language']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['TOEFL']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['TOEFL_Score']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['TOEFL_Date']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Model_of_UGS']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_outside_RM']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_Nostrification']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_Nostrification_Date']}}
                    </td>
                    
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_Institution_Name']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_Study_Program']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_Title']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_GPA']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Model_of_MA_Studies']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_in_English']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Outside_RM']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Nostrification']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Nostrification_Date']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Study_Program']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Country']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Title']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MAS_GPA']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_in_English']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['MA_Institution_Name']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['SP_Code']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Application_Date']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['Accepted']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['App_Year']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['ID_Number']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['AppTerm']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$applicant['UGS_Country']}}
                    </td>
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['UND_ECTS']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['MAS_ECTS']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['UGS+MA_ECTS']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['ENTRY_LEVEL']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['SPNAME_SPCODE']}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$applicant['DATE/MONTH/YEAR']}}
                    </td>
                    {{-- send data to button --}}
                    <td>
                      
                        {{ Form::open(['url' => '/form-url']) }}
                        {{ Form::hidden('AppId',$applicant['AppId']) }}
                        {{ Form::hidden('Name', $applicant->Name) }}
                        {{ Form::hidden('Surname', $applicant->surname) }}    
                        {{ Form::hidden('Faculty', $applicant->Faculty) }}                     
                        {{ Form::hidden('UGS_Institution_Name', $applicant->UGS_Institution_Name) }}                     
                        {{ Form::hidden('UGS_GPA', $applicant->UGS_GPA) }}                   
                        {{ Form::hidden('MAS_GPA', $applicant->MAS_GPA) }}                  
                        {{ Form::hidden('MA_Institution_Name', $applicant->MA_Institution_Name) }}
                        {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
                      {{ Form::close() }}
                      
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

</x-layout>