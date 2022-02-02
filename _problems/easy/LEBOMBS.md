---
{"category_name":"easy","problem_code":"LEBOMBS","problem_name":"Little Elephant and Bombs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"15-04-2012","tags":{"0":"ad","1":"aug12","2":"cakewalk","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEBOMBS","time":{"view_start_date":1344677388,"submit_start_date":1344677388,"visible_start_date":1344677388,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Little Elephant from the Zoo of Lviv currently is on the military mission. There are <b>N</b> enemy buildings placed in a row and numbered from left to right strating from <b>0</b>. Each building <b>i</b> (except the first and the last) has exactly two adjacent buildings with indices <b>i-1</b> and <b>i+1</b>. The first and the last buildings have just a single adjacent building.

<p>Some of the buildings contain bombs. When bomb explodes in some building it destroys it and all adjacent to it buildings.

<p>You are given the string <b>S</b> of length <b>N</b>, where <b>S<sub>i</sub></b> is <b>1</b> if the <b>i</b>-th building contains bomb, <b>0</b> otherwise. Find for the Little Elephant the number of buildings that will not be destroyed after all bombs explode. Please note that all bombs explode simultaneously.

<h3>Input</h3>
<p>The first line contains single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. The first line of each test case contains the single integer <b>N</b> - the number of buildings. The next line contains the string <b>S</b> of length <b>N</b> consisted only of digits <b>0</b> and <b>1</b>.

<h3>Output</h3>
<p>In <b>T</b> lines print <b>T</b> inetgers - the answers for the corresponding test cases.

<h3>Constraints</h3>
<p>
1 <= <b>T</b> <= 100
<p>
1 <= <b>N</b> <= 1000

<h3>Example</h3>

<pre>
<b>Input:</b>
3
3
010
5
10001
7
0000000

<b>Output:</b>
0
1
7

</pre>