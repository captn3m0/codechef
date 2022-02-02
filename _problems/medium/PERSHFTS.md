---
{"category_name":"medium","problem_code":"PERSHFTS","problem_name":"Cyclic shifts in permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"eartemov","problem_tester":null,"date_added":"4-08-2015","tags":{"0":"eartemov","1":"fenwick","2":"inversions","3":"maths","4":"medium","5":"oct15","6":"permutation"},"editorial_url":"http://discuss.codechef.com/problems/PERSHFTS","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/PERSHFTS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/PERSHFTS.pdf">Russian</a> </h3>
<p>You have a permutation <b>P</b> of integers <b>1</b>, <b>2</b>, ... , <b>N</b>. You want to change it a little. To do this, you choose an integer <b>K</b> that satisfies an inequality <b>2</b> ≤ <b>K</b> ≤ <b>N</b>. After that, you perform several (possibly, zero, if you're feeling lazy) cyclic shifts. For each cyclic shift you choose a <b>K</b>-length segment of the permutation <b>P</b> (let's denote it as <b>P<sub>x</sub></b>, <b>P<sub>x + 1</sub></b>, ..., <b>P<sub>x + K - 2</sub></b>, <b>P<sub>x + K - 1</sub></b>) and perform a cyclic shift on it towards the right. That is, rearrange elements of this segment in the order <b>P<sub>x + K - 1</sub></b>, <b>P<sub>x</sub></b>, ... , <b>P<sub>x + K - 3</sub></b>, <b>P<sub>x + K - 2</sub></b>.</p>
<p>For example, let's make a permutation <b>(6, 5, 1, 3, 2, 4)</b> from permutation <b>(1, 5, 4, 6, 3, 2)</b>, using <b>K = 4</b>. Segments that are cyclically shifted on every move are underlined: <b>(<u>1, 5, 4, 6</u>, 3, 2)</b> => <b>(6, 1, <u>5, 4, 3, 2</u>)</b>=> <b>(6, 1, <u>2, 5, 4, 3</u>)</b> => <b>(6, <u>1, 3, 2, 5</u>, 4)</b> => <b>(6, 5, 1, 3, 2, 4)</b>.</p>
<p>Let <b>S</b> denote the set of permutations that can be obtained from permutation <b>P</b> using zero or more cyclic shifts. You are given a permutation <b>Q</b> of integers <b>1</b>, <b>2</b>, ..., <b>N</b>. Your task is to find whether <b>S</b> contains <b>Q</b> or not. If so, also you must find the index of <b>Q</b> in the list of all permutations in set <b>S</b>, ordered lexicographically.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The  description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integers <b>N</b> and <b>K</b> denoting the length of the permutations <b>P</b> and <b>Q</b>, and length of the segments that you are allowed to cyclically shift.</p>
<p>Next line contains <b>N</b> integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b> denoting the permutation <b>P</b>.</p>
<p>Next line contains <b>N</b> integers <b>Q<sub>1</sub></b>, <b>Q<sub>2</sub></b>, ..., <b>Q<sub>N</sub></b> denoting the permutation <b>Q</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line. It must contain <b>-1</b>, if permutation <b>Q</b> can't be obtained from permutation <b>P</b> using allowed cyclic shifts. Otherwise, print its 1-based index in the list of all permutations from set <b>S</b>, ordered lexicographically. Since the answer can be very large, print it modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b> are forming a permutation of integers from <b>1</b> to <b>N</b></li>
<li><b>Q<sub>1</sub></b>, <b>Q<sub>2</sub></b>, ..., <b>Q<sub>N</sub></b> are forming a permutation of integers from <b>1</b> to <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask 1: (10 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>5</b></li>
</ul>

<p><b>Subtask 2: (10 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>K</b> = <b>N</b></li>
</ul>

<p><b>Subtask 3: (40 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul>

<p><b>Subtask 4: (40 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
4 2
2 4 3 1
1 2 4 3
3 3
1 2 3
1 3 2</tt>

<b>Output:</b>
<tt>2
-1</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Cyclic shift of segment of length <b>2</b> is swapping consecutive elements of the permutation. Using them, we are able to get any possible permutation. Permutation <b>Q</b> has index <b>2</b> in the list of all permutations of length <b>4</b>.</p>
<p><b>Example case 2.</b> We are able to get permutations <b>(1, 2, 3)</b>, <b>(2, 3, 1)</b> and <b>(3, 1, 2)</b>. Permutation <b>Q</b> doesn't belong to this list, so answer is <b>-1</b>.</p>
