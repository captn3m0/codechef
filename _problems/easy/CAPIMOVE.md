---
{"category_name":"easy","problem_code":"CAPIMOVE","problem_name":"Capital Movement","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"iscsi","date_added":"8-08-2015","tags":{"0":"cenadar","1":"data","2":"heap","3":"jan17","4":"sets","5":"simple","6":"sorting","7":"tree"},"editorial_url":"https://discuss.codechef.com/problems/CAPIMOVE","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/CAPIMOVE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/CAPIMOVE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/CAPIMOVE.pdf">Vietnamese</a> as well.</h3>

<p>Chef is playing a video game. In a video game, there's a advanced civilization that has a total of <b>N</b> planets under control. All of those planets are connected with <b>N-1</b> teleports in such a way, that it's possible to travel between any two planets using those teleports.</p>

<p>There's a chance that some planet gets infected. In this case it takes 24 hours for civilization to find out infection and prevent it from spreading. During this time infection uses teleport one time and infect all the planets that can be achieved in one teleport jump. So, once infection is detected at planet <b>V</b>, scientists already know that all planets connected to <b>V</b> via teleport are also infected. All the neccessary teleports are disabled right away and medics start working on eliminating the infection.</p>
<p>Each planet has population. Planets are numbered from <b>1</b> to <b>N</b> and their populations are <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b>. It is known that all the <b>P<sub>i</sub></b> are distinct.</p>

<p>There's a capital among all those planets. The capital is known to have the biggest population.</p>
<p>Once infection is detected at planet <b>V</b>, after disabling teleports on planet <b>V</b> and all connected to them, government has to establish a new capital if needed in the remaining not-infected planets. So, they list all the planets that are not connected to <b>V</b> and are not <b>V</b>. Then they pick the planet with biggest population. Your task is to find the number of this planet for every possible <b>V</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains one integer <b>N</b>.</p>
<p>Next line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b> denoting the population of each planet.</p>
<p>Next <b>N-1</b> lines contain two space-separated integers each <b>V</b> and <b>U</b> denoting that there's a teleport between planet <b>V</b> and <b>U</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> separated by a space. Here <b>A<sub>i</sub></b> denotes the number of the planet picked to be new capital in case infection starts spreading from the planet <b>i</b>. In case infection affects all the planets output <b>0</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50000</b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>All <b>P<sub>i</sub></b> are distinct</li>
<li><b>1</b> ≤ <b>V</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>U</b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (20 points): N ≤ 100</b></li>
<li><b>Subtask #2 (30 points): N ≤ 10000</b></li>
<li><b>Subtask #3 (50 points): No additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6
5 10 15 20 25 30
1 3
2 3
3 4
4 5
4 6

<b>Output:</b>
6 6 6 2 6 5
</pre>
