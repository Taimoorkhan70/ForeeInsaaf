<!DOCTYPE html>
<html lang="en">


<head>
    <?php 
    
       include("inc/links.php");?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>
    <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap");
/* ===================================
    Variables
====================================== */
body.chat-page {
    overflow-y: auto !important;
}
:root {
  --bg-page: #ffffff;
  --bg-page-darker: #f7f7f7;
  --bg-page-darkest: #b3b3b3;
  --colour-primary: #3996fb;
  --colour-primary-lightest: #e8f3ff;
  --colour-primary-darker: #1a7ee6;
  --colour-third: #419d78;
  --colour-third-lighter: #7bc9aa;
  --colour-third-lightest: #e6f7f0;
  --colour-text: #696969;
  --colour-text-lighter: #9b9b9b;
  --colour-text-darker: #626262;
  --colour-text-darkest: #363636;
  --border-color: #e8e7e7;
  --form-radius: 13px;
  --search-form-bg-colour: #f2f2f2;
  --send-form-bg-colour: #f2f2f2;
  --send-btn-box-shadow-colour: #7bbafd;
  --chat-bubble-me: #f2f2f2;
  --chat-bubble-you: var(--colour-primary);
}

.dark-mode {
  --bg-page: #1a1a1a;
  --bg-page-darker: #363636;
  --bg-page-darkest: #818181;
  --colour-primary: #1a71d0;
  --colour-primary-lightest: #202c3a;
  --colour-primary-darker: #449ffd;
  --colour-third: #41c590;
  --colour-third-lighter: #56d6a3;
  --colour-third-lightest: #272f2c;
  --colour-text: #c7c7c7;
  --colour-text-lighter: #868686;
  --colour-text-darker: #dcdcdc;
  --colour-text-darkest: #eaeaea;
  --border-color: #4c4c4c;
  --search-form-bg-colour: #363636;
  --send-form-bg-colour: #363636;
  --send-btn-box-shadow-colour: #44515f;
  --chat-bubble-me: #363636;
  --chat-bubble-you: var(--colour-primary);
}

/* ===================================
    Base
====================================== */


