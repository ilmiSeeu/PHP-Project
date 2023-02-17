<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<style>
  form {
    background-color: lightgray;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 5px 5px 10px gray;
    width: 50%;
    margin: auto;
  }
  
  label {
    font-weight: bold;
  }
  
  input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: none;
    border-radius: 5px;
  }
  
  input[type="submit"] {
    padding: 10px 20px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    float: right;
    margin-top: 20px;
  }
</style>


<body>
  
<div class="container">

<form method="POST" action="/applicants">
    @csrf

    <!-- we request the data sent by the form-->
    <h1>Student data insert </h1>
        <label for="AppId" class="control-label">AppId:</label>
        <p id="AppId">{{ request('AppId') }}</p>
        <input type="hidden" name="AppId" value="{{ request('AppId') }}">
       

        <label for="name" class="control-label">Name:</label>
        <p id="name">{{ request('Name') }}</p>
        <input type="hidden" name="name" value="{{ request('Name') }}">
        

        <label for="surname" class="control-label">Surname:</label>
        <p id="surname">{{ request('Surname') }}</p>
        <input type="hidden" name="surname" value="{{ request('Surname') }}">
        

        <label for="UGS_GPA" class="control-label">UGS_GPA:</label>
        <p id="UGS_GPA">{{ request('UGS_GPA') }}</p>
        <input type="hidden" name="UGS_GPA" value="{{ request('UGS_GPA') }}">
        

        <label for="MAS_GPA" class="control-label">MAS_GPA:</label>
        <p id="MAS_GPA">{{ request('MAS_GPA') }}</p>
        <input type="hidden" name="MAS_GPA" value="{{ request('MAS_GPA') }}">
        

        <label for="UGS_Institution_Name" class="control-label">UGS_Institution_Name:</label>
        <p id="UGS_Institution_Name">{{ request('UGS_Institution_Name') }}</p>
        <input type="hidden" name="UGS_Institution_Name" value="{{ request('UGS_Institution_Name') }}">
     

        <label for="MA_Institution_Name" class="control-label">MA_Institution_Name:</label>
        <p id="MA_Institution_Name">{{ request('MA_Institution_Name') }}</p>
        <input type="hidden" name="MA_Institution_Name" value="{{ request('MA_Institution_Name') }}">
       

        <label for="Faculty" class="control-label">Faculty:</label>
        <p id="Faculty">{{ request('Faculty') }}</p>
        <input type="hidden" name="Faculty" value="{{ request('Faculty') }}">
       


        <!-- Create new input, all required -->
        <label for="Prof1_Name" class="control-label">Prof1_Name:</label>
        <input type="text" class="form-control" id="Prof1_Name" name="Prof1_Name" value="">
        <br>
        <label for="Prof2_Name" class="control-label">Prof2_Name:</label>
        <input type="text" class="form-control" id="Prof2_Name" name="Prof2_Name" value="" >
        <br>
        <label for="Prof3_Name" class="control-label">Prof3_Name:</label>
        <input type="text" class="form-control" id="Prof3_Name" name="Prof3_Name" value="">
        <br>
        <label for="Bachelor_I_Ekuivalentuar" class="control-label">Bachelor_I_Ekuivalentuar:</label>
        <input type="text" class="form-control" id="Bachelor_I_Ekuivalentuar" name="Bachelor_I_Ekuivalentuar" value="">
        <br>
        <label for="Inst_Status1" class="control-label">Inst_Status1:</label>
        <input type="text" class="form-control" id="Inst_Status1" name="Inst_Status1" value="">
        <br>
        <label for="Master_I_Ekuivalentuar" class="control-label">Master_I_Ekuivalentuar:</label>
        <input type="text" class="form-control" id="Master_I_Ekuivalentuar" name="Master_I_Ekuivalentuar" value="">
        <br>
        <label for="Inst_Status2" class="control-label">Inst_Status2:</label>
        <input type="text" class="form-control" id="Inst_Status2" name="Inst_Status2" value="">
        <label for="Gjuha_20" class="control-label">Gjuha_20%:</label>
        <input type="text" class="form-control" id="Gjuha_20" name="Gjuha_20" value="">
        <br>
        <label for="Punimet_20" class="control-label">Punimet_20%:</label>
        <input type="text" class="form-control" id="Punimet_20" name="Punimet_20" value="">
 
        

       
      <input type="submit" value="Submit" class="btn btn-primary">
   
    
  
  </form>
</div>
</body>
