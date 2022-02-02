---
{"category_name":"easy","problem_code":"CHEFHAM","problem_name":"Chef and Hamming Distance of arrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"1-12-2017","tags":{"0":"admin2","1":"dec17"},"editorial_url":"https://discuss.codechef.com/problems/CHEFHAM","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFHAM.pdf">Vietnamese</a> </h3>.

<p>Chef likes to work with arrays a lot. Today he has an array <b>A</b> of length <b>N</b> consisting of positive integers. Chef's little brother likes to follow his elder brother, so he thought of creating an array <b>B</b> of length <b>N</b>. The little brother is too small to think of new numbers himself, so he decided to use all the elements of array <b>A</b> to create the array <b>B</b>. In other words, array <b>B</b> is obtained by shuffling the elements of array <b>A</b>.</p>

<p>The little brother doesn't want Chef to know that he has copied the elements of his array <b>A</b>. Therefore, he wants to create the array <b>B</b> in such a way that the <i>Hamming distance</i> between the two arrays <b>A</b> and <b>B</b> is maximized. The Hamming distance between <b>A</b> and <b>B</b> is the number of indices <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>) such that <b>A<sub>i</sub> ≠ B<sub>i</sub></b>.</p>

<p>The brother needs your help in finding any such array <b>B</b>. Can you please find one such array for him?</p>

<p>Note that it's guaranteed that no element in <b>A</b> appears more than twice, i.e. frequency of each element is at most 2.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains an integer <b>N</b> denoting the length of the array <b>A</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub> ... A<sub>N</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p><ul>
<li>For each test case, print two lines.</li>
<li>The first line should contain the maximum possible Hamming distance that array <b>B</b> can have from array <b>A</b>.</li>
<li>The second line should contain <b>N</b> space-separated integers denoting the array <b>B</b>; the <b>i</b>-th integer should denote the value of <b>B<sub>i</sub></b>. Note that <b>B</b> should be an array obtained after shuffling the elements of <b>A</b>.</li>
</ul></p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>5</sup></li>
<li>The frequency of each integer in the array <b>A</b> will be at most 2.</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (30 points):</b> all elements in the array <b>A</b> are unique
</p>

<p>
<b>Subtask #2 (30 points):</b> 5 ≤ <b>N</b> ≤ 10<sup>5</sup>
</p>

<p>
<b>Subtask #3 (40 points):</b> original constraints
</p>

<h3>Example</h3>
<pre>
<b>Input</b>

3
2
1 2
3
1 2 1
4
2 6 5 2

<b>Output</b>

2
2 1
2
2 1 1
4
6 2 2 5
</pre>