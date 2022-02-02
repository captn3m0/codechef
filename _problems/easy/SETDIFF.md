---
{"category_name":"easy","problem_code":"SETDIFF","problem_name":"Set Difference ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"kevinsogo","date_added":"27-02-2015","tags":{"0":"amitpandeykgp","1":"basic","2":"easy","3":"may15"},"editorial_url":"http://discuss.codechef.com/problems/SETDIFF","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/SETDIFF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/SETDIFF.pdf">Russian</a>.</h3>
<p>
Churu is working as a data scientist in Coderpur. He works on a lot of data on the daily basis. One day, he found an interesting problem, which was very easy to solve for small data but was getting more complex with increasing number of data points. So, Churu needs your help in solving this problem.
</p>
<p> Given a set <b>S</b> of <b>N</b> non-negative integers (Some integers might occur more than once in the set), find out the value of <b>SETDIFF(S)</b>.
</p>
<p><img src="/download/extimages/accad1ef4ade08d05cd52ee301870624.png" alt="Mountain View" style="width:304px;height:51px" /></p>
<p>
Where <b>max(s)</b> represents the maximum value in set <b>s</b> whereas <b>min(s)</b> represents the minimum value in the set <b>s</b>.<br />
As value of <b> SETDIFF(S)</b> can be very large, print it modulo <b> (10<sup>9</sup> + 7) </b>.
</p>
<p>
There might be repeated values in the set. For set <b>S</b> = <b>{1,2,2}</b>, consider that first 2 is not same as the second 2 and there will be two different subsets <b>{1,2}</b>. See last sample case for the more clarifications.
</p>
<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting number of test cases.  </li>
<li>For each test case, first line will contain an integer <b>N</b> denoting number of elements in set <b>S</b>.  </li>
<li> Next line contains <b>N</b> space separated integers denoting the set <b>S</b>. </li>
</ul>
<h3>Output</h3>
<p>For each test case, print a single integer representing the answer of that test case.</p>
<h3>Note</h3>
<p>
Two subsets will be called different if there exists an index <b>i</b> such that <b>S[i]</b> occurs in one of the subset and not in another.
</p>
<h3>Constraints</h3>
<p>
<b>Subtask #1: 20 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 5, 1 ≤ N  ≤ 1000,  0 ≤ value in set ≤ 10<sup>9</sup></b></li>
</ul>

<p>
<b>Subtask #2: 25 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 5, 1 ≤ N  ≤ 10<sup>5</sup>,  0 ≤ value in set ≤ 1000</b></li>
</ul>

<p>
<b>Subtask #3: 55 points</b></p>
<ul>
<li><b>1 ≤ T  ≤ 5, 1 ≤ N  ≤ 10<sup>5</sup>,  0 ≤ value in set ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
2
1 2
3
1 2 3
4
1 2 3 4
3
1 2 2

<b>Output:</b>
1
6 
23
3
</pre><h3>Explanation</h3>
<p>
For first case answer will be 2-1 = 1.
</p>
<p>
For the second case:<br /><br />
Subset = {1}, max(s)-min(s) = 0.<br />
Subset = {2}, max(s)-min(s) = 0.<br />
Subset = {3}, max(s)-min(s) = 0.<br />
Subset = {1,2}, max(s)-min(s) = 1.<br />
Subset = {2,3}, max(s)-min(s) = 1.<br />
Subset = {1,3}, max(s)-min(s) = 2.<br />
Subset = {1,2,3}, max(s)-min(s) = 2.<br />
So the output will be 1+1+2+2 = 6.
</p>
<p>
In the last case, there are three subsets, {1,2}, {1,2} and {1,2,2} having max(s) - min(s) = 1 for each.
</p>
