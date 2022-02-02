---
{"category_name":"hard","problem_code":"REBTET","problem_name":"Nikitosh and Sauron-tetrahedron","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"rebryk","problem_tester":"iscsi","date_added":"24-04-2015","tags":{"0":"binomial","1":"fourier","2":"karatsuba","3":"medium","4":"nov15","5":"rebryk"},"editorial_url":"http://discuss.codechef.com/problems/REBTET","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/REBTET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/REBTET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/REBTET.pdf">Vietnamese</a> as well.</h3>
<p>
A <em>dark tetrahedron</em>'s size is said to be <b>N</b> if each of its edges consists of <b>N</b> segments.<br /><br />
To destroy a dark tetrahedron of size <b>N</b>, you have to erase at least <b>N</b> segments (you can't destroy a dark tetrahedron partially: the tetrahedron uses dark magic to self-cure if you erase less than <b>N</b> segments, and so it's the same as not erasing any segment). Also, to protect yourself from the tetraheldral curse, you must ensure that each vertex of a tetrahedron needs to have at least 2 incident segments. Note that a dark tetrahedron has 4 vertices, just like regular tetrahedrons.
</p>
<p>
A <em>Sauron-tetrahedron</em> of size <b>N</b> with resistance <b>K</b> is made of <b>N</b> dark tetrahedrons with sizes <b>1</b>, <b>2</b>, ... , <b>N</b>. To destroy a Sauron-tetrahedron, you have to destroy at least <b>K</b> of its constituent tetrahedrons.
</p>
<p>
Wizard Nikitosh needs to detroy a Sauron-tetahedron of size <b>N</b> with resistance <b>K</b> and he wants to know how many ways to destroy it are there. Since Nikitosh's creative juices only flow for wizardry, he needs your mathematical talent to solve this problem.<br /><br />
You also need to follow the wizard's order to output the answer modulo <b>10<sup>5</sup>+3</b>.
</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
For each test case, a single line contains two integers, <b>N</b> and <b>K</b>, representing the size of the super tetrahedron and its resistance.</p>
<h3>Output</h3>
<p>For each test case, output a single line. It must contain the number of ways to destroy a super tetrahedron of size <b>N</b> with resistance <b>K</b> (modulo <b>10<sup>5</sup>+3</b>).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>6*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points): <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask #2 (80 points): <b>1</b> ≤ <b>N</b> ≤ <b>6*10<sup>4</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
2 1

<b>Output:</b>
9
2439

</pre>