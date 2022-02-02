---
{"category_name":"medium","problem_code":"SUBTREE","problem_name":"Festivals","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"anton_lunyov","date_added":"25-12-2012","tags":{"0":"lca","1":"march13","2":"medium","3":"tree","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/SUBTREE","time":{"view_start_date":1363000423,"submit_start_date":1363000423,"visible_start_date":1363000281,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Chef is enjoying his vacation at the Tree city. As the name of it says, in this city, <b>N</b> locations, numbered from <b>1</b> to <b>N</b>, are connected by <b>N − 1</b> bidirectional roads. Each road connects two cities and you can travel between any pair of cities through this roads system. Each road has the length, which is some positive integer. For any two locations the distance between them is the sum of the roads lengths for the path that connects them.</p>
<p>Some festivals are regularly held in each location. Someday, several festivals (at least 2) take place at different locations. On that day people often participate in two festivals such that the distance between their locations is as large as possible. They move between these two locations to enjoy the festivals. Note that there may be more than one pair of locations satisfying this condition. The path connecting two such locations is called <i>an ideal path</i>.</p>
<p>Knowing this, the Chef wants to find an optimal road where he will open temporary fast-food restaurant to earn as much money as possible from hungry festival participants that move by this road. In his honest opinion the best such road is <b>the shortest road belonging to each ideal path</b>.</p>
<p>More formally he is asking you two questions as follows. Suppose in day <b>X</b>, there are <b>K</b> festivals that take place at <b>K</b> locations <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b> respectively.</p>
<ul>
<li>Find the distance between two furthest locations among the <b>K</b> locations listed above. Denote this value as <b>A</b>.</li>
<li>Find the road with the minimal length belonging to each ideal path. That is, each path of length <b>A</b>, that connects <b>F<sub>i</sub></b> and <b>F<sub>j</sub></b> for some <b>i</b> and <b>j</b>, should contain this road. Denote the length of this road as <b>B</b>. If there is no such road than <b>B</b> is set to <b>-1</b>.</li>
<li>Of course, Chef wants to know values <b>A</b> and <b>B</b>.</li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>, denoting the overall number of locations in the Tree city. Each of the following <b>N − 1 </b> lines describes a road and contains three space-separated integers <b>U</b>, <b>V</b> and <b>C</b>, which means that the road of length <b>C</b> connects locations <b>U</b> and <b>V</b>.<br/> The next line contains a single integer <b>Q</b>, denoting the number of questions Chef is asking you. Each of the following <b>Q</b> lines describes a question and contains an integer <b>K</b> followed by <b>K</b> space separated integers <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b>, denoting the locations where the festivals take place.</br/></p>
<h3>Output</h3>
<p>For each question, output on a separate line two space-separated integers <b>A</b> and <b>B</b>. Their meaning is described above.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>U</b>, <b>V</b> ≤ <b>N</b></li>
<li><b>U</b> ≠ <b>V</b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10000</b> (<b>10<sup>4</sup></b>)</li>
<li>It is guaranteed that the roads in the input describe a tree of <b>N</b> vertexes</li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b> ≤ <b>N</b></li>
<li><b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>K</sub></b> are different</li>
<li>The sum of <b>K</b> over the input does not exceed <b>200000</b> (<b>2 * 10<sup>5</sup></b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
1 2 3
1 4 2
1 5 2
2 3 3
2 6 3
2
2 2 5
4 3 4 5 6

<b>Output:</b>
5 2
8 3
</pre><h3>Explanation</h3>
<p><b>Example question 1.</b> The only ideal path is between 2 and 5. This path contains two roads: (5, 1) and (1, 2); and (5, 1) is the shortest road among them.</p>
<p><b>Example question 2.</b> The ideal paths are between the following pairs: (3 and 4), (4 and 6), (5 and 3), and (5 and 6). Only road (1, 2) belongs to each ideal path.</p>
