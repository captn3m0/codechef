---
{"category_name":"medium","problem_code":"PUPPYCT","problem_name":"Puppy and cats","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"zedthirtyeight","date_added":"20-07-2015","tags":{"0":"ltime26","1":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/PUPPYCT","time":{"view_start_date":1437900300,"submit_start_date":1437900300,"visible_start_date":1437900300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME26/mandarin/PUPPYCT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME26/russian/PUPPYCT.pdf">Russian</a>.</h3>
<p> Tuzik is a very brave puppy. But there is still one thing he is afraid of - big black cats. He always tries to avoid them.</p>
<p> Tuzik's city can be represented as an <b>N x N</b> grid. Each cell of the city can either contain cats or not. Tuzik knows that <b>K</b> cells of the city are dumps. If a cell is a dump, then each diagonal that contains this cell is full of cats (all cells of this diagonal contain cats). Two cells with corresponding coordinates <b>(i, j)</b> and <b>(x, y)</b> are on one diagonal if either <b>x + y</b> equals <b>i + j</b> or <b>x - y</b> equals <b>i - j</b>.</p>
<p>You are given integers <b>N</b> and coordinates of <b>K</b> dumps. Please find the number of cells which are free of cats.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. Each test case starts with a line containing space-separated integers <b>N</b> and <b>K</b>. Each of the following <b>K</b> lines contain two space-separated integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> - coordinates of each dump. All the dumps are pairwise different.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer - number of cells that are free of cats.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ <b>N</b></li>
<li>Subtask #1 [22 points]: <b>1</b> ≤ <b>N</b> ≤ <b>500</b>, <b>0</b> ≤ <b>K</b> ≤ <b>10<sup>4</sup></b>
</li><li>Subtask #2 [24 points]: <b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>0</b> ≤ <b>K</b> ≤ <b>10<sup>5</sup></b>
</li><li>Subtask #3 [23 points]: <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b>, <b>0</b> ≤ <b>K</b>  ≤ <b>1</b>
</li><li>Subtask #4 [31 points]: no additional constraints
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 2 
1 2
3 2 

<b>Output:</b>
5
</pre><h3>Sample explanation</h3>
<p>We have cells <b>(2, 1) (2, 3)</b> on the same diagonals with <b>(1, 2) or (3, 2)</b>. Thus 4 cells are occupied by cats and 5 are free of cats.</p>
