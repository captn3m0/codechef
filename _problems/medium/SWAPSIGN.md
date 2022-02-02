---
{"category_name":"medium","problem_code":"SWAPSIGN","problem_name":"Misplaced Signs","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kalpitk","problem_tester":null,"date_added":"20-03-2019","tags":{"0":"kalpitk"},"time":{"view_start_date":1555270200,"submit_start_date":1555270200,"visible_start_date":1555270200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Instead of writing,$a \times (b+c) = a \times b + a \times c$, Joe by mistakenly swapped the $\times$ and + signs on the left hand side. The equation became, $a+(b \times c)= a \times b + a \times c$ ?</p>

<p>Joe somehow knew the value of a, but forgot the values of b and c such that the equation is satisfied. Can you help him find how many ordered pairs $(b,c)$ satisfy the above equation?</p>
<p>If there exists infinite ordered pair, output -1.</p>
<p>Note: $a,b,c$ are integers</p>

<h3>Input </h3>
<ul>
<li>Single line containing a single integer $a$</li>
</ul>

<h3>Output</h3>
Single line containing one integer, denoting the number of ordered set (b,c)


<h3>Constraints</h3>
<ul>
<li>$|a| \leq 10^{18}$</li>
</ul>

<h3>Sample Input</h3>
2

<h3>Sample Output</h3>
4

<h3>Explanation</h3>
<p>Possible ordered pairs are $(0,1), (1,0), (3,4), (4,3)$</p>