---
{"category_name":"school","problem_code":"CHEFKEY","problem_name":"Chef and Keyboard","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"alex_2oo8","date_added":"30-10-2014","tags":{"0":"berezin","1":"cakewalk","2":"factorization","3":"loop","4":"oct16","5":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFKEY","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/CHEFKEY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/CHEFKEY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/CHEFKEY.pdf">Vietnamese</a> as well.</h3>

<p>Chef is a well known programmer. He owns a brand new Android phone of screen size of dimension <b>n × m</b> (<b>n</b> denotes the height of the phone and <b>m</b> denotes the width). Chef wants to design a program for painting the screen. He figured out <b>c</b> colors, which he will use to paint the screen. He wants to paint some rectangular section of pixels of the screen each with different color. Also Chef would like to use all of his <b>c</b> colors in painting.</p>

<p>Can you help Chef in finding number of different dimensions of rectangular section he can paint? In other words, find number of pairs <b>x, y</b> such that Chef can paint a rectangular section of dimension <b>x × y</b> (<b>x</b> denotes height, <b>y</b> denotes width) on the screen. Please note that Chef uses a fix orientation of his phone and is not allowed to rotate it, i.e. height always stays <b>n</b> and width always stays <b>m</b> and not the other way around.</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>Only line of each test case contains three space separated integers <b>n, m, c</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer for the test case.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>c</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: (40 points) <b>1</b> ≤ <b>n, m</b> ≤ <b>100</b>, <b>1</b> ≤ <b>c</b> ≤ <b>10<sup>4</sup></b></li>
<li>Subtask #2: (60 points) <b>original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4 6 12
3 3 10

<b>Output:</b>
3
0
</pre>

<h3>Explanation</h3>
<p><b>Test case 1.</b> Possible pairs of dimensions are <b>(2, 6)</b>, <b>(3, 4)</b> and <b>(4, 3)</b>. Note that the rectangular section of dimension <b>(1, 12)</b> can't be painted as it can't fit into the screen, because 12 > 6.</p>

<p><b>Test case 2.</b> There does not exist any rectangle of desired dimensions which can have 10 different pixels painted.</p>