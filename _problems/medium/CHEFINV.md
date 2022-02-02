---
{"category_name":"medium","problem_code":"CHEFINV","problem_name":"Chef and Swaps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"24-03-2014","tags":{"0":"berezin","1":"fenwick","2":"inversions","3":"medium","4":"sept14"},"editorial_url":"http://discuss.codechef.com/problems/CHEFINV","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/CHEFINV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/CHEFINV.pdf">Russian</a>.</h3>
<p> </p>
<p>This time, Chef has given you an array <b>A</b> containing <b>N</b> elements.</p>
<p>He had also asked you to answer <b>M</b> of his questions. Each question sounds like: "How many inversions will the array <b>A</b> contain, if we swap the elements at the <b>i</b>-th and the <b>j</b>-th positions?". </p>
<p>The inversion is such a pair of integers (<b>i</b>, <b>j</b>) that <b>i &lt; j</b> and <b>A<sub>i</sub> > A<sub>j</sub></b>. </p>
<p> </p>
<h3>Input</h3>
<p>The first line contains two integers <b>N</b> and <b>M</b> - the number of integers in the array <b>A</b> and the number of questions respectively. </p>
<p>The second line contains <b>N</b> space-separated integers - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, respectively. </p>
<p>Each of next <b>M</b> lines describes a question by two integers <b>i</b> and <b>j</b> - the 1-based indices of the numbers we'd like to swap in this question. 

</p><p> </p>
<h3>Output</h3>
<p>Output <b>M</b> lines. Output the answer to the <b>i</b>-th question of the <b>i</b>-th line.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>2 * 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>i, j</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Mind that we don't actually swap the elements, we only answer "what if" questions, so the array doesn't change after the question.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6 3
1 4 3 3 2 5
1 1
1 3
2 5

<b>Output:</b>
5
6
0

</pre><p> </p>
<h3>Explanation</h3>
<p>Inversions for the first case: <b>(2, 3), (2, 4), (2, 5), (3, 5), (4, 5)</b>. </p>
<p>Inversions for the second case: <b>(1, 3), (1, 5), (2, 3), (2, 4), (2,5), (4, 5)</b>. </p>
<p>In the third case the array looks like <b>1 2 3 3 4 5</b> and there are no inversions. </p>
