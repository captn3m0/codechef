---
{"category_name":"easy","problem_code":"SANSKAR","problem_name":"Alok-nath and His Sanskars","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jay_adm","problem_tester":"shiplu","date_added":"21-02-2014","tags":{"0":"bit","1":"dec14","2":"dynamic","3":"easy","4":"jay_adm"},"editorial_url":"http://discuss.codechef.com/problems/SANSKAR","time":{"view_start_date":1418643259,"submit_start_date":1418643259,"visible_start_date":1418643259,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/SANSKAR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/SANSKAR.pdf">Russian</a>.</h3>
<p>Alok-nath is man of equality. He needs your help to divide his “sanskars” evenly amongst all his followers. By doing this, Alok-nath can create equality amongst his followers and he'll be called a true “sanskari”.</p>
<p>Alok-nath has <b>N</b> sanskars, and <b>K</b> followers. Each sanskar is given a numerical value which shows its intensity.</p>
<p>Your task is to determine whether it is possible to allocate all the sanskars to followers in such a way that the sum of intensities of the sanskars allocated to each follower is equal. <b>Note : </b>A sanskar can be allocated to only one of the followers.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow. The first line of each case contains two integers <b>N</b> and <b>K</b>, with <b>N</b> denoting the number of sanskars and <b>K</b> denoting the number of followers. In the next line are <b>N</b> space separated integers denoting the intensities of each sanskar.</p>
<h3>Output</h3>
<p>For each test case, output "yes" if it is possible to divide his sanskars equally amongst his followers; otherwise output "no" (without quotes).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>21</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>8</b></li>
<li>Subtask #1 (20 points) : <b>0</b> ≤ <b>intensity of sanskar</b> ≤ <b>10^5</b></li>
<li>Subtask #2 (80 points) : <b>0</b> ≤ <b>intensity of sanskar</b> ≤ <b>10^10</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
5 3
1 2 4 5 6
5 3
1 2 4 5 7

<b>Output:</b>
yes
no
</pre>
<h3>Explanation</h3>
<p>In the first case, sanskars can be allocated as follows, each follower receiving a total intensity of 6: {1,5}, {2,4}, {6}.</p>
