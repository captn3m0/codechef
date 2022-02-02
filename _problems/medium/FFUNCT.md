---
{"category_name":"medium","problem_code":"FFUNCT","problem_name":"Fun and Functions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"7-03-2015","tags":{"0":"snck15el","1":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/FFUNCT","time":{"view_start_date":1434135600,"submit_start_date":1434135600,"visible_start_date":1434135600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/mandarin/FFUNCT.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/russian/FFUNCT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK15EL/vietnamese/FFUNCT.pdf">Vietnamese</a></h3>


<p>You are given <b>N</b> boolean functions. Formally, each boolean function is a mapping from <b>{0, 1}<sup>K</sub></b> to <b>{0, 1}</b>, where <b>K</b> is a number of variables of the function. Different functions in this problem can have different parameters of <b>K</b>.</p> 

<p>We describe a boolean function <b>F(x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>K</sub>)</b> by a string of <b>2<sup>K</sup></b> characters. Let's enumerate these characters from <b>0</b> to <b>2<sup>K</sup>-1</b>. Let's take the <b>i</b>-th character of this string. This character will correspond to the value of the boolean function <b>F</b> on the set of parameters, corresponding to the last <b>K</b> bits of <b>i</b> in binary representation. For better understanding, let us have boolean function of <b>K = 3</b> variables, described by a string <b>S = 10101010</b>. The value of <b>F(0, 0, 0)</b> is one, because in binary representation "000" is zero, and <b>S[0] = 1</b>. The value of F(0, 1, 1) is zero, because "011" in binary representation is three, and <b>S[3] = 0</b>.</p>

<p>Consider a set of boolean functions <b>{F<sub>1</sub>, F<sub>2</sub>, ..., F<sub>M</sub>}</b>. We can combine the functions of this set, thus, obtaining the new functions. One function can be used as much times as possible in a single combination. For example, if we have set of two functions: <b>{F<sub>1</sub>(x<sub>1</sub>, x<sub>2</sub>), F<sub>2</sub>(y<sub>1</sub>, y<sub>2</sub>, y<sub>3</sub>)}</b>, we can obtain the following functions:
<ul>
<li><b>G<sub>1</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>, z<sub>4</sub>) = F<sub>1</sub>(F<sub>2</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>), F<sub>2</sub>( z<sub>2</sub>, z<sub>3</sub>, z<sub>4</sub>))</b></li>

<li><b>G<sub>2</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>, z<sub>4</sub>, z<sub>5</sub>) = F<sub>1</sub>(F<sub>2</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>), F<sub>2</sub>( z<sub>2</sub>, z<sub>3</sub>, z<sub>4</sub>))</b></li>

<li><b>G<sub>3</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>, z<sub>4</sub>) = F<sub>1</sub>(F<sub>2</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>), F<sub>1</sub>( z<sub>2</sub>, z<sub>4</sub>))</b></li>

<li><b>G<sub>4</sub>(z<sub>1</sub>) = F<sub>1</sub>(F<sub>2</sub>(z<sub>1</sub>, z<sub>1</sub>, z<sub>1</sub>), F<sub>1</sub>( z<sub>1</sub>, z<sub>1</sub>))</b></li>

<li><b>G<sub>5</sub>(z<sub>1</sub>, z<sub>2</sub>, z<sub>3</sub>, z<sub>4</sub>) = F<sub>1</sub>(F<sub>1</sub>( F<sub>1</sub>(z<sub>1</sub>, z<sub>2</sub>), F<sub>1</sub>(z<sub>1</sub>, z<sub>2</sub>)), F<sub>1</sub>( F<sub>1</sub>(z<sub>3</sub>, z<sub>4</sub>), F<sub>1</sub>(z<sub>3</sub>, z<sub>4</sub>)))</b></li>

<li>These are just examples. In fact, you can obtain an infinite number of boolean functions by combination of boolean functions from any non-empty set of boolean functions.</li>

</ul>
</p>

<p>We will call a set of boolean functions appropriate in case any boolean function of any number of variables can be obtained by combining boolean functions from this set.</p>

<p>There is an array of boolean functions. You are to maintain two types of queries:

<ul>

<li><b>u p S</b> - the <b>p</b>-th boolean function becomes equal to the one that is described by a string <b>S</b>. You can assume that <b>S</b> will always denote a boolean function, i.e. its' length will always be equal to a power of two.</li>

<li><b> q L R</b> - write out the boolean functions from the <b>L</b>-th to the <b>R-th</b> inclusively. Calculate the number of subsets of the obtained multiset of functions that are appropriate. This number can be huge, so please evaluate it modulo <b>10<sup>9</sup>+7</b>.</li>

</ul>

</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>N</b>, denoting the number of functions.</p>

<p>Each of the following <b>N</b> will contain <b>2<sup>K<sub>i</sub></sup></b> characters, each of them will be either zero or one and will denote the value of the boolean function on the corresponding set of variables. Here, <b>K<sub>i</sub></b> is the number of variables in the <b>i</b>-th boolean function.</p>

<p>The next line contains a single integer <b>Q</b>, denoting the number of queries.</p>

<p>The following <b>Q</b> lines describe the queries in the format described above.</p>

<h3>Output</h3>
<p>For each q-type query output a line, containing an answer to the problem (i.e. the required number of subsets), modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1 ≤ N, Q ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ L ≤ R ≤ N</b></li>
<li><b>1 ≤ p ≤ N</b></li>
<li><b>2 ≤ |S| ≤ 16. |S|</b> will always be a power of two.</li>
<li><b>1 ≤ K<sub>i</sub> ≤ 4</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
3
0001
0111
10
3
q 1 3
u 3 10101010
q 2 3

<b>Output:</b>
3
1
</pre>
<p> </p>

<h3>Explanation</h3>
<p>The first function of an initial array corresponds to conjunction (AND operation), the second one corresponds to disjunction (OR operation) and the third one corresponds to negation (NOT operation).</p>

<p>In the second query we replace the third function in the array (negation) to the function that does not have a common name.</p>