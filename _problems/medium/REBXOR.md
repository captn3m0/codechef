---
{"category_name":"medium","problem_code":"REBXOR","problem_name":"Nikitosh and xor","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rebryk","problem_tester":"kevinsogo","date_added":"4-05-2015","tags":{"0":"bitwise","1":"rebryk","2":"sept15","3":"trie","4":"xor"},"editorial_url":"http://discuss.codechef.com/problems/REBXOR","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/REBXOR.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/REBXOR.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>Nikitosh the painter has a 1-indexed array <b>A</b> of <b>N</b> elements. He wants to find the <b>maximum</b> value of expression <br /><br />
(<b>A[l<sub>1</sub>]</b> ⊕ <b>A[l<sub>1</sub> + 1]</b> ⊕ <b>...</b> ⊕ <b>A[r<sub>1</sub>]</b>) + (<b>A[l<sub>2</sub>]</b> ⊕ <b>A[l<sub>2</sub> + 1]</b> ⊕ <b>...</b> ⊕ <b>A[r<sub>2</sub>]</b>) where <b>1</b> ≤ <b>l<sub>1</sub></b> ≤ <b>r<sub>1</sub></b> &lt; <b>l<sub>2</sub></b> ≤ <b>r<sub>2</sub></b> ≤ <b>N</b>.<br /><br />
Here, <b>x</b> ⊕ <b>y</b> means the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#XOR" target="_blank">bitwise XOR</a> of <b>x</b> and <b>y</b>.</p>
<p>Because Nikitosh is a painter and not a mathematician, you need to help him in this task.</p>
<h3>Input</h3>
<p>The first line contains one integer <b>N</b>, denoting the number of elements in the array.</p>
<p>The second line contains <b>N</b> space-separated integers, denoting <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>Output a single integer denoting the <b>maximum possible</b> value of the given expression.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>4*10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li> <b>Subtask 1</b> (40 points) : <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li> <b>Subtask 2</b> (60 points) : Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 3 1 2

<b>Output:</b>
6

</pre><h3>Explanation</h3>
<p>Choose (<b>l<sub>1</sub></b>, <b>r<sub>1</sub></b>, <b>l<sub>2</sub></b>, <b>r<sub>2</sub></b>) = (1, 2, 3, 3) or (1, 2, 4, 5) or (3, 3, 4, 5).</p>
