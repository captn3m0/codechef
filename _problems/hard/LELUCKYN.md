---
{"category_name":"hard","problem_code":"LELUCKYN","problem_name":"Little Elephant and Lucky Segment","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"witua","problem_tester":null,"date_added":"6-06-2012","tags":{"0":"binary","1":"cook28","2":"maths","3":"medium","4":"witua"},"time":{"view_start_date":1353262903,"submit_start_date":1353262903,"visible_start_date":1353263400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
The Little Elephant from the Zoo of Lviv likes lucky digits. Everybody knows that the lucky digits are digits <b>4</b> and <b>7</b>.
</p>

<p>
This time he has an array <b>A</b> that consists of <b>N</b> integers: <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b>. Let <b>F4(x)</b> be the number of digits <b>4</b> in the decimal representation of <b>x</b>, and <b>F7(x)</b> be the number of digits <b>7</b> in the decimal representation of <b>x</b>. For example, <b>F4(5) = 0</b>, <b>F4(4467) = 2</b> and <b>F7(457747) = 3</b>.
</p>

<p>
Consider some pair of integers <b>L</b> and <b>R</b> such that <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b>. Let <b>C4</b> be the total number of digits <b>4</b> in decimal representation of integers <b>A[L], A[L + 1] ..., A[R]</b>, i. e.,
</p>

<p>
<b>C4 = F4(A[L]) + F4(A[L + 1]) + ... + F4(A[R])</b>.
</p>

<p>
Similarly, let <b>C7</b> be the the total number of digits <b>7</b> in decimal representation of integers <b>A[L], A[L + 1] ..., A[R]</b>, i. e.,
</p>

<p>
<b>C7 = F7(A[L]) + F7(A[L + 1]) + ... + F7(A[R])</b>.
</p>

<p>
The Little Elephant wants to know the number of such pairs <b>(L; R)</b> for which <b>C4<sup>C7</sup> ≤ R − L + 1</b>. But he believes that the number <b>2</b> is unlucky. Hence he discards all pairs where <b>C4 = 2</b> or <b>C7 = 2</b>.
</p>

<p>
Help the Little Elephant to find the answer for the problem.
</p>

<p>
<b>Remark.</b> <b>0<sup>0</sup> = 1</b>. It is a standard mathematical definition.
</p>

<h3>Input</h3>

<p>
The first line of the input contains a single integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains a single integer <b>N</b>, the size of the array <b>A</b> for the corresponding test case. The second line contains <b>N</b> space separated integers <b>A[1]</b>, <b>A[2]</b>, ..., <b>A[N]</b>.
</p>

<h3>Output</h3>

<p>
For each test case output a single line containing the answer for the corresponding test case.
</p>

<h3>Constraints</h3>
<p>
<b>1</b> ≤ <b>T</b> ≤ <b>3</b> <br />
<b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> <br />
<b>1</b> ≤ <b>A[i]</b> ≤ <b>10<sup>9</sup></b><br />
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
3
3
1 2 1
4
47 2 4 77548
1
777


<b>Output:</b>
6
5
1
</pre>

<h3>Explanation</h3>

<p>
<b>Case 1.</b> Here <b>C4 = C7 = 0</b> for all pairs <b>(L; R)</b>. So <b>0<sup>0</sup> = 1 ≤ R − L + 1</b> for each pair. There are <b>6</b> pairs <b>(L; R)</b> in all: <b>(1; 1), (1; 2), (1; 3), (2; 2), (2; 3), (3; 3)</b>. So the answer is <b>6</b>.
</p>

<p>
<b>Case 2.</b> Here we have 10 pairs of <b>(L; R)</b> in all. Consider them all.
</p>

<p>
<ul>
<li> <b>L = 1</b>, <b>R = 1</b>: <b>C4 = 1</b>, <b>C7 = 1</b>, <b>C4<sup>C7</sup> = 1<sup>1</sup> = 1 ≤ 1 = R − L + 1</b>. <b>The pair is counted.</b></li>
<li> <b>L = 1</b>, <b>R = 2</b>: <b>C4 = 1</b>, <b>C7 = 1</b>, <b>C4<sup>C7</sup> = 1<sup>1</sup> = 1 ≤ 2 = R − L + 1</b>. <b>The pair is counted.</b></li>
<li> <b>L = 1</b>, <b>R = 3</b>: <b>C4 = 2</b>, <b>C7 = 1</b>, <b>C4<sup>C7</sup> = 2<sup>1</sup> = 2 ≤ 3 = R − L + 1</b>. But the pair is not counted since <b>C4 = 2</b>.</li>
<li> <b>L = 1</b>, <b>R = 4</b>: <b>C4 = 3</b>, <b>C7 = 3</b>, <b>C4<sup>C7</sup> = 3<sup>3</sup> = 27 &gt; 4 = R − L + 1</b>. The pair is not counted.</li>
<li> <b>L = 2</b>, <b>R = 2</b>: <b>C4 = 0</b>, <b>C7 = 0</b>, <b>C4<sup>C7</sup> = 0<sup>0</sup> = 1 ≤ 1 = R − L + 1</b>. <b>The pair is counted.</b></li>
<li> <b>L = 2</b>, <b>R = 3</b>: <b>C4 = 1</b>, <b>C7 = 0</b>, <b>C4<sup>C7</sup> = 1<sup>0</sup> = 1 ≤ 2 = R − L + 1</b>. <b>The pair is counted.</b></li>
<li> <b>L = 2</b>, <b>R = 4</b>: <b>C4 = 2</b>, <b>C7 = 2</b>, <b>C4<sup>C7</sup> = 2<sup>2</sup> = 4 &gt; 3 = R − L + 1</b>. The pair is not counted. It is also not counted since <b>C4 = 2</b>, and also since <b>C7 = 2</b>.</li>
<li> <b>L = 3</b>, <b>R = 3</b>: <b>C4 = 1</b>, <b>C7 = 0</b>, <b>C4<sup>C7</sup> = 1<sup>0</sup> = 1 ≤ 1 = R − L + 1</b>. <b>The pair is counted.</b></li>
<li> <b>L = 3</b>, <b>R = 4</b>: <b>C4 = 2</b>, <b>C7 = 2</b>, <b>C4<sup>C7</sup> = 2<sup>2</sup> = 4 &gt; 2 = R − L + 1</b>. The pair is not counted. It is also not counted since <b>C4 = 2</b>, and also since <b>C7 = 2</b>.</li>
<li> <b>L = 4</b>, <b>R = 4</b>: <b>C4 = 1</b>, <b>C7 = 2</b>, <b>C4<sup>C7</sup> = 1<sup>2</sup> = 1 ≤ 1 = R − L + 1</b>. But the pair is not counted since <b>C7 = 2</b>.</li>
</ul>
</p>

<p>
As we see there are exactly <b>5</b> pairs <b>(L; R)</b> that satisfy required constraints.
</p>

<p>
<b>Case 3.</b> Here we have the only pair <b>(L; R) = (1; 1)</b> for which <b>C4 = 0</b>, <b>C7 = 3</b> and <b>C4<sup>C7</sup> = 0<sup>3</sup> = 0 ≤ 1 = R − L + 1</b>. So it is counted, and the answer is <b>1</b>.
</p>