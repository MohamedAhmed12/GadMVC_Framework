Let me introduce the new MVC Framework based on PHP, it will assist you in building your own app with it and add features as
- adding Users to your app
- adding posts to your app
- adding any feature with the same steps and routine the sky is your limit you can add any feature you imagine with ease

The components of the app:

<h2>App Folder</h2>   
<ol>
    <li><h4>Config</h4> 
        <ol type="a">
            <li>config.php => where you can define :</li>
            <ul>
                <li>the DataBase Parameters ( like: db-host, db-name, db-user, db-pass )</li>
                <li>your app ( APP Root, App URL, Site Name )</li>
            </ul>
        </ol>
    </li>
    <li><h4>Models</h4></li>
    <li><h4>Views</h4>
        <p>Add views for any feature you add to you app like views for posts  and it already have</p>
        <ul>
            <li>inc 
                -	footer.php
                - header.php</li>
            <li>b.	pages
                - index.php
                -	about.php</li>
        </ul>
    </li>
    <li>Controllers
        <p>extends from main class controller which has view and model methods which define the connection and relation between controllers and each of  ( Views – Models)</p>
    </li>
    <li>helpers
            <p>let you add any helpers (like: redirect function, session mechanism)</p>
    </li>
    <li>Liberaries
        <p>Main libraries that app will need to launch and start working</p>
        <ol type="a">
            <li>Core
                <p>App Core Class which create URL & Loads Core Controller</p>
            </li>
            <li>Controller
                <p>The base Controller which Load The Models & Views</p>
            </li>
            <li>database
                <p> PDO Database Class Used For </p>
                <ul>
                    <li>Connecting to Database</li>
                    <li>Create Prepared Statements</li>
                    <li>Bind Values</li>
                    <li>Return rows & Results</li>
                </ul>
            </li>
        </ol>
    </li>
</ol>

<h2>Public</h2>
<ol>
    <li>Index.php</li>
    <li>
        Js
        <ul>
            <li>main.js</li>
        </ul>
    </li>
    <li>
        css
         <ul>
            <li>style.css</li>
        </ul>
    </li>
    <li>images</li>
</ol>

<p> At Last I hope it will be useful for you and You Enjoy it </p>