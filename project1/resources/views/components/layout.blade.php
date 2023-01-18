<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen" style="background: #edf2f7;">
    <div class="flex flex-row min-w-full min-h-screen bg-gray-100 text-gray-800">
    <aside
      class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-indigo-500"
    >
      <div class="sidebar-header flex items-center justify-center py-4">
        <div class="inline-flex">
          <a href="#" class="inline-flex flex-row items-center">
          
            
            
            
          </a>
        </div>
        <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">MY PROJECT</span>
      </div>
      <div class="sidebar-content px-4 py-6">
        <ul class="flex flex-col w-full">
         
          <li class="my-px">
            <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Projects</span>
          </li>
          <li class="my-px">


            <!-- Form -->
          <form method='post' action='/uploadFile' enctype='multipart/form-data' >
            {{ csrf_field() }}
            <input type='file' name='file' >
            <input  type='submit' name='submit' value='Import'style="color:Tomato"; class=" items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
          </form>

            <a
              href="{{route('applicants')}}"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="flex items-center justify-center text-lg text-gray-400">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"
                  />
                </svg>
              </span>
              <span class="ml-3">PHD candidates</span>
            </a>



          </li>
          <li class="my-px">
            <a
            href="/finalApplicants"
              class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
              <span class="flex items-center justify-center text-lg text-gray-400">
                <svg
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                  />
                </svg>
              </span>
              <span class="ml-3">Final Candidates</span>
            </a>
          </li>
          
        </ul>
      </div>
    </aside>
    <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
      <header class="header bg-white shadow py-4 px-4">
        <div class="header-content flex items-center flex-row">
          <form action="#">
            <div class="hidden md:flex relative">
              <div
                class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400"
              >
                <svg
                  class="h-6 w-6"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>

              <input
                id="search"
                type="text"
                name="search"
                class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                placeholder="Search..."
              />
            </div>
            <div class="flex md:hidden">
              <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                <svg
                  class="h-6 w-6 text-gray-500"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </a>
            </div>
          </form>
          <div class="flex ml-auto">
            <a href class="flex flex-row items-center">
              <img
                src="https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png"
                alt
                class="h-10 w-10 bg-gray-200 border rounded-full"
              />
              <span class="flex flex-col ml-2">
                <span class="truncate w-20 font-semibold tracking-wide leading-none">John Doe</span>
                <span class="truncate w-20 text-gray-500 text-xs leading-none mt-1">Manager</span>
              </span>
            </a>
          </div>
        </div>
      </header>
      <div class="main-content flex flex-col flex-grow p-4">
        <h1 class="font-bold text-2xl text-gray-700">Dashboard</h1>

        <div
          class="flex flex-col flex-grow border-4 border-gray-400 border-dashed bg-white rounded mt-4"
        >{{$slot}}</div>
      </div>
      <footer class="footer px-4 py-6">
        <div class="footer-content">
          <p class="text-sm text-gray-600 text-center">© SEEU students 2022. All rights reserved</a></p>
        </div>
      </footer>
    </main>
  </div>
</body>
</html>
