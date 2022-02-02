---
{"category_name":"easy","problem_code":"CHEFARK","problem_name":"Chef and Array and K","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"14-10-2015","tags":{"0":"berezin","1":"easy","2":"june16"},"editorial_url":"http://discuss.codechef.com/problems/CHEFARK","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/CHEFARK.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/CHEFARK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/CHEFARK.pdf">Vietnamese</a> as well.</h3>


<p>Chef has an array <b>A</b> consisting of <b>N</b> integers. He also has an intger <b>K</b>.</p>

<p>Chef wants you to find out number of different arrays he can obtain from array <b>A</b> by applying the following operation <b>exactly</b> <b>K</b> times.
<ul>
<li>Pick some element in the array and multiply it by <b>-1</b></li>
</ul>
</p>

<p>
As answer could be quite large, print it modulo <b>10<sup>9</sup> + 7</b>.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space separated integers <b>N</b>, <b>K</b> as defined above.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of the array.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing an integer corresponding to the number of different arrays Chef can get modulo <b>10<sup>9</sup> + 7</b>.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>6</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (10 points)</b> : <b>N, K</b> ≤ <b>10</b></li>
<li><b>Subtask #2 (30 points)</b> : <b>N, K</b> ≤ <b>100</b></li>
<li><b>Subtask #3 (60 points)</b> : <b>N, K</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
1 3
100
3 1
1 2 1
3 2
1 2 1

<b>Output:</b>
1
3
4
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b>
Chef has only one element and must apply the operation 3 times to it. After applying the operations, he will end up with -100. That is the only array he will get.
</p>
<p><b>Example case 2.</b>
Chef can apply operation to one of three elements. So, he can obtain three different arrays.
</p>
<p><b>Example case 3.</b>
Note that other than applying operation to positions <b>(1, 2)</b>, <b>(1, 3)</b>, <b>(2, 3)</b>, Chef can also apply the operation twice on some element and get the original.
</p>
<p>In summary, Chef can get following four arrays.
<pre>
[1, 2, 1]
[-1, -2, 1]
[-1, 2, -1]
[1, -2, -1]
</pre>