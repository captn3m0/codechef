---
{"category_name":"challenge","problem_code":"SEAFUNC","problem_name":"Sereja and Functions (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"21-11-2015","tags":{"0":"challenge","1":"greedy","2":"math","3":"sept17","4":"sereja"},"editorial_url":"https://discuss.codechef.com/problems/SEAFUNC","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/SEAFUNC.pdf">mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/SEAFUNC.pdf">vietnamese</a> as well.</h3>

<p>Sereja is stuck with a problem and asks for your help. You readily agree to help Sereja and he poses the following problem to you. </p>

<p>Sereja has a matrix <b> A</b> of size <b>N x N</b>. Each cell in row <b>i</b> and column <b>j</b> contains a number <b>A[i][j]</b>. Every element of the matrix can either be <b>0</b> or <b>1</b>. Initially, all the elements are zero. </p>

<p>Sereja informs you that he only likes the functions of the form</p>
<img height="50" src="https://discuss.codechef.com/upfiles/cheffunc.png"/>
<p>Here the division is integer division, i.e. x/y means integer division of x by y.
</p>

<p>Sereja can choose a set of integers <b>a<sub>1</sub>, a<sub>2</sub>, b<sub>1</sub>, b<sub>2</sub>, c<sub>1</sub>, c<sub>2</sub>, d</b> and two other integers <b>l, r</b> and <b>applies</b> the function <b>f</b> to the matrix as follows. He will substitute 1 in the every cell <b>(i, j)</b> where <b>l ≤ i ≤ r</b> and <b>j = f(i)</b>.</p>

<p>Sereja gives you a matrix <b>A</b> after applying a certain number of functions to it. He asks you to find the minimal amount of functions such that after applying them Sereja will get the matrix A. You need not create the matrix <b>A</b> exactly, you are allowed to have at most <b>100 distinct cells</b> in the matrix obtained after your operations and the matrix <b>A</b>. Your task is to minimize the number of such functions applied.</p>

<h3>Input</h3>
<p> The first line of input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>First line of each test case contains an integer <b>N</b>. Each of the next <b>N</b> lines contains <b>N</b> digits (zero or one) without spaces denoting the matrix <b>A</b>.</p>

<h3>Output</h3>
<p>For each test case in first line output an integer corresponding to the number of functions <b>Q</b>.</p>
<p>Next <b>Q</b> lines should contain information about functions. Each lines should contain set of integers <b>a<sub>1</sub>, a<sub>2</sub>, b<sub>1</sub>, b<sub>2</sub>, c<sub>1</sub>, c<sub>2</sub>, d</b>, l, r</b>. </p>
<p>The following constraints must be satisfied for the output.</p>
<ul>
<li><b>0</b> ≤ <b>Q</b> ≤ <b>N*N</b></li>
<li><b>-N</b> ≤ <b>a<sub>1</sub>, b<sub>1</sub>, c<sub>1</sub>, d</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>a<sub>2</sub>, b<sub>2</sub>, c<sub>2</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
</ul>

<h3>Tests generation</h3>
<p>There will be <b>10</b> official tests. During contest you will be able to get your score on first <b>2</b> tests. After contest there will be rejudge on full tests set. </p>
<p>
In every test, <b>T</b> is equal to <b>20</b> and <b>N</b> is chosen randomly in the range <b>[95, 100]</b>. Further for each test case integer <b>K</b> is chosen: 
<ul>
<li>For first <b>5</b> tests, <b>K</b> is chosen randomly in range [1, 5]</li>
<li>For next <b>5</b> tests, <b>K</b> is chosen randomly in range [50, 100]</li>
<li>For next <b>5</b> tests, <b>K</b> is chosen randomly in range [500, 1000]</li>
<li>For next <b>5</b> tests, <b>K</b> is chosen randomly in range [1000, 3000]</li>
</ul>
</p>
<p>
After <b>K</b> is chosen we generate <b>K</b> functions in next way:
<ul>
<li>With probability <b>1/3</b>, <b>a<sub>1</sub> = b<sub>1</sub> = 0</b></li>
<li>With probability <b>2/3</b>, <b>a<sub>1</sub> = 0</b></li>
<li>For all other numbers, the way of generation is hidden</li>
</ul>
</p>

<h3>Scoring</h3>
<p>You will receive a WA if the operation doesn't satisfy the output constraints specified in the statement or the number of distinct cells in the final matrix after applying all the operations exceeds 100. </p>

<p>Lets <b>S</b> denote the sum of <b>Q / (N * N + 1 - ONES)</b> (where <b>ONES</b> is number of digit <b>1</b> in given matrix) for all the test cases. Your score will be to <b>S</b> which you should try to minimize. </p>

<h3>Example</h3>
<pre><b>Input:</b>
1
5
00010
00100
01000
10000
11111

<b>Output:</b>
2
0 1 0 1 -1 1 5 1 4
0 1 0 1 0 1 5 1 5
</pre>