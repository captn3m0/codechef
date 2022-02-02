---
{"category_name":"easy","problem_code":"NUMBERS","problem_name":"Lucy and the Number Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko","date_added":"13-10-2013","tags":{"0":"cakewalk","1":"ltime06","2":"sorting","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/NUMBERS","time":{"view_start_date":1385283720,"submit_start_date":1385283720,"visible_start_date":1385283720,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/NUMBERS.pdf">here</a></h3>
<p>Lucy had recently learned the game, called Natural Numbers.</p>
<p>The rules of the game are really simple. There are <b>N</b> players. At the same time, every player says one natural number. Let's call the number said by the <b>i</b>-th player <b>A<sub>i</sub></b>. The person with the smallest unique number (that is, the smallest number that was not said by anybody else) wins. Sometimes, there is a case when there are no unique numbers at all. Then the game is obviously a draw, so nobody wins it.</p>
<p>Sometimes, it's hard to determine the winner, especially, when the number of players is enormous. So in this problem, your assignment will be: given the names of the players and the numbers every of them have said. Please, tell the name of the winner, or determine that nobody wins.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of every test case consists of a single integer <b>N</b> - the number of players. Then, <b>N</b> lines will follow. Each of these <b>N</b> lines will consist of the player's name and the number <b>A<sub>i<sub></sub></sub></b> said by her, separated by a single space.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing an answer to the corresponding test case - the name of the winner, or a string "Nobody wins.", if nobody wins the game.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
Kouta 1
Yuka 1
Mayu 3
Lucy 2
Nana 5
2
Lucy 2
Nana 2

<b>Output:</b>
Lucy
Nobody wins.
</pre><h3>Scoring</h3>
<p>Subtask 1 (17 points): <b>T</b> = 10000, 1 &lt;= <b>N</b> &lt;= 10, 1 &lt;= <b>A<sub>i</sub></b> &lt;= 10 <br /><br />
Subtask 2 (19 points): <b>T</b> = 10000, 1 &lt;= <b>N</b> &lt;= 10, 1 &lt;= <b>A<sub>i</sub></b> &lt;= 2*10<sup>9</sup><br /><br />
Subtask 3 (30 points): <b>T</b> = 100, 1 &lt;= <b>N</b> &lt;= 1000, 1&lt;= <b>A<sub>i</sub></b> &lt;= 2*10<sup>9</sup><br /><br />
Subtask 4 (34 points): <b>T</b> = 10, 1 &lt;= <b>N</b> &lt;= 10000, 1 &lt;= <b>A<sub>i</sub></b> &lt;= 2*10<sup>9</sup><br /><br />
You can safely assume that in all the test cases the length of any name will not exceed five letters. All the players'  names  are unique.</p>
