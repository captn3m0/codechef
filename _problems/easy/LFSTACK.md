---
{"category_name":"easy","problem_code":"LFSTACK","problem_name":"Lock-Free Stack","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"harshil7924","date_added":"6-08-2016","tags":{"0":"dynamic","1":"ltime39","2":"memoization","3":"recursion","4":"simple","5":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/LFSTACK","time":{"view_start_date":1472317200,"submit_start_date":1472317200,"visible_start_date":1472317200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/mandarin/LFSTACK.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/russian/LFSTACK.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/vietnamese/LFSTACK.pdf">Vietnamese</a> as well.</h3>



<p>Sergey recently studied lock-free data structures. He particularly liked the data structure called Lock-Free Stack.</p>
<p>So, lock-free stack is basically an ordinary stack, which can be used by multiple threads of the same program. There are <b>N</b> threads, which do push and pop the numbers to this stack simultaneously.</p>
<p>In order to check his knowledge, Sergey implemented this data structure. But he was still unsure, whether his code works correct or not. So he made the test case of the following kind:
<ul>
<li>For every thread (say, the <b>i<sup>th</sup></b>), there is a list of <b>A<sub>i</sub></b> numbers, which will be pushed to the stack by this thread in this order (so, first, the first number from this list will be added, then the second one, and so on).</li>
</ul></p>
<p>So Sergey runs the program, the numbers get pushed to the stack from all the threads simultaneously. When all the threads are done with it, he wanted to pop all the numbers from the stack and to check the correctness of the output.</p>
<p>But it appeared to be not so easy problem, because in general, there could be a few different correct sequences he could obtain, because the order in which the processes add the numbers is not strictly defined. Moreover, the processes can interrupt in between.</p>
<p>For example, even if he had only two threads and for each of them, there was a list of <b>1</b> unique number, then there can be two valid orders: either the first thread added its' number first, or it was the second one.</p>
<p>The another example could be the following: if there are also two thread, the first one having the list <b>(1, 2)</b> and the second one having the list <b>(3, 4)</b>, then after doing all pops even the sequence <b>(4, 2, 3, 1)</b> is correct, because in this case:
<ul>
<li>First, the first thread added the first number <b>1</b> from its' list;</li>
<li>Then, the second thread added the first number <b>3</b> from its' list;</li>
<li>Then, the first thread added the second number <b>2</b> from its' list;</li>
<li>Then, the second thread added the second number <b>4</b> from its' list;</li>
</ul>
So since it is a LIFO (last in, first out) stack, after the pops we get the sequence <b>(4, 2, 3, 1)</b>.
</p>
<p>You are given the number of the threads and the list of integers to be added in order for each of the threads. You are also given a sequence. Determine, whether this sequence could be obtained after the process described above.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of threads.</p>
<p>Each of the following <b>N</b> lines contains the description of the numbers to be pushed in the following way: the first number in the list is <b>A<sub>i</sub></b>; the following numbers are the numbers <b>B<sub>i, 1</sub></b>, <b>B<sub>i, 2</sub></b>, ..., <b>B<sub>i, A<sub>i</sub></sub></b> denoting the numbers that will be added to the stack (in this order) by the <b>i</b><sup>th</sup> thread.</p>
<p>The last line on the test case contains <b>A<sub>1</sub></b>+<b>A<sub>2</sub></b>+...+<b>A<sub>N</sub></b> integer numbers, denoting the sequence Sergey got after he popped all the numbers from the stack.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing <b>Yes</b>, if Sergey could have got this sequence of numbers and <b>No</b> otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>15</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b></li>
<li><b>1</b> ≤ <b>B<sub>i, j</sub></b> ≤ <b>1000</b></li>
<li>Let's denote <b>P</b> = <b>(A<sub>1</sub> + 1) × (A<sub>2</sub> + 1) × ... × (A<sub>N</sub> + 1)</b></li>
<li><b>1</b> ≤ sum of <b>P</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtaks</h3>
<ul>
<li><b>Subtask #1 (33 points)</b>: <b>1</b> ≤ sum of <b>P</b> ≤ <b>1000</b></li>
<li><b>Subtask #2 (11 points)</b>: <b>N</b> = <b>1</b></li>
<li><b>Subtask #3 (56 points)</b>: no additional constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
2
2 1 2
2 3 4
4 3 2 1
2
2 1 2
2 3 4
4 1 2 3</tt>

<b>Output:</b>
<tt>Yes
No</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> First, the integers of the first thread were added: <b>1, 2</b>. Then, the integers of the second thread were added: <b>3, 4</b>. So the sequence of the additions is <b>1, 2, 3, 4</b>. Since it is a LIFO stack, when we pop, we get <b>4, 3, 2, 1</b>. This way, the given sequence is reachable.</p>
<p><b>Example case 2.</b> We need to get the following sequence of pushes to the stack: <b>3, 2, 1, 4</b>. So, <b>2</b> should be added before <b>1</b>. But only the first thread in the example can add these integers, and it will add <b>2</b> only <b>after</b> it has added <b>1</b>. So, the given configuration is impossible to obtain.</p>