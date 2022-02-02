---
{"category_name":"easy","problem_code":"WEICOM","problem_name":"Weird Competition","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"melfice","date_added":"23-08-2017","tags":{"0":"chemthan","1":"constructive","2":"ltime53","3":"medium"},"editorial_url":"https://discuss.codechef.com/problems/WEICOM","time":{"view_start_date":1509210000,"submit_start_date":1509210000,"visible_start_date":1509210000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/mandarin/WEICOM.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/russian/WEICOM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME53/vietnamese/WEICOM.pdf">Vietnamese</a> as well.</h3>

<p>Chef is attending a chess competition. There are <b>n</b> people take part in. Each pair of people compete once. Winner earns 1 point, loser earns 0 point. A game never ends with a draw. After all games are over, Organizer decide to award prize to each participant. The prize of each participant is the square of his points. What is all possible total money the organizer will pay for all participants? Given <b>k</b>, determine if there is at least one scenario that the total money the organizers will pay is exactly <b>k</b>? If there's any, output one of them.</p>
<p> </p>

<h3>Input</h3>
<p>First line contains an integer <b>T</b> denotes the number of test cases. The <b>T</b> following lines, each line contains two integers <b>n, k</b>.</p>
<p> </p>

<h3>Output</h3>
<p>For each test case, if there isn't a such scenario, output -1.</p>
<p>otherwise print <b>n</b>
 lines, each line contains <b>n</b> characters. j-th character in i-th line is "1" if i-th participant wins j-th participant, otherwise "0". (i-th character in i-th line is always "0")</p>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100</b></li>
<li><b>1 ≤ n ≤ 10<sup>3</sup></b></li>
<li>The sum of <b>n</b> over all test cases is at most <b>10<sup>4</b></li>
<li><b>1 ≤ k ≤ 10<sup>9</sup></b></li>
</ul>
<p></p>
<p>Subtasks:</p>
<ul>
<li>Subtask #1 (10 points): <b>n ≤ 5</b></li>
<li>Subtask #2 (30 points): <b>n ≤ 50</b></li>
<li>Subtask #3 (60 points): original constrains
</ul>
<p> </p>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 1
3 6
4 10

<b>Output:</b>
01
00
-1
0100
0011
1001
1000
</pre>