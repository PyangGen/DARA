<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Read:</title>
    <link rel="stylesheet" href="{{ asset ('css/std.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/std_control.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/std.pdf.css') }}">
</head>
<body>
    <main>
        <header> 
            <div class="ahh">
                <img src="/images/logo.png" alt="" style="border-radius: 50px;" class="ahh">
            </div>

        </header>
         
        <div class="main" style="height: 100%; overflow: hidden;">
            <div class="left">
                <div class="profile">
                    <h2></h2>
                </div>

                <nav class="nav-links">
                    <a href="/student" > 
                        <svg
                            style="margin-right: 10px;"
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
                    <a href="/student/document-submission">
                        <svg
                            style="margin-right: 10px;"
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
                    <a href="/student/document-status">
                        <svg
                            style="margin-right: 10px;"
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

                    <a href="../../" class="unq">Search Studies</a>
                    <a href="../edit" class="unq">Edit Account</a>

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
                            &nbsp;
                            Logout
                        </button>
                    </form>
                </nav>
            </div>

            <div class="right" style="overflow: auto;">
                <div id="loading-overlay">
                <div class="loader"></div>
                <p>Loading...</p>
            </div>

            <div class="pdfmain" style="display: none; flex-direction: column;" id="pdf-content">
                <div class="navnav">
                    <div class="leftnav">
                        <div class="pdfaside">
                            <div class="nav">
                                <p>Total Pages: <span id="total-pages"></span></p>
                            </div>
                            <h2></h2>
                            <p><strong>Abstract:</strong>  </p>
                            <p><strong>Date Submitted:</strong> </p>
                            <p><strong>Study Type:</strong> {{ !empty($study_type) ? implode(', ', $study_type) : 'No keywords available.' }}</p>
                        </div>
                    </div>
                </div>

                <div class="pdfcontents">
                    <div id="pdf-container"></div>
                </div>
            </div>

            <style>
                #loading-overlay {
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(255, 255, 255, 1);
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.5em;
                    z-index: 9999;
                }

                .loader {
                    border: 6px solid #f3f3f3;
                    border-top: 6px solid #04128e;
                    border-radius: 50%;
                    width: 50px;
                    height: 50px;
                    animation: spin 1s linear infinite;
                    margin-bottom: 20px;
                }

                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
            </style>

        </div>
    </main>
</body>
</html>


