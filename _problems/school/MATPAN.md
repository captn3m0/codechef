---
{"category_name":"school","problem_code":"MATPAN","problem_name":"Mathison and pangrams","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":"kingofnumbers","date_added":"22-08-2017","tags":{"0":"alexvaleanu","1":"cakewalk","2":"looping","3":"ltime51"},"editorial_url":"https://discuss.codechef.com/problems/MATPAN","time":{"view_start_date":1503768600,"submit_start_date":1503768600,"visible_start_date":1503768600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/mandarin/MATPAN.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/russian/MATPAN.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/vietnamese/MATPAN.pdf">vietnamese</a> as well.</h3>

<p> Mathison recently inherited an ancient papyrus that contained some text. Unfortunately, the text was not a
  <acronym title="a string using every letter of the Latin alphabet at least once."><b>pangram</b></acronym>. Now, Mathison has a particular liking for holoalphabetic strings and the text bothers him. The good news is that Mathison can buy letters from the local store in order to turn his text into a pangram.
</p>

<p>
  However, each letter has a price and Mathison is not very rich. Can you help Mathison find the cheapest way to obtain a pangram?
</p>

<h3>Input</h3>
<p>The first line of the input file will contain one integer, <b>T</b>, representing the number of tests.</p>
<p>Each test will be formed from two lines. The first one contains <b>26</b> space-separated integers, representing the prices of all letters.
  The second will contain Mathison's initial text (a string of <b>N</b> lowercase letters).
</p>

<h3>Output</h3>
<p>The output file will contain <b>T</b> lines, one for each test. Each line will contain the answer for the corresponding test.</p>

<h3>Constraints and notes</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 50,000</li>
<li>All prices are natural numbers between 1 and 1,000,000 (i.e. 10<sup>6</sup>).</li>
<li>A pangram is a string that contains every letter of the Latin alphabet at least once.</li>
<li>All purchased letters are added to the end of the string.</li>
</ul>

<h3>Subtaks</h3>
<p><b>Subtask #1</b> (30 points):
<ul>
<li><b>N</b> = 1</li>
</ul>
</p>

<p><b>Subtask #2</b> (70 points):
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26
abcdefghijklmopqrstuvwz
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26
thequickbrownfoxjumpsoverthelazydog

<b>Output:</b>
63
0
</pre>

<h3>Explanation</h3>
<pre>
First test
There are three letters missing from the original string: n (price 14), x (price 24), and y (price 25).
Therefore the answer is 14 + 24 + 25 = 63.

Second test
No letter is missing so there is no point in buying something. The answer is 0.
</pre>
