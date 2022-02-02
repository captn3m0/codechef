---
{"category_name":"medium","problem_code":"SEASTONE","problem_name":"Sereja and Stones","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"alex_2oo8","date_added":"10-09-2014","tags":{"0":"dynamic","1":"medium","2":"oct16","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEASTONE","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>
<p>Sereja has <b>N</b> boxes and <b>M</b> stones. There is a parameter <i>energy</i> associated with each empty box, denoted by <b>E<sub>i</sub></b>. He wants to move each stone into some box. After moving all the stones into the boxes, he wants to compute the total energy of box/stone system. For that he believes that a contribution of box into energy of the system can be computed as follows. If box <b>i</b> contains <b>s</b> stones and there are total <b>k</b> boxes out there containing more than <b>s</b> stones, then contribution of box <b>i</b> into the system of energy will be given by <b>E<sub>i</sub></b> × <b>k</b>.</p>

<p>Sereja wants the box/stone system to be most stable, i.e. it should have least possible energy. Find out minimum possible energy of this system.</p> 

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. <b>T</b> tests follow.</p>
<p>First line of each test case contains two space separated integers <b>N</b> and <b>M</b>.</p>
<p>Next line contains <b>N</b> space separated integers denoting the array <b>E</b>.</p>

<h3>Output</h3>
<p>For each test case output a single integer corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>7</b> ≤ <b>N, M</b> ≤ <b>77777</b></li>
<li><b>7</b> ≤ <b>E[i]</b> ≤ <b>77</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: (20 points) <b>7</b> ≤ <b>N</b> ≤ <b>77</b>, <b>7</b> ≤ <b> M</b> ≤ <b>777</b></li>
<li>Subtask #2: (30 points) <b>7</b> ≤ <b>N, M</b> ≤ <b>777</b></li>
<li>Subtask #3: (50 points) <b>original constraints</b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 4
7 8
4 6
7 7 10 10

<b>Output:</b>
0
21
</pre>

<h3>Explanation</h3>
<p><b>In test case 1</b>, there are 2 boxes and 4 stones. The energy of two empty boxes are 7 and 8 respectively. You can put 2 stones into each of the box. Contribution of both the boxes into the energy of the system will be zero. So, the answer will be zero.</p>

<p><b>In test case 2</b>, there are 4 boxes and 6 stones. You can distribute the stones into boxes as follows, [0, 2, 2, 2]. Contribution of the first box into total energy will be equal to 7 * 3 and that of rest of the boxes will be zero. So, overall energy will be 21. You can enumerate all possible distributions of the stones into boxes and see that you can't obtain a system with less energy than this.</p>