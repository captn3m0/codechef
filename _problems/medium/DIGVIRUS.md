---
{"category_name":"medium","problem_code":"DIGVIRUS","problem_name":"Bear and Digit Virus","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"lg5293","date_added":"29-04-2017","tags":{"0":"ad","1":"bfs","2":"errichto","3":"ltime47","4":"medium"},"time":{"view_start_date":1493485200,"submit_start_date":1493485200,"visible_start_date":1493485200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/mandarin/DIGVIRUS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/russian/DIGVIRUS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME47/vietnamese/DIGVIRUS.pdf">Vietnamese</a> as well.</h3>

<p>There are 10 types of viruses — one type with strength 0, one type with strength 1, and so on, up to the last type with strength 9.</p>

<p>Limak examines the behavior of a row of N viruses, indexed 1 through N. The initial situation is represented by a string <b>S</b> that consists of N digits, denoting the strengths of the viruses.</p>

<p>Stronger viruses will slowly defeat the weaker ones and convert them into their own type. While it's easy for a very strong virus to defeat a very weak one, the distance between them is an obstacle. Formally, we say that a virus with index x affects (tries to attack) a virus with index y (1 ≤ x, y ≤ N) if and only if:</p>

<p>strength(x) - strength(y) ≥ |x - y|</p>

<p>For example, a virus with strength 8 affects a virus with strength 5 if and only if the distance between them (the absolute difference between indices) is at most 3. Also, a virus always affects itself. Note that a virus can never affect stronger viruses.</p>

<p>In one second, simultaneously, each virus V is replaced with a virus whose type is the strongest among all the viruses that were affecting V at that moment.</p>

<p>Limak wants to know when this process will stop, i.e. when all N viruses will have the same type.
It can be proved that such a situation must happen eventually.
Can you help Limak and compute the number of seconds after which the process will stop?</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The only line of each test case contains one string <b>S</b>, consisting of digits '0' through '9'.
We have let N denote the length of <b>S</b>.</p>


<h3>Output</h3>

<p>For each test case, output a single line containing one integer — the number of seconds the process will last (after which all N viruses will have the same type).</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>1 ≤ N ≤ 150,000</li>
</ul>


<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): 1 ≤ <b>N</b> ≤ 50</li>
<li>Subtask #2 (30 points): It's guaranteed that the answer won't exceed 10.</li>
<li>Subtask #3 (10 points): <b>S</b> contains digits '0' and '1' only.</li>
<li>Subtask #4 (40 points): Original constraints.</li>
</ul>


<h3>Example</h3>

<pre><b>Input:</b>
3
555755555
311110000000000
07788000744

<b>Output:</b>
3
6
4
</pre>


<h3>Explanation</h3>
<p><b>Test case 1.</b> In the string 555755555, the virus with index 4 (the one with strength 7) affects two viruses to the left, and two viruses to the right, i.e. viruses with indices 2, 3, 5 and 6. These four viruses will be changed to strength 7 after the first second. The new string will be 577777555.</p>

<p>In the next second, viruses with indices 1, 7 and 8 will be changed, and the string will become 777777775.</p>

<p>Finally, in the third second, the last virus will be changed to strength 7 as well.
The process stops after 3 seconds in total.</p>

<p><b>Test case 2.</b> The string changes in the following way:</p>

<ul>
<li>311110000000000 initially</li>
<li>333111000000000 after 1 second</li>
<li>333331100000000 after 2 seconds</li>
<li>333333330000000 after 3 seconds</li>
<li>333333333330000 after 4 seconds</li>
<li>333333333333330 after 5 seconds</li>
<li>333333333333333 after 6 seconds</li>
</ul>

<p><b>Test case 3.</b> The string changes in the following way:</p>

<ul>
<li>07788000744 initially</li>
<li>87888888777 after 1 second</li>
<li>88888888877 after 2 seconds</li>
<li>88888888887 after 3 seconds</li>
<li>88888888888 after 4 seconds</li>
</ul>