/* ===================================
    Mixins & functions
====================================== */
/* ===================================
    Main
====================================== */
.messages-page {
  height: 80vh;
}
.messages-page__header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.messages-page__title {
  color: var(--colour-text-darker);
  font-weight: bold;
  font-size: 1.5rem;
}
@media screen and (max-width: 1199px) {
  .messages-page__title {
    font-size: 1.5rem;
  }
}
.messages-page__dark-mode-toogler {
  width: 2.6rem;
  height: 2.6rem;
  padding: 0.35rem;
  border-radius: 50%;
  border: 1px solid var(--border-color);
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.messages-page__dark-mode-toogler:hover {
  background-color: var(--colour-primary);
  border-color: var(--colour-primary);
}
.messages-page__dark-mode-toogler:hover path {
  fill: var(--bg-page-darker);
}
.messages-page__list {
  list-style: none;
  flex-grow: 1;
  overflow-y: auto;
}
.messages-page__list-scroll {
  height: 100%;
  overflow: hidden;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.custom-form {
  color: var(--colour-text-darkest);
  padding: 1.5rem;
  border-radius: 13px;
}
.custom-form__search-wrapper, .custom-form__send-wrapper {
  width: 100%;
  height: 100%;
  position: relative;
}
.custom-form__search-wrapper input::-moz-placeholder, .custom-form__send-wrapper input::-moz-placeholder {
  color: var(--colour-text-lighter);
  font-size: 0.9rem;
}
.custom-form__search-wrapper input:-ms-input-placeholder, .custom-form__send-wrapper input:-ms-input-placeholder {
  color: var(--colour-text-lighter);
  font-size: 0.9rem;
}
.custom-form__search-wrapper input::placeholder, .custom-form__send-wrapper input::placeholder {
  color: var(--colour-text-lighter);
  font-size: 0.9rem;
}
.custom-form__search-wrapper input:focus, .custom-form__send-wrapper input:focus {
  outline: none;
  box-shadow: none;
}
.custom-form__search-wrapper input {
  padding-right: 3rem;
  background-color: var(--search-form-bg-colour);
  border: 1px solid var(--bg-page);
}
.custom-form__search-wrapper input:-moz-placeholder-shown {
  background-color: var(--search-form-bg-colour);
  border: 1px solid var(--bg-page);
}
.custom-form__search-wrapper input:-ms-input-placeholder {
  background-color: var(--search-form-bg-colour);
  border: 1px solid var(--bg-page);
}
.custom-form__search-wrapper input:placeholder-shown {
  background-color: var(--search-form-bg-colour);
  border: 1px solid var(--bg-page);
}
.custom-form__search-wrapper input:focus {
  background-color: var(--bg-page);
  border-color: var(--border-color);
  color: var(--colour-text);
}
.custom-form__send-wrapper input {
  padding-right: 6rem;
  padding-left: 3.25rem;
  background-color: var(--send-form-bg-colour);
  border: none;
}
.custom-form__send-wrapper input:focus {
  background-color: var(--send-form-bg-colour);
  border-color: transparent;
  color: var(--colour-text);
}
.custom-form__search-submit {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: 3.5rem;
  cursor: pointer;
  background-color: transparent;
  border: none;
  outline: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
.custom-form__search-submit:focus {
  outline: none;
  border: none;
}
.custom-form__send-submit {
  position: absolute;
  top: 50%;
  right: 0.5rem;
  transform: translateY(-50%);
  height: 2.3rem;
  width: 2.3rem;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--colour-primary);
  border-radius: 50%;
  box-shadow: 0 3px 3px var(--send-btn-box-shadow-colour);
  border: none;
  outline: none;
  text-align: center;
  font-size: 1.2rem;
    padding:0px;
  color: white;

}
.custom-form__send-submit:focus {
  outline: none;
  border: none;
}
.custom-form__send-submit:hover {
  background-color: var(--colour-primary-darker);
}
.custom-form__send-img {
  position: absolute;
  top: 50%;
  left: 0.5rem;
  transform: translateY(-50%);
  width: 2.3rem;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.custom-form__send-emoji {
  position: absolute;
  top: 50%;
  right: 3.2rem;
  transform: translateY(-50%);
  width: 2.3rem;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}

.messaging-member {
  border-radius: var(--form-radius);
}
.messaging-member:hover {
  background-color: var(--bg-page-darker);
}
.messaging-member--new .messaging-member__name {
  color: var(--colour-text-darker);
}
.messaging-member--new .messaging-member__message {
  color: var(--colour-text-darker);
  font-weight: bold;
}
.messaging-member--online .user-status {
  background-color: var(--colour-third-lighter);
}
.messaging-member--active {
  background-color: var(--colour-primary-lightest);
}
.messaging-member--active:hover {
  background-color: var(--colour-primary-lightest);
}
@media screen and (max-width: 767px) {
  .messaging-member--active {
    background-color: var(--bg-page);
  }
  .messaging-member--active:hover {
    background-color: var(--bg-page-darker);
  }
}
.messaging-member__wrapper {
  cursor: pointer;
  padding: 0.5rem 1rem;
  border-radius: var(--form-radius);
  display: flex;
  align-items:center;
  grid-template-columns: 4rem 4fr;
  grid-template-rows: 2rem 2rem;
  -moz-column-gap: 1rem;
       column-gap: 1rem;
  grid-template-areas: "avatar     name" "avatar     message";
}
@media screen and (max-width: 1199px) {
  .messaging-member__wrapper {
    grid-template-columns: 3.5rem 1fr;
    grid-template-rows: 1.75rem 1.75rem;
  }
}
@media screen and (max-width: 991px) {
  .messaging-member__wrapper {
    grid-template-columns: 3.2rem 1fr;
    grid-template-rows: 1.75rem 1.75rem;
  }
}
.messaging-member__avatar {
  grid-area: avatar;
  position: relative;
}
.messaging-member__avatar img {
  border-radius: 50%;
  width: 100%;
}
.messaging-member__name {
  font-weight: bold;
  grid-area: name;
  color: var(--colour-text-darker);
  margin-top: auto;
  font-size: 0.9rem;
}
.messaging-member__message {
  grid-area: message;
  white-space: nowrap;
  word-break: break-word;
  text-overflow: ellipsis;
  overflow: hidden;
  font-size: 0.9rem;
}

.chat {
  height: 100%;
  
}
.chat__container {
  height: 100%;
  width: 100%;
}
.chat__wrapper {
  background-color: var(--bg-page);
  height: 100%;
  width: 100%;
  border-left: 1px solid var(--border-color);
  border-right: 1px solid var(--border-color);
  overflow: hidden;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
@media screen and (max-width: 767px) {
  .chat__wrapper {
    border-left: none;
    border-right: none;
  }
}
.chat__messaging {
  width: 100%;
  border-bottom: 1px solid var(--border-color);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.chat__previous {
  width: 8%;
  min-width: 2rem;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.7rem;
  cursor: pointer;
  color: var(--colour-primary);
}
.chat__notification {
  width: 4%;
  min-width: 1.5rem;
}
.chat__notification span {
  display: none;
  width: 1.4rem;
  height: 1.4rem;
  text-align: center;
  border-radius: 50%;
  font-weight: bold;
  color: white;
  background-color: var(--colour-primary);
  font-size: 0.9rem;
}
.chat__notification--new span {
  display: block;
}
.chat__infos {
  flex-grow: 1;
}
.chat__actions {
  font-size: 5px;
  height: 2rem;
  min-width: 2rem;
  color: var(--colour-primary);
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}
.chat__actions ul {
  list-style: none;
  display: flex;
}
.chat__actions li {
  width: 2.6rem;
  height: 2.6rem;
  padding: 0.35rem;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background-color: var(--bg-page);
}
.chat__actions li + li {
  margin-left: 0.3rem;
}
.chat__actions li:hover {
  background-color: var(--colour-primary-lightest);
}
.chat__content {
  flex-grow: 1;
  overflow-y: auto;
}
.chat__list-messages {
  list-style: none;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.chat__list-messages li {
  margin-bottom: 0.7rem;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
}
.chat__list-messages li .chat__bubble {
  margin-bottom: 0.2rem;
}
.chat__bubble {
  position: relative;
  color: var(--colour-text-darkest);
  padding: 0.5rem 1rem;
  border-radius: 22px;
  background-color: var(--bg-page);
  max-width: 30rem;
  font-size: 0.9rem;
  overflow: hidden;
  overflow-wrap: break-word;
  word-break: break-word;
}
.chat__bubble--you {
  margin-right: 2rem;
  color: white;
  background-color: var(--chat-bubble-you);
}
.chat__bubble--me {
  margin-left: 2rem;
  background-color: var(--chat-bubble-me);
  align-self: flex-end;
}
.chat__time {
  font-size: 0.8rem;
  color: var(--colour-text-lighter);
  align-self: center;
  padding-bottom: 0.2rem;
}
.chat__send-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.chat-member__wrapper {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.chat-member__avatar {
  position: relative;
  width: 3.5rem;
}
.chat-member__avatar img {
  border-radius: 50%;
  width: 100%;
}
@media screen and (max-width: 767px) {
  .chat-member__avatar {
    width: 2.5rem;
  }
}
.chat-member__name {
  font-weight: bold;
  color: var(--colour-text-darker);
  margin-top: auto;
  white-space: nowrap;
  word-break: break-all;
  text-overflow: ellipsis;
  overflow: hidden;
  font-size: 1rem;
}
@media screen and (max-width: 1199px) {
  .chat-member__name {
    font-size: 0.9rem;
  }
}
.chat-member__details {
  margin-left: 0.8rem;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
@media screen and (max-width: 767px) {
  .chat-member__details {
    margin-left: 1rem;
  }
}
.chat-member__age {
  font-size: 0.9rem;
  color: var(--colour-text-lighter);
  position: relative;
}
.chat-member__age::after {
  content: " . ";
  font-size: 0px;
  position: absolute;
  top: 50%;
  right: -4px;
  width: 3px;
  height: 3px;
  background-color: var(--colour-text-lighter);
  border-radius: 50%;
}
.chat-member__status {
  color: var(--colour-text-lighter);
  font-size: 0.8rem;
}
.chat__profile {
  width: 100%;
  height: 100%;
  max-width: 20rem;
}
.chat--mobile {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10001;
  transform: translateY(100%);
  display: none;
  transition: transform 0.3s ease-in-out 0.1s;
}
.chat--mobile .chat__wrapper {
  border-radius: 0;
}
.chat--mobile.chat--show {
  display: block;
  transform: translateY(0%);
  border-radius: 0;
}

.user-profile {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  overflow-y: auto;
}
.user-profile__wrapper {
  position: relative;
  height: 100%;
  width: 100%;
  padding-top: 5rem;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.user-profile__close {
  position: absolute;
  top: 1rem;
  left: 1.5rem;
  width: 2rem;
  height: 2rem;
  color: var(--colour-primary);
  font-size: 1.375rem;
  cursor: pointer;
  z-index: 10003;
}
.user-profile__avatar {
  display: flex;
  justify-content: center;
  align-items: center;
}
.user-profile__avatar img {
  width: 9rem;
  border-radius: 50%;
}
.user-profile__name {
  font-weight: bold;
  margin-top: 0.7rem;
  color: var(--colour-text-darker);
  word-wrap: break-word;
  font-size: 1.15rem;
}
@media screen and (max-width: 767px) {
  .user-profile__name {
    font-size: 1.1rem;
  }
}
.user-profile__phone {
  color: var(--colour-text-darker);
  font-size: 0.9rem;
}
.user-profile__details {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}
.user-profile__location {
  color: var(--colour-text-lighter);
  font-size: 0.9rem;
}
.user-profile__description {
  text-align: center;
}
.user-profile__description p {
  margin-top: 1.3rem;
  word-wrap: break-word;
  overflow: hidden;
  text-overflow: ellipsis;
  font-size: 0.9rem;
}
.user-profile__label {
  font-size: 0.9rem;
  font-weight: bold;
}
.user-profile__tags {
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
.user-profile__tags li {
  padding: 0.3rem 1rem;
  border-radius: 1rem;
  margin-right: 0.3rem;
  margin-bottom: 0.3rem;
  font-size: 0.9rem;
}
.user-profile__tags a:hover {
  text-decoration: none;
}
.user-profile__tags--primary li {
  background-color: var(--colour-primary-lightest);
  color: var(--colour-primary-darker);
}
.user-profile__tags--primary a:hover {
  color: var(--colour-primary-darker);
}
.user-profile__tags--secondary li {
  background-color: var(--colour-third-lightest);
  color: var(--colour-third);
}
.user-profile__tags--secondary a:hover {
  color: var(--colour-third);
}
.user-profile--large {
  display: none;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 10002;
  transform: translateX(100%);
  transition: transform 0.3s ease-in-out 0.1s;
  background-color: var(--bg-page);
  box-shadow: -3px 0 3px rgba(0, 0, 0, 0.06);
}
.user-profile--large.user-profile--show {
  display: block;
  transform: translateX(0%);
  border-radius: 0;
}

.user-status {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 1rem;
  height: 1rem;
  background-color: var(--colour-text-lighter);
  border: 3px solid white;
  border-radius: 50%;
}
.user-status--online {
  background-color: var(--colour-third);
}

.svg-icon {
  width: 70%;
}
.svg-icon path,
.svg-icon circle {
  fill: var(--colour-primary);
}
.svg-icon--send {
  width: 60%;
}
.svg-icon--send path,
.svg-icon--send circle {
  fill: white;
}
.svg-icon--search {
  width: 40%;
}
.svg-icon--search path,
.svg-icon--search circle {
  fill: var(--bg-page-darkest);
}
.svg-icon--send-img {
  width: 55%;
}
.svg-icon--send-img path,
.svg-icon--send-img circle {
  fill: var(--bg-page-darkest);
}
.svg-icon--send-emoji {
  width: 60%;
}
.svg-icon--send-emoji path,
.svg-icon--send-emoji circle {
  fill: var(--bg-page-darkest);
}
.svg-icon--previous {
  width: 55%;
}
.svg-icon--dark-mode {
  width: 80%;
}
.svg-icon--dark-mode path,
.svg-icon--dark-mode circle {
  fill: var(--colour-primary);
}
/* HTML: <div class="loader"></div> */
.loader {
  width: 60px;
  aspect-ratio: 4;
  --_g: no-repeat radial-gradient(circle closest-side,#000 90%,#0000);
  background: 
    var(--_g) 0%   50%,
    var(--_g) 50%  50%,
    var(--_g) 100% 50%;
  background-size: calc(100%/3) 100%;
  animation: l7 1s infinite linear;
}
@keyframes l7 {
    33%{background-size:calc(100%/3) 0%  ,calc(100%/3) 100%,calc(100%/3) 100%}
    50%{background-size:calc(100%/3) 100%,calc(100%/3) 0%  ,calc(100%/3) 100%}
    66%{background-size:calc(100%/3) 100%,calc(100%/3) 100%,calc(100%/3) 0%  }
}
        </style>
    <?php
  
 
    include("db/connection.php");
    ?>
    <?php 
    if(isset($_GET['u_id'])){
         $q="SELECT * FROM `user` WHERE `user_id`='".$_GET['u_id']."'";
        $result=mysqli_query($connection,$q);
        $row=mysqli_fetch_array($result);
        
    }
    
    ?>
</head>

<body class="chat-page">

    <div class="main-wrapper">


       <?php
       include("inc/header.php");
       
       ?>


        <div class="content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 back-text">
                        <a href="dashboard.html" class="btn btn-primary back-btn"><i class="fa fa-chevron-left"></i>
                            Back </a>
                    </div>
                    <div class="col-md-12">
                    <div class="home-page__content messages-page">
                          <div class="container-fluid h-100">
                            <div class="row px-0 h-100">
                              <!-- start message list section  -->
                              <div class="col-12 col-md-4 col-lg-5 col-xl-4 px-0 messages-page__list-scroll">
                                <div class="messages-page__header mb-0 px-4 pt-3 pb-3">
                                  <span class="messages-page__title">Chats</span>
                                </div>
                                <ul class="messages-page__list pb-5 px-1 px-md-3" id="chat_users" style="position:relative">
                                    <div id="chat-loader" style="position:absolute;top:0px;left:0px; width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:#fff;z-index:1111;">
                                        <div class="loader" role="status">
                                        </div>
                                    </div>
                                  <li class="messaging-member messaging-member--new messaging-member--online">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/men/74.jpg" alt="Bessie Cooper" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Bessie Cooper</span>
                                      <span class="messaging-member__message">Yes, I need your help with the project, it need it done by tomorrow ðŸ˜«</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member messaging-member--online messaging-member--active">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Jenny Smith</span>
                                      <span class="messaging-member__message">Perfect, thanks !</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/women/17.jpg" alt="Courtney Simmons" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Courtney Simmons</span>
                                      <span class="messaging-member__message">Going home soon, don't worry</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member messaging-member--online">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/women/39.jpg" alt="Martha Curtis" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Martha Curtis</span>
                                      <span class="messaging-member__message">Great ðŸ˜‚</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member messaging-member--online">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/men/27.jpg" alt="Rozie Tucker" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Gab Ryan</span>
                                      <span class="messaging-member__message">Sure, may I get your phone number? ðŸ˜ƒ</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/men/17.jpg" alt="Jules Zimmermann" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Jules Zimmermann</span>
                                      <span class="messaging-member__message">Well, here I am, coming as faaast as I can !</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/men/9.jpg" alt="Mark Reid" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Mark Reid</span>
                                      <span class="messaging-member__message">Have you listened to the latest album? Pure perfection</span>
                                    </div>
                                  </li>
                                  <li class="messaging-member  messaging-member--online">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/men/54.jpg" alt="Russell Williams" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Russell Williams</span>
                                      <span class="messaging-member__message">Nice to meet you again </span>
                                    </div>
                                  </li>
                                  <li class="messaging-member">
                                    <div class="messaging-member__wrapper">
                                      <div class="messaging-member__avatar">
                                        <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg" alt="Savannah Nguyen" loading="lazy">
                                        <div class="user-status"></div>
                                      </div>
                        
                                      <span class="messaging-member__name">Savannah Nguyen</span>
                                      <span class="messaging-member__message">Really ?!</span>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <!-- end message list section  -->
                              <!-- start content section  -->
                              <div class="chat col-12 col-md-8 col-lg-7 col-xl-8 px-0 pl-md-1">
                                <div class="chat__container">
                                  <div class="chat__wrapper py-2 pt-mb-2 pb-md-3">
                                      <?php
                                      if(!isset($_GET['u_id'])){
                                          ?>
                                           <div id="chat_select_alert" style="position:absolute;top:0px;left:0px;width:100%;height:100%;display:flex;align-items:center;justify-content:center;z-index:1;background:#fff;">
                                            <p class="alert alert-danger">Please select the user to chat</p>
                                        </div>
                                          <?php
                                      }else{
                                              $q="SELECT * FROM `user` where `user_id`='".$_GET['u_id']."'";
                                                 $re=mysqli_query($connection,$q);
                                                 $user=mysqli_fetch_assoc($re);
                                      }
                                      ?>
                                     
                                    <div class="chat__messaging <?php if($user['IsOnline']==1){ echo 'messaging-member--online'; } ?>  pb-2 pb-md-2 pl-2 pl-md-4 pr-2">
                                      <div class="chat__previous d-flex d-md-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--previous" viewBox="0 0 45.5 30.4">
                                          <path d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z" fill="#f68b3c" />
                                        </svg>
                                      </div>
                                      <div class="chat__notification d-flex d-md-none chat__notification--new">
                                        <span>1</span>
                                      </div>
                                      <div class="chat__infos pl-2 pl-md-0">
                                        <div class="chat-member__wrapper" data-online="false">
                                          <div class="chat-member__avatar">
                                            <?php
                                               if(empty($user['image'])){
                                                    ?>
                                                        <img src="assets/images/users/avatar-1.jpg" alt="<?php echo $user['name'] ?>" loading="lazy" style="width:50px;height:50px;object-fit:contain;">
                                                     
                                                    <?php
                                                }else{
                                                    ?>
                                                        <img src="uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['name'] ?>" loading="lazy" style="width:50px;height:50px;object-fit:contain;">
                                                    <?php
                                                }
                                                
                                            ?>
                                            <div class="user-status user-status--large"></div>
                                          </div>
                                          <div class="chat-member__details">
                                            <span class="chat-member__name"><?php echo $user['name'] ?></span>
                                            <span class="chat-member__status"><?php if($user['IsOnline']==1){ echo 'Online'; }else{ echo 'Offline'; } ?></span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="chat__actions mr-2 ">
                                
                        
                                      </div>
                                    </div>
                                    <div class="chat__content pt-4 px-3" >
                                        
                                      <ul class="chat__list-messages" id="messages_list_content">
                                           <div id="chat-loader" style="position:absolute;top:0px;left:0px; width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:#fff;z-index:1111;">
                                        <div class="loader" role="status">
                                         
                                         
                                        </div>
                                    </div>
                                        <li>
                                          <div class="chat__time">Yesterday at 16:43</div>
                                          <div class="chat__bubble chat__bubble--you">
                                            Hey, I bought something yesterdat but haven't gotten any confirmation. Do you know I if the order went through?
                                          </div>
                                        </li>
                                        <li>
                                          <div class="chat__bubble chat__bubble--me">
                                            Hi! I just checked, your order went through and is on it's way home. Enjoy your new computer! ðŸ˜ƒ
                                          </div>
                                        </li>
                                        <li>
                                          <div class="chat__bubble chat__bubble--you">
                                            Ohh thanks ! I was really worried about it !
                                          </div>
                                          <div class="chat__bubble chat__bubble--you">
                                            Can't wait for it to be delivered
                                          </div>
                                        </li>
                                        <li>
                                          <div class="chat__time">07:14</div>
                                          <div class="chat__bubble chat__bubble--me">
                                            Aenean iaculis massa non lorem dignissim volutpat. Praesent id faucibus lorem, a sagittis nunc. Duis facilisis lectus vel sapien ultricies, sed placerat augue elementum. In sagittis, justo nec sodales posuere, nunc est sagittis tellus, eget scelerisque dolor risus vel augue
                                          </div>
                                          <div class="chat__bubble chat__bubble--me">
                                            Is everything alright?
                                          </div>
                        
                                        </li>
                                        <li>
                                          <div class="chat__bubble chat__bubble--you">
                                            Vestibulum finibus pulvinar quam, at tempus lorem. Pellentesque justo sapien, pulvinar sed magna et, vulputate commodo nisl. Aenean pharetra ornare turpis. Pellentesque viverra blandit ullamcorper. Mauris tincidunt ac lacus vel convallis. Vestibulum id nunc nec urna accumsan dapibus quis ullamcorper massa. Aliquam erat volutpat. Nam mollis mi et arcu dapibus condimentum.
                                          </div>
                                          <div class="chat__bubble chat__bubble--you">
                                            Nulla facilisi. Duis laoreet dignissim lectus vel maximus
                                          </div>
                                          <div class="chat__bubble chat__bubble--you">
                                            Curabitur volutpat, ipsum a condimentum hendrerit ! ðŸ˜Š
                                          </div>
                                        </li>
                                        <li>
                                          <div class="chat__time">09:26</div>
                                          <div class="chat__bubble chat__bubble--me">
                                            Perfect, thanks !
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="chat__send-container px-2 px-md-3 pt-1 pt-md-3">
                                         <form action="" method="POST" class="chat__send-container px-2 px-md-3 pt-1 pt-md-3 w-100" enctype="multipart/form-data" id="chat_form" > 
                                      <div class="custom-form__send-wrapper">
                                         
                                              
                                        
                                                <input type="text" class="form-control custom-form" id="message" name="message" placeholder="Enter your message...." autocomplete="off">
                                                <div class="custom-form__send-img">
                                                  <!--<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-img" viewBox="0 0 45.7 45.7">-->
                                                  <!--  <path d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z" fill="#f68b3c" />-->
                                                  <!--</svg>-->
                                                  
                                                  <i class="fa fa-paperclip svg-icon svg-icon--send-img" id="file-upload"></i>
                                                  <input type="file" hidden name="file" id="file_input">
                                                  <input type="text" hidden name="id" value="<?php echo $_GET['u_id']; ?>">
                                                   <input type="text" hidden name="count" value="4">
                                                </div>
                                               
                                                <button type="submit" name="submit" class="custom-form__send-submit" id="submit_chat_btn">
                                                  
                                                  <i class="fab fa-telegram-plane svg-icon svg-icon--send"></i>
                                                </button>
                                        
                                      </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end content section  -->
                         
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       <?php
       include("inc/footer.php");
       
       ?>

    </div>


  <?php
  include("inc/footer_links.php");
  
  ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function() {
       
                  var $messageField = $('#message');
            var $form = $('#chat_form');
            $('#submit_chat_btn').html('<i class="fab fa-telegram-plane svg-icon svg-icon--send"></i>');
            $('#chat_form').submit(function(event) {
                event.preventDefault();
                $('#submit_chat_btn').html('<i class="fas fa-spinner svg-icon svg-icon--send"></i>');
                var formData = new FormData(this);
                var message = $('#message').val();
                var file = $('#file_input').get(0).files[0];

                // Determine the action based on inputs
                if (message === '' && file === undefined) {
                    alert('Either message or file must be provided.');
                    return;
                }
   $messageField.prop('disabled', true);
                     $('#submit_chat_btn').prop('disabled', true);
             

                $.ajax({
                    url: 'functions/chat_handler.php',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                           $messageField.prop('disabled', false);
                        $('#submit_chat_btn').prop('disabled', false);
                         $('#submit_chat_btn').html('<i class="fab fa-telegram-plane svg-icon svg-icon--send"></i>');
                             $form[0].reset();
                    }
                });
            });
        });
    </script>
    <script>
    
    $(document).ready(function(){
        $('#file-upload').click(function(){
            $("#file_input").click();
        })
        function get_messages(){
            var count=5;
            <?php 
            if(isset($_GET['u_id'])){
                ?>
                 var chat_id=<?php echo $_GET['u_id']; ?>;
                <?php
            }else{
                ?>
                 var chat_id;
                <?php
            }
            ?>
               $.ajax({
                url:'functions/chat_handler.php',
                method:"post",
                // dataType: "json", // Expect JSON response
                data:{count:count,chat_id:chat_id},
                success:function(data){
                    console.log(data);
                    $('#messages_list_content').html(data);
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Error:', error);
                }
            });
        }
        get_messages();
        setInterval(get_messages, 3000);
        function get_online_user(){
            var count=3;
            <?php 
            if(isset($_GET['u_id'])){
                ?>
                 var id=<?php echo $_GET['u_id']; ?>;
                <?php
            }else{
                ?>
                 var id;
                <?php
            }
            ?>
            
            
           
            $.ajax({
                url:'functions/chat_handler.php',
                method:"post",
                dataType: "json", // Expect JSON response
                data:{count:count,id:id},
                success:function(data){
                   
                   if(data.IsOnline=="1"){
                       $('.chat__messaging').addClass('messaging-member--online');
                       $('.chat-member__status').html("Online");
                   }else{
                       $('.chat__messaging').removeClass('messaging-member--online');
                        $('.chat-member__status').html("Offline");
                   }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error('Error:', error);
                }
            });
        }
               <?php 
            if(isset($_GET['u_id'])){
                ?>
                     get_online_user();
                    setInterval(get_online_user, 3000);
                <?php
            }else{
                
            }
            ?>
   
     
        function get_chat_users(){
            var count=2;
            $.ajax({
                url:'functions/chat_handler.php',
                method:"post",
                data:{count:count},
                success:function(data){
                    $('#chat_users').html(data);
                    $('.chat__content ').scrollTop($('.chat__content ')[0].scrollHeight);
                }
            })
        }
        get_chat_users();
        setInterval(get_chat_users, 3000);
    });
        $chat = $(".chat");
$profile = $(".user-profile");

/* ===================================
    Screen resize handler
====================================== */
const smallDevice = window.matchMedia("(max-width: 767px)");
const largeScreen = window.matchMedia("(max-width: 1199px)");
smallDevice.addEventListener("change", handleDeviceChange);
largeScreen.addEventListener("change", handleLargeScreenChange);

handleDeviceChange(smallDevice);
handleLargeScreenChange(largeScreen);

function handleDeviceChange(e) {
  if (e.matches) chatMobile();
  else chatDesktop();
}

function handleLargeScreenChange(e) {
  if (e.matches) profileToogleOnLarge();
  else profileExtraLarge();
}

function chatMobile() {
  $chat.addClass("chat--mobile");
}

function chatDesktop() {
  $chat.removeClass("chat--mobile");
}

function profileToogleOnLarge() {
  $profile.addClass("user-profile--large");
}

function profileExtraLarge() {
  $profile.removeClass("user-profile--large");
}

/* ===================================
    Events
====================================== */

$(".messaging-member").click(function () {
  $chat.fadeIn();
  $chat.addClass("chat--show");
});

$(".chat__previous").click(function () {
  $chat.removeClass("chat--show");
});

$(".chat__details").click(function () {
  $profile.fadeIn();
  $profile.addClass("user-profile--show");
});

$(".user-profile__close").click(function () {
  $profile.removeClass("user-profile--show");
});

$(".messages-page__dark-mode-toogler").click(function () {
  $("body").toggleClass("dark-mode");
});

    </script>

</body>


</html>