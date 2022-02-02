---
{"category_name":"easy","problem_code":"CIELMAP","problem_name":"Ciel and Map","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"C","4":"C99 strict","5":"CAML","6":"CLPS","7":"CPP 4.3.2","8":"CPP 4.9.2","9":"CPP14","10":"CS2","11":"D","12":"ERL","13":"FORT","14":"GO","15":"HASK","16":"ICON","17":"JAVA","18":"LISP clisp","19":"LISP sbcl","20":"LUA","21":"NEM","22":"NICE","23":"NODEJS","24":"PAS fpc","25":"PAS gpc","26":"PERL","27":"PHP","28":"PIKE","29":"PYTH","30":"RUBY","31":"SCALA","32":"SCM guile","33":"SCM qobi","34":"ST","35":"TCL"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":null,"date_added":"4-07-2012","tags":{"0":"cook24","1":"easy","2":"geometry","3":"laycurse"},"editorial_url":"http://discuss.codechef.com/problems/CIELMAP","time":{"view_start_date":1342982925,"submit_start_date":1342982925,"visible_start_date":1342982428,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Tomya is a girl. She loves Chef Ciel very much.
</p>

<p>
Tomya writes a tetragon (see the below <b>Notes 1</b> for details) in her map.
The map has <b>N</b> points, whose coordinate are (<b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>), denoting Ciel's restaurants.
Each vertex of the tetragon written by Tomya is one of the Ciel's restaurants.
</p>

<p>
Tomya doesn't show her tetragon in the map, but she says that she draws a long segment.
To guess her tetragon, please tell the maximum length of a segment which can be one of the sides in her tetragon. (See <b>Notes 2</b> for the definition of length)
</p>

<p>
<b>Notes 1</b>:<br />
A tetragon means a polygon with 4 sides.<br />
A tetragon must be simple, that is, the boundary of the tetragon does not cross itself.<br />
A tetragon does not have to be convex.<br />
</p>
<img src="http://www.codechef.com/download/CIELMAP2.png" width="300" height="301" /><br />

<p>
<b>Notes 2</b>:<br />
The length of a segment is defined as the Euclidean distance between the endpoints.
That is, the length of the segment (<b>x</b><sub>1</sub>, <b>y</b><sub>1</sub>) - (<b>x</b><sub>2</sub>, <b>y</b><sub>2</sub>) is the square root of (<b>x</b><sub>1</sub> - <b>x</b><sub>2</sub>)<sup>2</sup> + (<b>y</b><sub>1</sub> - <b>y</b><sub>2</sub>)<sup>2</sup>.
</p>


<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
The first line of each test case contains an integers <b>N</b>.
Then next <b>N</b> lines follow.
The <b>i</b>-th line contains 2 integers denoting <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>.
</p>

<h3>Output</h3>
<p>
For each test case, print the maximum length of a segment which can be one of sides in her tetragon.
This value must have an absolute error no more than 0.000001 (10<sup>-6</sup>).
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 1250<br />
4 ≤ <b>N</b> ≤ 1000<br />
1 ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ 5000<br />
The sum of <b>N</b> in one test file does not exceed 5000.<br />
No three points (<b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>), (<b>X<sub>j</sub></b>, <b>Y<sub>j</sub></b>), (<b>X<sub>k</sub></b>, <b>Y<sub>k</sub></b>) lie in the same line (1 ≤ <b>i</b> &lt; <b>j</b> &lt; <b>k</b> ≤ <b>N</b>)<br />
</p>

<h3>Sample Input</h3>
<pre>1
6
3 1
5 2
3 3
6 3
6 6
5 6</pre>

<h3>Sample Output</h3>
<pre>5.8309518948</pre>

<h3>Explanations</h3>
<p>
The below figure denotes one of the valid tetragons for the sample input.
The red segment is the longest segment which can be one of the sides in her tetragon.
</p>
<img src="http://www.codechef.com/download/CIELMAP.png" width="296" height="300" />