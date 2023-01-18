<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
  <h1>Student data insert </h1>
<form method="POST" action="/applicants">
    @csrf

    
        <label for="AppId" class="control-label">AppId:</label>
        <input type="text" class="form-control" id="AppId" name="AppId" value="{{ request('AppId') }}">
      <br>
      <label for="name" class="control-label">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ request('Name') }}">
      <br>
      <label for="surname" class="control-label">surname:</label>
      <input type="text" class="form-control" id="surname" name="surname" value="{{ request('Surname') }}">
      <br>
        <label for="Prof1_Name" class="control-label">Prof1_Name:</label>
        <input type="text" class="form-control" id="Prof1_Name" name="Prof1_Name" >
        <br>
        <label for="Prof2_Name" class="control-label">Prof2_Name:</label>
        <input type="text" class="form-control" id="Prof2_Name" name="Prof2_Name" >
        <br>
        <label for="Prof3_Name" class="control-label">Prof3_Name:</label>
        <input type="text" class="form-control" id="Prof3_Name" name="Prof3_Name" >
        <br>
        <label for="UGS_GPA" class="control-label">UGS_GPA:</label>
        <input type="text" class="form-control" id="UGS_GPA" name="UGS_GPA"  value="{{ request('UGS_GPA') }}" >
        <br>
        <label for="MAS_GPA" class="control-label">MAS_GPA:</label>
        <input type="text" class="form-control" id="MAS_GPA" name="MAS_GPA"  value="{{ request('MAS_GPA') }}" >
        <br>
        <label for="Bachelor_I_Ekuivalentuar" class="control-label">Bachelor_I_Ekuivalentuar:</label>
        <input type="text" class="form-control" id="Bachelor_I_Ekuivalentuar" name="Bachelor_I_Ekuivalentuar" >
        <br>
        <label for="Inst_Status1" class="control-label">Inst_Status1:</label>
        <input type="text" class="form-control" id="Inst_Status1" name="Inst_Status1" >
        <br>
        <label for="Master_I_Ekuivalentuar" class="control-label">Master_I_Ekuivalentuar:</label>
        <input type="text" class="form-control" id="Master_I_Ekuivalentuar" name="Master_I_Ekuivalentuar" >
        <br>
        <label for="Inst_Status2" class="control-label">Inst_Status2:</label>
        <input type="text" class="form-control" id="Inst_Status2" name="Inst_Status2" >
        <br>
        <label for="Suksesi_30" class="control-label">Suksesi_30%:</label>
        <input type="text" class="form-control" id="Suksesi_30" name="Suksesi_30" >
        <br>
        <label for="Gjuha_20" class="control-label">Gjuha_20%:</label>
        <input type="text" class="form-control" id="Gjuha_20" name="Gjuha_20" >
        <br>
        <label for="Punimet_20" class="control-label">Punimet_20%:</label>
        <input type="text" class="form-control" id="Punimet_20" name="Punimet_20" >
        <br>
        <label for="Intervista_30" class="control-label">Intervista_30%:</label>
        <input type="text" class="form-control" id="Intervista_30" name="Intervista_30" >
        <br>
        <label for="UGS_Institution_Name" class="control-label">UGS_Institution_Name:</label>
        <input type="text" class="form-control" id="UGS_Institution_Name" name="UGS_Institution_Name"  value="{{ request('UGS_Institution_Name') }}" >
        <br>
        <label for="MA_Institution_Name" class="control-label">MA_Institution_Name:</label>
        <input type="text" class="form-control" id="MAS_GPA" name="MA_Institution_Name"  value="{{ request('MA_Institution_Name') }}" >
        <br>
        <label for="Faculty" class="control-label">Faculty:</label>
        <input type="text" class="form-control" id="Faculty" name="Faculty"  value="{{ request('Faculty') }}" >
        <br>
      <input type="submit" value="Submit" class="btn btn-primary">
   
    
  
  </form>
</div>
</body>
