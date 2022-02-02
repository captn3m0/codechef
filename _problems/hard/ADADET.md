---
{"category_name":"hard","problem_code":"ADADET","problem_name":"A Study in Bake Street","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"deadwing97","date_added":"30-05-2017","tags":{"0":"alei","1":"convex","2":"cook83","3":"geometry","4":"hull","5":"medium","6":"stack"},"editorial_url":"https://discuss.codechef.com/problems/ADADET","time":{"view_start_date":1497812400,"submit_start_date":1497812400,"visible_start_date":1497812400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/mandarin/ADADET.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/russian/ADADET.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/vietnamese/ADADET.pdf">vietnamese</a> as well.</h3>

<p>
Chef Ada is not just a Chef but also a detective. Currently she is investigating a massive murdering case in Bake Street.
</p>
<p>
Bake Street is composed of <b>n</b> buildings in a straight line. They are numbered from 1 to <b>n</b>, as you move from left to right. The i-th building is at position <b> x<sub>i</sub> </b> and has height <b>h<sub>i</sub></b>. The buildings are so thin that we can consider them as vertical segments.
The murderer climbed to the top of one of the buildings and shot at all the buildings to the right, which had a lesser height than the building on which he was, and which were in his line of sight.
</p>
<p>
Ada is interested in the rightmost building that was shot by the murderer. Since we don't know the building from which the murderer was shooting, your task is to calculate it for every possible initial position.
</p>

<h3>Input</h3>
<p>
The first line of input contains one number <b>T</b>, the number of test cases. <b>T</b> test cases follows.
The first line of each test case contains an integer <b>n</b>, the number of buildings.
The next <b>n</b> lines contains two integers <b>x<sub>i</sub></b>, <b>h<sub>i</sub></b>. the position and height of the i-th building.
</p>
<h3>Output</h3>
<p>
For each testcase print <b>n</b> integers: <b>a<sub>i</sub></b>, the rightmost building shot at, if the murderer started at building <b>i</b>. If the murderer didn't shoot to any building, print -1.
</p>

<h3>Constraints</h3>
<li>1 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>x<sub>i</sub>, h<sub>i</sub></b> ≤ 10<sup>6</sup></li>
<li><b>x<sub>i</sub></b> &lt; <b>x<sub>i+1</sub></b>, for all 1 ≤ <b>i</b> &lt; n</b> </li>
<li>No two different buildings are of the same height</li>
<li>The sum of <b>n</b> over all test cases is at most 5 * 10<sup>5</sup></li>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
7
1 130
65 110
120 40
160 60
240 100
280 65
320 30

<b>Output:</b>
5 5 -1 -1 7 7 -1
</pre>
<h3>Explanation</h3>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/COOK83/detective.png"></img>
<p>
The lines of shooting are shown in the figure above.</p>

<p>From building 1, buildings 2 and 5 are shot. As the rightmost is building 5, that is the answer for building 1. Note that from building 1 is not possible to shoot at building 4 (dotted line) because building 2 obstructs the line of sight.</p>
<p>From building 2, buildings 3, 4 and 5 are shot. From building 3 and 4, no building is shot at. Hence the third and fourth outputs are -1.</p>
