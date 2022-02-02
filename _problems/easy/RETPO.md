---
{"category_name":"easy","problem_code":"RETPO","problem_name":"Reach The Point","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":null,"date_added":"25-04-2014","tags":{"0":"july14","1":"maths","2":"simple","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/RETPO","time":{"view_start_date":1405330200,"submit_start_date":1405330200,"visible_start_date":1405330200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/RETPO.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/RETPO.pdf">Russian</a>.</h3>
<p>Recently Chef bought a bunch of robot-waiters. And now he needs to know how much to pay for the electricity that robots use for their work. All waiters serve food from the kitchen (which is in the point <b>(0, 0)</b>) and carry it to some table (which is in some point <b>(x, y)</b>) in a shortest way. But this is a beta version of robots and they can only do the next moves: turn right and make a step forward or turn left and make a step forward. Initially they look in direction of <b>X-axis</b>. Your task is to calculate for each query the number of moves they’ll do to reach corresponding table.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. For each test case there is a sing line containing two space-separated integers - <b>x</b> and <b>y</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing number of moves that robot will make to reach point <b>(x, y)</b></p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>x, y</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
3 4

<b>Output:</b>
6
7
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Sequence of moves would be LRLRLR</p>
