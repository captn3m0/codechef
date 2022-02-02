---
{"category_name":"easy","problem_code":"PETERSEN","problem_name":"Petersen Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"25-10-2014","tags":{"0":"bfs","1":"cook52","2":"graphs","3":"kostya_by","4":"simple","5":"traversal"},"editorial_url":"http://discuss.codechef.com/problems/PETERSEN","time":{"view_start_date":1416767862,"submit_start_date":1416767862,"visible_start_date":1416767794,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/PETERSEN.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/PETERSEN.pdf">Russian</a> as well.</h3>
<p>
	The following graph <b>G</b> is called a <a href="http://en.wikipedia.org/wiki/Petersen_graph">Petersen graph</a> and its vertices have been numbered from <b>0</b> to <b>9</b>. Some letters have also been assigned to vertices of <b>G</b>, as can be seen from the following picture:
</p>
<p>
	<img src="//www.codechef.com//download/Petersen1tinysvg.png" width="300" />
</p>
<p>
	Let's consider a walk <b>W</b> in graph <b>G</b>, which consists of <b>L</b> vertices <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>L</sub></b>, such that <b>W<sub>i</sub></b> is connected with <b>W<sub>i + 1</sub></b> for 1 ≤ <b>i</b> &lt; <b>L</b>. A string <b>S</b> of <b>L</b> letters <b>'A'-'E'</b> is realized by walk <b>W</b> if the sequence of letters written along <b>W</b> is equal to <b>S</b>. Vertices can be visited multiple times while walking along <b>W</b>.
</p>
<p>For example, <b>S</b> = <b>'ABBECCD'</b> is realized by <b>W</b> = (0, 1, 6, 9, 7, 2, 3).</p>
<p>Your task is to determine whether there is a walk <b>W</b> which realizes a given string <b>S</b> in graph <b>G</b>, and if so, find the lexicographically least such walk.</p>
<h3>Input</h3>
<p>
	The first line of the input contains one integer <b>T</b> denoting the number of testcases to process.
</p>
<p>
	The only line of each testcase contains one string <b>S</b>. It is guaranteed that <b>S</b> only consists of symbols <b>'A'-'E'</b>.
</p>
<h3>Output</h3>
<p>
	The output should contain exactly <b>T</b> lines, one line per each testcase in the order of their appearance. For each testcase, if there is no walk <b>W</b> which realizes <b>S</b>, then output <b>-1</b>. Otherwise, you should output the least lexicographical walk <b>W</b> which realizes <b>S</b>. Since all of the vertices are numbered from <b>0</b> to <b>9</b>, then it can be encoded as a string consisting of symbols <b>'0'-'9'</b> (see the "Examples" section for more details).
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 8;</p>
<p>1 ≤ <b>|S|</b> ≤ 100000(10<sup>5</sup>).</p>
<h3>Examples</h3>
<pre><b>Input:</b>
2
AAB
AABE

<b>Output:</b>
501
-1
</pre>