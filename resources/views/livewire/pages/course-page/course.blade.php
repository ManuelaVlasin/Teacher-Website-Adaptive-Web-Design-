<div class="lesson-details-page">
    <div class="course-details card mb-3">
        <div class="row no-gutters align-items-center">
            <div class="col-md-4">
                @if($courseId == 1)
                    <img class="lesson-image" src="{{asset(url('images/PHP.jpg'))}}">
                @elseif($courseId == 2)
                    <img class="lesson-image" src="{{asset(url('images/adaptiveWeb.jpg'))}}">
                @elseif($courseId == 3)
                    <img class="lesson-image" src="{{asset(url('images/Laravel.jpg'))}}">
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    @if($courseId == 1)
                        <h4 class="card-title">{{__('Introduction to Web Development')}}</h4>
                        <p class="card-text">
                            {{__('Web development is the work involved in developing a website for the Internet (World Wide
                            Web) or an intranet (a private network).[1] Web development can range from developing a
                            simple single static page of plain text to complex web applications, electronic businesses,
                            and social network services.')}}
                        </p>
                    @elseif($courseId == 2)
                        <h4 class="card-title">{{__('Adaptive Web Design')}}</h4>
                        <p class="card-text">
                            {{__("Adaptive web design (AWD) promotes the creation of multiple versions of a web page to better
                            fit the user's device, as opposed to a single static page which loads (and looks) the same
                            on all devices or a single page which reorders and resizes content responsively based on the
                            device/screen size/browser of the user.")}}
                        </p>
                    @elseif($courseId == 3)
                        <h4 class="card-title">{{__('PHP with Laravel')}}</h4>
                        <p class="card-text">
                            {{__('Laravel is a free and open-source PHP web framework, created for the development of web
                            applications following the model–view–controller (MVC) architectural pattern and based on
                            Symfony. Some of the features of Laravel are a modular packaging system with a dedicated
                            dependency manager, different ways for accessing relational databases, utilities that aid in
                            application deployment and maintenance, and its orientation toward syntactic sugar.')}}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header text-center p-5">
            <h3>{{__('Detalii curs')}}</h3>
            <h6 class="red-text">{{__('Teacher: Manuela Vlașin <manuela.vlasin@yahoo.com>')}}</h6>
            @if($courseId == 1)
                <h6 class="red-text">{{__('All lectures will be held on MS TEAMS. The access code is 5029ds7.')}}</h6>
            @elseif($courseId == 2)
                <h6 class="red-text">{{__('All lectures will be held on MS TEAMS. The access code is 7rs1i7z.')}}</h6>
            @elseif($courseId == 3)
                <h6 class="red-text">{{__('All lectures will be held on MS TEAMS. The access code is 89ju209')}}</h6>
            @endif

        </div>
        <div class="card-body">
            <div class="card-text">
                <div class="stepper-wrapper">
                    <div class="stepper-item completed">
                        <div class="step-counter">1</div>
                        <div class="step-name">{{__('Learn')}} &#10004;</div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter">2</div>
                        <div class="step-name">{{__('Exercise')}} &#10004;</div>
                    </div>
                    <div class="stepper-item completed">
                        <div class="step-counter">3</div>
                        <div class="step-name">{{__('Apply what you learnt')}} &#10004;</div>
                    </div>
                </div>

                <div>
                    <div class="course">
                        <div class="course-content">
                            <h3 class="title-decoration text-center">{{__('Course Content')}}</h3>

                            @if($courseId == 1)
                                <h5>{{__('CURS 1: Introduction')}}</h5>
                                <h5>{{__('CURS 2: HTML')}}</h5>
                                <h5>{{__('CURS 3: Cascading Style Sheets (CSS)')}}</h5>
                                <h5>{{__('CURS 4: JavaScript')}}</h5>
                                <h5>{{__('CURS 5: jQuery')}}</h5>
                                <h5>{{__('CURS 6: AJAX')}}</h5>
                                <h5>{{__('CURS 7: Command Line')}}</h5>
                                <h5>{{__('CURS 8: Node.js')}}</h5>
                                <h5>{{__('CURS 9: Individual Project')}}</h5>
                                <h5>{{__('CURS 10: Individual Project')}}</h5>
                                <h5>{{__('CURS 11: Individual Project')}}</h5>
                                <h5>{{__('CURS 12: Individual Project')}}</h5>
                                <h5>{{__('CURS 13: Individual Project')}}</h5>

                            @elseif($courseId == 2)
                                <h5>{{__('CURS 1: Introduction')}}</h5>
                                <h5>{{__('CURS 2: What is Adaptive Web Design ?')}}</h5>
                                <h5>{{__('CURS 3: Preparing the HTML Content and Structure')}}</h5>
                                <h5>{{__('CURS 4: Creating the Style and Layout with CSS')}}</h5>
                                <h5>{{__('CURS 5: Creating a Menu System with CSS')}}</h5>
                                <h5>{{__('CURS 6: Making Layout Adjustments for Large and Medium Screens')}}</h5>
                                <h5>{{__('CURS 7: Making Adjustments for Small Screens')}}</h5>
                                <h5>{{__('CURS 8: Making Adjustments for the Smallest Screens')}}</h5>
                                <h5>{{__('CURS 9: Making Layout and Content Adjustments for Print')}}</h5>
                                <h5>{{__('CURS 10: Individual Project')}}</h5>
                                <h5>{{__('CURS 11: Individual Project')}}</h5>
                                <h5>{{__('CURS 12: Individual Project')}}</h5>
                                <h5>{{__('CURS 13: Individual Project')}}</h5>

                            @elseif($courseId == 3)
                                <h5>{{__('CURS 1: Introduction')}}</h5>
                                <h5>{{__('CURS 2: What is Laravel ?')}}</h5>
                                <h5>{{__('CURS 3: What can we create with Laravel?')}}</h5>
                                <h5>{{__('CURS 4: Laravel Documentation')}}</h5>
                                <h5>{{__('CURS 5: Installation')}}</h5>
                                <h5>{{__('CURS 6: Creating our first application')}}</h5>
                                <h5>{{__('CURS 7: Starting our first project in the browser')}}</h5>
                                <h5>{{__('CURS 8: Removing localhost from URL')}}</h5>
                                <h5>{{__('CURS 9: What code editor to use')}}</h5>
                                <h5>{{__('CURS 10: Setting up VS code')}}</h5>
                                <h5>{{__('CURS 11: Setting up PHPstorm')}}</h5>
                                <h5>{{__('CURS 12: First look at our application')}}</h5>
                                <h5>{{__('CURS 13: What is the .env file?')}}</h5>
                            @endif
                        </div>

                        <div class="lab-details">
                            <h3 class="title-decoration">{{__('Laboratory')}}</h3>
                            <h5>
                                {{__('Labs will be held physically (i.e., face to face). Some materials can be put on MS TEAMS. We ask overdue students and extension students to express their option for the group with which they will participate in the laboratory by contacting the appropriate teacher.')}}
                            </h5>
                        </div>
                    </div>

                    <h2 class="fw-bold text-center p-3">{{__('About Exam')}}</h2>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card mb-3">
                                <div class="card-body exam-details">
                                    <h5 class="card-title d-flex justify-content-center text-center">
                                        {{__('Practical Exam')}}
                                    </h5>
                                    <p>
                                        {{__('The practical exam is usually held during the last lab. The share of the practical exam in the final grade is 20%.The content of the practical exam and how it will take place will be announced on MS TEAMS.To pass the exam, the practical exam must be at least 5.')}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card mb-3">
                                <div class="card-body exam-details">
                                    <h5 class="card-title d-flex justify-content-center text-center">
                                        {{__('Written Exam')}}
                                    </h5>
                                    <p>
                                        {{__('Has 20% share of the final mark. The exam will consist of a grid test session (working time: 20-30 min). To pass the exam, it is necessary for the written exam to be at least 5.')}}
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card mb-3">
                                <div class="card-body exam-details">
                                    <h5 class="card-title d-flex justify-content-center text-center">
                                        {{__('Final Mark')}}
                                    </h5>
                                    <p class="red-text">
                                        {{__('FinalMark = 60% LabWorkGrade + 20% PracticalExam + 20% WrittenExam')}}
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .exam-details{
        height: 270px;
        display: table;
        text-align: center;
        align-items: center;
    }

    .lab-details {
        max-width: 50%;
        padding-right: 50px;
    }

    .course {
        display: flex;
    }

    .course-content {
        padding: 0;
        margin: 0 auto;
    }

    .red-text {
        color: red;
    }

    .title-decoration {
        color: black;
        margin: 40px 0;
        text-align: left !important;
    }

    .card-header h3 {
        color: black;
    }

    .card-title {
        font-weight: bold;
    }

    .course-details {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .lesson-details-page {
        margin: 80px;
    }

    .lesson-image {
        max-width: 80%;
        margin: 20px
    }

    .StepProgress strong {
        display: block;
    }

    .download-pdf {
        color: black;
    }

    .download-pdf:hover {
        color: #87CEFA;
    }

    .stepper-wrapper {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .stepper-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        font-size: 20px;
    }

    @media (max-width: 600px) {
        .stepper-item {
            font-size: 12px;
        }

        .lesson-image {
            margin: 20px auto 0 auto;
            display: flex;
        }

        .lesson-details-page {
            margin: 80px 0 0 0;
        }
    }

    @media screen and (max-width: 991px) {
        .lab-details {
            max-width: 100%;
        }

        .course {
            display: block;
        }
    }

    .stepper-item::before {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: -50%;
        z-index: 2;
    }

    .stepper-item::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #ccc;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 2;
    }

    .stepper-item .step-counter {
        position: relative;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #ccc;
        margin-bottom: 6px;
        color: white;
    }

    .stepper-item.completed .step-counter {
        background-color: #50C878;
    }

    .stepper-item.completed::after {
        position: absolute;
        content: "";
        border-bottom: 2px solid #4bb543;
        width: 100%;
        top: 20px;
        left: 50%;
        z-index: 3;
    }

    .stepper-item:first-child::before {
        content: none;
    }

    .stepper-item:last-child::after {
        content: none;
    }

</style>


