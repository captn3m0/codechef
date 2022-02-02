---
{"category_name":"easy","problem_code":"CHEFTET","problem_name":"Chef and Tetris","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"mugurelionut","date_added":"16-10-2015","tags":{"0":"berezin","1":"july16","2":"simple","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTET","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/CHEFTET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/CHEFTET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFTET.pdf">Vietnamese</a> as well.</h3>
<p>Chef loves Tetris. He keeps on playing Tetris all the time. Today Chef's mother wanted to him play something else and brought an array for her son. That is why Chef now decided to play Tetris with arrays. Here are the rules of the game:</p>
<ul>
<li>Chef has an array <b>A</b> consisting of <b>N</b> positive integers. This is a base array. </li>
<li>Chef has an array <b>B</b> consisting of <b>N</b> positive integers. He placed this array directly above the array <b>A</b>. Imagine that array <b>B</b> is falling on array <b>A</b>, such that number <b>B<sub>i</sub></b> is directly above the number <b>A<sub>i</sub></b> initially.</li>
<li>If element <b>B<sub>i</sub></b> falls on <b>A<sub>i</sub></b>, <b>A<sub>i</sub></b> gets increased by <b>B<sub>i</sub></b>. </li>
<li>Each element <b>B<sub>i</sub></b> can be dropped by Chef on either <b>A<sub>i-1</sub></b>, <b>A<sub>i</sub></b> or <b>A<sub>i+1</sub></b>.</li>
<li>Chef can't drop element out of array (for example he can't drop <b>B<sub>0</sub></b> on <b>A<sub>-1</sub></b>). </li>
<li>Chef wants all the elements of array <b>A</b> to become equal, and looking for the biggest possible value he can get. </li>
</ul>

<p>
Please help Chef in enjoying the game!!
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of elements in both arrays. </li>
<li>The second line contains <b>N</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>N</sub></b> denoting the elements of the falling array. </li>
<li>The third line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of the base array. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing a biggest integer Chef can get for all elements of array <b>A</b> or <b>-1</b> if it is impossible. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N</b> ≤ <b>15</b>. Points: <b>30</b> </li>
<li>Subtask <b>N</b> ≤ <b>10<sup>4</sup></b>. Points: <b>70</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
10
20
4
15 7 10 10
6 14 21 1
3
1 100 3
1 2 3

<b>Output:</b>
30
21
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
The only option in first example is to make <b>10</b> fall on <b>20</b>. As we have only one element condition of equality is satisfied.
</p>
<p><b>Example case 2.</b><br />
Here Chef makes <b>15</b> fall on <b>6</b>, <b>7</b> fall on <b>14</b>, an then both elements with value <b>10</b> should fall on <b>1</b>. Then all elements will become <b>21</b>.
</p>
<p><b>Example case 3.</b><br />
There is no way for Chef to make all elements of a base array equal.
</p>
