---
{"category_name":"hard","problem_code":"CNTDSETS","problem_name":"Counting D-sets","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.3,"source_sizelimit":50000,"problem_author":"mugurelionut","problem_tester":null,"date_added":"28-08-2013","tags":{"0":"combinatorics","1":"hard","2":"inclusn","3":"jan14","4":"mugurelionut"},"editorial_url":"http://discuss.codechef.com/problems/CNTDSETS","time":{"view_start_date":1389605400,"submit_start_date":1389605400,"visible_start_date":1389605400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/CNTDSETS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/CNTDSETS.pdf">Russian</a>.</h3>
<p>Chef likes points located at integer coordinates in a space having <b>N</b> dimensions. In particular, he likes sets of such points having diameter <b>exactly equal to D</b> (called <it>D-sets</it>). The diameter of a set of points is the maximum distance between any pair of points in the set. The distance between two points <b>(a<sub>1</sub>,a<sub>2</sub>,...,a<sub>N</sub>)</b> and <b>(b<sub>1</sub>,b<sub>2</sub>,...,b<sub>N</sub>)</b> is <b>max{|a<sub>1</sub>-b<sub>1</sub>|, |a<sub>2</sub>-b<sub>2</sub>|, ..., |a<sub>N</sub>-b<sub>N</sub>|}</b>.
</p>
<p>
Chef would like to know how many D-sets exist. However, he soon realized that, without any extra constraints, there is an infinite number of D-sets. Thus, he would only like to count the number of classes of D-sets, such that any two D-sets which belong to the same class are equivalent under translation. To be more precise, two D-sets <b>X</b> and <b>Y</b> are considered equivalent (and belong to the same class) if:
<ul>
<li>they contain the same number of points <b>AND</b>
</li><li>there exists a tuple of <b>N</b> integer numbers <b>(t<sub>1</sub>, ..., t<sub>N</sub>)</b> such that by translating each point of <b>X</b> by the amount <b>t<sub>i</sub></b> in dimension <b>i</b> (<b>1≤i≤N</b>) we obtain the set of points <b>Y</b>.</li>
</ul>
</p>
<p>
Let's consider <b>N=2</b>, <b>D=4</b> and the following sets of points <b>X={(1,2), (5,5), (4,3)}</b> and <b>Y={(2,5), (5,6), (6,8)}</b>. Let's consider now the tuple <b>(1,3)</b>. By translating each point of <b>X</b> by the amounts specified by this tuple we obtain the set <b>{(2,5), (6,8), (5,6)}</b>, which is exactly the set <b>Y</b>. Thus, the two sets <b>X</b> and <b>Y</b> are equivalent and belong to the same class.
</p>
<p>
Help Chef find the number of classes of D-sets <b>modulo 1000000007</b> (<b>10<sup>9</sup>+7</b>).
</p>
<h3>Input</h3>
<p>The first line of input contains the number of test cases <b>T</b>. Each of the next <b>T</b> lines contains two space-separated integers describing a test case: <b>N</b> and <b>D</b>.</p>
<h3>Output</h3>
<p>For each test case (in the order given in the input), output the number of classes of D-sets <b>modulo 1000000007</b>.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>1000000000</b>  (<b>10<sup>9</sup></b>)</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 10
2 1
2 10
3 1
3 3
</pre><p> </p>
<pre>
<b>Output:</b>
512
9
498134775
217
548890725
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1:</b><br />
When <b>N=1</b> all the points are arranged in a line. In order to have a diameter equal to <b>10</b> each D-set must contain two points at distance <b>10</b>. Between two such points there may be up to <b>9</b> points which may belong to the D-set or not. Thus, there are <b>2<sup>9</sup>=512</b> classes of D-sets.
</p>
<p><b>Example case 2:</b><br />
There are <b>9</b> classes of D-sets. One D-set from each class is given below:
<ul>
<li>{(0,0), (0,1)}</li>
<li>{(0,0), (1,0)}</li>
<li>{(0,0), (1,1)}</li>
<li>{(0,1), (1,0)}</li>
<li>{(0,0), (0,1), (1,0)}</li>
<li>{(0,0), (0,1), (1,1)}</li>
<li>{(0,0), (1,0), (1,1)}</li>
<li>{(0,1), (1,0), (1,1)}</li>
<li>{(0,0), (0,1), (1,0), (1,1)}</li>
</ul>
</p>
