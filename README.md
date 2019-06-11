Let me introduce the new MVC Framework based on PHP, it will assist you in building your own app with it and add features as
- adding Users to your app
- adding posts to your app
- adding any feature with the same steps and routine the sky is your limit you can add any feature you imagine with ease

The components of the app:

<h2>App Folder</h2>   
<ol>
    <li>config 
        <ol type="I">
            <li>config.php => where you can define :</li>
            <ul>
                <li>the DataBase Parameters (like: db-host, db-name, db-user, db-pass)</li>
                <li>your app ( APP Root, App URL, Site Name)</li>
            </ul>
        </ol>
    </li>
    <li>rinse</li>
    <li>repeat</li>
</ol>
models
views    
Add views for any feature you add to you app like views for posts  and it already have
inc 
-	footer.php
- header.php
     b.	pages
- index.php
-	about.php
4.	controllers  
extends from main class controller which has view and model methods which define the connection and relation between controllers and each of  ( Views – Models)
5.	helpers
		 let you add any helpers (like: redirect function, session mechanism)

6.	Liberaries

Main libraries that app will need to launch and start working
	
a.	core

App Core Class which create URL & Loads Core Controller

b.	controller  
		The base Controller which Load The Models & Views

c.	database

 PDO Database Class Used For 
·	Connecting to Database
·	 Create Prepared Statements
·	Bind Values
·	Return rows & Results

Public
1.	Index.php
2.	Js
a.	main.js
3.	css
a.	style.css
4.	images
