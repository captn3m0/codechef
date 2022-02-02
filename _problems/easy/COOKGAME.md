---
{"category_name":"easy","problem_code":"COOKGAME","problem_name":"Cooking Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"errichto","date_added":"16-02-2017","tags":{"0":"combinatorics","1":"cook79","2":"easy","3":"kingofnumbers"},"editorial_url":"https://discuss.codechef.com/problems/COOKGAME","time":{"view_start_date":1487529000,"submit_start_date":1487529000,"visible_start_date":1487529000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/mandarin/COOKGAME.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/russian/COOKGAME.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/vietnamese/COOKGAME.pdf">Vietnamese</a> as well.</h3>

<p>Chef is playing a new computer game in which he is the chef of a restaurant and is required to prepare the dishes ordered by the customers with high quality and in time.</p>

<p>Chef will start in level 1 and whenever Chef passes a level in this game he will advance to the next level, but if Chef fails, he will return to level 1.</p>

<p>Chef has already played <b>N</b> rounds, but he can't remember what the levels were in all the rounds. He will give you an array <b>A</b> of length <b>N</b> such that <b>A<sub>i</sub></b> is equal to <b>-1</b> if Chef can't remember what level the <b>i</b>-th round was, otherwise it will contain positive integer denoting the level of the round.</p>

<p>Now Chef is asking you to count the number of ways to fill the missing numbers (ie. the <b>-1</b>s) of the array with level numbers, so that it corresponds to a valid game. Since the answer can be large, output it modulo <b>10<sup>9</sup>+7</b>.</p>


<h3>Input</h3>
<p>First line contains an integer <b>T</b>, the number of test-cases.</p>

<p>First line of each test-case contains an integer <b>N</b>.</p>

<p>Second line contains <b>N</b> space-separated integers, which are the elements of the array <b>A</b>.</p>

<h3>Output</h3>
<p>Output the answer for each test-case in new line, the number of ways modulo  <b>10<sup>9</sup>+7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100,000</b></li>
<li>sum of <b>N</b> in all test-cases will not exceed <b>100,000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b> or <b>A<sub>i</sub></b> = <b>-1</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6
1 1 2 -1 -1 2

<b>Output:</b>
2
</pre>

<h3>Explanation</h3>
<p>The only two valid fully filled arrays are (1,1,2,3,1,2) and (1,1,2,1,1,2). Hence the answer is 2.</p>