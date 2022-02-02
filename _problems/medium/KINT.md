---
{"category_name":"medium","problem_code":"KINT","problem_name":"How to Choose a Subset","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"iscsi","date_added":"3-03-2015","tags":{"0":"cook56","1":"dynamic","2":"medium","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/KINT","time":{"view_start_date":1427049000,"submit_start_date":1427049000,"visible_start_date":1427049000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/mandarin/KINT.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK56/russian/KINT.pdf">Russian</a> as well.</h3>
<p>Given a set <b>S</b> of first <b>N</b> non-negative integers i.e. <b>S = {0, 1, 2, ..., N}</b>. Find number of ways of choosing a <b>K</b> size subset of <b>S</b> with the property that the XOR-sum of all chosen integers has exactly <b>B</b> set bits in its binary representation (i.e. the bits that are equal to <b>1</b>). Since the answer can be large, output it modulo <b>(10<sup>9</sup> + 7)</b>. Please refer to notes section for formal definition of XOR-sum.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The only line of each test case contains three space-separated integers <b>N</b>, <b>K</b> and <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>7</b></li>
<li><b>0</b> ≤ <b>B</b> ≤ <b>30</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2 0
2 2 1
2 2 2

<b>Output:</b>
0
2
1
</pre><h3>Notes</h3>
<p>XOR-sum of <b>n</b> integers <b>A[1], , , A[n]</b> will be <b>A[1] xor A[2] xor .. A[n]</b>. By xor, we mean <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">bit-wise xor</a>.</p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> There is no way to choose a subset of <b>2</b> integers from <b>{0, 1, 2}</b> such that the XOR-sum contains <b>0</b> set bits.</p>
<p><b>Example case 2.</b> The two possible subsets in this case are <b>{0, 1}</b> and <b>{0, 2}</b>. In both cases the XOR-sum (<b>1</b> and <b>2</b> respectively) contains exactly one set bit.</p>
<p><b>Example case 3.</b> The only possible subset is <b>{1, 2}</b>.</p>
