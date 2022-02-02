---
{"category_name":"medium","problem_code":"SEREJA","problem_name":"Sereja and Data Structures ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"laycurse","date_added":"2-08-2012","tags":{"0":"Rubanenko","1":"dec12","2":"medium","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/SEREJA","time":{"view_start_date":1355220899,"submit_start_date":1355220899,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Sereja is a little student from the University of Kyiv. He studies computer science. He is rather experienced programmer and he knows a lot of advanced algorithms. The only thing he likes more than advanced algorithms is <a href="http://en.wikipedia.org/wiki/Segment_tree">segment tree data structure</a>.
</p>
<p>
Every evening he goes to the loveliest place in Kyiv - The Chef's cafe. Chef is also interested in computer science, so they often discuss different problems. Last evening Sereja told Chef following problem: given an array <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> of <b>N</b> integers. The task is to find the product of ranges of the segments <b>[i, j]</b> over 1 ≤ <b>i</b> &lt; <b>j</b> ≤ <b>N</b>, where the range of the segment <b>[i, j]</b> means max(<b>A<sub>i</sub></b>, <b>A<sub>i+1</sub></b>, ..., <b>A<sub>j</sub></b>) - min(<b>A<sub>i</sub></b>, <b>A<sub>i+1</sub></b>, ..., <b>A<sub>j</sub></b>).
</p>
<p>
Both Sereja and Chef couldn't find any efficient algorithm for this problem with segment tree. They gave up thinking of it, and Chef said we may calculate this value only for a <b>random array</b>, that means <b>all elements of the array are generated uniformly and independently at random</b>. Sereja were surprised to hear that, and he wanted to know about details. However Chef is very busy at the moment, so he asked you to solve this problem for a random array.
</p>
<h3>Input</h3>
<p>
The first line contains a single integer <b>N</b>, then <b>N</b> integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> follow on the second line.
</p>
<h3>Output</h3>
<p>
Output a single line containing the required product modulo 1000000007 (10<sup>9</sup>+7), since the answer can be very large.
</p>
<h3>Constraints</h3>
<p>
2 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)<br />0 ≤ <b>A<sub>i</sub></b> &lt; 1000000007 (10<sup>9</sup>+7)<br />All test cases, except Example, are created by the method described in Test Case Generation.<br />
</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
3
1 2 4

<b>Output 1:</b>
6

<b>Input 2:</b>
5
5 5 5 5 5

<b>Output 2:</b>
0

</pre><h3>Explanation</h3>
<p>
In <b>Input 1</b>, we should consider 3 segments <b>[i, j]</b> = <b>[1, 2]</b>, <b>[2, 3]</b>, <b>[1, 3]</b>.<br /> The range of segment <b>[1, 2]</b> is max(1,2) - min(1,2) = 1.<br />The range of segment <b>[2, 3]</b> is max(2,4) - min(2,4) = 2.<br />The range of segment <b>[1, 3]</b> is max(1,2,4) - min(1,2,4) = 3.<br />Therefore, we obtain the answer 1 * 2 * 3 = 6, and you should output 6 mod 1000000007 = 6.
</p>
<p>
In <b>Input 2</b>, we should consider 10 segments, but all ranges of such segments are 0. And, of course, the answer is 0 * 0  * 0  * 0  * 0  * 0  * 0  * 0  * 0  * 0 = 0.
</p>
<p>
Note that Example is created by manually, so these arrays are not random arrays. It is quite unlikely that the official test cases contain an array with equal elements such as  <b>Input 2</b>.
</p>
<h3>Test Case Generation</h3>
<p>
There are 15 official test files.For every test file, <b>A<sub>i</sub></b> are chosen from 0 to 1000000006 (10<sup>9</sup>+6) uniformly and independently at random.
</p>
<p>
The first 5 test files: <b>N</b> is chosen from 2 to 100 uniformly at random.<br />The next 5 test files: <b>N</b> is chosen from 2 to 100000 (10<sup>5</sup>) uniformly at random.<br />The last 5 test files: <b>N</b> = 100000 (10<sup>5</sup>)<br />
</p>
