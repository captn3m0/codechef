---
{"category_name":"hard","problem_code":"MGCHPERM","problem_name":"Misha and Permutation","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"xcwgf666","date_added":"3-10-2015","tags":{"0":"convex","1":"dec15","2":"hard","3":"interpolation","4":"mgch","5":"polynomial","6":"precomputation","7":"recurrences"},"editorial_url":"http://discuss.codechef.com/problems/MGCHPERM","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/MGCHPERM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/MGCHPERM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/MGCHPERM.pdf">Vietnamese</a> as well.</h3>


<p>
Misha is an expert on combinatorics, so he knows a lot about permutations. Recently, he learned the definition of a convex polygon and invented too many new problems involving permutations. Please help him solve one of them.
</p>
<p>
Let's define a function on a set <b>a</b> with size <b>k</b>: <b>F</b>(<b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ... , <b>a<sub>k</sub></b>). Imagine that we have sticks of lengths <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ... , <b>a<sub>k</sub></b>. <b>F</b>(<b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ... , <b>a<sub>k</sub></b>) = 1, if and only if a convex polygon can be created from these sticks. <b>F</b>(<b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ... , <b>a<sub>k</sub></b>) = 0, otherwise.
</p>
<p>
Misha has the identity permutation over <b>n</b> elements — <b>I<sub>n</sub></b> (<b>I<sub>n</sub> = {1, 2, 3, .. n})</b>. He wants to know the sum of the function <b>F</b> over all possible distinct <b>k</b>-sized subsets of <b>I<sub>n</sub></b>.
</p>
<p>
Please help Misha find this sum. Since its value may be very large, you should output the sum modulo <b>10<sup>9</sup>+7</b>.
</p>

<h3>Input</h3>
The first line of input contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contains two space-separated integers — <b>n</b> and <b>k</b>.

<h3>Output</h3>
For each test case, output a single line containing a single integer — the solution of Misha's problem modulo <b>10<sup>9</sup>+7</b>.

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 500</li>
<li>3 ≤ <b>k</b> ≤ 7</li>
<li>1 ≤ <b>k</b> ≤ <b>n</b> ≤ 10<sup>9<sup></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1: (10 pts)</b> Sum of <b>n</b> over all test cases not be greater than 15.
</li>
<li><b>Subtask 2: (20 pts)</b> Sum of <b>n</b> over all test cases not be greater than 1000. 
</li>
<li><b>Subtask 3: (30 pts)</b> 1 ≤ <b>n</b> ≤ 10<sup>6</sup> 
</li>
<li><b>Subtask 4: (40 pts)</b> 1 ≤ <b>n</b> ≤ 10<sup>9</sup>
</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
<tt>5
3 3
6 4
777 5
777777 7
1000000000 6
</tt>
<b>Output:</b>
<tt>0
14
367816
989165211
930411765</tt>
</pre>

<h3>Explanation:</h3>
<p>
<b>Example case 1.</b> There is only one subset: {1, 2, 3}. Since, <b>F</b>(1, 2, 3) = 0, the answer is 0.
</p>

<p>
<b>Example case 2.</b> There are C(6, 4) = 15 possible subsets. <b>F</b>(1, 2, 3, 6) = 0, and the value of <b>F</b> on all other subsets equals 1. 
Therefore, the answer is 15 - 1 = 14.
</b>