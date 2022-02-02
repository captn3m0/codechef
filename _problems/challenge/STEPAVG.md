---
{"category_name":"challenge","problem_code":"STEPAVG","problem_name":"Stepping Average","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":0.873947,"source_sizelimit":50000,"problem_author":"gennady.korotkevich","problem_tester":"chmel_tolstiy","date_added":"30-09-2011","tags":{"0":"challenge","1":"gennady","2":"nov11"},"editorial_url":"http://discuss.codechef.com/problems/STEPAVG","time":{"view_start_date":1321004315,"submit_start_date":1321004315,"visible_start_date":1321004089,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Consider the following weird way of finding the average of <b>N</b> numbers. Take any two of the numbers and replace them with their average; repeat this operation exactly <b>N</b>-1 times. The only remaining number is called the <i>stepping average</i> of the initial set. Note that a set may obviously have different stepping averages depending on our choice for every operation.
<br /><br />
Your task is, given <b>N</b> integers, find a way of performing the operations such that the resulting stepping average is as close to the given integer <b>K</b> as possible. Note that this is a challenge problem: you don't have to find the best possible solution, but the better is your solution the more points you get.

<h3>Input</h3>
</p><p>The first line of the input contains an integer <b>T</b> -- the number of test cases (no more than 10). Each test case consists of two lines -- the first of them contains two positive integers <b>N</b> and <b>K</b> (<b>N</b> ≤ 1000, <b>K</b> ≤ 10<sup>9</sup>), the second contains <b>N</b> space-separated positive integers <b>A<sub>1</sub></b>..<b>A<sub>N</sub></b> (<b>A<sub>i</sub></b> ≤ 10<sup>9</sup>).

<h3>Output</h3>
</p><p>The output for each test case should contain exactly <b>N</b>-1 pairs of integers. <b>i</b>-th pair (1-based) <b>x y</b> means that numbers <b>A<sub>x</sub></b> and <b>A<sub>y</sub></b> are chosen at the corresponding operation, their average is written to <b>A<sub>N+i</sub></b>, and <b>A<sub>x</sub></b> and <b>A<sub>y</sub></b> can't be used any more. See example explanation for more clarity.

<h3>Scoring</h3>
</p><p>Your score for each test case is just the absolute difference between <b>K</b> and your remaining number. Your final score is the average of all test case scores. Your goal is to minimize the final score.

</p><p>Note that in order for your submission not to be judged as 'Wrong Answer' the following conditions should be satisfied:
<ul><li>your output should contain exactly <b>N</b>-1 pairs of positive integers separated by at least one space for each test case and nothing else;
</li><li>your output should contain integers strictly less that <b>N</b>+<b>i</b> in the <b>i</b>-th pair (1-based) for each test case;
</li><li>all integers in your output for each test case should be different.</li></ul>

<h3>Example</h3>

<pre>
<b>Input:</b>
1
5 5
9 1 6 3 4

<b>Output:</b>
5 2
4 6
3 1
7 8

<b>Explanation:</b>
</pre>
We have 5 integers here: 9 1 6 3 4. The first operation is 5 2, so the 6th number becomes (4+1)/2 = 2.5, and the 2nd and the 5th numbers are removed, so we have 9 x 6 3 x 2.5 now (here x means a removed number). Then, 4 6 means that the 7th number becomes (3+2.5)/2 = 2.75, and the 4th and the 6th numbers are removed, resulting in 9 x 6 x x x 2.75. Then, after 3 1 we get x x x x x x 2.75 7.5, and after 7 8 we get x x x x x x x x 5.125. The only number left after the operations is 5.125, so your score for the test case is 0.125.

<h3>Test Case Generation</h3>
</p><p>Every official input file contains exactly 10 test cases. In every test case <b>N</b> is equal to 1000, <b>K</b> is chosen randomly and uniformly between 1 and 10<sup>9</sup>, and all <b>A<sub>i</sub></b> are chosen randomly and uniformly between 1 and 10<sup>9</sup> as well.</p>