---
{"category_name":"school","problem_code":"DEVARRAY","problem_name":"Devu and an Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"iscsi","date_added":"17-05-2016","tags":{"0":"admin2","1":"basic","2":"cakewalk","3":"june16"},"editorial_url":"http://discuss.codechef.com/problems/DEVARRAY","time":{"view_start_date":1465983000,"submit_start_date":1465983000,"visible_start_date":1465983000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/mandarin/DEVARRAY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/russian/DEVARRAY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE16/vietnamese/DEVARRAY.pdf">Vietnamese</a> as well.</h3>


<p>Devu has an array <b>A</b> consisting of <b>N</b> positive integers. He would like to perform following operation on array.
<ul>
<li>Pick some two elements <b>a, b</b> in the array (<b>a</b> could be same as <b>b</b>, but their corresponding indices in the array should not be same).
Remove both the elements <b>a</b> and <b>b</b> and instead add a number <b>x</b> such that <b>x</b> lies between <b>min(a, b)</b> and <b>max(a, b)</b>, both inclusive, (i.e. <b>min(a, b) ≤ x ≤ max(a, b))</b>.
</ul>
</p>

<p>
Now, as you know after applying the above operation <b>N - 1</b> times, Devu will end up with a single number in the array. He is wondering whether it is possible to do the operations in such a way that he ends up a number <b>t</b>. 
</p>

<p>
He asks your help in answering <b>Q</b> such queries, each of them will contain an integer <b>t</b> and you have to tell whether it is possible to end up <b>t</b>. 
</p>


<h3>Input</h3>
<p>There is only one test case per test file.</p>
<p>First line of the input contains two space separated integers <b>N, Q</b> denoting number of elements in <b>A</b> and number of queries for which Devu asks your help, respectively</p>
<p>Second line contains <b>N</b> space separated integers denoting the content of array <b>A</b>.
<p>Each of the next <b>Q</b> lines, will contain a single integer <b>t</b> corresponding to the query.</p>

<h3>Output</h3>
<p>Output <b>Q</b> lines, each containing "Yes" or "No" (both without quotes) corresponding to the answer of corresponding query.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li>0 ≤ <b>t</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 : 30 points</b>
<ul>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>2</b></li>
</ul>
</p>

<p>
<b>Subtask #2 : 70 points</b>
<ul>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input 1:</b>
1 2
1
1
2

<b>Output:</b>
Yes
No

<b>Input 2:</b>
2 4
1 3
1
2
3
4

<b>Output:</b>
Yes
Yes
Yes
No
</pre>

<h3>Explanation</h3>
<p><b>In the first example</b>, Devu can't apply any operation. So the final element in the array will be 1 itself. 
</p>

<p><b>In the second example</b>,
Devu can replace 1 and 3 with any of the numbers among 1, 2, 3. Hence final element of the array could be 1, 2 or 3. 
</p>
