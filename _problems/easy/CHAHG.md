---
{"category_name":"easy","problem_code":"CHAHG","problem_name":"Chef and His Garden","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"xcwgf666","date_added":"23-02-2015","tags":{"0":"aug16","1":"easy","2":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/CHAHG","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/CHAHG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/CHAHG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/CHAHG.pdf">Vietnamese</a> as well.</h3>


<p>Chef is an advocate for Go Green Initiative. Today he had <b>n</b> trees planted in a row outside his his restaurant. Today, the height of <b>i</b>-th tree is <b>h<sub>i</sub></b> feet. The trees grow at a rate of <b>m<sub>i</sub></b> feet per day.</p>

<p>Chef knows that trees will look beautiful if they form a <i>zig-zag</i> sequence. The trees will be said to be in <i>Zig-zag</i> sequence if the heights of tree first increases or decreases, then alternates between decreasing/increasing respectively. Formally, the trees will be said to in <i>Zig-zag</i> sequence if one of the following two conditions holds.

<ul>
<li><b>h<sub>1</sub> < h<sub>2</sub> > h<sub>3</sub> < h<sub>4</sub></b> and so on..</li>
<li><b>h<sub>1</sub> >  h<sub>2</sub> < h<sub>3</sub> > h<sub>4</sub></b> and so on..</li>
</ul>
</p>

<p>Chef wants to know intervals of time when the heights of the trees will form a <i>zig-zag</i> sequence.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains a single integer <b>n</b>, denoting the number of trees.</p>

<p>The <b>i<sup>th</sup></b> of following <b>N</b> lines contains two space separated integers <b>h<sub>i</sub></b> and <b>m<sub>i</sub></b>, denoting the initial height and the growth speed for <b>i</b><sup>th</sup> tree.
 </p>

<h3>Output</h3>
<p>For each test case, output an integer <b>Q</b> - the amount of the periods of consecutive moments of time, when the trees for a zig-zag sequence.</p>
<p>On the following <b>Q</b> lines, output the intervals of time when the trees' heights form a zig-zag sequence. For each intervals, output its' smallest and the largest instants of time. If the range is infinite, output <tt>Inf</tt> as the right bound.</p>
<p>The test cases are designed in such a way that the total output won't exceed 2 MB.</p>

<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10</b></li>

<li>Subtask 1 (23 points): <b>0</b> ≤ <b><b>h<sub>i</sub></b>, <b>m<sub>i</sub></b></b> ≤ <b>10</b></li>

<li>Subtask 2 (77 points): <b>0</b> ≤ <b><b>h<sub>i</sub></b>, <b>m<sub>i</sub></b></b> ≤ <b>10<sup>9</sup></b></li>

<li><b>1</b> ≤ sum of <b>n</b> over a test cases in a single test file ≤ <b>5 × 10<sup>5</sup></b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
3
0 1
2 2
0 3
2
2 1
1 2
3
1 1
2 2
3 3</tt>

<b>Output:</b>
<tt>1
0 1
2
0 0
2 Inf
0</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In the first case <b>0 2 0</b> is already a <i>zig-zag</i> sequence, but on the 2nd second it will become <b>2 6 6</b> and will never turn back into <i>zig-zag</i></p>