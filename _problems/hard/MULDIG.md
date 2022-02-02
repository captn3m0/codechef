---
{"category_name":"hard","problem_code":"MULDIG","problem_name":"Multiplication Program","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"1-05-2017","tags":{"0":"errichto","1":"implementation","2":"july17","3":"medium","4":"simulation"},"editorial_url":"https://discuss.codechef.com/problems/MULDIG","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/MULDIG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/MULDIG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/MULDIG.pdf">Vietnamese</a> as well.</h3>

<p>Bear Limak hopes you can solve the following problem. You are given an integer <b>B</b> which is equal to 3, 5 or 7.
Your goal will be to print a sequence of moves that are able to multiply any two 2-digit numbers X and Y in base <b>B</b>.</p>

<p>Consider a computer memory consisting of 10<sup>5</sup> cells, numbered 0 through 10<sup>5</sup>-1, each storing one digit (in base <b>B</b>, a digit must be between 0 and <b>B</b> - 1, inclusive). Let t<sub>i</sub> denote the digit in the i-th cell. Initially:</p>

<ul>
<li>t<sub>i</sub> = i for i < <b>B</b></li>
<li>t<sub><b>B</b></sub> and t<sub><b>B</b>+1</sub> are digits of the number X, so X = t<sub><b>B</b></sub> * <b>B</b> + t<sub><b>B</b>+1</sub></li>
<li>t<sub><b>B</b>+2</sub> and t<sub><b>B</b>+3</sub> are digits of the number Y, so Y = t<sub><b>B+2</b></sub> * <b>B</b> + t<sub><b>B</b>+3</sub></li>
<li>t<sub>i</sub> = 0 for all i > <b>B</b>+3</li>
</ul>

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/JULY17/a9oimq.jpg" height="200"/>
<p></p>

<p>The first of the two drawings above shows the initial situation for <b>B</b> = 5 and multiplying numbers 8 and 4 (represented in base 5 as 13 and 04 respectively).
After applying your sequence of moves, the result of the multiplication should be stored in cells <b>B</b>+4, <b>B</b>+5, <b>B</b>+6, <b>B</b>+7, which is shown in the second drawing (please note that 8 * 4 = 32 and this number is represented as 0112 in base 5).
Except for those 4 cells containing the answer, the final value of t<sub>i</sub> doesn't matter.
In particular, you are allowed to change values in the first <b>B+4</b> cells.</p>

<p>You should choose one function F : [0,<b>B</b>-1] × [0,<b>B</b>-1] -> [0,<b>B</b>-1].
It means that the function F should take two digits and return one, where each digit is in the set {0, 1, ..., <b>B</b>-1}. One example of F is addition F(x, y) = (x + y) % <b>B</b>.
We don't require any particular properties from F (e.g. associativity or symmetricity).</p>

<p>You should create a sequence of at most 10<sup>5</sup> moves.
In each move, choose three cells c1, c2 and c3, not necessarily distinct.
The result of F for digits in cells c1 and c2 will be computed, and then written in the cell c3.
In other words, in C++ or Python it's the operation t[c3] = F(t[c1], t[c2]).
For every possible pair of 2-digit numbers X and Y, your sequence of moves should produce the correct answer X * Y as described above.</p>



<h3>Input</h3>

<p>The only line of the input contains a single integer <b>B</b>, denoting the base.</p>



<h3>Output</h3>

<p>You should first print the description of the function F that you choose, and then the chosen sequence of moves.</p>

<p>First print <b>B</b> lines.
The i-th line should contain <b>B</b> space-separated integers F(i,0), F(i,1), ..., F(i,<b>B</b>-1).</p>

<p>In the next line, print a single integer K, denoting the number of moves in the sequence.</p>

<p>In the i-th of the next K lines, print three space-separated integers c1, c2, c3 (each between 0 and 10<sup>5</sup>-1 inclusive), describing the i-th move.</p>



<h3>Subtasks</h3>

There are 5 subtasks, each worth 20 points.

<ol>
<li><b>B</b> = 3 and the checker checks only if your program works correctly for X and Y consisting of digits 0 and 1 only (in base <b>B</b>).</li>
<li><b>B</b> = 3</li>
<li><b>B</b> = 5</li>
<li><b>B</b> = 5 and the first digit (in base <b>B</b>) of X and the first digit of Y are both 0. In other words: X, Y < <b>B</b>.</li>
<li><b>B</b> = 7</li>
</ul>




<h3>Example</h3>

<pre><b>Input:</b>
3

<b>Output (please note that it's incorrect):</b>
1 1 2
2 2 2
0 1 0
2
1 6 7
0 0 0
</pre>



<h3>Explanation</h3>

<p>The provided output has valid formatting but isn't correct. Let's analyze the printed moves to multiply X = 7 and Y = 5.
These X and Y in base 3 are 21 and 12 respectively, so the initial numbers in cells are: 0, 1, 2, 2, 1, 1, 2, 0, 0, ...</p>

<p>The first operation is t[7] = F(t[1], t[6]) = F(1, 2) = 2, so now we have cells: 0, 1, 2, 2, 1, 1, 2, <b>2</b>, 0, ...</p>

<p>The second operation is t[0] = F(t[0], t[0]) = F(0, 0) = 1, so we will have: <b>1</b>, 1, 2, 2, 1, 1, 2, 2, 0, ...</p>

<p>After those two operations, cells 7, 8, 9, 10 should contain the product X * Y = 35, while in fact the contain digits 2, 0, 0, 0, what represents a number 2 * 3<sup>3</sup> = 2 * 27 = 54.
The printed sequence of moves should correctly multiply any two 2-digit numbers X, Y, so this particular output would get verdict Wrong Answer.</p>