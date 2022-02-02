---
{"category_name":"easy","problem_code":"CHEFPTNT","problem_name":"Chef And The Patents","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nerdyninja","problem_tester":"r_64","date_added":"19-01-2018","tags":{"0":"feb18","1":"implementation","2":"math","3":"nerdyninja","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHEFPTNT","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/CHEFPTNT.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/CHEFPTNT.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/CHEFPTNT.pdf">Vietnamese</a> as well.</h3>

<p>Chef has decided to start a new firm called PatentChef. However, he's stuck with some big legal issues. Their firm has received offers from a lot of companies, so Chef told his friend Junior Chef to look over some patent cases and solve them as quickly as he can.</p>

<p>Junior Chef is very smart and has an eye for every little detail. He quickly found a case and went ahead to solve it. The patent case is as follows:</p>

<p>There are <b>N</b> patents to be filed for a company. Chef’s firm has the first <b>M</b> months of the year 2018 to finish this task. (The months in a year are numbered 1 through 12.) Chef's firm has <b>K</b> workers (including Junior Chef) available to work on this case. Each worker can prepare exactly one patent per month.</p>

<p>Junior Chef assigns work to workers starting from the first month of the year. He can have any workers work on this case on any month provided that they're chosen according to the following conditions:
<ul>
<li>Each worker can only work on this patent case for at most one month.</li>
<li>Each worker has to work either on an even month or an odd month of the year. You are given a string <b>S</b> with length <b>K</b> and the following meaning: for each valid <b>i</b>, if the <b>i</b>-th character of <b>S</b> is <tt>E</tt>, worker <b>i</b> has to work on an even month; if it's <tt>O</tt>, this worker has to work on an odd month.</li>
<li>At most <b>X</b> workers can work on this patent case each month.</li>
</ul></p>

<p>Determine whether Chef’s firm and Junior Chef can finish this patent case in time.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains four space-separated integers <b>N</b>, <b>M</b>, <b>X</b> and <b>K</b>.</li>
<li>The second line contains a single string <b>S</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing the string <tt>"yes"</tt> if it's possible to finish the patent case or <tt>"no"</tt> otherwise (without quotes).</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>0 ≤ <b>X</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ <b>N</b>, <b>K</b> ≤ 10<sup>6</sup></li>
<li>0 ≤ <b>M</b> ≤ 12</li>
<li>1 ≤ sum of <b>K</b> over all test cases ≤ 10<sup>7</sup></li>
<li><b>|S|</b> = <b>K</b></li>
<li>each character of <b>S</b> is either <tt>E</tt> or <tt>O</tt></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (20 points):</b> 1 ≤ <b>N</b> ≤ <b>M</b> ≤ 12</p>

<p><b>Subtask #2 (80 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
4 4 2 4
EEOO
4 3 1 4
EEOO

<b>Output:</b>

yes
no
</pre>


<h3>Explanation</h3>
<p><b>Example case 1:</b> The firm can prepare 2 patents per month, so in the first month (odd), workers 3 and 4 can work on 2 patents, and in the second month (even), workers 1 and 2 can work on the remaining 2 patents.</p>
<p><b>Example case 2:</b> There is no way for multiple workers to work on the same (even or odd) month. Hence, it's impossible to finish 4 patents in 3 months.</p>