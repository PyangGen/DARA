<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DARA - Student Status</title>
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/std.css') }}">
    <link rel="stylesheet" href="{{ asset('css/std_status.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/svg.css') }}">
</head>
<body style="height: calc(100% - 61px)" >
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
                    <a href="/student"> 
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
                    <a href="document-submission">
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
                    <a href="/student/edit" class="unq">Edit Account</a>

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
                <style>
                    .batan {
                        border-radius: 49px;
                        width: 175px;
                        margin-top: 40px;
                        font-weight: lighter;
                        height: 40px;
                        display: flex;
                        border: none;
                        cursor: pointer;
                        transition: all 0.1s ease;
                        align-items: center;
                        font-family: "rubik";
                        justify-content: center;
                    }

                    .confirm {
                        background-color: #8e0404;
                        color: white;
                    }

                    .confirm:hover {
                        box-shadow: 3px 3px 4px #7b7b7b, -3px -3px 4px #ffffff;
                        font-weight: normal;
                    }

                    .cancel {
                        color: #333;
                    }

                    form {
                        width: 100%;
                        display: flex;
                        justify-content: center;
                        justify-content: space-between;
                    }
                </style>

               



                <div id="abandonModal" class="modal">
                    <div class="modal-content">
                        <h2>Are you sure you want to abandon this document?</h2>
                        <p>You can still recover this document later.</p>
                        <div class="modal-actions">
                            <form action="pdf-reader/request" method="POST">
                                @csrf
                                <input type="hidden" name="document_id" class="documentIdInput">
                                <input type="hidden" name="action" value="Abandoned">
                                <button type="submit" class="batan confirm">Confirm</button>
                                <button type="button" class="batan cancel" onclick="closeModal('abandonModal')">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="recoverModal" class="modal">
                    <div class="modal-content">
                        <h2 style="color: green;">Recover this document?</h2>
                        <div class="modal-actions">
                            <form action="pdf-reader/request" method="POST">
                                @csrf
                                <input type="hidden" name="document_id" class="documentIdInput">
                                <input type="hidden" name="action" value="Pending">
                                <button style="background-color: green;" type="submit" class="batan confirm">Confirm</button>
                                <button type="button" class="batan cancel" onclick="closeModal('recoverModal')">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="removepermModal" class="modal">
                    <div class="modal-content">
                        <h2>Are you sure you want to delete this document permanently?</h2>
                        <p>You cannot recover this document if you delete it permanently.</p>
                        <div class="modal-actions">
                            <form action="pdf-reader/request" method="POST">
                                @csrf
                                <input type="hidden" name="document_id" class="documentIdInput">
                                <input type="hidden" name="action" value="LostDoc">
                                <button type="submit" class="batan confirm">Confirm</button>
                                <button type="button" class="batan cancel" onclick="closeModal('removepermModal')">Cancel</button>
                            </form>
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

