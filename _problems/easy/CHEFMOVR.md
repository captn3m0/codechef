---
{"category_name":"easy","problem_code":"CHEFMOVR","problem_name":"Chef and Mover","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"14-06-2016","tags":{"0":"ad","1":"aug17","2":"berezin","3":"implementation"},"editorial_url":"https://discuss.codechef.com/problems/CHEFMOVR","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/CHEFMOVR.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/CHEFMOVR.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/CHEFMOVR.pdf">vietnamese</a> as well.</h3>

<p>Chef's dog Snuffles has so many things to play with! This time around, Snuffles has an array <b>A</b> containing <b>N</b> integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p> 

<p>Bad news: Snuffles only loves to play with an array in which <b>all</b> the elements are equal.</p>
<p>Good news: We have a <i>mover</i> of size <b>D</b>. ! </p>

<p>A mover of size <b>D</b> is a tool which helps to change arrays. Chef can pick two existing elements <b>A<sub>i</sub></b> and <b>A<sub>j</sub></b> from the array, such that i + <b>D</b> = j and subtract 1 from one of these elements (the element should have its value at least 1), and add 1 to the other element. In effect, a single operation of the mover, moves a value of 1 from one of the elements to the other.</p>

<p>Chef wants to find the minimum number of times she needs to use the mover of size <b>D</b> to make all the elements of the array <b>A</b> equal. Help her find this out.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two integers <b>N</b> and <b>D</b>, denoting the number of elements in the array and the size of the mover. </li>
<li>The second line of each testcase contains <b>N</b> space-separated integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, denoting the initial elements of the array. </li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the minimum number of uses or <b>-1</b> if it is impossible to do what Snuffles wants.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>D</b> < <b>N</b></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
</ul>


<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (30 points) : <b>N</b> ≤  10<sup>3</sup></li> 
<li><b>Subtask 2</b> (70 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
5 2
1 4 5 2 3
3 1
1 4 1
4 2
3 4 3 5

<b>Output:</b>
3
2
-1
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1:</b></p>
<p>Here is a possible sequence of usages of the mover:</p>
<ul>
<li>Move <b>1</b> from <b>A<sub>3</sub></b> to <b>A<sub>1</sub></b></li>
<li>Move <b>1</b> from <b>A<sub>3</sub></b> to <b>A<sub>1</sub></b></li>
<li>Move <b>1</b> from <b>A<sub>2</sub></b> to <b>A<sub>4</sub></b></li>
</ul>
<p>At the end, the array becomes (3, 3, 3, 3, 3), which Snuffles likes. And you cannot achieve this in fewer moves. Hence the answer is 3.</p>

<p><b>Testcase 2:</b></p>
<p>Here is a possible sequence of usages of the mover:</p>
<ul>
<li>Move <b>1</b> from <b>A<sub>2</sub></b> to <b>A<sub>1</sub></b></li>
<li>Move <b>1</b> from <b>A<sub>2</sub></b> to <b>A<sub>3</sub></b></li>
</ul>
<p>At the end, the array becomes (2, 2, 2), which Snuffles likes. And you cannot achieve this in fewer moves. Hence the answer is 2.</p>

<p><b>Testcase 3:</b></p>
<p>It is impossible to make all the elements equal. Hence the answer is -1.</p>