---
{"category_name":"medium","problem_code":"WW2","problem_name":"World War 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"19-08-2014","tags":{"0":"cook50","1":"darkshadows","2":"exponentiation","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/WW2","time":{"view_start_date":1411324200,"submit_start_date":1411324200,"visible_start_date":1411324200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/WW2.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/WW2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/WW2.pdf">Russian</a> as well.</h3>
<p><i><b>Richard Winters: We're not lost, Private... we're in Normandy.</b></i></p>
<p><img src="//www.codechef.com/download/COOK50/ww2.jpg" height=400 /></p>
<p>In WW2, allies have placed their mines on the ground  which can be considered as a gird of size <b>N</b>*<b>M</b>. Rows are numbered by integers from <b>1</b> to <b>N</b> and columns are numbered by integers from <b>1</b> to <b>M</b>. Each cell <b>(i,j)</b>  has a mine in it if <b>(i+j)</b> is divisible by <b>2</b>. All the other cells are empty.<br/><br/><br />
Two cells are neighbors if they share a boundary or a corner. Your aim is to move from the first row to the last row using some special rules that the automatic mine placing system follows. The mines won't blow if the following rules are followed:<br/></br/></br/></br/></p>
<ul>
<li>If your current row number is odd, from a 'mined' cell(ie. cell having a mine in it) you can move only to a neighboring 'mined' cells in the next row, and similarly, from a 'not mined'(ie. an empty cell) cell you can only move to a neighboring 'not mined' cell in the next row.</li>
<p><br/></br/></p>
<li>If your current row number is even, you can move to any neighboring cell in the next row, irrespective of the mining.</li>
</ul>
<p><br/></br/></p>
<p>You have to find the number of ways to reach row number <b>N</b> starting from row number <b>1</b>, modulo <b>10<sup>9</sup>+7</b>. Two ways are different, if there is at least one different cell on the paths.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> and <b>M</b> in one line.</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>30</b></li>

<h3>Example</h3>
<pre><b>Input:</b>
2
1 5
2 5

<b>Output:</b>
5
8
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b>You can start at any of the 5 cells available.<br/><br />
<b>Example case 2.</b><br/><br />
8 ways are:<br/><br />
(1,1) to (2,2)<br/><br />
(1,2) to (2,1)<br/><br />
(1,2) to (2,3)<br/><br />
(1,3) to (2,2)<br/><br />
(1,3) to (2,4)<br/><br />
(1,4) to (2,3)<br/><br />
(1,4) to (2,5)<br/><br />
(1,5) to (2,4)<br/>
</br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
