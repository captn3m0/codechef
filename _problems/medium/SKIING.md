---
{"category_name":"medium","problem_code":"SKIING","problem_name":"Skiing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"amrmahmoud","date_added":"17-11-2017","tags":{"0":"cook88","1":"greedy","2":"kingofnumbers","3":"kingofnumbers","4":"likecs","5":"scc","6":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/SKIING","time":{"view_start_date":1511116200,"submit_start_date":1511116200,"visible_start_date":1511116200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/russian/SKIING.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/vietnamese/SKIING.pdf">Vietnamese</a> as well.</h3>
<p>Chef and Hasan went for skiing in a rectangular field, the field can be represented as a grid of <b>N</b> rows and <b>M</b> columns, rows are numbered from 1 to <b>N</b> starting from top, columns are numbered from 1 to <b>M</b> starting from left, each cell has a a number representing the height of the snow on this particular part of the field.</p>

<p>
after skiing for a while in the field they decided to play a game,  first hasan has to choose a set of cells <b>S</b> not necessarily adjacent and show this set to Chef.
</p>
<p>
after that, Chef has to choose exactly one cell <b>d</b> not necessarily from set <b>S</b> and tell it to Hasan.
</p>

<p>
finally, Hasan has to choose one cell from set <b>S</b> and start skiing from that cell and try to reach cell <b>d</b> that the chef just chose, if he couldn't then Chef wins, otherwise Hasan wins. 
</p>

<p>
When Hasan is skiing, he can move from one cell to another iff both cells are adjacent (they share a side) and the height of destination cell is not more than the height of current cell.  
</p>

<p>
it's obvious that it's easy for Hasan to win this game, because he can simply choose all cells to be in set <b>S</b>, but he want the set <b>S</b> to have minimum number of cells to prove that he is very skilled in skiing.

knowing that both players play optimally, please help Hasan to find minimum number of cells to be in set <b>S</b> to guarantee the winning for him.
</p>


<p> </p>


<h3>Input</h3>
<p>First line contains integer <b>T</b> donating the number of test-cases.</p>
<p>First line of each test-case contains two integers <b>n</b> and <b>m</b> donating the number of rows and columns respectively.</p>
<p>Each of the following <b>n</b> lines contains <b>m</b> numbers donating the heights of the field</p>

<h3>Output</h3>
<p>For each test-case output a single line containing a single integer donating minimum number of cells has to be in set <b>S</b> so that Hasan guarantee winning </p>


<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1,000</b></li>
<li><b>1</b> ≤ sum of <b>N</b> in all test-cases ≤ <b>1,000</b></li>
<li><b>1</b> ≤ sum of <b>M</b> in all test-cases ≤ <b>1,000</b></li>
<li><b>1</b> ≤ height of snow ≤ <b>1,000,000,000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
1 2 2
2 1 1
2 1 1
3 3
3 2 2
2 1 1
2 1 1


<b>Output:</b>
2
1
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Hasan has to select at least two cells to be in <b>S</b> so that he guarantee he can reach all other cells starting from anyone of them, example of cells to choose (2,1) and (1,2)</p>

<p><b>Example case 2.</b> if Hasan chose cell (1,1) to be in <b>S</b> then he can reach any cell starting from it and thus guarantee winning</p>