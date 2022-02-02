---
{"category_name":"easy","problem_code":"GREG","problem_name":"Greg and Grid","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"24-03-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Recently, Greg got a grid with n rows and m columns. Rows are indexed from 1 to n and columns are indexed from 1 to m. The cell $ ( i , j )$ is the cell of intersection of row i and column j. Each cell has a number written on it. The number written on cell  $( i , j )$  is equal to  $(i+j)$.  
Now, Greg wants to select some cells from the grid, such that for every pair of  selected cells ,the numbers on the cells are co-prime.  Determine the maximum number of cells that Greg can select.</p>

<h3>Input </h3>
<ul>
<li>Single line containing  integers n and m denoting number of rows and number of columns respectively.</li>
</ul>



<h3>Output</h3>
Single line containing the answer.

<h3>Constraints</h3>
<ul>
<li>$1 \leq n,m \leq 10^{6}$</li>
</ul>

<h3>Sample Input</h3>
3    4

<h3>Sample Output</h3>
4


