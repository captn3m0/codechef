---
{"category_name":"easy","problem_code":"DISHLIFE","problem_name":"Dish Of Life","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"3-04-2017","tags":{"0":"admin2","1":"april17"},"editorial_url":"https://discuss.codechef.com/problems/DISHLIFE","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/DISHLIFE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/DISHLIFE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/DISHLIFE.pdf">Vietnamese</a> as well.</h3>

<p>Chef wants to serve mankind by making people immortal by preparing a dish, a dish of life - a dish with the best taste in the universe, one with the smell and splash of fresh water flowing down the springs of the mountain, one with the smell of the best lily flowers of the garden, one that has contained the very essence of life in a real sense. </p>

<p>This dish will contain <b>K</b> ingredients that are found only in remote islands amid mountains. For sake of convenience, we enumerate the ingredients by the integers from 1 to <b>K</b>, both inclusive. There are <b>N</b> islands and each of them offers some ingredients. Chef being a little child did not know how to collect the ingredients for the recipe. He went to all the islands and bought all the ingredients offered in each island. Could he possibly have saved some time by skipping some island? If it was not possible for Chef to collect the required ingredients (i.e. all the <b>K</b> ingredients), output "sad". If it was possible for him to skip some islands, output "some", otherwise output "all".</p>

<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting number of test cases. The description of <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space separated integers <b>N, K</b>.</p>
<p>The i-th of the next lines will contain first an integer <b>P</b><sub>i</sub>, denoting the number of ingredients grown in the i-th island, followed by <b>P</b><sub>i</sub> distinct integers in the range [1, <b>K</b>]. All the integers are space separated. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing one of the strings "sad", "all" or "some" (without quotes) according to the situation. </p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T </b> ≤ 10</li>
<li>1 ≤ <b>N, K</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>P</b><sub>i</sub> ≤ <b>K</b></li>
<li>Sum of <b>P</b><sub>i</sub> over all test cases ≤ 10<sup>6</sup></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (30 points)</b>
<ul>
<li>1 ≤ <b>N, K</b> ≤ 50</li>
</ul>
</p>

<p>
<b>Subtask #2 (30 points)</b>
<ul>
<li>1 ≤ <b>K</b> ≤ 50</li>
</ul>
</p>

<p>
<b>Subtask #3 (40 points)</b>
<ul>
<li>original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre>
<b>Input</b>
3
3 4
3 1 2 3
2 1 3
2 1 2
2 3
3 1 2 3
2 1 3
2 3
2 1 2
2 1 3

<b>Output</b>
sad
some
all

</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The ingredient 4 is not available in any island, so Chef can't make the dish of life. Hence, the answer is "sad".</p>
<p><b>Example 2</b>. Chef can just go to the first island and collect all the three ingredients required. He does not need to visit the second island. So, the answer is "some".</p>
<p><b>Example 3</b>. Chef has to visit both the islands in order to obtain all the three ingredients. So, the answer is "all".</p>
