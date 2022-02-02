---
{"category_name":"medium","problem_code":"INCXOR","problem_name":"Increasing Xor Sequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":"errichto","date_added":"13-03-2017","tags":{"0":"bitmasks","1":"cook80","2":"digit","3":"lg5293","4":"medium"},"editorial_url":"https://discuss.codechef.com/problems/INCXOR","time":{"view_start_date":1489949100,"submit_start_date":1489949100,"visible_start_date":1489949100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/mandarin/INCXOR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/russian/INCXOR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/vietnamese/INCXOR.pdf">Vietnamese</a> as well.</h3>

<p> 
You are given a sequence of <b>n</b> integers <b>a</b><sub>1</sub>, ..., <b>a</b><sub><b>n</b></sub>.
Count the number of sequences b = b<sub>1</sub>, ..., b<sub><b>n</b></sub> such that: 0 ≤  b<sub>1</sub> ≤  ... ≤  b<sub><b>n</b></sub> < 2<sup>31</sup> and (<b>a</b><sub>1</sub> XOR b<sub>1</sub>) ≤ … ≤ (<b>a</b><sub><b>n</b></sub> XOR b<sub><b>n</b></sub>).
Return this count, modulo 10<sup>9</sup>+7.
</p>

<p>
Here XOR denotes the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise XOR</a>.
</p>


<h3>Input</h3>
<p>
The first line of input will contain an integer <b>T</b>, the number of test cases.
</p>

<p>
Each test case will be in two lines.
</p>

<p>
The first line of the case will contain an integer <b>n</b>.
</p>

<p>
The next line of the case will contain <b>n</b> space separated integers <b>a</b><sub>1</sub>,...,<b>a</b><sub><b>n</b></sub>.
</p>

<h3>Output</h3>
<p>Output a single number, the number of sequences, modulo 10<sup>9</sup>+7. </p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100 </li>
<li>1 ≤ <b>n</b> ≤ 5</li>
<li>0 ≤ <b>a</b><sub>i</sub> < 2<sup>31</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input: </b>
4
1
42
5
5 4 3 2 1
4
1194533513 122420337 1448417648 120078455
3
31 2047 2147483647

<b>Output:</b>
147483634
986095186
0
468598063
</pre>

<h3>Explanation</h3>
<p>
In the first case, there are 2<sup>31</sup> possible sequences, so the answer is 2<sup>31</sup> modulo 10<sup>9</sup>+7 = 147483634
</p>

<p>
For the second case, one possible example of a valid sequence is b =  9, 9, 18, 19, 32. We can check that this sequence is nondecreasing, and also, we have (<b>a</b><sub>1</sub> XOR b<sub>1</sub>) = 12, (<b>a</b><sub>2</sub> XOR b<sub>2</sub>) = 13, (<b>a</b><sub>3</sub> XOR b<sub>3</sub>) = 17, (<b>a</b><sub>4</sub> XOR b<sub>4</sub>) = 17, (<b>a</b><sub>5</sub> XOR b<sub>5</sub>) = 33, which is also nondecreasing.
</p>

<p>
For the third case, no sequences satisfy the conditions.
</p>