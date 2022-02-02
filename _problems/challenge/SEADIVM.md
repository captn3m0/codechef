---
{"category_name":"challenge","problem_code":"SEADIVM","problem_name":"Sereja and Matrix Division","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"10-09-2014","tags":{"0":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEADIVM","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/SEADIVM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/SEADIVM.pdf">Russian</a>.</h3>


<p> </p>
Sereja has a matrix with size <b>N*M</b>, a cell with coordinate <b>(i,j)</b> contains the integer <b>A[i][j]</b>. Sereja wants to divide the matrix into two parts between him and Dima. Sereja wants to choose <b>C</b> rectangles, i-th rectangle has coordinates <b>X1[i], Y1[i], X2[i], Y2[i]</b> (<b>1 <= X1[i] <= X2[i] <= N </b>, <b>1 <= Y1[i] <= Y2[i] <= M </b>, we assume that any cell with coordinate <b>(x, y)</b> fits condition <b>X1[i] <= x <= X2[i]</b> and <b>Y1[i] <= y <= Y2[i]</b> lies inside i-th rectangle). They need to be chosen in such a way that rectangles divide matrix in two equal parts. Lets <b>Q[x]</b> be number of number <b>x</b> from given matrix, that lies in at least one of the chosen rectangles, let <b>W[x]</b> be the opposite value - number of number <b>x</b> from the given matrix, that lies outside of each rectangle. Set of chosen rectangles divide matrix on two equal parts if and only if <b>Q[x]=W[x]</b> for all <b>x</b>.
<p> </p>
Help Sereja minimize number <b>C</b>. Also find <b>C</b> rectangles that divide matrix in two equal parts.
<p> </p>

<h3>Input</h3>
First line contains the number of test cases <b>T</b>. <b>T</b> tests follow. First line of each test case contains integers <b>N, M</b>. Each of the next <b>N</b> lines contains <b>M</b> integers. It is guaranteed that there is at least one required division. 
<p> </p>

<h3>Output</h3>
First line of each test case should contain number <b>C</b>. Each of next <b>C</b> lines contains four numbers - coordinates of a rectangle. Sum of squares of all chosen rectangles shouldn't exceed <b>N*M</b>.
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A[i][j]</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 5
1 2 3 4 5
5 4 3 2 1
6 7 8 9 10
6 7 8 9 10

<b>Output:</b>
2
1 1 1 5
4 1 4 5
</pre>
<p> </p>

<h3>Scoring</h3>
For each test case you will gain score <b>Y</b> as sum of all <b>C</b> in output. Lets <b>yourscore</b> is equal to sum of all <b>Y</b>. Score you will see on dashboard will be equal to <b>bestscore</b>/<b>yourscore</b>.

<h3>Tests generation</h3>
There will be five test cases. Each test case will contain <b>100</b> tests inside, in each test <b>N = M = 100</b>. Matrices are generated randomly and they are guaranteed to have at least one solution. 