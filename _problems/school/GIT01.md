---
{"category_name":"school","problem_code":"GIT01","problem_name":"Chef And his Cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gitesh18","problem_tester":null,"date_added":"23-11-2017","tags":{"0":"cakewalk","1":"dec17","2":"gitesh18"},"editorial_url":"https://discuss.codechef.com/problems/GIT01","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/GIT01.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/GIT01.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/GIT01.pdf">Vietnamese</a> as well.</h3>

<p>Chef’s girlfriend's birthday is near, so he wants to surprise her by making a special cake for her. Chef knows that his girlfriend likes cherries on the cake, so he puts cherries on the top of the cake, but he was not satisfied. Therefore, he decided to replace some of the cherries to make a beautiful pattern. However, Chef has a lot of other work to do so he decided to ask for your help.</p>

<p>The cherries are of two colors <b>red</b> and <b>green</b>. Now Chef wants the cherries to be placed in such a way that each cherry of one color must be adjacent to only cherries of the other color, two cherries are adjacent if they share a side. Now Chef has asked for your help in making that pattern on the cake.</p>

<p>You can replace any cherry of given color with the other color. But there is a cost for each replacement: if you replace a red cherry with a green one, the cost is <b>5</b> units and if you replace a green cherry with a red one, the cost is <b>3</b> units.</p>

<p>Help your friend Chef by making the cake special with minimum cost.</p>


<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>, where <b>N</b> × <b>M</b> are the dimensions of the cake.</li>
<li>Each of the next <b>N</b> lines contains a string of length <b>M</b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, output the minimum cost required to make the cake special.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N, M</b> ≤ 100</li>
<li>each string consists only of letters 'R' and 'G' denoting red and green cherries respectively
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

2
4 5
RGRGR
GRGRG
RGRGR
GRGRG
2 3
RRG
GGR

<b>Output:</b>

0
8
</pre>
<p> </p>
