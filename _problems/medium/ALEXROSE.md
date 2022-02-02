---
{"category_name":"medium","problem_code":"ALEXROSE","problem_name":"Roses for Alexey","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rubanalexey","problem_tester":"kevinsogo","date_added":"14-11-2016","tags":{"0":"rubanalexey"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/ALEXROSE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/ALEXROSE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/ALEXROSE.pdf">Vietnamese</a> as well.</h3>

<p>It's Valentine's day today. Alexey's flower shop has received lots of orders of bouquets of roses. The shop provides bouquets that contain exactly <b>K</b> roses, all of equal length.</p>

<p>
Alexey daily asks his delivery persons to obtain <b>N</b> newly-plucked fresh roses from the nearby garden. The lengths of these roses are given to you by an array <b>A</b> of size <b>N</b>. Now, he wants to make maximum number of bouquets from these roses. He can pick a rose and cut it to any length he wants. Note that the leftover part of a rose after cutting cannot be reused and will have to be thrown.
</p>

<p>One can easily see that Alexey can create a maximum of <b>N / K</b> bouquets. It is guaranteed in the problem that <b>N</b> is divisible by <b>K</b>. For obtaining these many requests, he wants to cut as few roses as possible. Can you please tell what is the minimum number of roses that will need to be cut in order to get <b>N / K</b> bouquets?
</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>, denoting the number of roses and the number of roses in one bouquet.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> denoting the lengths of roses.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of roses that need to be cut.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100 000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>N % K = 0 for each test case</b></li>
</ul>

<h3>Subtasks</h3>
<li>Subtask #1 (5 points) <b>1 </b> ≤ <b>T</b> ≤ <b>10,</b> <b>2</b> ≤ <b>N</b> ≤ <b>12</b>, <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>50</b></li>
<li>Subtask #2 (15 points) <b>1 </b> ≤ <b>T</b> ≤ <b>10,</b> <b>2</b> ≤ <b>N</b> ≤ <b>100,</b> <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>100 </b></li>
<li>Subtask #3 (30 points) <b>1 </b> ≤ <b>T</b> ≤ <b>10,</b> <b>2</b> ≤ <b>N</b> ≤ <b>1000,</b> <b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>100 000 </b></li>
<li>Subtask #4 (50 points)  <b>original constraints</b></li>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
8 4
1 2 2 3 4 5 5 6
4 4
1 1 1 3
</tt>
<b>Output:</b>
<tt>5
1
</tt>
</pre>

<h3>Explanation</h3>
<p><b>Case 1:</b> Alexey cut two roses of length 5 to length 2 and get the first bouquet with each rose length being 2. The other roses with length 3,4,6 can be cut to length 1 and he gets the second bouquet in which each rose will be of length 1.</p>
<p><b>Case 2:</b> The last rose can be cut to length 1. There will be a bouquet with each rose of length 1.</p>
