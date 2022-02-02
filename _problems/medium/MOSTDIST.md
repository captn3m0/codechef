---
{"category_name":"medium","problem_code":"MOSTDIST","problem_name":"Most Distant Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"24-10-2014","tags":{"0":"cook52","1":"easy","2":"geometry","3":"heap","4":"kostya_by","5":"manhattan"},"editorial_url":"http://discuss.codechef.com/problems/MOSTDIST","time":{"view_start_date":1416768043,"submit_start_date":1416768043,"visible_start_date":1416767794,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/MOSTDIST.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/MOSTDIST.pdf">Russian</a> as well.</h3>
<p>
	Let's consider a set of points <b>S</b>. Initially, <b>S</b> is an empty set. Your task is to implement a data structure that can process the following queries efficiently:
</p>
<p><ul>
<li type="1">
			"+ <b>X</b> <b>Y</b>" - add a new point <b>P</b> with coordinates (<b>X</b>, <b>Y</b>) to <b>S</b>. It's guaranteed that this point will not be in <b>S</b>.
		</li>
<li type="1">
			"- <b>N</b>" - remove a point that was added during the <b>N</b>'th adding query from <b>S</b>. All of the adding queries are numbered in the order of their appearance starting from 1 (queries of other types are not included). It's guaranteed that this point is in <b>S</b>.
		</li>
<li type="1">
			"? <b>X</b> <b>Y</b>" - calculate the maximal Manhattan distance between a point <b>P</b> with coordinates (<b>X</b>, <b>Y</b>) and any point from <b>S</b>. It's guaranteed that <b>S</b> will not be empty.
		</li>
</ul>
</p>
<p>
	In addition, you won't be given the exact query data, but instead should decode it in the following way:
</p>
<p>
	Let's store the result of the last processed query of the third type in a variable called <b>ANSWER</b>. Initially, <b>ANSWER</b> is equal to 0. You will be given <b>X'</b>, <b>Y'</b> and <b>N'</b> instead of the real values of <b>X</b>, <b>Y</b> and <b>N</b>. To get the real data you should perform the following computations:
</p>
<p><ul>
<li>
			<b>X</b> = <b>X'</b> xor <b>ANSWER</b>;
		</li>
<li>
			<b>Y</b> = <b>Y'</b> xor <b>ANSWER</b>;
		</li>
<li>
			<b>N</b> = <b>N'</b> xor <b>ANSWER</b>.
		</li>
</ul>
</p>
<p>
	Don't forget to update the value of <b>ANSWER</b> after processing each query of the third type.
</p>
<h3>Note</h3>
<p>
	Maybe some of you aren't familiar with some terms in the statement. Here are some articles that could help you understand the problem correctly:</p>
<ul>
<li>XOR operation: <a href="http://en.wikipedia.org/wiki/Exclusive_or">http://en.wikipedia.org/wiki/Exclusive_or</a></li>
<li>Manhattan distance: <a href="http://en.wikipedia.org/wiki/Taxicab_geometry">http://en.wikipedia.org/wiki/Taxicab_geometry</a></li>
</ul>

<h3>Input</h3>
<p>
	The first line of the input contains one integer <b>Q</b> denoting the number of queries to process.
</p>
<p>
	Each of the next <b>Q</b> lines contains a query to process in the format described above.
</p>
<h3>Output</h3>
<p>
	For each query on the third type you should output your answer on a new line.
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>Q</b> ≤ 500,000(5 × 10<sup>5</sup>);</p>
<p>0 ≤ <b>X'</b>, <b>Y'</b>, <b>N'</b>  &lt; 2<sup>31</sup> for each query;</p>
<p>0 ≤ <b>X</b>, <b>Y</b> ≤ 10<sup>9</sup> for each query.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10
+ 8 1
- 1
+ 3 9
? 8 4
? 8 8
? 12 0
+ 6 5
? 7 8
? 4 5
- 9

<b>Output:</b>
10
8
2
4
11

</pre><h3>Explanations</h3>
<p>Here's a non-encrypted version of the example:</p>
<pre>
10
+ 8 1
- 1
+ 3 9
? 8 4
? 2 2
? 4 8
+ 4 7
? 5 10
? 0 1
- 2
</pre><p>The answers are the same.</p>
