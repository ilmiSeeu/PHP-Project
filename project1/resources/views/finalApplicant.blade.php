<x-layout>
  
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
    <button type="submit">Filter</button>

    
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
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Total</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">UGS_GPA</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">MAS_GPA</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Bachelor_I_Ekuivalentuar</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Inst_Status1</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Master_I_Ekuivalentuar</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Inst_Status2</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Suksesi_30%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Gjuha_20%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Punimet_20%</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Gjithsejt</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">UGS_Institution_Name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">MA_Institution_Name</th>
      <th scope="col" class="text-sm font-medium text-white px-6 py-4">Faculty</th>
            
            
        </tr>
    </thead>
    <tbody>
        @foreach ($finalApplicants as $student)
        <tr class="bg-white border-b">
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->AppId }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->surname }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Prof1_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Prof2_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Prof3_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Total }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->UGS_GPA }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->MAS_GPA }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Bachelor_I_Ekuivalentuar }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Inst_Status1 }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Master_I_Ekuivalentuar }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Inst_Status2 }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$student['Suksesi_30%']}}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$student['Gjuha_20%']}}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$student['Punimet_20%']}}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Gjithsejt }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->UGS_Institution_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->MA_Institution_Name }}</td>
          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $student->Faculty }}</td>
          </tr>
        @endforeach
    </tbody>
</table>
    


</x-layout>