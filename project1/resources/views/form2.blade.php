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

<form  method="POST" action="/finalApplicants">
    @csrf
    <input type="hidden" name="AppId" value="{{ request('AppId') }}">
    <p>ID: {{ request('AppId') }} Name: {{ request('Name') }} {{ request('Surname') }}  - Total points: {{ request('points') }}</p>
   
    <select name="status">
      <option value="1">ACCEPT</option>
      <option value="0">REJECT</option>
    </select>
    <button type="submit">Update</button>
  </form>