---
{"category_name":"hard","problem_code":"SEGMENTQ","problem_name":"Segment Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"errichto","date_added":"16-01-2017","tags":{"0":"ltime44","1":"medium","2":"range","3":"segment","4":"xcwgf666"},"editorial_url":"https://discuss.codechef.com/problems/SEGMENTQ","time":{"view_start_date":1485622800,"submit_start_date":1485622800,"visible_start_date":1485622800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/mandarin/SEGMENTQ.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/russian/SEGMENTQ.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME44/vietnamese/SEGMENTQ.pdf">Vietnamese</a> as well.</h3>

<p>Consider a 1D-grid with <b>N</b> points, numbered <b>1</b>, <b>2</b>, ..., <b>N</b> from left to right. The segment is denoted by a pair [<b>L</b>, <b>R</b>] and contains all the points with the indices between <b>L</b> and <b>R</b> inclusively.</p>

<p>Some of the points can be marked. Initially all the points are unmarked.</p>

<p>Sergey wants to develop a data structure that would help him to answer the following two types of queries efficiently on the segments:
<ul>
<li><b>0 L R</b> : Add a segment, which starts at <b>L</b> and ends at <b>R</b> to the data structure if it has at least one un-marked point. During the operations, there can be multiple segments with the same end points. </li> </br>
<li><b>1 P</b> : Mark the point <b>P</b> and output the number of the segments that have <b>just</b> become activated. The segment is activated when all it's points are marked. In other words, you have to tell the number of segments added in the data structure that were earlier deactivated, but now have become activated due to the marking of point <b>P</b>.</li>
</ul>
</p>
<p>Please help Sergey to construct a suitable data structure. This is an <i>on-line</i> problem. That means that you won't see the next query until you answer the previous one; in other words that means that you will see only one query at a time. For seeing next query, you must answer the current query.
</p>


<h3>Input</h3>
<p>The first line of the input contains a pair of integers <b>N</b> and <b>Q</b> denoting the number of points and the number of queries.</p>

<p>Then you will get a query in one of two forms described above. Please flush the standard output after answering a query to be able to read the following one. The details about flushing the standard output can be seen in the Note section at the end of the statement.</p>

<h3>Output</h3>
<p>After each query of the type <b>1</b>, output the number of just activated segments.</p>

<h3>Constraints</h3>
<ul>
<li>No point will be marked twice or more times.</li>
<li><b>1</b> ≤ <b>P</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (18 points):</b> <b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>Subtask #2 (41 point):</b> <b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>Subtask #3 (41 point):</b> <b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 7
0 1 2
0 2 3
1 2
0 2 2
0 3 3
1 3
1 1</tt>

<b>Output:</b>
<tt>0
2
1</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> In the first two queries, we add the segments <b>[1, 2]</b> and <b>[2, 3]</b>, respectively.  The we first mark the point <b>2</b>, the only segment that can be activated is <b>[2; 2]</b>. But since such segment is not yet present in the data structure, nothing will be activated that time.</p>
<p>Then we try to add the segment <b>[2, 2]</b>. Please note that it won't be added, because all its' points are marked already. So nothing will happen on this addition.</p>
<p>When we mark the point <b>3</b>, the following segments are activated: <b>[2, 3]</b> (added in the second query) and <b>[3, 3]</b> (added in the fifth query). That's why the answer after this query is <b>2</b>.</p>
<p>On the last query all the points will become marked and the remaining segment <b>[1, 2]</b> will become activated. So the answer is <b>1</b>.</p>

<h3>Note</h3>
<p>You can flush the standard output by using fflush(stdout) in C++, System.out.flush() in Java, sys.stdout.flush() in Python. Flushing the standard output means, that it will force the standard output stream to write any buffered characters.</p>