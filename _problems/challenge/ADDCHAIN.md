---
{"category_name":"challenge","problem_code":"ADDCHAIN","problem_name":"Addition chains","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.19467,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"11-06-2012","tags":{"0":"anton_lunyov","1":"challenge","2":"july12"},"editorial_url":"http://discuss.codechef.com/problems/ADDCHAIN","time":{"view_start_date":1342000293,"submit_start_date":1342000293,"visible_start_date":1341999849,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
An <i>addition chain</i> for a positive integer <b>N</b> is a sequence of positive integers <b>C = (A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>L</sub>)</b> such that

<ul>
<li><b>1 = A<sub>0</sub> &lt; A<sub>1</sub> &lt; ... &lt; A<sub>L – 1</sub> &lt; A<sub>L</sub> = N</b>,</li>
<li>for each <b>i</b> such that <b>1 ≤ i ≤ L</b> there exist integers <b>j</b> and <b>k</b> such that <b>0 ≤ j, k &lt; i</b> and <b>A<sub>i</sub> = A<sub>j</sub> + A<sub>k</sub></b>.</li>
</ul>
</p>

<p>
The integer <b>L</b> is called the <i>length</i> of the chain <b>C</b>.
</p>

<p>
For example, <b>C = (1, 2, 3, 6, 12, 15)</b> is an addition chain of length <b>5</b> for <b>N = 15</b>. Indeed,
</p>
<p>
<b>A<sub>0</sub> = 1</b>,<br />
<b>A<sub>1</sub> = 2 = 1 + 1 = A<sub>0</sub> + A<sub>0</sub></b>,<br />
<b>A<sub>2</sub> = 3 = 2 + 1 = A<sub>1</sub> + A<sub>0</sub></b>,<br />
<b>A<sub>3</sub> = 6 = 3 + 3 = A<sub>2</sub> + A<sub>2</sub></b>,<br />
<b>A<sub>4</sub> = 12 = 6 + 6 = A<sub>3</sub> + A<sub>3</sub></b>,<br />
<b>A<sub>5</sub> = 15 = 3 + 12 = A<sub>2</sub> + A<sub>4</sub></b>.<br />
</p>
<p>
It is, in fact, the shortest addition chain for <b>N = 15</b>.
</p>

<p>
Your task is to find some addition chain for a given positive integer <b>N</b>.
</p>

<p>
<b>The shorter chain you will find the better score you will get.</b>
</p>

<h3>Input</h3>

<p>
The only line of the input file contains an integer <b>N</b>, the number for which you need to find an addition chain.
</p>

<h3>Output</h3>

<p>
The first line of the output file should contain an integer <b>L ≤ 500</b>, the length of your addition chain for the value of <b>N</b> given in the input file. <b>L</b> lines should follow. <b>i</b><sup>th</sup> line should contain two non-negative integers <b>j[i]</b> and <b>k[i]</b> both less than <b>i</b> separated by exactly one space. Their meaning is that for your addition chain, <b>A<sub>i</sub></b> is equal to <b>A<sub>j[i]</sub> + A<sub>k[i]</sub></b>. More specifically, your output will be considered as correct if and only if all of the following conditions hold:

<ul>
<li><b>1 ≤ L ≤ 500</b>;</li>
<li><b>0 ≤ j[i], k[i] &lt; i</b> for all <b>i</b> such that <b>1 ≤ i ≤ L</b>;</li>
<li>for the sequence <b> (A<sub>0</sub>, A<sub>1</sub>, ..., A<sub>L</sub>)</b> defined by the rules <b>A<sub>0</sub> = 1</b> and <b>A<sub>i</sub> = A<sub>j[i]</sub> + A<sub>k[i]</sub></b> for <b>i = 1, 2, ..., L</b> we have <b>1 = A<sub>0</sub> &lt; A<sub>1</sub> &lt; ... &lt; A<sub>L – 1</sub> &lt; A<sub>L</sub> = N</b>.</li>
</ul>
</p>

<p>
<b>Your program will get Accepted if and only if it returns correct output for each test case within a given time limit.</b>
</p>

<h3>Scoring</h3>

<p>
Your score for a test file is the length of your addition chain, that is, an integer <b>L</b>. The total score for a submission is the average score across all test files. Your goal is to minimize the total score.
</p>

<h3>Constraints</h3>
<p><b>1</b> &lt; <b>N</b> &lt; <b>10<sup>100</sup></b></p>

<h3>Example</h3>
<pre>
<b>Input:</b>
15

<b>Output:</b>
6
0 0
1 0
2 0
0 3
4 4
4 5
</pre>

<h3>Explanation</h3>

<p>
Sample output represents an addition chain <b>(1, 2, 3, 4, 5, 10, 15)</b> for <b>N = 15</b>. Your score for such output will be <b>6</b>. Note that according to the problem statement shorter chain is possible for this value of <b>N</b> but you don't need to find the shortest chain since this is a challenge problem. Also note that order in which we write numbers <b>j[i]</b> and <b>k[i]</b> for the given <b>i</b> doesn't matter.
</p>

<h3>Test Generation</h3>

<p>
Values of <b>N</b> are generated using different strategies. There are <b>50</b> official test files in all. Among them there are <b>8</b> files where <b>N &lt; 100000</b>, <b>5</b> files where <b>N</b> is a random decimal string of the length <b>100</b> (that is, each digit of <b>N</b> is distributed uniformly in the range <b>[0, 9]</b> except the first digit which is distributed in the range <b>[1, 9]</b>), <b>8</b> files where binary representation of <b>N</b> is a random string of the random length from <b>300</b> to <b>332</b> (that is, at first an integer <b>L</b> is chosen randomly in the range <b>[300, 332]</b> and then <b>L</b> digits <b>d<sub>1</sub>, d<sub>2</sub>, ..., d<sub>L</sub></b> are chosen so that <b> d<sub>1</sub> = 1</b> and each <b> d<sub>i</sub>, 2 ≤ i ≤ L,</b> is uniformly distributed in the range <b>[0, 1]</b>. After that <b>N</b> is set to <b>d<sub>1</sub> ∙ 2<sup>L-1</sup> + d<sub>2</sub> ∙ 2<sup>L-2</sup> + ... + d<sub>L-1</sub> ∙ 2 + d<sub>L</sub></b>, that is, <b>d<sub>1</sub>d<sub>2</sub>...d<sub>L</sub></b> is the binary representation of <b>N</b>). Other <b>29</b> files generated using some special strategies which we prefer to keep in secret.
</p>