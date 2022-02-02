---
{"category_name":"easy","problem_code":"MXSUBARR","problem_name":"Maximum Disjoint Subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"23-06-2016","tags":{"0":"admin2"},"time":{"view_start_date":1467052140,"submit_start_date":1467052140,"visible_start_date":1467052140,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given an array <b>A</b> consisting of <b>N</b> integers. A group of disjoint subarrays in it will be a collection of subarrays of the array. Formally a group of subarrays consisting of <b>K</b> subarrays can be denoted by <b>2 * K</b> indices, <b>[i<sub>1</sub>, j<sub>1</sub>]</b>, <b>[i<sub>2</sub>, j<sub>2</sub>]</b> , ..., <b>[i<sub>K</sub>, j<sub>K</sub>]</b>, such that <b>i<sub>1</sub> ≤ j<sub>1</sub> &lt; i<sub>2</sub> ≤ j<sub>2</sub></b> &lt; ... &lt; <b>i<sub>K</sub> ≤ j<sub>K</sub>.</b>
</p>
<p>
For example, in array <b>A = {5, 6, 7}</b>. A group of subarrays could be the subarrays denoted by indices <b>[1, 1], [2, 3]</b>. The subarray corresponding to indices <b>[1, 1]</b> will be <b>{5}</b>. The subarray corresponding to indices <b>[2, 3]</b> will be <b>{6, 7}</b>. So, we have <b>i<sub>1</sub> = 1, j<sub>1</sub> = 1, i<sub>2</sub> = 2, j<sub>2</sub> = 3</b> and <b>K = 2</b>. You can check that the indices satisfy the property <b>i<sub>1</sub> ≤ j<sub>1</sub> &lt; i<sub>2</sub> ≤ j<sub>2</sub></b>.
</p>
<p>
Note that the group of subarrays <b>[1, 2]</b> and <b>[2, 3]</b> won't be disjoint, as it does not satisfy the property <b>j<sub>1</sub> &lt; i<sub>2</sub></b>. In other words, the index 2 is common in two subarrays, which should not happen.
</p>
<p>
Let <b>M</b> denote the maximum value of <b>K</b> in a group of <b>K</b> disjoint subarrays of array <b>A</b>, such that there are not two elements (<b>not indices</b>) common in those subarrays. This means, that if the group contained subarrays <b>[A[i<sub>1</sub>], A[j<sub>1</sub>]</b>, <b>[A[i<sub>2</sub>], A[j<sub>2</sub>]]</b> , ..., <b>A[[i<sub>K</sub>, j<sub>K</sub>]]</b>, then there should not be an element which is present in more than one subarrays.
</p>
<p>
You have to find maximum number of group of disjoint subarrays that number of subarrays in those groups are equal to <b>M</b>. As the answer could be large, output it modulo <b>10<sup>9</sup> + 7</b>.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>First line of the each test case contains a single integer <b>N</b> denoting number of elements in array <b>A</b>.</p>
<p>Second line of each test case contains <b>N</b> space separated integers denoting the elements of the array <b>A</b></p>
<h3>Output</h3>
<p>For each test case, output a single line corresponding to maximum number of group of disjoint subarrays of array <b>A</b>.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T, N</b> ≤ <b>10<sup>5</sup></b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>n</b></li>
<li>Sum of <b>N</b> over all the test cases in a single file won't exceed <b>10<sup>5</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points)</b></p>
<p><ul>
<li>1 ≤ <b>T, N</b> ≤ <b>10<sup>3</sup></b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>n</b></li>
<li>Sum of <b>N</b> over all the test cases in a single file won't exceed <b>10<sup>3</sup></b></li>
</ul>
</p>
<p>
<b>Subtask #2 (70 points)</b></p>
<ul>
<li>original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input</b>
3
2
3 4
3
1 2 2
5
1 1 2 2 2

<b>Output:</b>
1
3
18
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> <b>M</b> will be equal to 2. The subarrays will be {[1, 1], [2, 2]}.</p>
<p><b>Example case 2.</b> <b>M</b> will be equal to 3. The subarrays will be {[1, 1], [2, 2]}, {[1, 1], [3, 3]} and {[1, 1], [2, 3]}. Note that {[2, 2], [3, 3]} won't be a non-intersecting subarray as A[2] = 2 and A[3] = 2. So, 2 is common in both these subarrays.</p>
