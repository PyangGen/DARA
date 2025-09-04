<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Student Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/std.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/std_control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/svg.css') }}">
</head>
<style>
.cardco {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 columns in row 1 */
  grid-gap: 20px;
  justify-items: center;
  margin-top: -15px;
}

.cards {
  background: #ff4d4d;
  color: white;
  padding: 15px;
  border-radius: 10px;
  text-align: center;
  min-width: 180px;
  min-height: 120px;   /* enough height for number + text */
  display: flex;
  flex-direction: column; /* stack number above label */
  align-items: center;
  justify-content: center;
}

.cards h1 {
  margin: 0;
  font-size: 80px;
  font-weight: bold;
}

.cards p {
  margin: 5px 0 0 0;
  font-size: 14px;
  font-weight: 500;
}

/* Place 4th card in the middle of row 2 */
.cards:nth-child(4) {
  grid-column-start: 2;
}


</style>
<body style="height: calc(100% - 61px);">
    <main>
        <header> 
            <div class="ahh">
                <img src="/images/logo.png" alt="" style="border-radius: 50px;" class="ahh">
            </div>
        </header> 
         
        <div class="main" style="height: 100%;">
            <div class="left">
                <div class="profile">
                    <h2></h2>
                    
                </div>

                <nav class="nav-links">
                    <a href="" style="color: #04128e; font-weight: normal;"> 
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-home"
                            >
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>

                        Dashboard
                    </a>
                    <a href="student/document-submission">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-file-plus"
                            >
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="12" y1="18" x2="12" y2="12" />
                            <line x1="9" y1="15" x2="15" y2="15" />
                        </svg>
                    
                        Submit Studies
                    </a>
                    <a href="student/document-status">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-eye"
                            >
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>

                        View Study Status
                    </a>

                    <div class="asd2" style=" width: 100%; margin-top: 10px; display: flex; justify-content: center;">
                        <div class="asd3" style="border-bottom: 1px solid grey; width: 150px;"></div>
                    </div>
                    
                    <a href="/student/pdf-reader" class="unq">Search Studies</a>
                    <a href="student/edit" class="unq">Edit Account</a>

                    <div class="asd2" style=" width: 100%; display: flex; justify-content: center;">
                        <div class="asd3" style="border-bottom: 1px solid grey; width: 150px;"></div>
                    </div>

                    <form action="/out" method="POST">
                        @csrf
                        <button class="lgt">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="feather feather-log-in"
                                >
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10 17 15 12 10 7" />
                                <line x1="15" y1="12" x2="3" y2="12" />
                            </svg>

                            Logout
                        </button>
                    </form>
                </nav>
            </div>
 
            <div class="right" style="overflow: auto;">

<h1 style="font-weight: 500;">Welcome, Niel! You have</h1>

                

                    <div class="cardco">
                        <div class="cards submit">
                            <div class="svg1">
                             <p></p>
                            </div>

                            <div class="count">
                               
                            </div>

                            <div class="text">
                                <p>SUBMITTED STUDIES</p>
                            </div>
                            <div>
                                <h1>3</h1>
                            </div>
                           
                        </div>

                        <div class="cards published">
                            <div class="svg2">
                               
                            </div>

                            <div class="count">
                               
                            </div>

                            <div class="text">
                                <p>APPROVED STUDIES</p>
                            </div>
                             <div>
                                <h1>3</h1>
                            </div>
                        </div>

                        <div class="cards pending">
                            <div class="svg3">
                               
                            </div>

                            <div class="count">
                              
                            </div>

                            <div class="text">
                                <p>PENDING STUDIES</p>
                            </div>
                             <div>
                                <h1>3</h1>
                            </div>
                        </div>

                        <div class="cards revisions">
                            <div class="svg4">
                               
                            </div>

                            <div class="count">
                               
                            </div>

                            <div class="text">
                                <p>REVISIONS TO DO</p>
                            </div>
                             <div>
                                <h1>3</h1>
                            </div>  
                        </div>
                        
                        <div class="cards rejected">
                            <div class="svg5">
                              
                            </div>

                            <div class="count">
                                
                            </div>

                            <div class="text">
                                <p>REJECTED STUDIES</p>
                            </div>
                             <div>
                                <h1>3</h1>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <footer>
        </footer>
    </main>
</body>
</html>

