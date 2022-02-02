---
{"category_name":"medium","problem_code":"PEAKS","problem_name":"Peaks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"2 - 12","source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"pavel1996","date_added":"11-12-2015","tags":{"0":"dynamic","1":"fenwick","2":"kostya_by","3":"ltime32","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/PEAKS","time":{"view_start_date":1454229000,"submit_start_date":1454229000,"visible_start_date":1454229000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/mandarin/PEAKS.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/russian/PEAKS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/vietnamese/PEAKS.pdf">Vietnamese</a> as well.</h3>
<p>
As you already know, Chef has many friends. Out of all his friends, Akshit and Aditi are the two biggest foodies. Chef knows that their weakness is food. He wants them to strengthen their programming skills. But they are too lazy to do stuff without motivation. So chef promises that he would get them special european chocolates if they solved the problem that he gives them. Chef also knows that his friends are fiercely competitive. So to make sure they like the problem, this is what he gives them:
</p>
<p>
They are given a sequence <b>S</b> of <b>N</b> <b>distinct</b> integers (sequence is 1-indexed). These aren't random integers. These integers are the marks that their friend Aayan has received in the N tests that he has taken in college this term. So <b>S[i]</b> denotes the marks in <b>i</b>'th test. Furthermore, chef gives them two more non-negative integers, <b>A</b> and <b>B</b>, and asks them to perform an interesting analysis of Aayan's performance in order to determine whether Aayan is underperforming or not.
</p>
<p>Their task is to count the number of subsequences in <b>S</b> that have exactly <b>A</b> local minima and <b>B</b> local maxima. The answer could be extremely huge; therefore it should be calculated modulo <b>10<sup>9</sup> + 9</b>.</p>
<p>
Now, we define what local minimum and local maximum mean.<br /><br />
Let's consider some subsequence of <b>S</b> formed by indices <b>i<sub>1</sub></b>, <b>i<sub>2</sub></b>, ..., <b>i<sub>K</sub></b>(1 ≤ <b>K</b>; 1 ≤ <b>i<sub>1</sub></b> &lt; <b>i<sub>2</sub></b> &lt; ... &lt; <b>i<sub>K</sub></b> ≤ <b>N</b>).
</p>
<p>
Index <b>i<sub>j</sub></b>(1 &lt; i<sub>j</sub> &lt; <b>K</b>) is said to be a <i>local minimum</i> if the <b>S[i<sub>j - 1</sub>] > S[i<sub>j</sub>] &lt; S[i<sub>j + 1</sub>]</b> condition holds.
</p>
<p>
In a similar way, index <b>i<sub>j</sub></b>(1 &lt; i<sub>j</sub> &lt; <b>K</b>) is said to be a <i>local maximum</i> if the <b>S[i<sub>j - 1</sub>] &lt; S[i<sub>j</sub>] > S[i<sub>j + 1</sub>]</b> condition holds.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases (they want to analyse Aayan's performance over several months). The description of <b>T</b> test cases follows.</p>
<p>
The first line of each test case contains three integers <b>N</b>, <b>A</b> and <b>B</b>. The next line contains <b>N</b> integers denoting the given sequence <b>S</b>.
</p>
<p>
It's guaranteed that all the integers in the sequence are distinct.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the number of described subsequences modulo <b>10<sup>9</sup> + 9</b>.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li><b>|S[i]|</b> ≤ 10<sup>9</sup></li>
<li>Subtask 1(20 points): 1 ≤ <b>N</b> ≤ 20, 0 ≤ <b>A</b>, <b>B</b> ≤ 10</li>
<li>Subtask 2(20 points): 1 ≤ <b>N</b> ≤ 200, 0 ≤ <b>A</b>, <b>B</b> ≤ 10</li>
<li>Subtask 3(30 points): 1 ≤ <b>N</b> ≤ 5000, 0 ≤ <b>A</b>, <b>B</b> ≤ 10</li>
<li>Subtask 4(30 points): 1 ≤ <b>N</b> ≤ 5000, 0 ≤ <b>A</b>, <b>B</b> ≤ 200</li>
</ul>
<h3>Note</h3>
<p>
The first test of the first subtask is the example test. It's made for you to make sure, that your solution produces the same verdict both on your machine and our server.
</p>
<h3>Time Limits</h3>
<p>
Time limit for the first and the second subtasks is 2 s. Time limit for the third subtask is 3 s. Time limit for the fourth subtask is 12 s.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 2 1
2 1 4 3 5
10 0 0
1 2 3 4 5 6 7 8 9 10
6 0 1
-1 -11 9 10 -10 -2


<b>Output:</b>
1
1023
14

</pre><h3>Explanation of the first two cases in the example test</h3>
<p>
In the first case, there is only one valid subsequence - the whole sequence <b>S</b>.
</p>
<p>
In the second case, any non-empty sequence is valid, so the answer is <b>2<sup>N</sup> - 1</b>.
</p>
