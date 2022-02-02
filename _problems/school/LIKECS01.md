---
{"category_name":"school","problem_code":"LIKECS01","problem_name":"Subsequence Equality","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"likecs","problem_tester":"kingofnumbers","date_added":"8-09-2017","tags":{"0":"cakewalk","1":"cook86","2":"likecs","3":"likecs"},"editorial_url":"https://discuss.codechef.com/problems/LIKECS01","time":{"view_start_date":1505673000,"submit_start_date":1505673000,"visible_start_date":1505673000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/mandarin/LIKECS01.pdf">Mandarin chinese</a>, in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/russian/LIKECS01.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK86/vietnamese/LIKECS01.pdf">Vietnamese</a> as well.</h3>

<p>Chef Tobby is playing a rapid fire with Bhuvan. He gives Bhuvan a string <b>S</b> and each time, Bhuvan has to guess whether there exists <b>2</b> equal <a href="https://en.wikipedia.org/wiki/Subsequence">subsequences</a> in the string or not.</p>

<p>Bhuvan got a perfect score in the game with Chef Tobby. However, Chef Tobby has now asked Bhuvan to write a program that will do this automatically given a string <b>S</b>. Bhuvan is an intelligent man but he does not know how to write a code. Can you help him?</p>

<p>Find two different subsequences such that they are equal in their value, more formally, find two sequences of indices (a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>k-1</sub>, a<sub>k</sub>) and (b<sub>1</sub>, b<sub>2</sub>, ..., b<sub>k-1</sub>, b<sub>k</sub>) such that:

<ol>
<li>1≤ a<sub>i</sub>, b<sub>i</sub> ≤ |S|</li>
<li>a<sub>i</sub> < a<sub>i+1</sub> for all valid i</li>
<li>b<sub>i</sub> < b<sub>i+1</sub> for all valid i</li>
<li>S<sub>a<sub>i</sub></sub> = S<sub>b<sub>i</sub></sub> for all valid i</li>
<li>there exist at least one i such that a<sub>i</sub> is not equal to b<sub>i</sub></li>
</ol>

<h3>Input section</h3>
<p>The first line contains <b>T</b>, the number of test cases.</p>

<p>Each of the next <b>T</b> lines contain one string <b>S</b> each.</p>

<p><b>Input will only consist of lowercase english characters</b><p>

<h3>Output section</h3>
<p>For each test case, output <b>"yes"</b> or <b>"no"</b> (without quotes) as the solution to the problem.</p>

<h3>Input constraints</h3>
<pre>
1 ≤ T ≤ 1000
1 ≤ length of S ≤ 100
</pre>

<h3>Sample Input</h3>
<pre>
4
likecs
venivedivici
bhuvan
codechef
</pre>

<h3>Sample Output</h3>
<pre>
no
yes
no
yes
</pre>

<h3>Explanation</h3>
<p>In test case <b>2</b>, one of the possible equal subsequence is <b>"vi"</b> and <b>"vi"</b>. (one at position <b>{0, 3}</b> and other at <b>{4, 7}</b>, assuming 0-based indexing).</p>

<p>In test case <b>4</b>, one of the possible equal subsequence is <b>"ce"</b> and <b>"ce"</b>. (one at position <b>{0, 3}</b> and other at <b>{4, 6}</b>, assuming 0-based indexing).</p>