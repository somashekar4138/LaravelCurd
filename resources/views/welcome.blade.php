<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Home Page</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);

body {
  height: 2000px;
  font-family: Roboto, sans-serif;
  -webkit-font-smoothing: antialiased;
}

h1,
h2 {
  text-align: center;
}

h1 {
  color: #222;
}

h2 {
  color: #555;
}

nav#menu {
  margin-top: 50px;
  background: #3498db;
  text-align: center;
  height: 50px;
  width: 100%;
}

nav#menu ul {
  padding: 0;
  background: white;
  margin: 0 auto;
  display: inline-block;
  height: 50px;
}

nav#menu ul li {
  float: left;
  padding: 0 20px;
  background: #3498db;
  list-style: none;
  margin-right: 5px;
  line-height: 50px;
  height: 50px;

  /*
   * This element will get an alternative style
   * once we apply the "scrolled" class.
   * We also want a nice animation so we can
   * simply set CSS3 transitions for this.
   */
  transition: margin 0.1s ease-in-out;
}

nav#menu ul li:nth-child(1) {
  margin-left: 5px;
}

nav#menu ul li.active {
  background: #2980b9;
}

nav#menu ul li a {
  color: white;
  text-decoration: none;
  font-size: 1.3em;
}

nav#menu h1#sitename {
  font-size: 1.2em;
  line-height: 50px;
  margin: 0;
  position: absolute;
  left: 0.5em;
  color: white;
  opacity: 0;

  /*
   * Same thing here as with the menu items.
   * This element will be animated into its
   * alt. state with the transition property
   */
  transition: opacity 0.1s ease-in-out;
}

/*********************************************
 * Once the 'scrolled' class is toggled 
 * we can set any alternative styling that we
 * want for the menu bar 
 *********************************************/

nav#menu.scrolled {
  margin: 0;
  position: fixed;
  top: 0;
}

nav#menu.scrolled ul li {
  margin: 0;
}

nav#menu.scrolled h1#sitename {
  opacity: 1;
}

    </style>
</head>
<body>
<h1>Employee Handler Homepage</h1>
<h2>Here can manage Employee details</h2>

<nav id="menu">
  <h1 id="sitename">MySite</h1>
  <ul>
    <li class="active"><a href="/form">Add Entry</a></li>
    <li><a href="/main">Get All Employee Details</a></li>
  </ul>
</nav>
</body>


</html>