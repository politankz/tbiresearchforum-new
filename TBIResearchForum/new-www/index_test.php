<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <title>TBI_Research_Forum</title>
        
        <link rel="stylesheet" href="jquery.mobile-1.3.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        
        <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="jquery.mobile-1.3.1.min.js"></script>
        <script src="my.js"></script>
        
        <!-- User-generated css -->
        <style>

        </style>

        
        <script>
            function onLoad() {
                document.addEventListener(
                                          ‘deviceready’, onDeviceReady, false);
            }
            function onDeviceReady() {
                // do Something!
                // example: display a Cordova Alert
                // see docs.phonegap.com for full details
                navigator.notification.alert(
                                             'Cordova is ready!',       // message
                                             function() {//do something},  // callback
                                             'Congratulations',            // title
                                             'Done'                      // buttonName
                                             );
            }
            </script>
    </head>
    <body onload=”onLoad();”>

        <script type="text/javascript" src="cordova-2.6.0.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>
        
        <!-- Home -->
        <div data-role="page" data-theme="a" id="page1" style="background: url('images/app_back_cond-web3.jpg') no-repeat"
            class="info-home">
            <div data-role="content" style="padding: 0%">
                <div>
                    <p>
                    <br>
                    </p>
                    <p>
                    <br>
                    </p>
                    <p>
                    <br>
                    </p>
                    <p>
                    <br>
                    </p>
                    <p>
                    <br>
                    </p>
                    <p>
                    <br>
                    </p>

                </div>

                <a href="#page3" id="home-about-image-button" data-transition="none" class="home-images">
                    <div style=" text-align:center">
                        <img id="home-about-image-button" style="margin-top: 15px; width: 221px; height: 66px" src="images/about_forum_button-web.png">
                            </div>
                </a>
                <a href="#page4" id="home-polytrauma-image-button" data-transition="none" class="home-images">
                    <div style=" text-align:center">
                        <img id="home-polytrauma-image-button" style="width: 221px; height: 66px" src="images/polytrauma_button-web.png">
                            </div>
                </a>
                <a href="#page5" id="home-dvbic-image-button" data-transition="none" class="home-images">
                    <div style=" text-align:center">
                        <img id="home-dvbic-image-button" style="width: 221px; height: 66px" src="images/dvbic_button-web.png">
                            </div>
                </a>
            </div>
            <div id="tab-bar" data-role="tabbar" data-iconpos="top" data-theme="a"
                class="navigation-objects">
                <ul>
                    <li>
                        <a href="#page1" data-transition="none" data-theme="" data-icon="info">
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="#page6" data-transition="none" data-theme="" data-icon="grid">
                            Posters
                        </a>
                    </li>
                    <li>
                        <a href="#page7" data-transition="none" data-theme="" data-icon="alert">
                            Speakers
                        </a>
                    </li>
                    <li>
                        <a href="#page8" data-transition="none" data-theme="" data-icon="check">
                            Survey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Info-About -->
        <div data-role="page" id="page3" style="background: url('images/grey_back-web.jpg') repeat-y"
            class="info-about">
            <div data-theme="a" data-role="header">
                <a id="header-button-about-back" data-role="button"
                    data-transition="none" href="#page1" data-icon="ios-pack-color-back" data-iconpos="left"
                    data-iconsize="26" class="ui-btn-left header-button">
                    Back
                </a>
                <h3 id="header-text-about" class="header-text">
                    About Forum
                </h3>
            </div>
            <div data-role="content">
                <div id="info-text-date" class="info-about-text">
                    <p style="text-align: center;">
                    <span style="color: rgb(0, 204, 255);">
                        <b>
                            March 15, 2013
                        </b>
                    </span>
                    </p>
                </div>
                <div style=" text-align:center" id="info-about-image-title" class="info-about-images">
                    <img id="info-about-image-title" style="width: 100%; height: 100%" src="images/title_only-web.png">
                        </div>
                <div id="info-about-text-intro" class="info-about-text">
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);">
                        VA Palo Alto Healthcare System Main
                        <b>
                        </b>
                    </span>
                    </p>
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);">
                        Auditorium, Building 101, 1st Floor
                    </span>
                    </p>
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);">
                        <br>
                    </span>
                    </p>
                    <p style="text-align: right;" data-mce-style="text-align: right;">
                    <span style="color: rgb(255, 255, 255);">
                        <b>
                            Goal:
                        </b>
                        &nbsp;To increase awareness of recent&nbsp;research surrounding TBI and&nbsp;promote
                        networking opportunities
                    </span>
                    </p>
                    <p style="text-align: right;" data-mce-style="text-align: right;">
                    <span style="color: rgb(255, 255, 255);">
                        <br>
                        Agenda:&nbsp;Posters: 10:00am-12:30pm
                    </span>
                    </p>
                    <p style="text-align: right;" data-mce-style="text-align: right;">
                    <span style="color: rgb(255, 255, 255);">
                        Lunch: 11:30am-12:30pm
                    </span>
                    </p>
                    <p style="text-align: right;" data-mce-style="text-align: right;">
                    <span style="color: rgb(255, 255, 255);">
                        Speakers: 12:30pm-3:00pm
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span style="color: rgb(255, 255, 255);">
                        <strong>
                            ﻿Location and Directions:
                        </strong>
                    </span>
                    <br>
                    </p>
                </div>
                <img id="info-about-map" src="https://maps.googleapis.com/maps/api/staticmap?center=3801 Miranda Dr, Palo Alto, CA&amp;zoom=14&amp;size=288x200&amp;markers=VAPAHCS, 3801 Miranda Dr, Palo Alto, CA&amp;sensor=false"
                    width="288" height="200" class="map-objects">
                    <div id="info-about-text-directions" class="info-about-text">
                        <span style="color: rgb(255, 255, 255);">
                            <p>
                            <strong>
                                VAPAHCS
                            </strong>
                            <br>
                            3801 Miranda Ave, Palo Alto, CA 94304
                            </p>
                            <p>
                            Valet Parking is free.
                            </p>
                            <p>
                            From Highway 280:
                            </p>
                            <p>
                            • Exit at Page Mill Road towards Palo Alto
                            </p>
                            <p>
                            • Turn Right on Foothill Expressway – then get in left lane to make first
                            left onto Hill View then IMMEDIATE sharp right onto Miranda Ave
                            </p>
                            <p>
                            • Come to short stop sign and go straight through
                            </p>
                            <p>
                            • Take first left into the main hospital
                            </p>
                            <p>
                            • When you enter the main driveway come to the first stop sign and turn
                            right and take an IMMEDIATE sharp right again into Valet Parking
                            </p>
                            <p>
                            • The main hospital entrance is straight ahead
                            </p>
                            <p>
                            • Come into the main lobby and signs for the Main auditorium will be posted
                            directing you to the TBI Research Forum
                            </p>
                        </div>
                    </span>
                        <div>
                            <span style="color: rgb(255, 255, 255);">
                                <p>
                                <strong>
                                    Thanks and Acknowledgements
                                </strong>
                                :
                                </p>
                                <p>
                                Thanks to our staff who put in countless hours organizing this Forum and
                                our Volunteers!
                                </p>
                                <p>
                                Design and development of this conference application by David M. Horton:
                                </p>
                            </span>
                        
                        <p>
                        <a data-mce-href="http://www.davidmhorton.com" href="http://www.davidmhorton.com"
                            title="www.davidmhorton.com" target="_blank" style="" data-mce-style="">
                            www.davidmhorton.com
                        </a>
                        </p>
                        <p>
                        <br>
                        </p>
                                
                    </div>
                    </div>
            <div id="tab-bar" data-role="tabbar" data-iconpos="top" data-theme="a"
                class="navigation-objects">
                <ul>
                    <li>
                        <a href="#page1" data-transition="none" data-theme="" data-icon="info">
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="grid">
                            Posters
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="alert">
                            Speakers
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="check">
                            Survey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Info-Polytrauma -->
        <div data-role="page" id="page4" style="background: url('images/grey_back-web.jpg') repeat-y"
            class="info-about">
            <div data-theme="a" data-role="header">
                <a id="header-button-about-back" data-role="button"
                    data-transition="none" href="#page1" data-icon="ios-pack-color-back" data-iconpos="left"
                    data-iconsize="26" class="ui-btn-left header-button">
                    Back
                </a>
                <h3 id="header-text-about" class="header-text">
                    Polytrauma
                </h3>
            </div>
            <div data-role="content">
                <div style="" id="info-psc-image-title" class="info-about-images">
                    <img id="info-psc-image-title" style="width: 85%; height: 85%" src="images/psc_logo-web.png">
                        </div>
                <div id="info-about-text-intro" class="info-about-text">
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);" data-mce-style="color: #ffffff;">
                        Polytrauma System of Care
                    </span>
                    </p>
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);" data-mce-style="color: #ffffff;">
                        and
                    </span>
                    </p>
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);" data-mce-style="color: #ffffff;">
                        Comprehensive Rehabilitation Center
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span style="color: rgb(255, 255, 255);" data-mce-style="color: #ffffff;">
                        <br>
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span style="color: rgb(255, 255, 255);" data-mce-style="color: #ffffff;">
                        <b style="color: rgb(255, 255, 255); text-align: left;" data-mce-style="color: #ffffff; text-align: left;">
                            Scope of Services:
                        </b>
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        The Polytrauma System of Care (PSC) and Comprehensive Rehabilitation Center
                        (CRC) provide inpatient, transitional, and outpatient rehabilitation tailored
                        to individual patterns of impairment sustained in trauma and/or resulting
                        from medical conditions or surgery. The programs serve veterans and active
                        duty service members eligible for VA or Tricare benefits, men and women
                        ages 17 and up. Referrals are accepted from VA, military, and private sector
                        facilities.
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                    </span>
                    </p>
                    <p>
                    <strong>
                        Polytrauma Rehabilitation Center (PRC) and Comprehensive
                    </strong>
                    <br>
                    <strong>
                        Rehabilitation Center (CRC)
                    </strong>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        The PRC and CRC provide acute comprehensive interdisciplinary inpatient
                        rehabilitation, a highly-specialized level of care designed to treat medically
                        stable patients. Goals of acute rehabilitation include: maximizing independence,
                        increased cognition, self-awareness, functional communication, mobility,
                        psychosocial skills, activities of daily living, preparation for home and
                        community, patient and family education and support. Patients remain in
                        acute rehabilitation until goals are met or maximal improvement is realized.
                        Intended discharge environments include home, residential, and other non-institutional
                        settings.
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        Polytrauma Transitional Rehabilitation Program (PTRP)
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        PTRP is a time-limited and goal-oriented program designed to improve the
                        person’s physical, cognitive, communicative, behavioral, psychological
                        and social functioning. The goal of transitional rehabilitation is to return
                        a person to the least restrictive environment including return to active
                        duty, work and school, or independent living in the community with meaningful
                        daily activities.
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        Polytrauma Network Site (PNS)
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        PNS provides polytrauma and mild traumatic brain injury assessment, treatment
                        and ongoing assistance with community reintegration. The team of highly
                        qualified rehabilitation personnel blends unmatched expertise with advanced
                        technology. The program provides outpatient interdisciplinary services
                        and psychosocial case management for individuals residing within VISN 21.
                        Individuals must be medically and psychiatrically stable in order to participate
                        in outpatient and interdisciplinary services.
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        Operation Enduring Freedom (OEF) and Operation Iraqi Freedom (OIF) and
                        Operation New Dawn (OND) Veterans Care Management Team
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        OEF/OIF/OND program consists of a team of licensed clinical social workers
                        and a Transition Patient Advocate (TPA). The case management program initiatives
                        include assisting in the transition from active duty to veteran status,
                        care coordination and crisis management of active duty service members
                        and veterans.
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        Polytrauma System of Care Teams
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                    </span>
                    </p>
                    <p>
                    • Physicians
                    <br>
                    • Admission Coordinators
                    <br>
                    • Nursing Staff
                    <br>
                    • Social Work Team
                    <br>
                    • Occupational Therapy
                    <br>
                    • Speech-Language Pathology
                    <br>
                    • Recreation Therapy
                    <br>
                    • Physical Therapy
                    <br>
                    • Psychology Staff
                    </p>
                    <p>
                    Additional Resources to our System of Care
                    </p>
                    <p>
                    • Assistive Technology (AT) Center
                    <br>
                    • Chaplain Service
                    <br>
                    • Defense and Veterans Brain Injury Center (DVBIC)
                    <br>
                    • Fisher House
                    <br>
                    • Military Liaisons
                    <br>
                    • Research
                    <br>
                    • Spinal Cord Injury
                    <br>
                    • Stanford University
                    <br>
                    • War Related Injury and Illness Study Center
                    <br>
                    • Western Blind Rehabilitation Center
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                        <br>
                    </span>
                    </p>
                </div>
            </div>
            <div id="tab-bar" data-role="tabbar" data-iconpos="top" data-theme="a"
                class="navigation-objects">
                <ul>
                    <li>
                        <a href="#page1" data-transition="none" data-theme="" data-icon="info">
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="grid">
                            Posters
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="alert">
                            Speakers
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="check">
                            Survey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Info-DVBIC -->
        <div data-role="page" id="page5" style="background: url('images/grey_back-web.jpg') repeat-y"
            class="info-about">
            <div data-theme="a" data-role="header">
                <a id="header-button-about-back" data-role="button"
                    data-transition="none" href="#page1" data-icon="ios-pack-color-back" data-iconpos="left"
                    data-iconsize="26" class="ui-btn-left header-button">
                    Back
                </a>
                <h3 id="header-text-dvbic" class="header-text">
                    DVBIC
                </h3>
            </div>
            <div data-role="content">
                <div style=" text-align:center" id="info-psc-image-title" class="info-about-images">
                    <img id="info-psc-image-title" style="width: 139px; height: 167px" src="images/new_dvbic_logo-framed-web.png">
                        </div>
                <div id="info-about-text-intro" class="info-about-text">
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <strong>
                        Defense and Veterans Brain Injury Center (DVBIC)
                    </strong>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <strong>
                        Program Overview
                    </strong>
                    :
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    DVBIC and the Department of Veterans Affairs (VA) Veterans Health Administration
                    are partners in clinical care, education, research and care coordination
                    for veterans and active duty service members who have sustained a traumatic
                    brain injury (TBI). In addition to Palo Alto, DVBIC core personnel are
                    based at the other four VA Regional Polytrauma Rehabilitation Centers located
                    in Minneapolis; Richmond, Va.; Tampa, Fla.; and San Antonio, Texas. Each
                    of these centers has established state-of-the-art treatment and rehabilitation
                    within the Polytrauma System of Care. The centers also coordinate the transfer
                    and provision of health care for patients with TBI and other serious injuries
                    within the VA system and between the VA and Department of Defense.
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                    </span>
                    </p>
                    <p>
                    <strong>
                        About our Site
                    </strong>
                    </p>
                    <p>
                    DVBIC Palo Alto is both integral to and has been a fundamental part of
                    the success of VA Palo Alto Health Care System, working in partnership
                    with the Polytrauma System of Care in all basic core areas of strength:
                    clinical care, education and outreach, and research.
                    </p>
                    <p>
                    DVBIC Palo Alto was established in 1992, as an essential part of the Polytrauma
                    System of Care and works in collaboration with: Polytrauma Rehabilitation
                    Center, Polytrauma Network Site and Polytrauma Transitional Rehabilitation
                    Program on all aspects of TBI.
                    </p>
                    <p>
                    DVBIC Palo Alto staff are engaged in many clinical, educational outreach
                    and research activities, all aimed to support our goal to provide comprehensive
                    services to service members and veterans to prevent, identify and treat
                    TBI. Staff are committed to ensuring all our core programs fulfill the
                    DVBIC mission by establishing a strong focus on the following:
                    </p>
                    <p>
                    ▪ Robust education coordination and outreach to the service members and
                    families we serve, collaborating with the numerous community partners,
                    colleges, hospitals and veteran service providers as well as partners within
                    the VA and DoD
                    </p>
                    <p>
                    ▪ Clinical care coordination services and outreach to help ensure all
                    service members and veterans receive needed clinical care and support services
                    </p>
                    <p>
                    ▪ Clinical investigative research initiatives
                    </p>
                    <p>
                        <br>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                    </span>
                    </p>
                </div>
            </div>
            <div id="tab-bar" data-role="tabbar" data-iconpos="top" data-theme="a"
                class="navigation-objects">
                <ul>
                    <li>
                        <a href="#page1" data-transition="none" data-theme="" data-icon="info">
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="grid">
                            Posters
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="alert">
                            Speakers
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="check">
                            Survey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Posters -->
        <div data-role="page" id="page6" style="background: url('images/grey_back-web.jpg') repeat-y"
            class="poster-list">
            <div data-theme="a" data-role="header">
                <h3 id="header-text-posters" class="header-text">
                    Posters
                </h3>
            </div>
            <div data-role="content">
                <div id="info-about-text-intro" class="info-about-text">
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);">
                        <b>
                            10:00 am - 12:30 pm
                        </b>
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#ffffff" data-mce-style="color: #ffffff;" style="color: #ffffff;">
                    </span>
                    </p>
                </div>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-theme="c">
                        <a href="#poster1" data-transition="slide">
                            Tools for Clinical Use: Journal of Head Trauma Rehabilitation and the
                            Center for Outcome Measurement in Brain Injury
                            <span class="ui-li-count">
                                1
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster2" data-transition="slide">
                            Walking Away the Stress: An Analysis of Perceived Stress in People with
                            a Traumatic Brain Injury Participating in a Goal Oriented Walking Program
                            <span class="ui-li-count">
                                2
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster3" data-transition="slide">
                            Comparison of Traumatic Brain Injury (TBI) Due to Primary or Secondary Blast Injury with TBI Due to Direct Head Trauma in Veterans of OIF/OEF Campaigns
                            <span class="ui-li-count">
                                3
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster4" data-transition="slide">
                            Validity Assessment of Referral Decisions of the  VA Palo Alto Health Care System Polytrauma System of Care
                            <span class="ui-li-count">
                                4
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster5" data-transition="slide">
                            Cerebral Metabolism and Neuropsychological Outcomes Following Mild Traumatic Brain Injury
                            <span class="ui-li-count">
                                5
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster6" data-transition="slide">
                            Cerebral Metabolism, Mood, Quality of Life, and Coping Style Following Mild Traumatic Brain Injury
                            <span class="ui-li-count">
                                6
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster7" data-transition="slide">
                            Visual Function, Traumatic Brain Injury, and PTSD
                            <span class="ui-li-count">
                                7
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster8" data-transition="slide">
                            Development of a translational database for combined brain and spinal cord injury
                            <span class="ui-li-count">
                                8
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster9" data-transition="slide">
                            Multimodal MR Imaging of Corpus Callosum Abnormalities in Chronic Mild Traumatic Brain Injury within a Veteran Population
                            <span class="ui-li-count">
                                9
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster10" data-transition="slide">
                            Treatment with lipopolysaccharide or lipoligosaccharide post-injury reduces brain inflammation
                            <span class="ui-li-count">
                                10
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster11" data-transition="slide">
                            Development of an RBANS Index of Executive Functioning
                            <span class="ui-li-count">
                                11
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster12" data-transition="slide">
                            Recruitment of Veterans from a Population Based Sample with Post-Traumatic Stress Disorder and Traumatic Brain Injury
                            <span class="ui-li-count">
                                12
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster13" data-transition="slide">
                            Breadth of Effort: Relation of Two RBANS Effort Measures to Performance on Multiple Neuropsychological Tests in a Polytrauma Clinic
                            <span class="ui-li-count">
                                13
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster14" data-transition="slide">
                            A Decade of Traumatic Brain Injury among Veterans and Military Personnel, Defense and Veterans Brain Injury Center, Palo Alto 2002-2012
                            <span class="ui-li-count">
                                14
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster15" data-transition="slide">
                            Fiber Tractography of Patients with TBI and PTSD Reveals Unique Neurological Signature
                            <span class="ui-li-count">
                                15
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster16" data-transition="slide">
                            Reliability of Neuropsychological Testing by Telephone after Traumatic Brain Injury
                            <span class="ui-li-count">
                                16
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster17" data-transition="slide">
                            Clinician Versus Veteran Ratings on the Mayo-Portland Participation Index in Veterans with a History of Mild Traumatic Brain Injury
                            <span class="ui-li-count">
                                17
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster18" data-transition="slide">
                            Male Veteran with History of Multiple TBI and Neurocognitive Dysfunction
                            <span class="ui-li-count">
                                18
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#poster19" data-transition="slide">
                            Comprehensive Neuroimaging Pipeline for Evaluating Traumatic Brain Injury
                            <span class="ui-li-count">
                                19
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="tab-bar" data-role="tabbar" data-iconpos="top" data-theme="a"
                class="navigation-objects">
                <ul>
                    <li>
                        <a href="#page1" data-transition="none" data-theme="" data-icon="info">
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="grid">
                            Posters
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="alert">
                            Speakers
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="check">
                            Survey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Speakers -->
        <div data-role="page" id="page7" style="background: url('images/grey_back-web.jpg') repeat-y"
            class="info-about">
            <div data-theme="a" data-role="header">
                <h3 id="header-text-speakers" class="header-text">
                    Speakers
                </h3>
            </div>
            <div data-role="content">
                <div id="info-about-text-intro" class="info-about-text">
                    <p style="text-align: center;" data-mce-style="text-align: center;">
                    <span style="color: rgb(255, 255, 255);" data-mce-style="color: #ffffff;">
                        <b>
                            12:30 pm - 3:00 pm
                        </b>
                    </span>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#888888" data-mce-style="color: #888888;" style="color: #888888;">
                    </span>
                    </p>
                </div>
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                            Aoife O'Donovan, PhD
                            <span class="ui-li-count">
                                1
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                            Maheen Mausoof Adamson, PhD
                            <span class="ui-li-count">
                                2
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                            Stephanie Kolakowsky-Hayner, PhD
                            <span class="ui-li-count">
                                3
                            </span>
                        </a>
                    </li>
                    <li data-theme="c">
                        <a href="#page1" data-transition="slide">
                            Oanh N Mandal, MD
                            <span class="ui-li-count">
                                4
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="tab-bar" data-role="tabbar" data-iconpos="top" data-theme="a"
                class="navigation-objects">
                <ul>
                    <li>
                        <a href="#page1" data-transition="none" data-theme="" data-icon="info">
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="grid">
                            Posters
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="alert">
                            Speakers
                        </a>
                    </li>
                    <li>
                        <a href="#page3" data-transition="none" data-theme="" data-icon="check">
                            Survey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Poster1 -->
        <div data-role="page" id="poster1" style="background: url('images/grey_back-web.jpg') repeat-y"
            class="info-about">
            <div data-theme="a" data-role="header">
                <a id="header-button-about-back" data-role="button" data-direction="reverse"
                    data-transition="slide" href="#page1" data-icon="ios-pack-color-back" data-iconpos="left"
                    data-iconsize="26" class="ui-btn-left header-button">
                    Back
                </a>
                <h3 id="header-text-poster-details" class="header-text">
                    Poster Details
                </h3>
            </div>
            <div data-role="content">
                <div id="info-about-text-intro" class="info-about-text">
                    <p style="text-align: left;">
                    <strong>
                        <span style="color: rgb(0, 204, 255);">
                            1.
                        </span>
                        Tools for Clinical Use: Journal of Head Trauma Rehabilitation and the
                        Center for Outcome Measurement in Brain Injury
                    </strong>
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span style="color: rgb(192, 192, 192);">
                        Bellon K, Wright J
                    </span>
                    </p>
                    <p>
                    Background: Complete information guiding use of outcome and assessment
                    measures has not always been available. This can lead to creation of “home-made”
                    measures when established measures are available. Using non-established
                    measures makes it difficult to replicate or compare study findings. Clinicians
                    need accurate and complete information for measure selection, administration,
                    and scoring, and interpretation to effectively describe patient status
                    and outcomes.
                    </p>
                    <p>
                    Methodology: The Center for Outcome Measurement in Brain Injury (COMBI)
                    website (http://www.tbims.org/combi/) created by Santa Clara Valley Medical
                    Center in collaboration with 20 other centers/researchers works to create
                    one central location for brain injury researchers to locate appropriate
                    outcome scales to utilize in their research. Beginning in 2012, in conjunction
                    with the Journal of Head Trauma Rehabilitation, a Tools for Clinical Use
                    section has been developed to spotlight brain injury scales located on
                    the COMBI. The Clinical Tools spotlight has thus far included the Patient
                    Competency Rating Scale (PCRS), Disability Rating Scale (DRS), Satisfaction
                    with Life Scale (SWLS) and the Mayo Portland Adaptability Inventory-4 (MPAI-4).
                    For the purposes of this poster presentation, these four outcome measures
                    will be further described.
                    </p>
                    <p style="text-align: left;" data-mce-style="text-align: left;">
                    <span color="#888888" data-mce-style="color: #888888;" style="color: #888888;">
                    </span>
                    </p>
                </div>
                
                <?php include 'tab_bar_test.php'; ?>
                             
            </div>

    </body>
</html>
