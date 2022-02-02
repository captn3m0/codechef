---
{"category_name":"easy","problem_code":"SNTEMPLE","problem_name":"A temple of Snakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"26-05-2017","tags":{"0":"admin2","1":"array","2":"binary","3":"easy","4":"sequence","5":"snckpa17"},"editorial_url":"https://discuss.codechef.com/problems/SNTEMPLE","time":{"view_start_date":1495992600,"submit_start_date":1495992600,"visible_start_date":1495992600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPA17/mandarin/SNTEMPLE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/russian/SNTEMPLE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPA17/vietnamese/SNTEMPLE.pdf">Vietnamese</a> as well.</h3>

<p>You want to build a temple for snakes. The temple will be built on a mountain range, which can be thought of as <b>n</b> blocks, where height of i-th block is given by <b>h</b><sub>i</sub>. The temple will be made on a consecutive section of the blocks and its height should start from 1 and increase by exactly 1 each time till some height and then decrease by exactly 1 each time to height 1, 
i.e. a consecutive section of 1, 2, 3, .. x-1, x, x-1, x-2, .., 1 can correspond to a temple. Also, heights of all the blocks other than of the temple should have zero height, so that the temple is visible to people who view it from the left side or right side.</p>

<p>You want to construct a temple. For that, you can reduce the heights of some of the blocks. In a single operation, you can reduce the height of a block by 1 unit. Find out minimum number of operations required to build a temple.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>n</b>.</p>
<p>The next line contains <b>n</b> integers, where the i-th integer denotes <b>h</b><sub>i</sub></p>

<h3>Output</h3>
<p>For each test case, output a new line with an integer corresponding to the answer of that testcase.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>2 ≤ <b>n</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>h</b><sub>i</sub> ≤ 10<sup>9</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
3
1 2 1
4
1 1 2 1
5
1 2 6 2 1

<b>Output</b>
0
1
3
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The entire mountain range is already a temple. So, there is no need to make any operation.</p>

<p><b>Example 2</b>. If you reduce the height of the first block to 0. You get 0 1 2 1. The blocks 1, 2, 1 form a temple. So, the answer is 1.</p>

<p><b>Example 3</b>. One possible temple can be 1 2 3 2 1. It requires 3 operations to build. This is the minimum amount you have to spend in order to build a temple.</p>

