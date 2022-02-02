---
{"category_name":"school","problem_code":"RAINBOWA","problem_name":"Chef and Rainbow Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.5","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"15-03-2014","tags":{"0":"ad","1":"aug17","2":"berezin","3":"cakewalk","4":"implementation"},"editorial_url":"https://discuss.codechef.com/problems/RAINBOWA","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/RAINBOWA.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/RAINBOWA.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/RAINBOWA.pdf">vietnamese</a> as well.</h3>

<p>Chef likes all arrays equally. But he likes some arrays more equally than others. In particular, he loves Rainbow Arrays. </p>

<p>An array is Rainbow if it has the following structure:</p>
<ul>
<li>First <b>a<sub>1</sub></b> elements equal <b>1</b>. </li>
<li>Next <b>a<sub>2</sub></b> elements equal <b>2</b>. </li>
<li>Next <b>a<sub>3</sub></b> elements equal <b>3</b>. </li>
<li>Next <b>a<sub>4</sub></b> elements equal <b>4</b>. </li>
<li>Next <b>a<sub>5</sub></b> elements equal <b>5</b>. </li>
<li>Next <b>a<sub>6</sub></b> elements equal <b>6</b>. </li>
<li>Next <b>a<sub>7</sub></b> elements equal <b>7</b>. </li>
<li>Next <b>a<sub>6</sub></b> elements equal <b>6</b>. </li>
<li>Next <b>a<sub>5</sub></b> elements equal <b>5</b>. </li>
<li>Next <b>a<sub>4</sub></b> elements equal <b>4</b>. </li>
<li>Next <b>a<sub>3</sub></b> elements equal <b>3</b>. </li>
<li>Next <b>a<sub>2</sub></b> elements equal <b>2</b>. </li>
<li>Next <b>a<sub>1</sub></b> elements equal <b>1</b>. </li>
<li><b>a<sub>i</sub></b> can be any non-zero positive integer.</li>
<li>There are no other elements in array. </li>
</ul><br>
<p>Help Chef in finding out if the given array is a Rainbow Array or not. </p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>
<li>The first line of each test case contains an integer <b>N</b>, denoting the number of elements in the given array. </li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of array. </li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a line containing "yes" or "no" (without quotes) corresponding to the case if the array is rainbow array or not. </li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>7 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (100 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
3
19
1 2 3 4 4 5 6 6 6 7 6 6 6 5 4 4 3 2 1
14
1 2 3 4 5 6 7 6 5 4 3 2 1 1
13
1 2 3 4 5 6 8 6 5 4 3 2 1

<b>Output</b>
yes
no
no
</pre>

<h3>Explanation</h3>
<p>The first example satisfies all the conditions. </p>
<p>The second example has <b>1</b> element of value <b>1</b> at the beginning and <b>2</b> elements of value <b>1</b> at the end. </p>
<p>The third one has no elements with value <b>7</b> after elements with value <b>6</b>.