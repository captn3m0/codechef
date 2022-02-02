---
{"category_name":"medium","problem_code":"CHEFCLOS","problem_name":"Will and Closed Set","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 4","source_sizelimit":50000,"problem_author":"admin2","problem_tester":"pushkarmishra","date_added":"26-07-2016","tags":{"0":"admin2","1":"dp","2":"dynamic","3":"hard","4":"ltime38"},"editorial_url":"http://discuss.codechef.com/problems/CHEFCLOS","time":{"view_start_date":1469901600,"submit_start_date":1469901600,"visible_start_date":1469901600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/mandarin/CHEFCLOS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/russian/CHEFCLOS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME38/vietnamese/CHEFCLOS.pdf">Vietnamese</a> as well.</h3>


<img src = "https://discuss.codechef.com/upfiles/math-prob-goodwill.jpeg" height="300" width="440">

<p>
Will Hunting was learning about Greatest Common Divisor (gcd) of two numbers and properties related to it. He came across the concept of a closed set. He learned that a set is said to be closed under some operation iff for any two elements in the set, the result obtained after applying the operation on those two elements is also a part of the set.
</p>

<p>
Professor Lambeau wants to test Will on this newly learned topic. He comes up with the following challenge for Will. Consider an array <b>A</b> of length <b>N</b>. The array may or may not be closed under some operation. He wants to add <b>exactly</b> <b>K</b> elements in the array in the range <b>[1, L]</b> such that the resulting array is closed under the <b>gcd</b> operation. Note that the order in which the elements are going to be added does not matter. Also, an array <b>B</b> will be called closed under gcd operation, if for any two indices <b>i, j</b>, the element <b>gcd(B<sub>i</sub>, B<sub>j</sub>)</b> is also present in the array.
</p>

<p>
Will has started thinking about this problem. Can you beat him to the task and compute the number 
of ways before he does? Note that the answer could be large, so you must report it modulo <b>10<sup>9</sup> + 7</b>.
</p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>
For each test case, first line consists three space separated integers denoting <b>N, K, L</b>.
</p>
<p>
Second line of each test case, contains <b>N</b> space separated integers denoting array <b>A</b>.
</p>


<h3>Output</h3>
<p>
For each test case, output a single line containing an integer corresponding to the number of ways of adding elements in the range <b>[1, L]</b> to make the array closed under gcd operation.
</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, A<sub>i</sub>, K, L</b> ≤ <b>27</b></li>
<li>There exists an <b>i</b> such that <b>A<sub>i</sub></b> = 1</li>
<li>Maximum value in the array <b>A</b> ≤ L</li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (40 points), Time limit : 4 secs</b>
<ul>
<li><b>1</b> ≤ <b>N, A<sub>i</sub>, K, L ≤ </b><b>15</b></li>
</ul> 

<b>Subtask #2 (40 points), Time limit : 4 secs</b>
<ul>
<li><b>1</b> ≤ <b>N, A<sub>i</sub>, K, L ≤ </b><b>25</b></li>
</ul> 

<b>Subtask #3 (20 points), Time limit : 2 secs</b>
<ul>
<li><b>1</b> ≤ <b>N, A<sub>i</sub>, K, L ≤ </b><b>27</b></li>
</ul> 

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2 1 2
2 1
3 1 6
1 4 6</tt>

<b>Output:</b>
<tt>2
1</tt>
</pre>

<h3>Explanation</h3>
<p><b>In Test 1 :</b> The array <b>A = [2, 1]</b>. The array is already closed under gcd operation since gcd(2, 2) = 2, gcd(1, 1) = 1 and gcd(2, 1) = 2. So, the remaining element which needs to be added can be either <b>1</b> or <b>2</b>. So, answer is <b>2</b>.</p>

<p><b>In Test 2 :</b> The array <b>A = [1, 4, 6]</b>. gcd(1, 1), gcd(1, 4) and gcd(1, 6) = 1 which is present in the array. gcd(4, 6) is 2 which is not present in the array. We have to add only one element in the array and make it closed under gcd operation. So the number to be added can only be <b>2</b>. There is only one way of doing that. So, the answer is <b>1</b>.</p>
