@extends('blogposts.layout')
  
@section('content')
    <!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show blogpost</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogposts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $blogpost->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $blogpost->detail }}
            </div>
        </div>
    </div> -->

    <!-- -->
    <div class="row">
    <div class="container">
       <div class="user-profile-area">
          <div class="task-manager">task manager</div>
          <div class="side-wrapper">
             <div class="user-profile">
                <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="user-photo">
                <div class="user-name">Natalie Smith</div>
                <div class="user-mail">natalie.smith@gmail.com</div>
             </div>
             <div class="user-notification">
                <div class="notify">
                   <i class="fa fa-cog" style="font-size:48px;color:red"></i>
                   <i class="bi bi-patch-check"style="font-size:48px;color:red"></i>
                </div>
                <div class="notify alert">
                   
                </div>
                <div class="notify alert">
                   
                </div>
             </div>
             <div class="progress-status">12/34</div>
             <div class="progress">
                <div class="progress-bar"></div>
             </div>
             <div class="task-status">
                <div class="task-stat">
                   <div class="task-number">12</div>
                   <div class="task-condition">Completed</div>
                   <div class="task-tasks">tasks</div>
                </div>
                <div class="task-stat">
                   <div class="task-number">22</div>
                   <div class="task-condition">To do</div>
                   <div class="task-tasks">tasks</div>
                </div>
                <div class="task-stat">
                   <div class="task-number">243</div>
                   <div class="task-condition">All</div>
                   <div class="task-tasks">completed</div>
                </div>
             </div>
          </div>
          <div class="side-wrapper">
             <div class="project-title">Projects</div>
             <div class="project-name">
                <div class="project-department">Marketing</div>
                <div class="project-department">Design</div>
                <div class="project-department">Development</div>
                <div class="project-department">Management</div>
             </div>
          </div>
          <div class="side-wrapper">
             <div class="project-title">Team</div>
             <div class="team-member">
                <img src="https://images.unsplash.com/flagged/photo-1574282893982-ff1675ba4900?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="" class="members">
                <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members">
                <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" class="members">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=998&q=80" alt="" class="members">
                <img src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="" class="members">
             </div>
          </div>
       </div>
       <div class="main-area">
          <div class="header">
             <div class="search-bar">
                <input type="text" placeholder="Search...">
             </div>
             <div class="inbox-calendar">
                <input type="checkbox" class="inbox-calendar-checkbox">
                <div class="toggle-page">
                   <span>Inbox</span>
                </div>
                <div class="layer"></div>
             </div>
             <div class="color-menu">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 464.7 464.7">
                   <path d="M446.6 18.1a62 62 0 00-87.6 0L342.3 35a23 23 0 10-32.5 32.5l5.4 5.4-180.6 180.6L71.9 316c-5 5-8 11.6-8.2 18.7l-.2 3.3-2.5 56.7a9.4 9.4 0 009.4 9.8h.4l30-1.3 18.4-.8 8.3-.4a37 37 0 0024.5-10.8l240.9-240.9 4.5 4.6a23 23 0 0032.5 0c9-9 9-23.6 0-32.6l16.7-16.7a62 62 0 000-87.6zm-174 209.2l-84.6 16 138-138 34.4 34.3-87.8 87.7zM64.5 423.9C28.9 423.9 0 433 0 444.3c0 11.3 28.9 20.4 64.5 20.4s64.5-9.1 64.5-20.4C129 433 100 424 64.5 424z"/>
                </svg>
                <input type="color" value="#4d76fd" class="colorpicker" id="colorpicker"></input>
             </div>
          </div>
          <div class="main-container">
             <div class="inbox-container" style="display: none;">
                <div class="inbox">
                   <div class="msg msg-department anim-y">
                      Marketing
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 492 492">
                         <path d="M484.13 124.99l-16.11-16.23a26.72 26.72 0 00-19.04-7.86c-7.2 0-13.96 2.79-19.03 7.86L246.1 292.6 62.06 108.55c-5.07-5.06-11.82-7.85-19.03-7.85s-13.97 2.79-19.04 7.85L7.87 124.68a26.94 26.94 0 000 38.06l219.14 219.93c5.06 5.06 11.81 8.63 19.08 8.63h.09c7.2 0 13.96-3.57 19.02-8.63l218.93-219.33A27.18 27.18 0 00492 144.1c0-7.2-2.8-14.06-7.87-19.12z"></path>
                      </svg>
                   </div>
                   <div class="msg selected-bg anim-y">
                      <input type="checkbox" name="msg" id="mail1" class="mail-choice" checked>
                      <label for="mail1"></label>
                      <div class="msg-content">
                         <div class="msg-title">Write an articke about design</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members mail-members">
                   </div>
                   <div class="msg anim-y">
                      <input type="checkbox" name="msg" id="mail2" class="mail-choice">
                      <label for="mail2"></label>
                      <div class="msg-content">
                         <div class="msg-title">Disrupt next level aesthetic raw</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://images.unsplash.com/flagged/photo-1574282893982-ff1675ba4900?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="" class="members mail-members">
                   </div>
                   <div class="msg selected-bg anim-y">
                      <input type="checkbox" name="msg" id="mail3" class="mail-choice" checked>
                      <label for="mail3"></label>
                      <div class="msg-content">
                         <div class="msg-title">Chicharrones craft beer tattooed</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=998&q=80" alt="" class="members mail-members">
                   </div>
                   <div class="msg anim-y">
                      <input type="checkbox" name="msg" id="mail4" class="mail-choice">
                      <label for="mail4"></label>
                      <div class="msg-content">
                         <div class="msg-title">Vaporware readymade shabby</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" class="members mail-members">
                   </div>
                   <div class="msg anim-y">
                      <input type="checkbox" name="msg" id="mail5" class="mail-choice">
                      <label for="mail5"></label>
                      <div class="msg-content">
                         <div class="msg-title"> Four dollar toast taxidermy</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" alt="" class="members mail-members">
                   </div>
                   <div class="msg anim-y">
                      <input type="checkbox" name="msg" id="mail6" class="mail-choice">
                      <label for="mail6"></label>
                      <div class="msg-content">
                         <div class="msg-title">Slow-carb disrupt kogi tote bag</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="" class="members mail-members">
                   </div>
                   <div class="msg anim-y">
                      <input type="checkbox" name="msg" id="mail7" class="mail-choice">
                      <label for="mail7"></label>
                      <div class="msg-content">
                         <div class="msg-title">Pour-over subway tile twee</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members mail-members">
                   </div>
                   <div class="msg anim-y">
                      <input type="checkbox" name="msg" id="mail8" class="mail-choice">
                      <label for="mail8"></label>
                      <div class="msg-content">
                         <div class="msg-title">Create AdWords campaign</div>
                         <div class="msg-date">22 Feb, 2019</div>
                      </div>
                      <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" class="members mail-members">
                   </div>
                </div>
                <div class="add-task">
                   <button class="add-button">Add task</button>
                </div>
             </div>
             <div class="mail-detail" style="display: none;">
                <div class="mail-detail-header">
                   <div class="mail-detail-profile">
                      <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members inbox-detail" />
                      <div class="mail-detail-name">Natalie Smith</div>
                   </div>
                   <div class="mail-icons">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                         <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                         <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                         <circle cx="12" cy="7" r="4" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                         <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82zM7 7h.01" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                         <path d="M9 11l3 3L22 4" />
                         <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                         <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48" />
                      </svg>
                   </div>
                </div>
                <div class="mail-contents">
                   <div class="mail-contents-subject">
                      <input type="checkbox" name="msg" id="mail20" class="mail-choice" checked>
                      <label for="mail20"></label>
                      <div class="mail-contents-title">Write an article about design</div>
                   </div>
                   <div class="mail">
                      <div class="mail-time">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                         </svg>
                         12 Mar, 2019
                      </div>
                      <div class="mail-inside">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan commodo lectus gravida dictum. Aliquam a dui eu arcu hendrerit porta sed in velit. Fusce eu semper magna. Aenean porta facilisis neque, ac dignissim magna vestibulum eu. Etiam id ligula eget neque placerat ultricies in sed neque. Nam vitae rutrum est. Etiam non condimentum ante, eu consequat orci. Aliquam a dui eu arcu hendrerit porta sed in velit. Fusce eu semper magna.</div>
                      <div class="mail-assign">
                         <div class="assignee">
                            <strong>Okla Nowak</strong> assigned to Natalie Smith.
                            <span class="assign-date">25 Nov, 2019</span>
                         </div>
                         <div class="assignee">
                            <strong>Okla Nowak</strong> added to Marketing.
                            <span class="assign-date">18 Feb, 2019</span>
                         </div>
                         <div class="assignee">
                            <strong>Okla Nowak </strong> created task.
                            <span class="assign-date">18 Feb, 2019</span>
                         </div>
                      </div>
                      <div class="mail-checklist">
                         <input type="checkbox" name="msg" id="mail30" class="mail-choice" checked>
                         <label for="mail30">Natalie completed this task.</label>
                         <div class="mail-checklist-date">19 May, 2020</div>
                      </div>
                      <div class="mail-doc">
                         <div class="mail-doc-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                               <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                               <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" />
                            </svg>
                            <div class="mail-doc-detail">
                               <div class="mail-doc-name">Article.docx</div>
                               <div class="mail-doc-date">added 17 May, 2020</div>
                            </div>
                         </div>
                         <div class="mail-doc-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                               <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud">
                               <path d="M8 17l4 4 4-4M12 12v9" />
                               <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29" />
                            </svg>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="mail-textarea">
                   <input type="text" placeholder="Write a comment...">
                   <div class="textarea-icons">
                      <div class="attach">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                            <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48" />
                         </svg>
                      </div>
                      <div class="send">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                            <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                         </svg>
                      </div>
                   </div>
                </div>
             </div>
             <div class="calendar-container">
                <div class="calender-tab anim-y">
                   <div class="week-month">
                      <button class=" button active">Week</button>
                      <button class=" button button-month">Month</button>
                   </div>
                   <div class="month-change">
                      <div class="current-month">October</div>
                      <div class="current-year">2020</div>
                   </div>
                   <div class="week-month">
                      <button class=" button button-weekends">Weekends</button>
                      <button class=" button button-task active">Add task</button>
                   </div>
                </div>
                <div class="calendar-wrapper anim-y">
                   <div class="calendar">
                      <div class="days">Monday</div>
                      <div class="days">Tuesday</div>
                      <div class="days">Wednesday</div>
                      <div class="days">Thursday</div>
                      <div class="days">Friday</div>
                      <div class="days">Saturday</div>
                      <div class="days">Sunday</div>
                      <div class="day not-work">31</div>
                      <div class="day project-market">
                         1
                         <div class="hover-title">Marketing</div>
                         <div class="project-detail">Sales report from last month</div>
                         <div class="project-detail">Prepare offers for clients</div>
                         <div class="popup-check">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                               <path d="M9 11l3 3L22 4"/>
                               <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                         </div>
                      </div>
                      <div class="day">2</div>
                      <div class="day project-design">
                         3
                         <div class="project-detail design">Create 3 illustrations for blog post about design trends</div>
                      </div>
                      <div class="day">4</div>
                      <div class="day">5</div>
                      <div class="day">6</div>
                      <div class="day project-develop">
                         7
                         <div class="project-detail develop">Take part in course about future design trends and new technologies</div>
                      </div>
                      <div class="day">8</div>
                      <div class="day">9</div>
                      <div class="day">10</div>
                      <div class="day">11</div>
                      <div class="day">12</div>
                      <div class="day">13</div>
                      <div class="day">14</div>
                      <div class="day project-market">
                         15
                         <div class="hover-title">Marketing</div>
                         <div class="project-detail">Write an article about design trends</div>
                         <div class="popup-check">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                               <path d="M9 11l3 3L22 4"/>
                               <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                         </div>
                      </div>
                      <div class="day">16</div>
                      <div class="day project-market">
                         17
                         <div class="hover-title">Marketing</div>
                         <div class="project-detail">Create AdWords campaign</div>
                         <div class="project-detail">Send newsletter to clients</div>
                         <div class="popup-check">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                               <path d="M9 11l3 3L22 4"/>
                               <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                         </div>
                      </div>
                      <div class="day">18</div>
                      <div class="day">19</div>
                      <div class="day">20</div>
                      <div class="day">21</div>
                      sk
                      <div class="day">22</div>
                      <div class="day project-finance">
                         23
                         <div class="hover-title">Management</div>
                         <div class="project-detail finance">Redesign project ui interface for clients and get feedback</div>
                         <div class="popup-check">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                               <path d="M9 11l3 3L22 4"/>
                               <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                            </svg>
                         </div>
                      </div>
                      <div class="day">24</div>
                      <div class="day">25</div>
                      <div class="day">26</div>
                      <div class="day">27</div>
                      <div class="day">28</div>
                      <div class="day">29</div>
                      <div class="day">30</div>
                      <div class="day not-work">1</div>
                      <div class="day not-work">2</div>
                      <div class="day not-work">3</div>
                      <div class="day not-work">4</div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    </div>
    <!-- -->

@endsection